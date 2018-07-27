<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'secname') ?>

    <?= $form->field($model, 'middlename') ?>

    <?= $form->field($model, 'birthday') ?>

    <?php   $form->field($model, 'reg_id') ?>

    <?php  $form->field($model, 'email') ?>

    <?php  $form->field($model, 'phone') ?>

    <?php  $form->field($model, 'county_id') ?>

    <?php  $form->field($model, 'university') ?>

    <? $form->field($model, 'faculty') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
