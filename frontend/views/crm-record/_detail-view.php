<?php

//use yii\helpers\Html;
use yii\widgets\DetailView;
use common\helpers\AifinHelper;

//use yii\helpers\Url;
?>

<?=

DetailView::widget([
    'model' => $model,
    'attributes' => [
//        'id',
        ['label' => 'Client Site',
            'attribute' => 'idclient',
            'value' => function($model) {
                $client = common\models\ClientSite::find()
                        ->where(['id' => $model->idclient])
                        ->one();

                if ($client) {
                    return $client->client_name;
                } else {
                    return null;
                }
            }
        ],
        ['label' => 'Task Category',
            'attribute' => 'idcrm_record_cat',
            'value' => function($model) {
                $TaskCategory = common\models\TaskCategory::find()->
                                where(['id' => $model->idcrm_record_cat])->one();
                return $TaskCategory->task_name_eng;
            }
        ],
        ['label' => 'Related Function',
            'attribute' => 'idcrm_record_type',
            'value' => function($model) {
                $CrmRecordType = common\models\CrmRecordType::find()->
                                where(['id' => $model->idcrm_record_type])->one();
                return $CrmRecordType->crm_record_type_name_eng;
            }
        ],
        ['label' => 'Progress',
            'attribute' => 'idprogress',
            'value' => function($model) {
                $progress = common\models\Progress::find()
                        ->where(['id' => $model->idprogress])
                        ->one();
                if ($progress) {
                    return $progress->progress_name;
                } else {
                    return null;
                }
            }
        ],
        ['label' => 'Priority',
            'attribute' => 'idpriority',
            'value' => function($model) {
                $priority = common\models\Priority::find()
                        ->where(['id' => $model->idpriority])
                        ->one();
                if ($priority) {
                    return $priority->priority_name;
                } else {
                    return null;
                }
            }
        ],
//        ['label' => 'Report By Client',
//            'attribute' => 'client_report',
//            'format' => 'html',
//            'value' => function($model) {
//
//                if ($model->client_report == 1) {
//                    return AifinHelper::SIGN_CHECK_1X;
//                } else {
//                    return AifinHelper::SIGN_CROSS_1X;
//                }
//            }
//        ],
//        ['label' => 'Report By Internal',
//            'attribute' => 'internal_report',
//            'format' => 'html',
//            'value' => function($model) {
//
//                if ($model->internal_report == 1) {
//                    return AifinHelper::SIGN_CHECK_1X;
//                } else {
//                    return AifinHelper::SIGN_CROSS_1X;
//                }
//            }
//        ],
//        'effective_date',
//        'reminder_at',
        //'record_time',
//'created_at',
//'updated_at',
//'deleted_at',
//'created_by',
//'updated_by',
//'deleted_by',
//        'status',
        'remark:ntext',
    //'requested_at',
//'nb_record_id',
    ],
]);
?>

<?=

$this->render('_activities', [
    'models' => $model->crmActivities,
]);
?>
