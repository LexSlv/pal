
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
            <ul>
                <li>
                    <a>Список актуальных нормативно-правовых актов</a>
                </li>
                <li>
                    <a>Закон Республики Казахстан от 10 января 2018 года № 133-VI ЗРК Об оценочной деятельности</a>
                </li>
                <li>
                    <a>Закон Республики Казахстан от 30 ноября 2000 года № 109-II Об оценочной деятельности в Республике Казахстан
                            (с изменениями и дополнениями по состоянию на 04.12.2015г.)</a>
                </li>
                <li>
                    <a>Приказа Министра юстиции Республики Казахстан от 25 февраля 2015 года № 115 О некоторых вопросах оценочной деятельности</a>
                </li>
                <li>
                    <a>Закон Республики Казахстан от 30 ноября 2000 года № 109-II Об оценочной деятельности в Республике Казахстан (c изменениями
                            и дополнениями по состоянию на 10.07.2012г.)</a>
                </li>
                <li>
                    <a>Закон Республики Казахстан О разрешениях и уведомлениях (с изменениями и дополнениями по состоянию на 05.05.2015г.)</a>
                </li>
                <li>
                    <a>Постановление Правительства Республики Казахстан от 1 февраля 2013 года № 81 О некоторых вопросах лицензирования
                            деятельности по оценке имущества (за исключением объектов интеллектуальной собственности, стоимости нематериальных
                            активов) и интеллектуальной собственности, стоимости нематериальных активов. Вводится в действие по истечении двадцати
                            одного календарного дня после первого официального опубликования. Опубликовано в газете «Казахстанская правда»
                            17 июля 2013 года. </a>
                </li>
            </ul>
        </div>
        <button class="uniButton backBlue">Показать весь список</button>
    </div>

    <div class="statements">
        <h2 class="statementsTitle red">Законодательные акты в области оценочной деятельности, утратившие свою силу</h2>

        <div class="statementsBlock">
            <ul>
                <li>
                    <a>Приказ Министра финансов Республики Казахстан от 3 октября 2018 года № 878</a>
                </li>
            </ul>
            <p>Об отмене Стандарт оценки «Оценка отчуждаемого для государственных нужд земельного участка или иного недвижимого
                имущества в связи с изъятием земельного участка для государственных нужд»</p>
            <p>1. СТ РК 1126-2003 «Система оценки имущества Республики Казахстан. Принципы оценки»</p>
            <p>2. СТ РК 1127-2002 «Система оценки имущества Республики Казахстан. Термины и определения»</p>
            <p>3. Совместный приказ Министра юстиции Республики Казахстан от 21 ноября 2002 года N 172 и Министра финансов Республики
                Казахстан от 2 декабря 2002 года N 598 Об утверждении Правил по применению субъектами оценочной деятельности требований
                к содержанию и форме отчета об оценке (с изменениями, внесенными совместным приказом Министра юстиции РК от 01.09.04 г.</p>
                N 250 и Министра финансов РК от 10.09.04 г. N 349)
            <p>4. Совместный приказ Министра юстиции Республики Казахстан от 1 сентября 2004 года № 250 и Министра финансов Республики
                Казахстан от 10 сентября 2004 года № 349 «О внесении изменений и дополнений в совместный приказ Министра юстиции
                Республики Казахстан от 21 ноября 2002 года № 172 и Министра финансов Республики Казахстан от 2 декабря 2002 года № 598
                «Об утверждении Правил по применению субъектами оценочной деятельности требований к содержанию и форме отчета
                об оценке» (зарегистрирован в Реестре государственных нормативных правовых актов № 3102, опубликован в Бюллетене
                нормативных правовых актов центральных исполнительных и иных государственных органов Республики Казахстан, 2004 г.,
                № 41-44, ст. 1030).</p>
            <p>5. Приказ Министра юстиции Республики Казахстан от 23 ноября 2002 года № 179 «Об утверждении Правил по применению
                субъектами оценочной деятельности требований к качеству выполнения работ по оценке, используемым принципам оценки»
                (зарегистрирован в Реестре государственной регистрации нормативных правовых актов № 2071 и опубликован в Бюллетене
                нормативных правовых актов центральных исполнительных и иных государственных органов Республики Казахстан, 2003 г.,
                № 3, ст.774)</p>

        </div>
        <button class="uniButton backBlue">Показать весь список</button>
    </div>

</div>