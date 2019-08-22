
<div class="container pageBody">
    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">Регистрация</a>
    </div>

    <h1 class="pageTitle red">Регистрация</h1>

    <div class="regPage" id="regform">

        <h3 class="subtitle">Для того, чтобы зарегистрироваться, пожалуйста, заполните все поля формы:</h3>

        <div class="regForm">
            <div>
                <span>Фамилия:</span>
                <input v-model="abonent.lastname" placeholder="Иванов" />
            </div>
            <div>
                <span>Имя:</span>
                <input v-model="abonent.firstname" placeholder="Иван" />
            </div>
            <div>
                <span>Отчество:</span>
                <input v-model="abonent.surname" placeholder="Иванович" />
            </div>
            <div class="calendar">
                <span>Дата рождения:</span>
                <input v-model="abonent.birthday" id="datepicker" placeholder="01/01/1970" />
            </div>
            <div>
                <span>Номер свидетельства:</span>
                <input v-model="abonent.certnum" placeholder="0000 0000 0000" />
            </div>
            <div>
                <span>Электронная почта:</span>
                <input v-model="abonent.email" 
                       @blur="isEmailTouched = true"
                       :class="{ error: isEmailError }"  
                       placeholder="mail@mail.kz" 
                  />
            </div>
            <div>
                <span>Пароль:</span>
                <input v-model="abonent.passwd1" placeholder="Не менее 8 символов" />
            </div>
            <div>
                <span>Повторите пароль:</span>
                <input v-model="abonent.passwd2" ref="refPasswd" placeholder="Не менее 8 символов" />
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
            <button :disabled="!isEmailValid" @click="sendData()" class="blueButton blue">Зарегистрироваться</button>

        </div>
    </div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() { $( "#datepicker" ).datepicker(); } );
</script>
