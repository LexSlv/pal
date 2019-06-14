<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Meta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

    <hr>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_ru')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'keywords_ru')->textarea(['rows' => 2]) ?>

    <hr>

    <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_kz')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'keywords_kz')->textarea(['rows' => 2]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
