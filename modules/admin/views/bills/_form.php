<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Bills */
/* @var $form yii\widgets\ActiveForm */
?>



<?php


?>

<div class="bills-form">

    <?php $form = ActiveForm::begin(); ?>
    <label>Дата</label>
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
    <?php
    if (!isset($_GET['user_id'])) {
        echo $form->field($model, 'user_id')->textInput();
    } else {
        echo $form->field($model, 'user_id')->textInput([
            'value' => $_GET['user_id']
        ]);
    }
    ?>
    <?= $form->field($model, 'summ')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
