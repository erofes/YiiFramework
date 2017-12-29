<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MenuLinks */

$this->title = 'Update Menu Links: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Menu Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu-links-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
