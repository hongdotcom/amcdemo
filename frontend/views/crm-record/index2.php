<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\helpers\AifinHelper;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'aifin Support';

$this->params['breadcrumbs'][] = $this->title;
?>



<div class="crm-record-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('New Challenge', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="table-responsive">
            <table id="dt1" class="table table-condensed table-striped">
                <thead>
                    <tr>
                        <th data-column-id="id" data-type="numeric" data-identifier="true" data-order="desc">ID</th>
                        <th data-column-id="id_crm_record_cat" data-type="string">Job Type</th>
                        <th data-column-id="id_crm_record_type" data-type="string">Related Function</th>
                        <th data-column-id="idclient">Client Site</th>
                        <th data-column-id="idpriority">Priority</th>
                        <th data-column-id="idprogress" data-type="string">Progress</th>
                        <th data-column-id="remark">Remark</th>
                        <th data-column-id="client_report">Report By Client</th>
                        <th data-column-id="internal_report">Report By Internal</th>
                        <th data-column-id="reminder_date">Reminder Date</th>
                        <th data-column-id="actions" data-formatter="actions" data-sortable="false">test</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


</div>
<div class="modal fade modal-dialog-center " id="showActivity-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content-wrap">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                    <h2 class="modal-title lead text-uppercase text-warning">test</h2>
                </div>
                <div class="modal-body">
                    <?php $form = ActiveForm::begin(['id' => 'approval-form']); ?>


                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <label class="m-r-sm m-t-md">
                                <?= Html::activeInput('radio', $model, 'approved', ['id' => 'approved', 'checked' => true, 'value' => 1]) ?>
                                <i class="input-helper"></i> TestField 1
                            </label>
                            <label class="m-t-md">
                                <?= Html::activeInput('radio', $model, 'approved', ['id' => 'declined', 'checked' => false, 'value' => 0]) ?>
                                <i class="input-helper"></i> TestField 2
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 m-t-20">
                        Nothing
                    </div>

                    <div class="clearfix"><span id="form-spinner"></span></div>            
                    <div id="ajax-response-acc-date" class="ajax-response alert alert-danger" role="alert" style="display:none;"></div>
                    <?php $form = ActiveForm::end() ?>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-danger" type="button"> Close</button>
                        <button data-dismiss="modal" class="btn btn-success" onclick="submitApproval(this);" type="button"> Add</button>
                    </div>										  
                </div>
            </div>
        </div>
    </div>
</div>