
<div class="container pageBody">
    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">База документов</a>
    </div>

    <h1 class="pageTitle red">База документов</h1>

    <div class="baseBanner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                    $lang = Yii::$app->language;
                    $sdocs_count = count($sdocs);
                    $i=0;
                ?>
                <?php foreach ($sdocs as $k=>$sdoc): ?>
                <?php  $i++; $j++;?>
                <?php if($i==1): ?>
                <div class="swiper-slide"><div class="swiperBase">
                <?php endif; ?>
                        <a href="<?= $sdoc['link'] ?>">
                            <div><?= $sdoc['text_'.$lang] ?></div>
                        </a>
                <?php if($i == 10): ?>
                <?php $i=0; ?>
                    </div></div>
                <?php endif; ?>
                <?php endforeach; ?>

                <?php if($sdocs_count % 10 != 0): ?>
                    </div></div>
                <?php endif; ?>

            </div>
        </div>



        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>



    <div class="fullWidthBanner">
        <p>ОТЧЕТ о деятельности Палаты Оценщиков «Саморегулируемая организация «Палата
            профессиональных независимых оценщиков» за II-полугодие 2018 года</p>
    </div>

    <div class="statements">
        <h2 class="statementsTitle red">Ежеквартальная отчетность Палаты</h2>

        <div class="statementsBox">
            <?php foreach ($qreports as $qreport): ?>
            <div>
                <h3><?= $qreport['title_'.$lang] ?></h3>
                <?= $qreport['text_'.$lang] ?>
            </div>
            <?php  endforeach;?>


        </div>
    </div>

    <div class="statements">
        <h2 class="statementsTitle red">Библиотека палаты</h2>
        <h3 class="subtitle">В нашей библиотеке вы найдете множество полезных и&nbsp;интересных книг</h3>
        <div class="statementsBlock">
        <?= $library['text_'.$lang] ?>
        </div>
        <button class="uniButton backBlue">Показать весь список</button>

    </div>

    <div class="statements">
        <h2 class="statementsTitle red">Законодательные акты рк в области оценочной деятельности</h2>

        <div class="statementsBlock">
            <?= $zak_act_new['text_'.$lang] ?>
        </div>
        <button class="uniButton backBlue">Показать весь список</button>
    </div>

    <div class="statements">
        <h2 class="statementsTitle red">Законодательные акты в области оценочной деятельности, утратившие свою силу</h2>

        <div class="statementsBlock">
            <?= $zak_act_old['text_'.$lang] ?>
        </div>
        <button class="uniButton backBlue">Показать весь список</button>
    </div>

</div>