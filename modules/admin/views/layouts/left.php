<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    //['label' => 'Menu:', 'options' => ['class' => 'header']],
                    ['label' => 'Вернуться на сайт', 'icon' => 'fas fa-home', 'url' => ['/']],

                    ['label' => 'Содержание:', 'options' => ['class' => 'header']],
                    ['label' => 'Мета теги', 'icon' => 'fas fa-file-code', 'url' => ['/admin/meta']],
                    ['label' => 'Текстовые блоки', 'icon' => 'fas fa-cubes', 'url' => ['/admin/text-blocks']],
                    ['label' => 'Меню', 'icon' => 'fas fa-list-ol', 'url' => ['/admin/menu']],
                    ['label' => 'Слайдер', 'icon' => 'fas fa-hand-point-up', 'url' => ['/admin/slider']],

                    ['label' => 'Страницы:', 'options' => ['class' => 'header']],
                    ['label' => 'Новости', 'icon' => 'far fa-newspaper', 'url' => ['/admin/news']],
                    ['label' => 'Вопросы и ответы', 'icon' => 'far fa-question-circle', 'url' => ['/admin/faq']],
                    ['label' => 'Партнёры', 'icon' => 'fas fa-handshake', 'url' => ['/admin/partners']],
                    ['label' => 'Экзамены', 'icon' => 'fas fa-graduation-cap', 'url' => ['/admin/exams']],


                    ['label' => 'Ссылки и документы:', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Документы',
                        'icon' => 'fas fa-file-word',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'В слaйдере',
                                'icon' => 'fas fa-arrow-right',
                                'url' => '/admin/sdocs/',
                            ],
                            [
                                'label' => 'Ежеквартальная отче-сть',
                                'icon' => 'fas fa-arrow-right',
                                'url' => '/admin/qreports/',
                            ],

                            [
                                'label' => 'Библиотека палаты',
                                'icon' => 'fas fa-arrow-right',
                                'url' => '/admin/docs/update?id=1',
                            ],


                            [
                                'label' => 'Зак. акты',
                                'icon' => 'fas fa-arrow-right',
                                'url' => '/admin/docs/update?id=2',
                            ],

                            [
                                'label' => 'Зак. акты(утрат)',
                                'icon' => 'fas fa-arrow-right',
                                'url' => '/admin/docs/update?id=3',
                            ],

                            [
                                'label' => 'Ссылки(эксп.)',
                                'icon' => 'fas fa-arrow-right',
                                'url' => '/admin/docs/update?id=4',
                            ],

                            [
                                'label' => 'Документы(эксп.)',
                                'icon' => 'fas fa-arrow-right',
                                'url' => '/admin/docs/update?id=5',
                            ],

                        ],




                    ],


                    ['label' => 'Пользователи:', 'options' => ['class' => 'header']],

                    ['label' => 'Пользователи', 'icon' => 'fas fa-users', 'url' => ['/admin/users']],
                    ['label' => 'Счета на оплату', 'icon' => 'fas fa-money-bill-alt', 'url' => ['/admin/bills']],

                    ['label' => 'Настройки:', 'options' => ['class' => 'header']],
                    ['label' => 'Роли пользователей', 'icon' => 'fas fa-theater-masks', 'url' => ['/admin/users-rules']],
                    ['label' => 'Степень членства', 'icon' => 'fas fa-crown', 'url' => ['/admin/member-status']],

                    /*
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],*/
                ],
            ]
        ) ?>

    </section>

</aside>
