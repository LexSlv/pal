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

<article>

    <section class="greyBack">
        <div class="headNews container">
            <h2 class="red">Новости</h2>
            <button class="redButton">лента новостей</button>
        </div>
        <div class="tabs container">
            <div class="tabsHead">
                <a>Везде</a>
                <a>В стране</a>
                <a>В регионах</a>                                
            </div>
            <div class="newsBlock container">
                <div class="mainNew">
                    <div class="bigPic" style="background-image: url(/web/uploads/images/new.png);">
                        <a class="mask"></a>
                    </div>
                    <div class="bigText">
                        <h4>Какой-то интересный заголовок</h4>
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
    <section class="whiteBack">
        <div class="infoBox container">
            <div class="longBlock">

                <h4>Вступить в палату</h4>
                <p>Какой-то текст мотивирующий на вступление в палату, текст мотивирующий на вступление в палату, текст мотивирующий на вступление в палату, текст мотивирующий на вступление в палату</p>
                
                <div class="buttonsBox">
                    <button class="redButton">Вступить</button>
                    <button class="blueButton">Скачать PDF-анкету</button>              
                </div>


            </div>
            <div class="shortBlock white" style="background-image: url(/web/uploads/images/exam.jpg)">
                <h4>Экзамены</h4>
                <p>Какая-то информация об экзаменах, какая-то информация об экзаменах, информация об экзаменах</p>
                <button class="whiteButton">Подробнее</button>
            </div>
        </div>

    </section>
    <section class="greyBack">

        <div class="benefits container">
            <div class="benefit">
                <div class="round backBlue bIcon1"></div>
                <h3>1530</h3>
                <span>участников</span>
            </div>
            <div class="benefit">
                <div class="round backRed bIcon2"></div>
                <h3>Методические</h3>
                <span>рекомендации</span>
            </div>
            <div class="benefit">
                <div class="round backBlue bIcon3"></div>
                <h3>Повышение</h3>
                <span>квалификации<span>
            </div>
            <div class="benefit">
                <div class="round backRed bIcon4"></div>
                <h3>Экспертиза</h3>
            </div>
        </div>
    
    </section>

    <section class="whiteBack">
        <div class="infoBox container advert">
            <div class="shortBlock white" style="background-image: url(/web/uploads/images/rbanner.jpg);">
                <h5><b>Реклама</b> в палате</h5>
            </div>
            <div class="longBlock">
                <h4>Важное обьявление</h4>
                <p>Какое-то важное объявление, текст какого-то важного
                объявления, текст какого-то важного объявления, текст
                какого-то важного объявления, текст какого-то важного
                объявления,</p>
                <button class="redButton">Подробнее</button>
            </div>
        </div>
    </section>

</article>