<?php
use app\components\TbWidget;
use yii\helpers\Html;
?>
<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red"><?= Html::encode($this->params['title']) ?></a>
    </div>

    <h1 class="pageTitle red"><?= Html::encode($this->params['title']) ?></h1>

    <div class="answerBlock">

        <?= TbWidget::widget(['alias' => 'faq']); ?>

        <div class="answerBox">

            <div class="accordion">

                <?php $lang = Yii::$app->language; ?>

                <?php foreach ($faq as $i=>$faq_item): ?>         
                <?php if($i % 2 == 0) { ?>

                <div class="option">
                    <span class="backRed"></span>
                    <input type="checkbox" id="toggle<?= $i ?>" class="toggle" />
                    <label class="title" for="toggle<?= $i ?>"><?= $faq_item['q_'.$lang] ?></label>
                    <div class="content">
                        <p><?= $faq_item['a_'.$lang] ?><</p>
                    </div>
                </div>

                <?php } ?>
                <?php endforeach; ?>

            </div>
            
            <div class="accordion">

                <?php foreach ($faq as $i=>$faq_item): ?>         
                <?php if($i % 2 !== 0) { ?>    

                <div class="option">
                    <span class="backRed"></span>
                    <input type="checkbox" id="toggle<?= $i ?>" class="toggle" />
                    <label class="title" for="toggle<?= $i ?>"><?= $faq_item['q_'.$lang] ?></label>
                    <div class="content">
                        <p><?= $faq_item['a_'.$lang] ?><</p>
                    </div>
                </div>

                <?php } ?>
                <?php endforeach; ?>
                    
            </div>

        </div>

    </div>

</div>