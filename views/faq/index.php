
<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">Вопрос-ответ</a>
    </div>

    <h1 class="pageTitle red">Вопрос-ответ</h1>

    <div class="answerBlock">

        <p>Какой-то текст об экспертах и экспертный совете, идейные соображения высшего
        порядка, а также рамки и место обучения кадров играет важную роль в формировании
        форм развития. Идейные соображения высшего порядка, а также новая модель
        организационной деятельности способствует подготовки и реализации новых
        предложений.</p>

        <div class="answerBox">

            <div class="accordion">
                <div class="option">
                    <span class="backRed"></span>
                    <input type="checkbox" id="toggle1" class="toggle" />
                    <label class="title" for="toggle1">Какой-то вопрос, какой-то вопрос, какой-то
                                вопрос, вопрос?</label>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                </div>
                    
                <div class="option">
                    <span class="backRed"></span>
                    <input type="checkbox" id="toggle2" class="toggle" />
                    <label class="title" for="toggle2">
                                I am here to assist you
                    </label>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                </div>
                    
                <div class="option">
                    <span class="backRed"></span>
                    <input type="checkbox" id="toggle3" class="toggle" />
                    <label class="title" for="toggle3">
                            Let's get started
                    </label>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                </div>
                    
            </div>
            
            <div class="accordion">
                <div class="option">
                    <span class="backRed"></span>
                    <input type="checkbox" id="toggle4" class="toggle" />
                    <label class="title" for="toggle4">Какой-то вопрос, какой-то вопрос, какой-то
                                вопрос, вопрос?</label>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                </div>
                    
                <div class="option">
                    <span class="backRed"></span>
                    <input type="checkbox" id="toggle5" class="toggle" />
                    <label class="title" for="toggle5">
                                I am here to assist you
                    </label>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                </div>
                    
                <div class="option">
                    <span class="backRed"></span>
                    <input type="checkbox" id="toggle6" class="toggle" />
                    <label class="title" for="toggle6">
                            Let's get started
                    </label>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                </div>
                    
            </div>

        </div>

    


        <?php $lang = Yii::$app->language; ?>
        <?php foreach ($faq as $faq_item): ?>

        <b><?= $faq_item['q_'.$lang] ?></b>
            <br>
        <i><?= $faq_item['a_'.$lang] ?></i>
            <hr>
        <?php endforeach; ?>

    </div>

</div>