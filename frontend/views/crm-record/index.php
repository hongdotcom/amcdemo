<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\helpers\AifinHelper;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\jui\DatePicker;
use common\models\TaskCategory;
use common\models\CrmRecordType;
use common\models\ClientSite;
use common\models\Progress;
use common\models\Priority;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'aifin Support';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crm-record-index table-responsive">

    <div class="pull-right" style="margin-bottom: 20px">
        <?php foreach ($progresses as $progress) { ?>
            <a href="<?= Url::to(['crm-record/index', 'pro' => $progress->id]) ?>" class="btn btn-default"><?= $progress->progress_name ?> (<?= $progress->getCrmRecordCount() ?>)</a>
        <?php } ?>
    </div>
    <p><?= Html::a('New Ticket', ['create'], ['class' => 'btn btn-success']) ?></p>


    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            'id',
            ['label' => 'Progress',
                'attribute' => 'idprogress',
                'format' => 'raw',
                'value' => function($model) {
                    $progress = Progress::find()
                            ->where(['id' => $model->idprogress])
                            ->one();
                    if ($progress) {
                        switch ($progress->id) {
                            case Progress::OPEN:
                                $css = "warning";
                                break;
                            case Progress::AWAITING_REVIEW:
                                $css = "info";
                                break;
                            case Progress::CLOSE:
                                $css = "success";
                                break;
                            default:
                                $css = "default";
                        }
                        return "<label class='label label-$css'>" . $progress->progress_name . "</label>";
                    } else {
                        return null;
                    }
                }
            ],
            'created_at',
            ['label' => 'Category',
                'attribute' => 'idcrm_record_cat',
                'value' => function($model) {
                    $TaskCategory = TaskCategory::find()->
                                    where(['id' => $model->idcrm_record_cat])->one();
                    return $TaskCategory->task_name_eng;
                }
            ],
//            ['label' => 'Function',
//                'attribute' => 'idcrm_record_type',
//                'value' => function($model) {
//                    $CrmRecordType = CrmRecordType::find()
//                            ->where(['id' => $model->idcrm_record_type])
//                            ->one();
//                    return $CrmRecordType->crm_record_type_name_eng;
//                }
//            ],
            ['label' => 'Client',
                'attribute' => 'idclient',
                'value' => function($model) {
                    $client = ClientSite::find()
                            ->where(['id' => $model->idclient])
                            ->one();
                    if ($client) {
                        return $client->client_name;
                    } else {
                        return null;
                    }
                }
            ],
            ['label' => 'Priority',
                'attribute' => 'idpriority',
                'format' => 'raw',
                'value' => function($model) {
                    $priority = Priority::find()
                            ->where(['id' => $model->idpriority])
                            ->one();
                    if ($priority) {
                        switch ($model->idpriority) {
                            case 1:
                            case 2:
                                $cssClass = 'danger';
                                break;
                            case 3:
                                $cssClass = 'warning';
                                break;
                            case 4:
                                $cssClass = 'primary';
                                break;
                            case 5:
                                $cssClass = 'success';
                                break;
                            case 6:
                                $cssClass = 'default';
                                break;
                        }
                        return "<label class='label label-$cssClass'>{$priority->priority_name}</label>";
                    } else {
                        return null;
                    }
                }
            ],
//            ['label' => 'By Client',
//                'attribute' => 'client_report',
//                'format' => 'html',
//                'value' => function($model) {
//
//                    if ($model->client_report == 1) {
//                        return AifinHelper::SIGN_CHECK_1X;
//                    } else {
//                        return "";
//                    }
//                }
//            ],
//            ['label' => 'By Internal',
//                'attribute' => 'internal_report',
//                'format' => 'html',
//                'value' => function($model) {
//
//                    if ($model->internal_report == 1) {
//                        return AifinHelper::SIGN_CHECK_1X;
//                    } else {
//                        return "";
//                    }
//                }
//            ],
//            ['label' => 'Completion Date',
//                'attribute' => 'effective_date',
//                'value' => function($model) {
//                    return substr($model->effective_date, 0, 10);
//                }
//            ],
//            ['label' => 'Reminder Date',
//                'attribute' => 'reminder_at',
//                'value' => function($model) {
//                    return substr($model->reminder_at, 0, 10);
//                }
//            ],
            ['label' => 'Content',
                'attribute' => 'remark',
                'format' => 'html',
                'value' => function($model) {
                    $out = strlen($model->remark) > 50 ? substr($model->remark, 0, 50) . "..." : $model->remark;
                    return $out;
                }
            ],
//            'remark:ntext',
            ['class' => 'yii\grid\ActionColumn', 'template'=>'{update} {delete}'],
            [
                'label' => 'Worklog',
                'format' => 'raw',
                'value' => function($model) {
                    return "<a href='#' class='button btn btn-default' onclick='toggleActivityModal(\"#activity-modal\", {$model->id})' .
                        ><i class=\"zmdi zmdi-account\"></i></a>";
                }
            ],
        ],
    ]);
    ?>


</div>
<div class="modal fade modal-dialog-center " id="activity-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content-wrap">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                    <h2 class="modal-title lead text-uppercase text-warning">Worklog</h2>
                </div>
                <div class="modal-body">
                    <div class="ticket-header"></div>
                    <div class="ticket-activities"></div>

                    <?php $form = ActiveForm::begin(['id' => 'worklog-form']); ?>
                    <input type="hidden" name="CrmActivity[idcrm_record]">

                    <div class="col-sm-12">
                        <?= $form->field($activityModel, 'internal_remark')->textarea(['rows' => 6])->label("Add Worklog") ?></div>

                    <div class="clearfix"><span id="form-spinner"></span></div>            
                    <div id="ajax-response-acc-date" class="ajax-response alert alert-danger" role="alert" style="display:none;"></div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-danger" type="button"> Close</button>
                    <button data-dismiss="modal" class="btn btn-success" onclick="submitWorklog(this);" type="button"> Submit</button>
                </div>										  
                <?php $form = ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-dialog-center " id="showALLActivity-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content-wrap">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                    <h2 class="modal-title lead text-uppercase text-warning">Add Worklog</h2>
                </div>
                <div class="modal-body">
                    <?php $form = ActiveForm::begin(['id' => 'worklog-form']); ?>
                    <?= $form->field($activityModel, 'idcrm_record')->textInput(['type' => 'hidden']) ?></div>

                <div class="col-md-12 col-sm-12">
                    <?=
                    $form->field($activityModel, 'action_date')->widget(DatePicker::classname(), [
                        'options' => ['autocomplete' => 'off', 'readOnly' => false, 'class' => 'form-control'],
                        'clientOptions' => [
                        ],
                        'dateFormat' => 'yyyy-MM-dd',
                    ])->label('Action Date');
                    ?>
                </div>

                <div class="col-sm-12">
                    <?= $form->field($activityModel, 'internal_remark')->textarea(['rows' => 6]) ?>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-danger" type="button"> Close</button>
                    <button data-dismiss="modal" class="btn btn-success" onclick="submitWorklog(this);" type="button"> Submit</button>
                </div>										  
                <?php $form = ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>
</div>
