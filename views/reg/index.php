
<div class="container pageBody">
    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">Регистрация</a>
    </div>

    <h1 class="pageTitle red">Регистрация</h1>

    <div class="regPage">

        <h3 class="subtitle">Для того, чтобы зарегистрироваться, пожалуйста, заполните все поля формы:</h3>

        <div class="regForm">
            <div>
                <span>Фамилия:</span>
                <input placeholder="Иванов" />
            </div>
            <div>
                <span>Имя:</span>
                <input placeholder="Иван" />
            </div>
            <div>
                <span>Отчество:</span>
                <input placeholder="Иванович" />
            </div>
            <div>
                <span>Дата рождения:</span>
                <input id="datepicker" placeholder="01/01/1970" />
            </div>
            <div>
                <span>Номер свидетельства:</span>
                <input placeholder="0000 0000 0000" />
            </div>
            <div>
                <span>Электронная почта:</span>
                <input placeholder="mail@mail.kz" />
            </div>
            <div>
                <span>Пароль:</span>
                <input placeholder="Не менее 8 символов" />
            </div>
            <div>
                <span>Повторите пароль:</span>
                <input placeholder="Не менее 8 символов" />
            </div>
            <div class="checkContainer">
                <div class="round">
                    <input type="checkbox" id="checkbox" />
                    <label for="checkbox"></label>
                </div>
                <span class="checkText">Я подтверждаю, что предоставленные мной данные верные и корректные.<br />
                Я понимаю ответственность за предоставление заведомо ложной информации<br />
                или информации о третьих лицах согласно законодательству Республики Казахстан</span>
            </div>
            <button class="blueButton blue">Зарегистрироваться</button>

        </div>
    </div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() { $( "#datepicker" ).datepicker(); } );
</script>
