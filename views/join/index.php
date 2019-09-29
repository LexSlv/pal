<?php
use app\components\TbWidget;
use yii\helpers\Html;
?>
<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red"><?= Html::encode($this->params['title']) ?></a>
    </div>

    <h1 class="pageTitle red"><?= Html::encode($this->params['title']) ?></h1>

    <?= TbWidget::widget(['alias' => 'join']); ?>

    <?= TbWidget::widget(['alias' => 'infoBox']); ?>
</div>
