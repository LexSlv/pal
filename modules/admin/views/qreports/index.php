<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\QreportsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Qreports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qreports-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Qreports', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'title_ru',
            'text_ru:ntext',
            'title_kz',
            //'text_kz:ntext',
            //'show',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
