
<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">Вопрос-ответ</a>
    </div>

    <h1 class="pageTitle red">Вопрос-ответ</h1>

    <div class="answerBlock">

        <p>Какой-то текст об экспертах и экспертный совете, идейные соображения высшего
        порядка, а также рамки и место обучения кадров играет важную роль в формировании
        форм развития. Идейные соображения высшего порядка, а также новая модель
        организационной деятельности способствует подготовки и реализации новых
        предложений.</p>

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