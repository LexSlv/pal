<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QreportsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="qreports-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'title_ru') ?>

    <?= $form->field($model, 'text_ru') ?>

    <?= $form->field($model, 'title_kz') ?>

    <?php // echo $form->field($model, 'text_kz') ?>

    <?php // echo $form->field($model, 'show') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
