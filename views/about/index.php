<?php
    use app\components\TbWidget;
    use yii\helpers\Html;
    $lang = Yii::$app->language;
?>

<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red"><?= Html::encode($this->params['title']) ?></a>
    </div>
    <h1 class="pageTitle red"><?= Html::encode($this->params['title']) ?></h1>


    <div class="about">



        <?= TbWidget::widget(['alias' => 'about1']); ?>

        <div class="aboutHalf">
            <button class="redButton"><?= TbWidget::widget(['alias' => 'news']); ?></button>
            <div class="newsBox">

                <?php foreach ($news as $news_item): ?>
                <div class="new">
                    <div class="smallPic" style="background-image: url(/web/uploads/news/small/<?= $news_item['image'] ?>);">
                        <a class="mask"></a>
                    </div>
                    <div class="smallText">
                        <h4><?= $news_item['title_'.$lang] ?></h4>
                        <p><?= strip_tags(substr($news_item['text_'.$lang], 0,80)) ?></p>
                            <small><?= date('d.m.Y', strtotime($news_item['date'])) ?> г.</small>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

    <?= TbWidget::widget(['alias' => 'about_blue_text']); ?>

    <?= TbWidget::widget(['alias' => 'about2']); ?>

    <?= TbWidget::widget(['alias' => 'infoBox']); ?>


</div>