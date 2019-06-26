<?php
    use app\components\TbWidget;
?>

<?php $lang = Yii::$app->language; ?>
<banner>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($slides AS $slide): ?>
            <div class="swiper-slide" style="background-image: url(/web/uploads/images/banner.jpg)">
                <div class="container swiperBanner">
                    <h3><?= $slide['title_'.$lang] ?></h3>
                    <p><?= $slide['description_'.$lang] ?><br /><?= $slide['img'] ?></p>
                    <a class="redButton" href="<?= $slide['link'] ?>">Подробнее</a>                                   
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</banner>

<article id="main">

    <section class="greyBack">
        <div class="headNews container">
            <h2 class="red">Новости</h2>
            <button class="redButton">лента новостей</button>
        </div>
        <div class="tabs container">

            <div class="tabsHead">
                <a class="tab" @click="tab = 1">Везде</a>      
                <a class="tab" @click="tab = 2">В стране</a>                             
                <a class="tab" @click="tab = 3">В регионах</a>                             
            </div>

            <div class="newsBlock container" v-if="tab == 1">

                <div class="mainNew">
                    <div class="bigPic" style="background-image: url(/web/uploads/images/new.png);">
                        <a class="mask"></a>
                    </div>
                    <div class="bigText">
                        <h4>Какой-то интересный заголовок 1</h4>
                        <p>Краткое описание новости, краткое описание новости, описание новости, краткое описание новости</p>
                        <small>10. 04. 2019 г.</small>
                    </div>
                </div>
                <div class="newsBox">
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/images/new.png);">
                            <a class="mask"></a>
                        </div>
                        <div class="smallText">
                            <h4>Какой-то интересный заголовок</h4>
                            <p>Краткое описание новости, краткое описание новости, описание новости, краткое описание</p>
                            <small>10. 04. 2019 г.</small>
                        </div>                    
                    </div>
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/images/new.png);">
                            <a class="mask"></a>
                        </div>
                        <div class="smallText">
                            <h4>Какой-то интересный заголовок</h4>
                            <p>Краткое описание новости, краткое описание новости, описание новости, краткое описание новости</p>
                            <small>10. 04. 2019 г.</small>
                        </div>                        
                    </div>
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/images/new.png);">
                            <a class="mask"></a>
                        </div>                        
                        <div class="smallText">
                            <h4>Какой-то интересный заголовок</h4>
                            <p>Краткое описание новости, краткое описание новости, описание новости, краткое описание новости</p>
                            <small>10. 04. 2019 г.</small>
                        </div>                       
                    </div>
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/images/new.png);">
                            <a class="mask"></a>
                        </div>
                        <div class="smallText">
                            <h4>Какой-то интересный заголовок</h4>
                            <p>Краткое описание, краткое описание новости, описание новости, краткое описание новости</p>
                            <small>10. 04. 2019 г.</small>
                        </div>                      
                    </div>        
                </div>
            </div>

            <div class="newsBlock container" v-if="tab == 2">

                <div class="mainNew">
                    <div class="bigPic" style="background-image: url(/web/uploads/images/new.png);">
                        <a class="mask"></a>
                    </div>
                    <div class="bigText">
                        <h4>Какой-то интересный заголовок 2</h4>
                        <p>Краткое описание новости, краткое описание новости, описание новости, краткое описание новости</p>
                        <small>10. 04. 2019 г.</small>
                    </div>
                </div>
                <div class="newsBox">
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/images/new.png);">
                            <a class="mask"></a>
                        </div>
                        <div class="smallText">
                            <h4>Какой-то интересный заголовок</h4>
                            <p>Краткое описание новости, краткое описание новости, описание новости, краткое описание</p>
                            <small>10. 04. 2019 г.</small>
                        </div>                    
                    </div>
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/images/new.png);">
                            <a class="mask"></a>
                        </div>
                        <div class="smallText">
                            <h4>Какой-то интересный заголовок</h4>
                            <p>Краткое описание новости, краткое описание новости, описание новости, краткое описание новости</p>
                            <small>10. 04. 2019 г.</small>
                        </div>                        
                    </div>
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/images/new.png);">
                            <a class="mask"></a>
                        </div>                        
                        <div class="smallText">
                            <h4>Какой-то интересный заголовок</h4>
                            <p>Краткое описание новости, краткое описание новости, описание новости, краткое описание новости</p>
                            <small>10. 04. 2019 г.</small>
                        </div>                       
                    </div>
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/images/new.png);">
                            <a class="mask"></a>
                        </div>
                        <div class="smallText">
                            <h4>Какой-то интересный заголовок</h4>
                            <p>Краткое описание, краткое описание новости, описание новости, краткое описание новости</p>
                            <small>10. 04. 2019 г.</small>
                        </div>                      
                    </div>        
                </div>
            </div>

            <div class="newsBlock container" v-if="tab == 3">
   
                <div class="mainNew">
                    <div class="bigPic" style="background-image: url(/web/uploads/images/new.png);">
                        <a class="mask"></a>
                    </div>
                    <div class="bigText">
                        <h4>Какой-то интересный заголовок 3</h4>
                        <p>Краткое описание новости, краткое описание новости, описание новости, краткое описание новости</p>
                        <small>10. 04. 2019 г.</small>
                    </div>
                </div>
                <div class="newsBox">
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/images/new.png);">
                            <a class="mask"></a>
                        </div>
                        <div class="smallText">
                            <h4>Какой-то интересный заголовок</h4>
                            <p>Краткое описание новости, краткое описание новости, описание новости, краткое описание</p>
                            <small>10. 04. 2019 г.</small>
                        </div>                    
                    </div>
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/images/new.png);">
                            <a class="mask"></a>
                        </div>
                        <div class="smallText">
                            <h4>Какой-то интересный заголовок</h4>
                            <p>Краткое описание новости, краткое описание новости, описание новости, краткое описание новости</p>
                            <small>10. 04. 2019 г.</small>
                        </div>                        
                    </div>
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/images/new.png);">
                            <a class="mask"></a>
                        </div>                        
                        <div class="smallText">
                            <h4>Какой-то интересный заголовок</h4>
                            <p>Краткое описание новости, краткое описание новости, описание новости, краткое описание новости</p>
                            <small>10. 04. 2019 г.</small>
                        </div>                       
                    </div>
                    <div class="new">
                        <div class="smallPic" style="background-image: url(/web/uploads/images/new.png);">
                            <a class="mask"></a>
                        </div>
                        <div class="smallText">
                            <h4>Какой-то интересный заголовок</h4>
                            <p>Краткое описание, краткое описание новости, описание новости, краткое описание новости</p>
                            <small>10. 04. 2019 г.</small>
                        </div>                      
                    </div>        
                </div>
            </div>
        </div>
    </section>


    <?= TbWidget::widget(['alias' => 'index_block1']); ?>
    <?= TbWidget::widget(['alias' => 'index_block2']); ?>
    <?= TbWidget::widget(['alias' => 'index_block3']); ?>




