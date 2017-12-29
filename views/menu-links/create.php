<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MenuLinks */

$this->title = 'Create Menu Links';
$this->params['breadcrumbs'][] = ['label' => 'Menu Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-links-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
