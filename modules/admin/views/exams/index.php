<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExamsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Экзамены';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exams-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить экзамен', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'date_ru',
            'text_ru',
            //'date_kz',
            //'text_kz',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
