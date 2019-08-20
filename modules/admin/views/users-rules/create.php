<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersRules */

$this->title = 'Добавить роль пользователя';
$this->params['breadcrumbs'][] = ['label' => 'Users Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-rules-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
