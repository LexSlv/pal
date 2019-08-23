<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use app\models\Users;

/* @var $this yii\web\View */
/* @var $model app\models\Notice */
/* @var $form yii\widgets\ActiveForm */


$users = Users::find()
    ->orderBy("id DESC")
    ->asArray()
    ->all();

foreach ($users as $user) {
    $usersArr[$user['id']] = $user['lastName'] . " " . $user['firstName'] . " " . $user['middleName'];
}


?>

<div class="notice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    if (Yii::$app->controller->action->id == "create") {
        $cirentDate = date("Y-m-d", time());

        $model->date = $cirentDate;

        echo DatePicker::widget([
            'model' => $model,
            'attribute' => 'date',
            'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-d',
                'todayHighlight' => true,
            ]
        ]);

    } else {

        echo DatePicker::widget([
            'model' => $model,
            'attribute' => 'date',
            'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-d'
            ]
        ]);

    }; ?>

    <br>


    <?= $form->field($model, 'user_id')->dropDownList($usersArr) ?>

    <?= $form->field($model, 'massage')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'icon')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
