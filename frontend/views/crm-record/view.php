<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\helpers\AifinHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\CrmRecord */

$this->title = 'View';
$this->params['breadcrumbs'][] = ['label' => 'Ticket', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crm-record-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
        <?=
        Html::a(
                '<i class="zmdi zmdi-account"></i>', Url::to(['/crm-activity/view', 'id' => $model->id]), [
            // 'id'=>'grid-custom-button',
            //'action'=>Url::to(['/crm-activity/view', 'id' => $model->id]),
            'class' => 'button btn btn-default',
                ]
        )
        ?>
    </p>

    <?= $this->render('_detail-view', ['model' => $model]) ?>

</div>
