<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Show menu links';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-links-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
            'Title',
        ],
    ]); ?>
</div>