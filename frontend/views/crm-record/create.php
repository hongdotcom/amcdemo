<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CrmRecord */

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'aifin Support', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crm-record-create">

    <?php if ($errors = $model->getErrors()) { ?>
        <ul>
            <?php foreach ($errors as $error) { ?>
                <li><?= var_dump($error) ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
