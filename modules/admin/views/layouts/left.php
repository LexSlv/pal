<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    //['label' => 'Menu:', 'options' => ['class' => 'header']],
                    ['label' => 'HOME', 'icon' => 'fas fa-newspaper', 'url' => ['/']],
                    ['label' => 'Мета', 'icon' => 'fas fa-newspaper', 'url' => ['/admin/meta']],
                    ['label' => 'Меню', 'icon' => 'fas fa-newspaper', 'url' => ['/admin/menu']],
                    ['label' => 'Слайдер', 'icon' => 'fas fa-newspaper', 'url' => ['/admin/slider']],
                    ['label' => 'Партнёры', 'icon' => 'fas fa-newspaper', 'url' => ['/admin/partners']],
                    ['label' => 'Вопросы и ответы', 'icon' => 'fas fa-newspaper', 'url' => ['/admin/faq']],
                    ['label' => 'Новости', 'icon' => 'fas fa-newspaper', 'url' => ['/admin/news']],
                    ['label' => 'Текстовые блоки', 'icon' => 'fas fa-newspaper', 'url' => ['/admin/text-blocks']],

                    [
                        'label' => 'Документы',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'В слейдере',
                                'icon' => 'fas fa-newspaper',
                                'url' => '#',
                            ],
                            [
                                'label' => 'Ежеквартальная отчетность',
                                'icon' => 'fas fa-newspaper',
                                'url' => '#',
                            ],

                            [
                                'label' => 'Библиотека палаты',
                                'icon' => 'fas fa-newspaper',
                                'url' => '#',
                            ],

                            [
                                'label' => 'Библиотека палаты',
                                'icon' => 'fas fa-newspaper',
                                'url' => '#',
                            ],

                            [
                                'label' => 'Зак. акты',
                                'icon' => 'fas fa-newspaper',
                                'url' => '#',
                            ],

                            [
                                'label' => 'Зак. акты(утрат)',
                                'icon' => 'fas fa-newspaper',
                                'url' => '#',
                            ],

                        ],




                    ],
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
