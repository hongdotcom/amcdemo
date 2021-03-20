<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\CrmRecordType;
use common\models\ClientSite;
use common\models\User;
use common\models\Progress;
use common\models\Priority;
use common\models\TaskCategory;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\CrmRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="crm-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-4 col-sm-12">
        <?=
        $form->field($model, 'idcrm_record_cat')->dropDownList(
                ArrayHelper::map(TaskCategory::find()->where(['status' => 1])->orderBy('task_name_eng ASC')->all(), 'id', 'task_name_eng'), [
            'prompt' => '- please select -',
        ]);
        ?>
    </div>
    <div class="col-md-4 col-sm-12">
        <?=
        $form->field($model, 'idcrm_record_type')->dropDownList(
                ArrayHelper::map(CrmRecordType::find()->orderBy('crm_record_type_name_eng ASC')->all(), 'id', 'crm_record_type_name_eng'), [
            'prompt' => '- please select -',
        ]);
        ?>
    </div>
    <div class="col-md-4 col-sm-12">

        <?=
        $form->field($model, 'idpriority')->dropDownList(
                ArrayHelper::map(Priority::find()->all(), 'id', 'priority_name'), [
            'prompt' => '- please select -',
                ]
        );
        ?>
    </div>
    
    <div class="clearfix"></div>
    
    <div class="col-md-3 col-sm-12">
        <?=
        $form->field($model, 'idclient')->dropDownList(
                ArrayHelper::map(ClientSite::find()->all(), 'id', 'client_name'), [
            'prompt' => 'Select Client',
        ]);
        ?>
    </div>
    <div class="col-md-3 col-sm-12">
        <?=
        $form->field($model, 'effective_date')->widget(DatePicker::classname(), [
            'options' => ['autocomplete' => 'off', 'readOnly' => false, 'class' => 'form-control'],
            'clientOptions' => [
            ],
            'dateFormat' => 'yyyy-MM-dd',
        ])->label('Completion Date');
        ?>
    </div>
    <div class="col-md-3 col-sm-12">
        <?=
        $form->field($model, 'reminder_at')->widget(DatePicker::classname(), [
            'options' => ['autocomplete' => 'off', 'readOnly' => false, 'class' => 'form-control'],
            'clientOptions' => [
            ],
            'dateFormat' => 'yyyy-MM-dd',
        ])->label('Reminder Date');
        ?>
    </div>
    <div class="col-md-3 col-sm-12">
        <?=
        $form->field($model, 'requested_at')->widget(DatePicker::classname(), [
            'options' => ['autocomplete' => 'off', 'readOnly' => false, 'class' => 'form-control'],
            'clientOptions' => [
            ],
            'dateFormat' => 'yyyy-MM-dd',
        ])->label('Request Date');
        ?>
    </div>
    <div class="col-md-3 col-sm-12">
        <?= $form->field($model, "client_report")->checkbox(['uncheck' => 0, 'label' => "<span class='text-info strong f-20'>Client Report</span>"]) ?>
        <?= $form->field($model, "internal_report")->checkbox(['uncheck' => 0, 'label' => "<span class='text-info strong f-20'>Internal Report</span>"]) ?>
    </div>
    <div class="col-md-3 col-sm-12">

        <?=
        $form->field($model, 'created_by')->dropDownList(
                ArrayHelper::map(User::find()->all(), 'id', 'username'), [
            'prompt' => 'Select Reporter',
        ]);
        ?>
    </div>
    <div class="col-md-3 col-sm-12">
        <?=
        $form->field($model, 'updated_by')->dropDownList(
                ArrayHelper::map(User::find()->all(), 'id', 'username'), [
            'prompt' => 'Select Updater',
            'default' => Yii::$app->request->get('user'),
        ]);
        ?>
    </div>
    <div class="col-md-3 col-sm-12">
        <?=
        $form->field($model, 'idprogress')->dropDownList(
                ArrayHelper::map(Progress::find()->all(), 'id', 'progress_name'), [
            'prompt' => 'Select Progress',
                ]
        );
        ?>
    </div>

    <div class="clearfix"></div>
    
    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
