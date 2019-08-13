<?php
    use app\components\TbWidget;
    use yii\widgets\LinkPager;
    $lang = Yii::$app->language;
?>
<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">Новости</a>
    </div>

    <h1 class="pageTitle red">Новости</h1>


<?php 

    function internoetics_string_strrpos($string, $length = 240, $trimmarker = '...') {
        $len = strlen(trim($string));
        $newstring = ($len > $length) ? rtrim(substr($string, 0, strrpos(substr($string, 0, $length), ' '))) . $trimmarker : $string;
    return $newstring;
    }
?>

<article id="main">

    <section>

            <div class="tabs container">

                <div class="tabsHead">
                    <a class="tab" @click="tab = 1">Везде</a>
                    <a class="tab" @click="tab = 2">В стране</a>
                    <a class="tab" @click="tab = 3">В регионах</a>
                </div>

                <div class="newsBlock container" v-if="tab == 1">
                    <?php foreach ($news as $key=>$news_item): ?>
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
                        <?php foreach ($news as $key=>$news_item): ?>
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
                    <?php foreach ($news as $key=>$news_item): ?>
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
                        <?php foreach ($news as $key=>$news_item): ?>
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
                    <?php foreach ($news as $key=>$news_item): ?>
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
                        <?php foreach ($news as $key=>$news_item): ?>
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

        <section>
            <div class="moreNewsBlock">
                    <h2 class="mTitle red">Последние новости палаты</h2>

                <div class="mNew">
                    <div class="bigPic" style="background-image: url('/web/uploads/news/big/new.png');">
                        <a href="/news/test5" class="mask"></a>
                    </div>
                    <div class="bigText">
                        <a href="/news/test5" style="color: black;">
                            <h4>Название статьи 5</h4> 
                            <p>Повседневная практика показывает, что реализациянамеченных плановых заданий требуют определенияи уточнения... </p> 
                            <small>11.07.2019</small>
                        </a>
                    </div>
                </div>
                <div class="mNew">
                    <div class="bigPic" style="background-image: url('/web/uploads/news/big/new.png');">
                        <a href="/news/test5" class="mask"></a>
                    </div>
                    <div class="bigText">
                        <a href="/news/test5" style="color: black;">
                            <h4>Название статьи 5</h4> 
                            <p>Повседневная практика показывает, что реализациянамеченных плановых заданий требуют определенияи уточнения... </p> 
                            <small>11.07.2019</small>
                        </a>
                    </div>
                </div>
                <div class="mNew">
                    <div class="bigPic" style="background-image: url('/web/uploads/news/big/new.png');">
                        <a href="/news/test5" class="mask"></a>
                    </div>
                    <div class="bigText">
                        <a href="/news/test5" style="color: black;">
                            <h4>Название статьи 5</h4> 
                            <p>Повседневная практика показывает, что реализациянамеченных плановых заданий требуют определенияи уточнения... </p> 
                            <small>11.07.2019</small>
                        </a>
                    </div>
                </div>
                <div class="mNew">
                        <div class="bigPic" style="background-image: url('/web/uploads/news/big/new.png');">
                            <a href="/news/test5" class="mask"></a>
                        </div>
                        <div class="bigText">
                            <a href="/news/test5" style="color: black;">
                                <h4>Название статьи 5</h4> 
                                <p>Повседневная практика показывает, что реализациянамеченных плановых заданий требуют определенияи уточнения... </p> 
                                <small>11.07.2019</small>
                            </a>
                        </div>
                    </div>
                    <div class="mNew">
                        <div class="bigPic" style="background-image: url('/web/uploads/news/big/new.png');">
                            <a href="/news/test5" class="mask"></a>
                        </div>
                        <div class="bigText">
                            <a href="/news/test5" style="color: black;">
                                <h4>Название статьи 5</h4> 
                                <p>Повседневная практика показывает, что реализациянамеченных плановых заданий требуют определенияи уточнения... </p> 
                                <small>11.07.2019</small>
                            </a>
                        </div>
                    </div>
                    <div class="mNew">
                        <div class="bigPic" style="background-image: url('/web/uploads/news/big/new.png');">
                            <a href="/news/test5" class="mask"></a>
                        </div>
                        <div class="bigText">
                            <a href="/news/test5" style="color: black;">
                                <h4>Название статьи 5</h4> 
                                <p>Повседневная практика показывает, что реализациянамеченных плановых заданий требуют определенияи уточнения... </p> 
                                <small>11.07.2019</small>
                            </a>
                        </div>
                    </div>

                    <button class="uniButton backBlue">Показать больше новостей</button>


            </div>

        </section>

    </article>

</div>