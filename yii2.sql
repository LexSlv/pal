-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 04 2019 г., 18:49
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `q_ru` text,
  `a_ru` text,
  `q_kz` text,
  `a_kz` text,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `faq`
--

INSERT INTO `faq` (`id`, `q_ru`, `a_ru`, `q_kz`, `a_kz`, `position`) VALUES
(1, 'Какой-то вопрос, какой-то вопрос, какой-то вопрос, вопрос?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Какой-то вопрос, какой-то вопрос, какой-то вопрос, вопрос?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1),
(2, 'I am here to assist you', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'I am here to assist you', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2),
(3, 'Какой-то вопрос, какой-то вопрос, какой-то вопрос, вопрос?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Какой-то вопрос, какой-то вопрос, какой-то вопрос, вопрос?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 3),
(4, 'Let\'s get started', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\n', 'Let\'s get started', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\n', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_kz` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `hide` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `title_ru`, `title_kz`, `link`, `position`, `hide`) VALUES
(1, 'О палате	', 'О палате	', '/ru/about', 1, 0),
(2, 'Вступить в палату', 'Вступить в палату', '/ru/join', 2, 0),
(3, 'Вопрос-ответ', 'Вопрос-ответ', '/ru/faq', 3, 0),
(4, 'Эксперты и экспертный совет', 'Эксперты и экспертный совет', '/ru/experts', 4, 0),
(5, 'Партнёры', 'Партнёры', '/ru/partners', 5, 0),
(6, 'База документов', 'База документов', '/ru/base', 6, 0),
(7, 'Реестр членов палаты', 'Реестр членов палаты', '/ru/register', 7, 1),
(8, 'Личный кабинет', 'Личный кабинет', '#', 8, 1),
(9, 'Экзамены', 'Экзамены', '/ru/exams', 9, 1),
(10, 'Обучение', 'Обучение', '/ru/training', 10, 1),
(12, 'Контакты', 'Контакты', '/ru/contacts', 12, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `meta`
--

CREATE TABLE `meta` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `title_ru` varchar(255) DEFAULT NULL,
  `title_kz` varchar(255) DEFAULT NULL,
  `description_ru` text,
  `description_kz` text,
  `keywords_ru` text,
  `keywords_kz` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `meta`
--

INSERT INTO `meta` (`id`, `alias`, `title_ru`, `title_kz`, `description_ru`, `description_kz`, `keywords_ru`, `keywords_kz`) VALUES
(1, 'index', 'Палата оценщиков', 'Палата оценщиков', '', '', '', ''),
(2, 'partners', 'Партнёры', 'Партнёры', '', '', '', ''),
(3, 'faq', 'Вопросы и ответы', 'Вопросы и ответы', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1560235245),
('m190611_063853_create_text_blocks_table', 1560235249),
('m190614_051532_meta_table', 1560489620),
('m190614_081741_partners_table', 1560500694),
('m190614_085831_faq_table', 1560504654),
('m190614_095216_slider_table', 1560506990),
('m190614_104700_news_table', 1560510197);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `cat` int(11) DEFAULT NULL,
  `title_ru` varchar(255) DEFAULT NULL,
  `text_ru` text,
  `title_kz` varchar(255) DEFAULT NULL,
  `text_kz` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `date`, `alias`, `cat`, `title_ru`, `text_ru`, `title_kz`, `text_kz`, `image`) VALUES
(4, '2019-07-07', 'test1', 0, 'test', '<p>test test test test</p>', 'test', '<p>test test test test</p>', 'Penguins.jpg'),
(5, '2019-06-30', 'test2', 0, 'test2', '<p>test2test2test2</p>', 'test2', '<p>test2 test2 test2</p>', 'Chrysanthemum.jpg'),
(6, '2019-06-04', 'test3', 0, 'test3', '<p>test3 test3 test3</p>', 'test3', '<p>test3 test3 test3</p>', 'Desert.jpg'),
(7, '2019-07-10', 'test4', 0, 'test4', '<p>test4 test4 test4</p>', 'test4 test4 test4', '<p>test4 test4 test4</p>', 'Hydrangeas.jpg'),
(8, '2019-07-11', 'test5', 0, 'test5', '<p>test5 test5 test5</p>', 'test5', '<p>test5 test5 test5</p>', 'Koala.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `title_ru` varchar(255) DEFAULT NULL,
  `title_kz` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `title_ru`, `title_kz`, `link`, `position`) VALUES
(1, 'IVSC', 'IVSC', 'www.ivsc.org', 1),
(2, 'TEGoVA', 'TEGoVA', 'www.tegova.org', 2),
(3, 'Appraisal Institute', 'Appraisal Institute', 'www.appraisalinstitute.org', 3),
(4, 'American Society of Appraisal', 'American Society of Appraisal', 'www.old.appraisers.org', 4),
(5, 'The Appraisal Faundation', 'The Appraisal Faundation', 'www.appraisalfaundation.org', 5),
(6, 'РОО', 'РОО', 'www.mrsa.ru', 6),
(7, 'Палата аудиторов Казахстана', 'Палата аудиторов Казахстана', 'www.audit.kz', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title_ru` varchar(255) DEFAULT NULL,
  `description_ru` text,
  `title_kz` varchar(255) DEFAULT NULL,
  `description_kz` text,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `title_ru`, `description_ru`, `title_kz`, `description_kz`, `img`, `link`, `position`) VALUES
(1, 'Заголовок слайдера 1', 'Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. ', 'Заголовок слайдера 1', 'Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. ', '/web/uploads/images/banner.jpg', 'https://github.com/LexSlv/pal', 1),
(2, 'Заголовок слайдера 2', 'Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. ', 'Заголовок слайдера 2', 'Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. ', '/web/uploads/images/banner.jpg', 'https://github.com/LexSlv/pal', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `text_blocks`
--

CREATE TABLE `text_blocks` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `ru` text,
  `kz` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `text_blocks`
--

INSERT INTO `text_blocks` (`id`, `alias`, `ru`, `kz`) VALUES
(1, 'test', 'Это тест', 'Бул тест'),
(2, 'logo_text', 'ПАЛАТА ПРОФЕССИОНАЛЬНЫХ НЕЗАВИСИМЫХ ОЦЕНЩИКОВ', 'Палата оценщиков(Каз. яз)'),
(3, 'phone_header', '<div class=\"phone\" itemprop=\"telephone\" content=\"+77272665009\">\r\n    8 (727) 266 50 09\r\n    <small>Телефон доверия</small>\r\n</div>', '<div class=\"phone\" itemprop=\"telephone\" content=\"+77272665009\">\r\n    8 (727) 266 50 09\r\n    <small>Телефон доверия</small>\r\n</div>'),
(4, 'footer_text', '          <p>050008, г. Алматы, ул. Манаса 7 «Б», 13 этаж, офис 43<br> тел/факс: +7 (727) 266 50 09, e-mail:\r\n                cpa_kz@mail.ru</p>\r\n            <p>Председатель Совета Палаты Барнаева Мария&nbsp;Моисеевна тел.: +7 (727) 315 31 18, e-mail:\r\n                cpa_kz@mail.ru</p>', '          <p>050008, г. Алматы, ул. Манаса 7 «Б», 13 этаж, офис 43<br> тел/факс: +7 (727) 266 50 09, e-mail:\r\n                cpa_kz@mail.ru</p>\r\n            <p>Председатель Совета Палаты Барнаева Мария&nbsp;Моисеевна тел.: +7 (727) 315 31 18, e-mail:\r\n                cpa_kz@mail.ru</p>'),
(5, 'index_block1', '    <section class=\"whiteBack\">\r\n        <div class=\"infoBox container\">\r\n            <div class=\"longBlock\">\r\n\r\n                <h4>Вступить в палату</h4>\r\n                <p>Какой-то текст мотивирующий на вступление в палату, текст мотивирующий на вступление в палату, текст мотивирующий на вступление в палату, текст мотивирующий на вступление в палату</p>\r\n                \r\n                <div class=\"buttonsBox\">\r\n                    <button class=\"redButton\">Вступить</button>\r\n                    <button class=\"blueButton\">Скачать PDF-анкету</button>              \r\n                </div>\r\n\r\n\r\n            </div>\r\n            <div class=\"shortBlock white\" style=\"background-image: url(/web/uploads/images/exam.jpg)\">\r\n                <h4>Экзамены</h4>\r\n                <p>Какая-то информация об экзаменах, какая-то информация об экзаменах, информация об экзаменах</p>\r\n                <button class=\"whiteButton\">Подробнее</button>\r\n            </div>\r\n        </div>\r\n    </section>', '    <section class=\"whiteBack\">\r\n        <div class=\"infoBox container\">\r\n            <div class=\"longBlock\">\r\n\r\n                <h4>Вступить в палату</h4>\r\n                <p>Какой-то текст мотивирующий на вступление в палату, текст мотивирующий на вступление в палату, текст мотивирующий на вступление в палату, текст мотивирующий на вступление в палату</p>\r\n                \r\n                <div class=\"buttonsBox\">\r\n                    <button class=\"redButton\">Вступить</button>\r\n                    <button class=\"blueButton\">Скачать PDF-анкету</button>              \r\n                </div>\r\n\r\n\r\n            </div>\r\n            <div class=\"shortBlock white\" style=\"background-image: url(/web/uploads/images/exam.jpg)\">\r\n                <h4>Экзамены</h4>\r\n                <p>Какая-то информация об экзаменах, какая-то информация об экзаменах, информация об экзаменах</p>\r\n                <button class=\"whiteButton\">Подробнее</button>\r\n            </div>\r\n        </div>\r\n    </section>'),
(6, 'index_block2', '    <section class=\"greyBack\">\r\n        <div class=\"benefits container\">\r\n            <div class=\"benefit\">\r\n                <div class=\"round backBlue bIcon1\"></div>\r\n                <h3>1530</h3>\r\n                <span>участников</span>\r\n            </div>\r\n            <div class=\"benefit\">\r\n                <div class=\"round backRed bIcon2\"></div>\r\n                <h3>Методические</h3>\r\n                <span>рекомендации</span>\r\n            </div>\r\n            <div class=\"benefit\">\r\n                <div class=\"round backBlue bIcon3\"></div>\r\n                <h3>Повышение</h3>\r\n                <span>квалификации<span>\r\n            </div>\r\n            <div class=\"benefit\">\r\n                <div class=\"round backRed bIcon4\"></div>\r\n                <h3>Экспертиза</h3>\r\n            </div>\r\n        </div>\r\n    </section>', '    <section class=\"greyBack\">\r\n        <div class=\"benefits container\">\r\n            <div class=\"benefit\">\r\n                <div class=\"round backBlue bIcon1\"></div>\r\n                <h3>1530</h3>\r\n                <span>участников</span>\r\n            </div>\r\n            <div class=\"benefit\">\r\n                <div class=\"round backRed bIcon2\"></div>\r\n                <h3>Методические</h3>\r\n                <span>рекомендации</span>\r\n            </div>\r\n            <div class=\"benefit\">\r\n                <div class=\"round backBlue bIcon3\"></div>\r\n                <h3>Повышение</h3>\r\n                <span>квалификации<span>\r\n            </div>\r\n            <div class=\"benefit\">\r\n                <div class=\"round backRed bIcon4\"></div>\r\n                <h3>Экспертиза</h3>\r\n            </div>\r\n        </div>\r\n    </section>'),
(7, 'index_block3', '    <section class=\"whiteBack\">\r\n        <div class=\"infoBox container advert\">\r\n            <div class=\"shortBlock white\" style=\"background-image: url(/web/uploads/images/rbanner.jpg);\">\r\n                <h5><b>Реклама</b> в палате</h5>\r\n            </div>\r\n            <div class=\"longBlock\">\r\n                <h4>Важное обьявление</h4>\r\n                <p>Какое-то важное объявление, текст какого-то важного\r\n                объявления, текст какого-то важного объявления, текст\r\n                какого-то важного объявления, текст какого-то важного\r\n                объявления,</p>\r\n                <button class=\"redButton\">Подробнее</button>\r\n            </div>\r\n        </div>\r\n    </section>\r\n\r\n</article>', '    <section class=\"whiteBack\">\r\n        <div class=\"infoBox container advert\">\r\n            <div class=\"shortBlock white\" style=\"background-image: url(/web/uploads/images/rbanner.jpg);\">\r\n                <h5><b>Реклама</b> в палате</h5>\r\n            </div>\r\n            <div class=\"longBlock\">\r\n                <h4>Важное обьявление</h4>\r\n                <p>Какое-то важное объявление, текст какого-то важного\r\n                объявления, текст какого-то важного объявления, текст\r\n                какого-то важного объявления, текст какого-то важного\r\n                объявления,</p>\r\n                <button class=\"redButton\">Подробнее</button>\r\n            </div>\r\n        </div>\r\n    </section>\r\n\r\n</article>'),
(8, 'footer_text2', '        <a>Пользовательское соглашение</a>\r\n            <a>Политика конфидециальности</a>\r\n            <a>Все права защищены (с) 2019</a>\r\n            <a>Сайт разработан в <span class=\"studio\"></span></a>', '        <a>Пользовательское соглашение</a>\r\n            <a>Политика конфидециальности</a>\r\n            <a>Все права защищены (с) 2019</a>\r\n            <a>Сайт разработан в <span class=\"studio\"></span></a>');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `text_blocks`
--
ALTER TABLE `text_blocks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `text_blocks`
--
ALTER TABLE `text_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
