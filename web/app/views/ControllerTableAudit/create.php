<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TableAudit */

$this->title = 'Create Table Audit';
$this->params['breadcrumbs'][] = ['label' => 'Table Audits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-audit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
