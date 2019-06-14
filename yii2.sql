-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.2:3306
-- Время создания: Июн 14 2019 г., 14:49
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

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
(1, 'q 1', 'a1', 'q1', 'a1', 1),
(2, 'q2', 'a2', 'q2', 'a2', 2);

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
(1, 'Menu 1', 'Menu 1', '#', 1, 0),
(2, 'Menu 2', 'Menu 2', '#', 2, 0),
(3, 'Menu 3', 'Menu 3', '#', 3, 0),
(4, 'Menu 4', 'Menu 4', '#', 4, 0),
(5, 'Menu 5', 'Menu 5', '#', 5, 0),
(6, 'Menu 6', 'Menu 6', '#', 6, 0),
(7, 'Menu 7', 'Menu 7', '#', 7, 0),
(8, 'Menu 8', 'Menu 8', '#', 8, 1),
(9, 'Menu 9', 'Menu 9', '#', 9, 1),
(10, 'Menu 10', 'Menu 10', '#', 10, 1),
(11, 'Menu 11', 'Menu 11', '#', 11, 1),
(12, 'Menu 12', 'Menu 12', '#', 12, 1);

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
(2, '2019-06-04', 'qqq', 0, 'qqq', '<p>www</p>', 'eee', '<p>rrr</p>', '33.png'),
(3, '2019-06-06', '132', 1, '123', '<p>wewqe</p>', 'ds', '<p>ada</p>', '33.png');

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
(1, 'Партнёр 1', 'Партнёр 1', 'google.com', 1),
(2, 'Партнёр 2', 'Партнёр 2', 'yandex.ru', 2);

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
(1, 'Заголовок слайдера 1', 'Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. ', 'Заголовок слайдера 1', 'Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. Описание всякое. ', '/image/paths/', 'https://github.com/LexSlv/pal', 1),
(2, 'Заголовок слайдера 2', 'Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. ', 'Заголовок слайдера 2', 'Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. Другое описание. ', '/image/paths/2', 'https://github.com/LexSlv/pal', 2);

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
(2, 'logo_text', 'ПАЛАТА ПРОФЕССИОНАЛЬНЫХ НЕЗАВИСИМЫХ ОЦЕНЩИКОВ', 'Палата оценщиков(Каз. яз)');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `text_blocks`
--
ALTER TABLE `text_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
