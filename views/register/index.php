<div class="container pageBody">

    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">Реестр членов палаты</a>
    </div>

    <h1 class="pageTitle red">Реестр членов палаты</h1>

    <div class="registerBox">

        <h2>Поиск по реестру</h2>
        <p>Для поиска оценщика введите его фамилию и/или региональное отделение, в котором работает оценщик.</p>

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

            <div>


        </form>

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
}

.formBox {
    width: 100%;
    display: flex;
    justify-content: space-between;
    margin: 10px 0;
    align-items: center;
}

.formBox b {
    display: block;
    width: 20%;
}

.formBox input {
    width: 78%;
    padding: 15px 10px;
}

.formBox select {
    width: 65%;
    padding: 15px 10px;
}

.formBox button {
    margin: auto 0 auto auto;
}

</style>