
<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">Вопрос-ответ</a>
    </div>

    <h1 class="pageTitle red">Вопрос-ответ</h1>

    <div class="answer"

    <?php $lang = Yii::$app->language; ?>
    <?php foreach ($faq as $faq_item): ?>

    <b><?= $faq_item['q_'.$lang] ?></b>
        <br>
    <i><?= $faq_item['a_'.$lang] ?></i>
        <hr>
    <?php endforeach; ?>

</div>





