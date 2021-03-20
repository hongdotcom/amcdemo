<?php

namespace frontend\controllers;

use common\models\Progress;
use Yii;
use common\models\CrmRecord;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use common\helpers\AifinHelper;
use common\controllers\MasterController;
use common\models\TaskCategory;
use common\models\CrmActivity;

class CrmRecordController extends MasterController {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create'],
                'rules' => [
                    [
                        'actions' => ['index', 'view', 'create'],
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
        $sort = Yii::$app->request->get('sort');
        $user = Yii::$app->request->get('user');
        $category = Yii::$app->request->get('cat');
        $progress = Yii::$app->request->get('pro');
        $model = new CrmRecord;

        $query = CrmRecord::find()->with('client');

        if (!$progress) {
//            $query->where(["<>", "idprogress", Progress::CLOSE]);
        } else {
            $query->where(["idprogress" => $progress]);
        }

        if (!$sort) {
            $query->orderBy(['created_at' => SORT_DESC]);
        }

        if ($category) {
            $query->andWhere(['idcrm_record_cat' => $category]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        $dataProvider->pagination->pageSize = 10;

        $categories = TaskCategory::find()->where(['status' => 1])->orderBy('task_name_eng ASC')->all();
        $progresses = Progress::find()->where(['status' => 1])->orderBy('id ASC')->all();

        $crmActivityModel = new CrmActivity;
        $crmActivityModel->status = 1;
        $crmActivityModel->action_date = date(AifinHelper::DATEFORMAT);
        //$crmActivityModel->created_by = Yii::$app->user->identity->id;

        return $this->render('index', [
                    'model' => $model,
                    'dataProvider' => $dataProvider,
                    'sort' => ['defaultOrder' => ['idpriority' => SORT_DESC]],
                    'categories' => $categories,
                    'progresses' => $progresses,
                    'activityModel' => $crmActivityModel,
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

        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('_detail-view', [
                        'model' => $model,
            ]);
        }
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
        $model = new CrmRecord();
        $model->client_report = 0;
        $model->internal_report = 0;
        $model->created_at = date(AifinHelper::DATEFORMAT);
        $model->requested_at = date(AifinHelper::DATEFORMAT);
        $model->reminder_at = AifinHelper::adjustDate('7D');
        $model->idprogress = 1;
        $model->created_by = Yii::$app->user->identity->id;
        $model->idpriority = 4;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->created_at = date(AifinHelper::DATETIMEFORMAT);

            if ($model->save()) {
                return $this->redirect(['index']);
            }
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
        $model->updated_by = Yii::$app->user->identity->id;
        $model->updated_at = date(AifinHelper::DATETIMEFORMAT);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
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
        if (($model = CrmRecord::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
