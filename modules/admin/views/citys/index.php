<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CitysSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Города';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citys-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить город', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'region_id',
            'text',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
