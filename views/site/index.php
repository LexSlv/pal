<?php $lang = Yii::$app->language; ?>
<banner>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($slides AS $slide): ?>
            <div class="swiper-slide container">
                <?= $slide['title_'.$lang] ?>
                <br>
                <?= $slide['description_'.$lang] ?>
                <br>
                <?= $slide['img'] ?>
                <br>
                <?= $slide['link'] ?>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</banner>