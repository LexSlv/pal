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