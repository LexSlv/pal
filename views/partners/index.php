
<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">Партнёры</a>
    </div>

    <h1 class="pageTitle red">Партнёры</h1>

    <?php $lang = Yii::$app->language; ?>

    <div class="partnerBox">
        
        <?php foreach ($partners as $i=>$partner): ?>         
        <?php if($i % 2 == 0) { ?>
        
        <h4><?= $partner['title_'.$lang] ?></h4>
        <ul>
            <li><a href="http://<?= $partner['link'] ?>"><?= $partner['link'] ?></a></li>
        </ul>
        
        <?php } ?>
        <?php endforeach; ?>
        
    </div> 
        
    <div class="partnerBox">
        
        <?php foreach ($partners as $i=>$partner): ?>         
        <?php if($i % 2 !== 0) { ?>
        
        <h4><?= $partner['title_'.$lang] ?></h4>
        <ul>
            <li><a href="http://<?= $partner['link'] ?>"><?= $partner['link'] ?></a></li>
        </ul>
        
        <?php } ?>
        <?php endforeach; ?>
        
    </div> 

</div>

