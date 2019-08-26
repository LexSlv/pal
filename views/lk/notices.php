<div class="lkPage">

  <div class="nTabsHead">
      <a v-for="(tb, index) in sTabs" :key="index" :class="{'active' : currentSTab === index}" class="nTab" @click="currentSTab = index">{{ tb }}</a>
  </div>

  <div class="nTabsBody">
      <div v-if="currentSTab == 0">
          <div class="nTabPage">

            <div>
                <b>Иванов Иван Иванович</b>
            </div>
            <div>
                <b>Дата предоставления: 01.01.2019 г.</b>
            </div>
            <div>
                <b>ИИН оценщика: 000000000000</b>
            </div>

            <hr />

            <div>
                <b>Ежеквартальная форма отчетности за период с</b>
                <div class="calendar"><input id="datepickerThree" placeholder="01/01/1970"></div>
                <b>по</b>
                <div class="calendar"><input id="datepickerFour" placeholder="01/01/1970"></div>
            </div>

            <div>
                <b>Квалификационное свидетельство №</b>
                <input placeholder="0000000000000" />
                <b>от</b>
                <input placeholder="01.05.2019" />
            </div>
            <div>
                <b>Номер отчета, согласно журналу регистрации отчетов:</b>
                <input placeholder="0000000000000" />
            </div>
            <div>
                <b>Объект оценки:</b> 
                <select>
                    <option>Нематериальные активы, интеллектуальная собственность; </option>
                </select>
            </div>
            <div>
                <b>Вид определяемой стоимости :</b>
                <select>
                    <option>Инвестиционная стоимость</option>
                </select>
            </div>
            <div>
                <div class="blueButton">Сохранить</div>
                <div class="redButton">Отправить отчет в палату</div>
            </div>
          </div>
      </div>
      <div v-if="currentSTab == 1">
        <div class="nTabPage">

        </div>
      </div>
  </div>

</div>
