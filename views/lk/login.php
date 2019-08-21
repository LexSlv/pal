<?php
use yii\bootstrap\ActiveForm;
?>
<br><br>

<div style="margin:0 auto; padding:25px; width: 200px; border:1px solid grey;">

    <?php if( Yii::$app->session->hasFlash('fail') ): ?>
    <div style="border-bottom: 1px solid red; color: red; font-size: 13px;">
    <?php echo Yii::$app->session->getFlash('fail'); ?>
    </div>
    <?php endif;?>


<?php $form = ActiveForm :: begin(['id' => 'custom-form']); ?>

    <label for="">Email:</label><br>
    <input type="text" name="email">
    <br>

    <label for="">Password:</label><br>
    <input type="password" name="password">
    <br><br>
    <input type="submit">


<?php  ActiveForm::end(); ?>

</div>

<br><br>