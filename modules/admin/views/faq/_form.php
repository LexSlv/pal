<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Faq */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faq-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'q_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'a_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'q_kz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'a_kz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
