<div class="lkPage">

  <div class="nTabsHead">
      <a v-for="(tb, index) in sTabs" :key="index" :class="{'active' : currentSTab === index}" class="nTab" @click="currentSTab = index">{{ tb }}</a>
  </div>

  <div class="nTabsBody">
      <div v-if="currentSTab == 0">
          1
      </div>
      <div v-if="currentSTab == 1">
          2
      </div>
  </div>

</div>
