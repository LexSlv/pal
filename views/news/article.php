<?php
    $lang = Yii::$app->language;
?>

<h1><?= $news['title_'.$lang] ?></h1>

<small><?= $news['date'] ?></small>
<br>
<img src="/web/uploads/news/big/<?= $news['image'] ?>" alt="">
<br>
<?= $news['text_'.$lang] ?>