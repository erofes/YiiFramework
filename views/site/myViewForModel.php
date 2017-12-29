<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<p>First:</p><?= Html::encode($my_post_model->data1) ?>
<p>Second:</p><?= Html::encode($my_post_model->data2) ?>
<p>Tossy:</p><?= Html::encode($tossy->data1) ?><div></div>

<?= Html::submitButton('SubmitMeh', ['class' => 'btn']) ?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($my_post_model, 'data1') ?>

    <?= $form->field($my_post_model, 'data2') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

<?php $my = ActiveForm::begin(); ?>

	<?= $form->field($tossy, 'data1')->label('Are you sure?') ?>

	<?= Html::submitButton('Suble') ?>

<?php ActiveForm::end(); ?>