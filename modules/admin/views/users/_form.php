<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

$userRules = \app\models\UsersRules::find()->all();
foreach ($userRules as $userRulesItem) {
    $userRulesArr[$userRulesItem['id']] = $userRulesItem['text'];
}

$memberStatuses = \app\models\MemberStatus::find()->all();
foreach ($memberStatuses as $memberStatus) {
    $memberStatusesArr[$memberStatus['id']] = $memberStatus['text'];
}

$deps = \app\models\Department::find()->all();
foreach ($deps as $dep) {
    $depsArr[$dep['id']] = $dep['text'];
}

$regions = \app\models\Regions::find()->all();
foreach ($regions as $region) {
    $regionsArr[$region['id']] = $region['text'];
}


/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>


    <label for="">Дата регистрации</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'regDate',
        'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
    ]); ?>

    <br>

    <label for="">Дата рождения</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'bornDate',
        'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
    ]); ?>

    <br>
    <br>

    <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middleName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificateNumber')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>





    <?=
    $form->field($model, 'status')->dropDownList($userRulesArr);
    ?>


    <?= $form->field($model, 'member_status')->dropDownList($memberStatusesArr) ?>
    <?= $form->field($model, 'dep')->dropDownList($depsArr) ?>
    <?= $form->field($model, 'dep_num')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'post_index')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'region')->dropDownList($regionsArr) ?>
    <?= $form->field($model, 'city')->dropDownList([]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>


    <br><br>

    <?= $form->field($model, 'password')->textInput(
        [
            'maxlength' => true,
            'value' => ''
        ]) ?>

    <br>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<script>
        let selectedRegion = $("#users-region").children("option:selected").val();
        let dataset;

        fetch('/api/citys?region=' + selectedRegion)
            .then(response => response.json())
            .then(data => dataset = data) // this unnecessary
            .then(json => {
                console.log(json[0]['id']);
                var selected = '';
                $("#users-city").empty();
                for(i=0; i<50; i++){

                    if(json[i]['id'] == <?= $model->city ?>){
                        selected = 'selected';
                    }else{
                        selected='';
                    }
                    $("#users-city").append("<option value='" + json[i]['id'] +  "' " + selected +">" + json[i]['text'] + "</option>" );
                    if(json[i]['id'] == undefined || json[i]['id']==''){
                        break;
                    }
                }
            });



        $("#users-region").change(function () {

            selectedRegion = $("#users-region").children("option:selected").val();

            fetch('/api/citys?region=' + selectedRegion)
                .then(response => response.json())
                .then(data => dataset = data) // this unnecessary
                .then(json => {
                    console.log(json[0]['id']);
                    var selected = '';
                    $("#users-city").empty();
                    for(i=0; i<50; i++){
                        $("#users-city").append("<option value='" + json[i]['id'] +  "' " + selected +">" + json[i]['text'] + "</option>" );
                        if(json[i]['id'] == undefined || json[i]['id']==''){
                            break;
                        }
                    }
                });
        });

</script>

