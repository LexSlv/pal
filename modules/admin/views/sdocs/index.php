<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SdocsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Документы в слайдере';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdocs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить документ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'link',
            'text_ru',
            'text_kz',
            'position',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
