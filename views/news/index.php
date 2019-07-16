<?php
    use app\components\TbWidget;
    use yii\widgets\LinkPager;
    $lang = Yii::$app->language;
?>
<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">Новости</a>
    </div>

    <h1 class="pageTitle red">Новости</h1>

    <?php foreach ($news as $news_item): ?>
        <div class="new">
            <div class="smallPic" style="background-image: url(/web/uploads/news/small/<?= $news_item['image'] ?>);">
                <a class="mask"></a>
            </div>
            <div class="smallText">
                <h4><a href="/news/<?= $news_item['alias'] ?>"><?= $news_item['title_'.$lang] ?></a></h4>
                <p><?= strip_tags(substr($news_item['text_'.$lang], 0,80)) ?></p>
                <small><?= date('d.m.Y', strtotime($news_item['date'])) ?> г.</small>
            </div>
        </div>
    <?php endforeach; ?>

    <hr>
    <?php
        echo LinkPager::widget([
            'pagination' => $pagination,
        ]);
    ?>


</div>
