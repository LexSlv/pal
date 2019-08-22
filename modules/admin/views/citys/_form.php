<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Regions;
/* @var $this yii\web\View */
/* @var $model app\models\Citys */
/* @var $form yii\widgets\ActiveForm */

$regions = Regions::find()
    ->orderBy('text ASC')
    ->asArray()
    ->all();

foreach ($regions as $region){
    $regionsArr[$region['id']]= $region['text'];
}


?>

<div class="citys-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'region_id')->dropDownList($regionsArr) ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
