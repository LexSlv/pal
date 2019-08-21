<div class="lkPage">

    <div class="editMainData">
        <div class="personData" v-if="editedName">
                <h2 class="edited" @click="edit('name')"><?= $user['lastName'] ?> <?= $user['middleName'] ?> <?= $user['firstName'] ?></h2>

                <div>
                    <span>Дата рождения - 
                        <strong v-if="editName == '0'" v-html="editedName.date"></strong> 
                        <input v-if="editName == '1'" v-model="editedName.date" :placeholder="editedName.date" />
                    </span>
                </div>
                <div>
                    <span>Номер свидетельства - 
                        <strong v-if="editName == '0'" v-html="editedName.number"></strong> 
                        <input v-if="editName == '1'" v-model="editedName.number" :placeholder="editedName.number" />
                    </span>
                </div>
                <div>
                    <span>Степень членства - 
                        <strong v-if="editName == '0'" v-html="editedName.member"></strong> 
                        <input v-if="editName == '1'" v-model="editedName.member" :placeholder="editedName.member" />
                    </span>
                </div>
                <div>
                    <span>Номер в реестре ППНО - 
                        <strong v-if="editName == '0'" v-html="editedName.register"></strong> 
                        <input v-if="editName == '1'" v-model="editedName.register" :placeholder="editedName.register" />
                </div>
                <div>
                    <span>Региональная ППНО - 
                        <strong v-if="editName == '0'" v-html="editedName.ppno"></strong> 
                        <input v-if="editName == '1'" v-model="editedName.ppno" :placeholder="editedName.ppno" />
                    </span>
                </div>

                <button class="blueButton blue" @click="editName = '0'">Сохранить изменения</button>

        </div>
        <div class="personData" v-if="editedContacts">
                <h2 class="edited" @click="edit('contacts')">Контакты:</h2>
                <h3>Почтовый адрес:</h3>
                <div>
                    <span>Индекс: 
                        <strong v-if="editContacts == '0'" v-html="editedContacts.index"></strong> 
                        <input v-if="editContacts == '1'" v-model="editedContacts.index" :placeholder="editedContacts.index" />
                    </span>
                </div>
                <div>
                    <span>Область: 
                        <strong v-if="editContacts == '0'" v-html="editedContacts.region"></strong> 
                        <input v-if="editContacts == '1'" v-model="editedContacts.region" :placeholder="editedContacts.region" />
                    </span>
                </div>
                <div>
                    <span>Город: 
                        <strong v-if="editContacts == '0'" v-html="editedContacts.city"></strong> 
                        <input v-if="editContacts == '1'" v-model="editedContacts.city" :placeholder="editedContacts.city" />
                    </span>
                </div>
                <div>
                    <span>Адрес: 
                        <strong v-if="editContacts == '0'" v-html="editedContacts.address"></strong> 
                        <input v-if="editContacts == '1'" v-model="editedContacts.address" :placeholder="editedContacts.address" />
                    </span>
                </div>
                <div>
                    <span>Телефон: 
                        <strong v-if="editContacts == '0'" v-html="editedContacts.phone"></strong> 
                        <input v-if="editContacts == '1'" v-model="editedContacts.phone" :placeholder="editedContacts.phone" />
                    </span>
                </div>
                <div>
                    <span>E-mail: 
                        <strong v-if="editContacts == '0'" v-html="editedContacts.email"></strong> 
                        <input v-if="editContacts == '1'" v-model="editedContacts.email" :placeholder="editedContacts.email" />
                    </span>
                </div>

                <button class="blueButton blue" @click="editContacts = '0'">Сохранить изменения</button>
        </div>
    </div>

    <div class="lkReports">


        <div class="reportTitle">Посмотреть готовые отчеты за период с: 
            <div class="calendar">
                    <input id="datepickerOne" placeholder="01/01/1970" />
            </div> по
            <div class="calendar">
                    <input id="datepickerTwo" placeholder="01/01/1970" />
            </div>
        </div>

        <div class="reportBody">
            <span>
                <a href="">Отчет за I квартал 2015 года</a>
                <time>Изменено 01.01.2019 №000000</time>
            </span>
            <span>
                <a href="">Отчет за I квартал 2015 года</a>
                <time>Изменено 01.01.2019 №000000</time>
            </span>
            <span>
                <a href="">Отчет за I квартал 2015 года</a>
                <time>Изменено 01.01.2019 №000000</time>
            </span>
            <span>
                <a href="">Отчет за I квартал 2015 года</a>
                <time>Изменено 01.01.2019 №000000</time>
            </span>
            <span>
                <a href="">Отчет за I квартал 2015 года</a>
                <time>Изменено 01.01.2019 №000000</time>
            </span>
            <span>
                <a href="">Отчет за I квартал 2015 года</a>
                <time>Изменено 01.01.2019 №000000</time>
            </span>
            <span>
                <a href="">Отчет за I квартал 2015 года</a>
                <time>Изменено 01.01.2019 №000000</time>
            </span>
        </div>

    </div>

</div>
