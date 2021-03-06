<?php
    use app\components\TbWidget;
    $lang = Yii::$app->language;
?>


<banner>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($slides AS $slide): ?>
            <div class="swiper-slide" style="background-image: url(<?= $slide['img'] ?>)">
                <div class="container swiperBanner">
                    <h3><?= $slide['title_'.$lang] ?></h3>
                    <p><?= $slide['description_'.$lang] ?></p>
                    <?php if($lang == "ru"){ ?>
                        <a class="redButton" href="<?= $slide['link'] ?>">Подробнее</a>
                    <?php }else{ ?>
                        <a class="redButton" href="<?= $slide['link_kz'] ?>">Подробнее</a>
                    <?php } ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</banner>

<?php 

    function internoetics_string_strrpos($string, $length = 240, $trimmarker = '...') {
        $len = strlen(trim($string));
        $newstring = ($len > $length) ? rtrim(substr($string, 0, strrpos(substr($string, 0, $length), ' '))) . $trimmarker : $string;
    return $newstring;
    }
?>


<article id="main">

    <section class="greyBack">
        <div class="headNews container">
            <h2 class="red">Новости</h2>
            <a href="/news">
                <button class="redButton">лента новостей</button>
            </a>
        </div>
        <div class="tabs container">

            <div class="tabsHead">
                <a class="tab" @click="tab = 1">Везде</a>
                <a class="tab" @click="tab = 2">В стране</a>
                <a class="tab" @click="tab = 3">В регионах</a>
            </div>

            <div class="newsBlock container" v-if="tab == 1">
                <?php foreach ($news1 as $key=>$news_item): ?>
                <?php if($key==0): ?>

                    <div class="mainNew">
                        <div class="bigPic" style="background-image: url(/web/uploads/news/big/<?= $news_item['image']  ?>);">
                            <a href="/news/<?= $news_item['alias'] ?>" class="mask"></a>
                        </div>
                        <div class="bigText">
                            <a href="/news/<?= $news_item['alias'] ?>" style="color: black">
                                <h4><?= $news_item['title_'.$lang] ?></h4>
                                <p><?= strip_tags(internoetics_string_strrpos($news_item['text_'.$lang])) ?> </p>
                                <small><?= date('d.m.Y', strtotime($news_item['date'])) ?></small>
                            </a>
                        </div>
                    </div>

                <?php endif; ?>
                <?php endforeach; ?>


                <div class="newsBox">
                    <?php foreach ($news1 as $key=>$news_item): ?>
                    <?php if($key>0): ?>
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/news/small/<?= $news_item['image'] ?>);">
                            <a class="mask" href="/news/<?= $news_item['alias'] ?>"></a>
                        </div>
                        <div class="smallText">
                            <a href="/news/<?= $news_item['alias'] ?>" style="color: black">
                                <h4><?= $news_item['title_'.$lang] ?></h4>
                                <p><?= strip_tags(internoetics_string_strrpos($news_item['text_'.$lang])) ?> </p>
                                <small><?= date('d.m.Y', strtotime($news_item['date'])) ?> г.</small>
                            </a>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="newsBlock container" v-if="tab == 2">
                <?php foreach ($news2 as $key=>$news_item): ?>
                    <?php if($key==0): ?>
                        <div class="mainNew">
                            <div class="bigPic" style="background-image: url(/web/uploads/news/big/<?= $news_item['image']  ?>);">
                                <a class="mask" href="/news/<?= $news_item['alias'] ?>"></a>
                            </div>
                            <div class="bigText">
                                <h4><?= $news_item['title_'.$lang] ?></h4>
                                <p><?= strip_tags(internoetics_string_strrpos($news_item['text_'.$lang])) ?> </p>
                                <small><?= date('d.m.Y', strtotime($news_item['date'])) ?></small>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>


                <div class="newsBox">
                    <?php foreach ($news2 as $key=>$news_item): ?>
                        <?php if($key>0): ?>
                            <div class="new">
                                <div class="smallPic" style="background-image: url(/web/uploads/news/small/<?= $news_item['image'] ?>);">
                                    <a class="mask" href="/news/<?= $news_item['alias'] ?>"></a>
                                </div>
                                <div class="smallText">
                                <a href="/news/<?= $news_item['alias'] ?>" style="color: black">
                                    <h4><?= $news_item['title_'.$lang] ?></h4>
                                    <p><?= strip_tags(internoetics_string_strrpos($news_item['text_'.$lang])) ?> </p>
                                    <small><?= date('d.m.Y', strtotime($news_item['date'])) ?> г.</small>
                                </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="newsBlock container" v-if="tab == 3">
                <?php foreach ($news3 as $key=>$news_item): ?>
                    <?php if($key==0): ?>
                        <div class="mainNew">
                            <div class="bigPic" style="background-image: url(/web/uploads/news/big/<?= $news_item['image']  ?>);">
                                <a class="mask" href="/news/<?= $news_item['alias'] ?>"></a>
                            </div>
                            <div class="bigText">
                                <h4><?= $news_item['title_'.$lang] ?></h4>
                                <p><?= strip_tags(substr($news_item['text_'.$lang], 0,80)) ?></p>
                                <small><?= date('d.m.Y', strtotime($news_item['date'])) ?></small>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>


                <div class="newsBox">
                    <?php foreach ($news3 as $key=>$news_item): ?>
                        <?php if($key>0): ?>
                            <div class="new">
                                <div class="smallPic" style="background-image: url(/web/uploads/news/small/<?= $news_item['image'] ?>);">
                                    <a class="mask" href="/news/<?= $news_item['alias'] ?>"></a>
                                </div>
                                <div class="smallText">
                                <a href="/news/<?= $news_item['alias'] ?>" style="color: black">
                                    <h4><?= $news_item['title_'.$lang] ?></h4>
                                    <p><?= strip_tags(internoetics_string_strrpos($news_item['text_'.$lang])) ?> </p>
                                    <small><?= date('d.m.Y', strtotime($news_item['date'])) ?> г.</small>
                                </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

            </div>

        </div>
    </section>

    <?= TbWidget::widget(['alias' => 'index_block1']); ?>
    <?= TbWidget::widget(['alias' => 'index_block2']); ?>
    <?= TbWidget::widget(['alias' => 'index_block3']); ?>




