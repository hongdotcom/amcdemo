<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CrmRecord */

$this->title = 'Update ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bug Tacker', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="crm-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
