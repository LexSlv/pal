<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersRulesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Роли пользоваетелей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-rules-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--
    <p>
        <?= Html::a('Создать роль пользователя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => ' {update}',
            ],
        ],
    ]); ?>


</div>
