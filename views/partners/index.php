
<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">Партнёры</a>
    </div>

    <h1 class="pageTitle red">Партнёры</h1>

    <?php $lang = Yii::$app->language; ?>

    <?php foreach ($partners as $partner): ?>

    <?= $partner['title_'.$lang] ?>
        <br>
        <a href="http://<?= $partner['link'] ?>"><?= $partner['link'] ?></a>
        <hr>

    <?php endforeach; ?>

</div>

