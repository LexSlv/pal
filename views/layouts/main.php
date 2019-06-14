<?php

use yii\helpers\Html;

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

    <link rel='dns-prefetch' href='//fonts.googleapis.com'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <meta charset="utf-8" name="viewport"
          content="initial-scale=1,maximum-scale=1, width=device-width,  user-scalable=no"/>
    <?php $this->head() ?>

    <?php $this->beginBody() ?>
<body>
<header>
    <div class="headBlock" itemscope itemtype="https://schema.org/Organization">

        <div class="container topBlock">
            <div class="logo" itemprop="logo" alt="Сpakz Logo"></div>

            <h1 class="serif" itemprop="name">Палата профессиональных независимых оценщиков</h1>

            <div class="phone" itemprop="telephone" content="+77272665009">
                8 (727) 266 50 09
                <small>Телефон доверия</small>
            </div>

            <div class="lang white">
                <span class="kz blueBack" lang="kk">KZ</span>
                <span class="ru redBack" lang="ru">RU</span>
            </div>

            <div class="scBlock">
                <span class="search"></span>
                <span class="cabinet blueBack"></span>
            </div>

        </div>

        <nav class="navigation white blueBack" role="navigation">
            <div class="container">
                <ul>
                    <li>О палате</li>
                    <li>Вступить в палату</li>
                    <li>Документы</li>
                    <li>Вопрос-ответ</li>
                    <li>Партнеры</li>
                    <li>Реестр членов палаты</li>
                    <li>...</li>
                    <li>Контакты</li>
                </ul>
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

            <div class="logo" alt="Сpakz Logo"></div>
            <h2 class="serif">Палата профессиональных независимых оценщиков</h2>

            <p>050008, г. Алматы, ул. Манаса 7 «Б», 13 этаж, офис 43<br> тел/факс: +7 (727) 266 50 09, e-mail:
                cpa_kz@mail.ru</p>
            <p>Председатель Совета Палаты Барнаева Мария&nbsp;Моисеевна тел.: +7 (727) 315 31 18, e-mail:
                cpa_kz@mail.ru</p>

        </div>
        <div class="half">
            <ul class="bottomList">
                <li>Главная</li>
                <li>База документов</li>
                <li>О палате</li>
                <li>Реестр членов палаты</li>
                <li>Вступить в палату</li>
                <li>Обучение</li>
                <li>Вопрос-ответ</li>
                <li>Экзамены</li>
                <li>Эксперты и экспертный совет</li>
                <li>Личный кабинет</li>
                <li>Партнёры</li>
                <li>Контакты</li>
            </ul>
        </div>
    </div>

    <div class="bottomBlock">
        <div class="container bottomBox">

            <a>Пользовательское соглашение</a>
            <a>Политика конфидециальности</a>
            <a>Все права защищены (с) 2019</a>
            <a>Сайт разработан в <span class="studio"></span></a>

        </div>
    </div>

</footer>


<?php $this->endBody() ?>
</body>
</html>

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



