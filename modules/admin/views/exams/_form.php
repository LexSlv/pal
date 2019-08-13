<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Exams */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exams-form">

    <?php $form = ActiveForm::begin(); ?>

    <label for="">Дата</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'date',
        'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
    ]);?>

    <br>

    <?= $form->field($model, 'date_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_kz')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
