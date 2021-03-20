<?php

namespace frontend\controllers;

use Yii;
use common\models\CrmActivity;
use common\controllers\MasterController;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\helpers\ApiHandler;
use common\helpers\AifinHelper;

/**
 * CrmRecordController implements the CRUD actions for CrmRecord model.
 */
class CrmActivityController extends MasterController {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create', 'save'],
                'rules' => [
                    [
                        'actions' => ['index', 'view', 'create', 'save'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['index', 'view', 'create'],
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all CrmRecord models.
     * @return mixed
     */
    public function actionIndex() {
        $model = new CrmActivity;
        $dataProvider = new ActiveDataProvider([
            'query' => CrmActivity::find()->with('crm_record')
        ]);

        return $this->render('index', [
                    'model' => $model,
                    'dataProvider' => $dataProvider,
                        //'sort'=> ['defaultOrder' => ['created_at'=>SORT_DESC]]
        ]);
    }

    /**
     * Displays a single CrmRecord model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        $model = $this->findModel($id);

        return $this->render('view', [
                    'model' => $model,
        ]);
    }

    public function actionViewRelated($idcrm_record) {
        $model = $this->findModel($idcrm_record);

        return $this->render('view', [
                    'model' => $model,
        ]);
    }

    /**
     * Creates a new CrmRecord model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new CrmActivity();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing CrmRecord model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CrmRecord model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CrmRecord model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CrmRecord the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = CrmActivity::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSave() {
        if (Yii::$app->request->isAjax) {
            $CrmActivity = Yii::$app->request->post("CrmActivity");

            if (isset($CrmActivity['id'])) {
                $model = $this->findModel($id);
            } else {
                $model = new CrmActivity;
            }

            if ($model->load(Yii::$app->request->post())) {
                if(empty(trim($model->internal_remark))) {
                     ApiHandler::success();
                }
                if($model->isNewRecord) {
                    $model->created_at = date(AifinHelper::DATETIMEFORMAT);
                } else {
                    $model->updated_at = date(AifinHelper::DATETIMEFORMAT);
                }

                if ($model->save()) {
                    ApiHandler::success();
                }
            }
        }
        ApiHandler::failure();
    }

}
