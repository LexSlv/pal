<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">Реестр членов палаты</a>
    </div>

    <h1 class="pageTitle red">Реестр членов палаты</h1>

    <div class="registerBox">

        <h2>Поиск по реестру</h2>
        <span>Для поиска оценщика введите его фамилию и/или региональное отделение, в котором работает оценщик.</span>

        <form>

            <div class="formBox">

                <b>Фамилия</b>
                <input placeholder="Введите фамилию" />


            </div>
            <div class="formBox">
                 <b>Региональные отделения</b>

                 <select>
                    <option>Все отделения</option>
                    <option>Отделение 1</option>
                    <option>Отделение 2</option>
                 </select>


                 <button class="redButton">Найти</button> 

            </div>


        </form>

    </div>
    <h2 class="red pageSubtitle">Основная информация</h2>

    <table class="registerTable">
        <tr>
            <th>
                Фамилия, имя, отчество
            </th>
            <th>
                Номер свид-ва
            </th>
            <th>
                Статус
            </th>
            <th>
                Региональное отделение
            </th>
        </tr>
        <tr><td></td><td></td><td></td><td></td></tr>
        <?php $i=1; for(;$i<=10;) { print '
        <tr>
            <td>
                <span class="ball blue">Иванов Иван Иванович</span>
            </td>
            <td>
                <span>000000</span>
            </td>
            <td>
                <span>Действительный член</span>
            </td>
            <td>
                <span class="ball blue">Алматинская ППНО</span>
            </td>
        </tr>
        <tr>
            <td>
                <span class="ball blue">Иванов Иван Иванович</span>
            </td>
            <td>
                <span>000000</span>
            </td>
            <td>
                <span class="green">Присостановка членства</span>
            </td>
            <td>
                <span class="ball blue">Алматинская ППНО</span>
            </td>
        </tr>
        <tr>
            <td>
                <span class="ball blue">Иванов Иван Иванович</span>
            </td>
            <td>
                <span>000000</span>
            </td>
            <td>
                <span class="red">Членство прекращено</span>
            </td>
            <td>
                <span class="ball blue">Алматинская ППНО</span>
            </td>
        </tr>'; $i++; } ?> 
        

    </table>
    <div class="fullWidthButton">
        <button class="white uniButton backBlue">Показать весь список</button>

    </div>
</div>


<style>

.registerBox {
    display: flex;
    flex-flow: column;
    justify-content: center;
    width: 100%;
    margin: 20px 0;
    height: auto;
    padding: 60px;
    box-sizing: border-box;
    background: #f4f4f4;
    box-shadow: 0 2px 8px rgba(120,120,120,.3);
}

.registerBox form {
    display: flex;
    flex-flow: column;
    margin: 20px 0;
}

.registerBox h2 {
    font-size: 30px;
    font-weight: bold;
    line-height: 1.6;
    margin: 10px 0;
}

.registerBox span {
  font-size: 18px;
  line-height: 1.333;
}

.formBox {
    width: 100%;
    display: flex;
    justify-content: space-between;
    margin: 15px 0;
    align-items: center;
}

.formBox b {
    display: block;
    width: 20%;
    font-size: 20px;
    font-weight: bold;
    line-height: 1.2;
}

.formBox input {
    width: 78%;
    padding: 7px 10px;
    font-size: 18px;
    line-height: 1.667;
    color: #2a2d32;
}

.formBox input::placeholder {
    color: #2a2d32;
}

.formBox select{
    width: 65%;
    padding: 8px 10px;
    font-size: 18px;
    line-height: 1.667;
    color: #2a2d32;
    border-radius: 0;
    background-image: url(/web/img/arrowDown.svg);
    background-repeat: no-repeat;
    background-position: 98% 16px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.formBox button {
    margin: auto 0 auto auto;
}

.pageSubtitle {
    font-size: 30px;
    font-weight: bold;
    line-height: 1;
}

.registerTable {
    width: 100%;
    border: 0;
    border-collapse: collapse;
}

.registerTable th {
    background-color: #f4f4f4;
    text-align: left;
    font-weight: 500;
    padding: 20px 10px;
}

.registerTable td {
    padding: 15px 10px;  
}

.ball {
    position: relative;
    padding-left: 1em;
}

.ball:before{
  content: "\2022"; 
  color: #3075b6; 
  font-weight: bold; 
  display: inline-block; 
  width: 1em;
  margin-left: -1em; 
  position: absolute;
}

.green {
    color: #4c9c5a;
}

.fullWidthButton {
    width: 100%;
    margin: 40px 0;
}

.fullWidthButton button.uniButton {
    text-transform: unset;
    width: 100%;
}

.fullWidthButton button.uniButton::after {
    top: 15px;
    right: auto;
    margin-left: 10px;
}


</style>