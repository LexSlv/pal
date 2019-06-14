<?php $lang = Yii::$app->language; ?>
<?php foreach ($faq as $faq_item): ?>

<b><?= $faq_item['q_'.$lang] ?></b>
    <br>
<i><?= $faq_item['a_'.$lang] ?></i>
    <hr>
<?php endforeach; ?>

