<?php $lang = Yii::$app->language; ?>
<?php
use app\components\TbWidget;
use yii\helpers\Html;
?>

<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red"><?= Html::encode($this->params['title']) ?></a>
    </div>

    <h1 class="pageTitle red"><?= Html::encode($this->params['title']) ?></h1>

    <div class="examsText">

        <?= TbWidget::widget(['alias' => 'exams']); ?>
                    
    </div>

    <?= TbWidget::widget(['alias' => 'exams_box']); ?>

</div>
