<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BillsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Счета';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bills-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать счёт', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'user_id',
            'summ',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
