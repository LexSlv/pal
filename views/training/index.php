<?php $lang = Yii::$app->language; ?>
<?php
use app\components\TbWidget;
use yii\helpers\Html;
?>
//echo count($exams);

     $block1 = ceil(count($exams)/2);
?>
<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red"><?= Html::encode($this->params['title']) ?></a>
    </div>

    <h1 class="pageTitle red"><?= Html::encode($this->params['title']) ?></h1>
    <?= TbWidget::widget(['alias' => 'training']); ?>


    <div class="aboutBox backBlue white">
        <?= TbWidget::widget(['alias' => 'training_blue']); ?>

    </div>

    <div class="statements">
        <h2 class="statementsTitle blue">Ближайшие экзамены</h2>

        <div class="trainingBox">
            <div>
                <?php for($i=0; $i<$block1; $i++): ?>
                <span>
                    <strong class="red"><?= $exams[$i]['date_'.$lang] ?></strong> - <p><?= $exams[$i]['text_'.$lang] ?></p>
                </span>
                <?php endfor; ?>
            </div>

            <div>
                <?php for($block1=0; $i<count($exams); $i++): ?>
                    <span>
                    <strong class="red"><?= $exams[$i]['date_'.$lang] ?></strong> - <p><?= $exams[$i]['text_'.$lang] ?></p>
                </span>
                <?php endfor; ?>
            </div>

        </div>

        <!--
        <div class="trainingBox">
            <div>
                <span>
                    <strong class="red">25 апреля</strong> - <p>Название экзамена, название, название,
                        название название, название.</p>
                </span>
                <span>
                    <strong class="red">28 апреля</strong> - <p>Название экзамена, название, название,
                        название название, название.</p>
                </span>
                <span>
                    <strong class="red">3 мая</strong> - <p>Название экзамена, название, название,
                        название название, название.</p>
                </span>
                <span>
                    <strong class="red">12 мая</strong> - <p>Название экзамена, название, название,
                        название название, название.</p>
                </span>
            </div>
            <div>
                <span>
                    <strong class="red">19 мая</strong> - <p>Название экзамена, название, название,
                        название название, название.</p>
                </span>
                <span>
                    <strong class="red">21 мая</strong> - <p>Название экзамена, название, название,
                        название название, название.</p>
                </span>
                <span>
                    <strong class="red">29 мая</strong> - <p>Название экзамена, название, название,
                        название название, название.</p>
                </span>
                <span>
                    <strong class="red">1 июня</strong> - <p>Название экзамена, название, название,
                        название название, название.</p>
                </span>
            </div>
        </div>
        -->

    </div>
</div>