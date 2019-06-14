<?php $lang = Yii::$app->language; ?>

<?php foreach ($partners as $partner): ?>

<?= $partner['title_'.$lang] ?>
    <br>
    <a href="http://<?= $partner['link'] ?>"><?= $partner['link'] ?></a>
    <hr>

<?php endforeach; ?>

