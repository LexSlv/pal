
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
            <div v-if="currentTab == 0">1</div>
            <div v-if="currentTab == 1">2</div>
            <div v-if="currentTab == 2">3</div>
            <div v-if="currentTab == 3">4</div>

        </div>
    </div>


</div>

<style>
    
.lkTabs {
    display: flex;
    flex-flow: column;
}

.lkTabsHead {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.lkTab {
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  line-height: 1.333;
}

.lkTab:hover, .active {
    color: rgb(192, 48, 24);
} 


</style>

<script>
    
new Vue({
    el: '#lk',
    data: {
        currentTab: 0,
        tabs: [
            'Главная',
            'Оплата членских взносов',
            'Предоставление отчетности',
            'Личные уведомления'
        ]
    },
});


</script>