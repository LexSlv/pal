<?php
$month[0] = "декабрь";
$month[1] = "январь";
$month[2] = "февраль";
$month[3] = "март";
$month[4] = "апрель";
$month[5] = "май";
$month[6] = "июнь";
$month[7] = "июль";
$month[8] = "август";
$month[9] = "сентябрь";
$month[10] = "октябырь";
$month[11] = "ноябырь";
$month[12] = "декабрь";

$currentMonth = substr(date('m'),1);

?>


<div class="container pageBody">
    <div class="breadcrumbs">
        <a href="/" >Главная</a> / <span class="red">Личный кабинет</a>
    </div>

    <h1 class="pageTitle red">Личный кабинет</h1>



<div id="lk">

    <div class="lkTabs container">

            <div class="lkTabsHead">
                <a v-for="(tb, index) in tabs" :key="index" :class="{'active' : currentTab === index}" class="lkTab" @click="currentTab = index">{{ tb }}</a>
            </div>


        <div class="lkTabsBody">
            <div v-if="currentTab == 0">
                <?php include 'main.php' ?>
            </div>
            <div v-if="currentTab == 1">
                <?php include 'payment.php' ?>
            </div>
            <div v-if="currentTab == 3">
                <?php include 'reporting.php' ?>
            </div>
            <div v-if="currentTab == 2">
                <?php include 'notices.php' ?>
            </div>

        </div>
    </div>


</div>

<script>

new Vue({
    el: '#lk',
    data: {
        editName: '0',
        editedName: {
            date: '<?= date("d.m.Y", strtotime($user['bornDate'])) ?>',
            number: '<?= $user['certificateNumber'] ?>',
            member: '<?= $user['member_status'] ?>',
            register: '<?= $user['dep_num'] ?>',
            ppno: '<?= $user['dep'] ?>'
        },
        editContacts: '0',
        editedContacts: {
            index: '<?= $user['post_index'] ?>',
            region: '<?=  $user['region_text'] ?>',
            city: '<?= $user['city_text'] ?>',
            address: '<?= $user['address'] ?>',
            phone: '<?= $user['phone'] ?>',
            email: '<?= $user['email'] ?>'
        },
        currentTab: 0,
        currentSTab: 0,
        tabs: [
            'Главная',
            'Оплата членских взносов',
            'Предоставление отчетности',
            'Личные уведомления'
        ],
        sTabs: [
          'Для оценщиков занимающихся частной практикой',
          'Для оценщиков, заключивших Договор с юридическим лицом'
        ]
    },
    methods: {
            edit(val) {
                if (val == 'name') {
                    this.editName = 1;
                } else if (val == 'contacts') {
                    this.editContacts = 1;
                }
            }
        }
});

</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() { $( "#datepickerOne" ).datepicker(); } );
  $( function() { $( "#datepickerTwo" ).datepicker(); } );

</script>
