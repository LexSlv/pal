<?php

use yii\helpers\Html;
use app\components\TbWidget;


$lang = Yii::$app->language;

$menus = (new \yii\db\Query())
    ->select(['*'])
    ->from('menu')
    ->orderBy('position ASC')
    ->all();

$menus_show= (new \yii\db\Query())
    ->select(['*'])
    ->from('menu')
    ->where(['hide'=>0])
    ->orderBy('position ASC')
    ->all();

$menus_hide = (new \yii\db\Query())
    ->select(['*'])
    ->from('menu')
    ->where(['hide'=>1])
    ->orderBy('position ASC')
    ->all();



?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode($this->params['title']) ?></title>
    <meta name="description" content="<?= Html::encode($this->params['description']) ?>"/>
    <meta name="keywords" content="<?= Html::encode($this->params['keywords']) ?>"/>

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="api-maps.yandex.ru" href="//api-maps.yandex.ru">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/vue.js"></script>
    <meta charset="utf-8" name="viewport"
          content="initial-scale=1,maximum-scale=1, width=device-width,  user-scalable=no"/>
    <?php $this->head() ?>

    <?php $this->beginBody() ?>
<body>
<header>
    <div class="headBlock" itemscope itemtype="https://schema.org/Organization">

        <div class="container topBlock">
            <a href="/<?= $lang ?>"><div class="logo" alt="Сpakz Logo"></div></a>

            <h1 class="serif" itemprop="name"><?= TbWidget::widget(['alias' => 'logo_text']); ?></h1>

            <?= TbWidget::widget(['alias' => 'phone_header']); ?>



            <div class="lang white">
                <a href="/kz"><span class="kz backBlue white" lang="kk">KZ</span></a>
                <a href="/ru"><span class="ru backRed white" lang="ru">RU</span></a>
            </div>

            <div class="scBlock">
                <span class="search"></span>
                <span class="cabinet backBlue"></span>
            </div>

        </div>

        <nav class="navigation white backBlue" role="navigation">
            <div class="container">
                <ul>
                    <?php foreach ($menus_show AS $k=>$menu): ?>
                    <?php  if($k == (count($menus_show)-1)): ?>
                    <li>...</li>
                    <?php endif; ?>
                    <li><a class="white" href="<?= $menu['link'] ?>"><?= $menu['title_'.$lang] ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <!-- СКРЫТОЕ МЕНЮ
                <?php foreach ($menus_hide AS $k=>$menu): ?>
                    <li><a class="white" href="<?= $menu['link'] ?>"><?= $menu['title_'.$lang] ?></a></li>
                <?php endforeach; ?>
                -->
            </div>
        </nav>

    </div>
</header>

<main>
<?= $content ?>
</main>

<footer>
    <div class="container white">
        <div class="half">

            <a href="/<?= $lang ?>"><div class="logo" alt="Сpakz Logo"></div></a>
            <h2 class="serif"><?= TbWidget::widget(['alias' => 'logo_text']); ?></h2>

            <?= TbWidget::widget(['alias' => 'footer_text']); ?>



        </div>
        <div class="half">
            <ul class="bottomList">
                <li><a href="/ru">Главная</a></li>
                <?php foreach ($menus as $menu): ?>
                <li><a href="<?= $menu['link'] ?>"><?= $menu['title_'.$lang] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="bottomBlock">
        <div class="container bottomBox">

            <?= TbWidget::widget(['alias' => 'footer_text2']); ?>


        </div>
    </div>

</footer>


<?php $this->endBody() ?>
</body>
</html>

<script src="/js/main.js"></script>
<script src="/js/swiper.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<?php $this->endPage() ?>



