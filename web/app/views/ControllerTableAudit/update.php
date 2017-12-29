<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TableAudit */

$this->title = 'Update Table Audit: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Table Audits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table-audit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
