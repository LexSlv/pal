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

    <div class="pageText">

        <?= TbWidget::widget(['alias' => 'expert']); ?>

    </div>

    <div class="statements">
            <h2 class="statementsTitle red">Ссылки на страницы, относящиеся к экспертизе</h2>
    
            <div class="statementsBlock">
                <?= $links_exp['text_'.$lang] ?>
            </div>
        </div>
        <div class="statements">
                <h2 class="statementsTitle red">Перечень документов</h2>
            <div class="statementsBox">
                <?= $docs_exp['text_'.$lang] ?>
            </div>
            <!--
                <div class="statementsBox">
                    <div>
                        <ul>
                            <li>
                                <a>3 кв 2018 Бағалаушылар палатасының қызметі туралы мәлімет (каз)</a>
                            </li>
                            <li>
                                <a>3 кв 2018 Сведения о деятельности палаты оценщиков (рус)</a>
                            </li>
                            <li>
                                <a>3 кв 2018 Бағалаушылар туралы мәлімет</a>
                            </li>
                            <li>
                                <a>3 кв 2018 Сведения об оценщиках</a>
                            </li>
                            <li>
                                <a>3 кв 2018 Сарапшылық кеңестің мүшелері туралы мәлімет</a>
                            </li>
                            <li>
                                <a>3 кв 2018 Сведения о членах экспертного совета</a>
                            </li>
                            <li>
                                <a>Свод по ежеквартальной отчетности оценщиков членов Палаты</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <a>4 кв 2018 г Бағалаушылар палатасының қызметі туралы мәлімет</a>
                            </li>
                            <li>
                                <a>4 кв 2018 г Сведения о деятельности палаты оценщиков</a>
                            </li>
                            <li>
                                <a>4 кв 2018 г Бағалаушылар туралы мәлімет</a>
                            </li>
                            <li>
                                <a>4 кв 2018 г Сведения об оценщиках</a>
                            </li>
                            <li>
                                <a>4 кв 2018 г Сарапшылық кеңестің мүшелері туралы мәлімет</a>
                            </li>
                            <li>
                                <a>4 кв 2018 г Сведения о членах экспертного совета</a>
                            </li>
                        </ul>
                    </div>
                </div>
            -->
                <button class="uniButton backBlue">Показать весь список</button>

            </div>
</div>
