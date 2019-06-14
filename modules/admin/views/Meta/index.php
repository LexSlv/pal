<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MetaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Metas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Meta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'alias',
            'title_ru',
            'title_kz',
            //'description_ru:ntext',
            //'description_kz:ntext',
            //'keywords_ru:ntext',
            //'keywords_kz:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
