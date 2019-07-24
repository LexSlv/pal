-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.2:3306
-- Время создания: Июл 24 2019 г., 11:35
-- Версия сервера: 5.7.20
-- Версия PHP: 7.0.26

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
-- Структура таблицы `docs`
--

CREATE TABLE `docs` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `text_ru` text NOT NULL,
  `text_kz` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `docs`
--

INSERT INTO `docs` (`id`, `alias`, `text_ru`, `text_kz`) VALUES
(1, 'library', '<p>Принципы и подходы к оценке интеллектуальной собственности и нематериальных активов/Б.Б Леонтьев, Х.А.Мамаджанов /2003/272с./</p>\r\n<p>Финансовая диагностика и оценка проектов /А.А.Васина./2004/448с./</p>\r\n<p>Оценка компаний при слияниях и поглощениях: создание стоимости в частных компаниях. /Ф.Ч. Эванс, Д.Бишоп./2004/332с./</p>\r\n<p>Оценка стоимости компании: как избежать ошибок при приобретении Кеннет Феррис, Барбара Пешеро Пети/2003/256с./</p>\r\n<p>Оценка рыночной стоимости машин и оборудования /Международная академия оценки и консалтинга/ 2003/134с./</p>\r\n<p>Оценка дебиторской и кредиторской задолженностей /А.Б.Фельдман/2003/52с./</p>\r\n<p>Оценка автотранспортных средств /Ю.В.Андрианов/ 2003/488с./</p>', '<p>Принципы и подходы к оценке интеллектуальной собственности и нематериальных активов/Б.Б Леонтьев, Х.А.Мамаджанов /2003/272с./</p>\r\n<p>Финансовая диагностика и оценка проектов /А.А.Васина./2004/448с./</p>\r\n<p>Оценка компаний при слияниях и поглощениях: создание стоимости в частных компаниях. /Ф.Ч. Эванс, Д.Бишоп./2004/332с./</p>\r\n<p>Оценка стоимости компании: как избежать ошибок при приобретении Кеннет Феррис, Барбара Пешеро Пети/2003/256с./</p>\r\n<p>Оценка рыночной стоимости машин и оборудования /Международная академия оценки и консалтинга/ 2003/134с./</p>\r\n<p>Оценка дебиторской и кредиторской задолженностей /А.Б.Фельдман/2003/52с./</p>\r\n<p>Оценка автотранспортных средств /Ю.В.Андрианов/ 2003/488с./</p>'),
(2, 'zak_act_new', '<ul>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой- нибудь документ из вашей базы</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой- нибудь документ из вашей базы</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой- нибудь документ из вашей базы</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой- нибудь документ из вашей базы</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой- нибудь документ из вашей базы</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой- нибудь документ из вашей базы</a></li>\r\n</ul>', '<ul>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой- нибудь документ из вашей базы</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой- нибудь документ из вашей базы</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой- нибудь документ из вашей базы</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой- нибудь документ из вашей базы</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой- нибудь документ из вашей базы</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой- нибудь документ из вашей базы</a></li>\r\n</ul>'),
(3, 'zak_act_old', '<ul>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой - то документ из базы</a></li>\r\n</ul>\r\n<p>Об отмене Стандарт оценки &laquo;Оценка отчуждаемого для государственных нужд земельного участка или иного недвижимого имущества в связи с изъятием земельного участка для государственных нужд&raquo;</p>\r\n<p>1. СТ РК 1126-2003 &laquo;Система оценки имущества Республики Казахстан. Принципы оценки&raquo;</p>\r\n<p>2. СТ РК 1127-2002 &laquo;Система оценки имущества Республики Казахстан. Термины и определения&raquo;</p>\r\n<p>3. Совместный приказ Министра юстиции Республики Казахстан от 21 ноября 2002 года N 172 и Министра финансов Республики Казахстан от 2 декабря 2002 года N 598 Об утверждении Правил по применению субъектами оценочной деятельности требований к содержанию и форме отчета об оценке (с изменениями, внесенными совместным приказом Министра юстиции РК от 01.09.04 г.</p>\r\n<p>N 250 и Министра финансов РК от 10.09.04 г. N 349)</p>\r\n<p>4. Совместный приказ Министра юстиции Республики Казахстан от 1 сентября 2004 года № 250 и Министра финансов Республики Казахстан от 10 сентября 2004 года № 349 &laquo;О внесении изменений и дополнений в совместный приказ Министра юстиции Республики Казахстан от 21 ноября 2002 года № 172 и Министра финансов Республики Казахстан от 2 декабря 2002 года № 598 &laquo;Об утверждении Правил по применению субъектами оценочной деятельности требований к содержанию и форме отчета об оценке&raquo; (зарегистрирован в Реестре государственных нормативных правовых актов № 3102, опубликован в Бюллетене нормативных правовых актов центральных исполнительных и иных государственных органов Республики Казахстан, 2004 г., № 41-44, ст. 1030).</p>\r\n<p>5. Приказ Министра юстиции Республики Казахстан от 23 ноября 2002 года № 179 &laquo;Об утверждении Правил по применению субъектами оценочной деятельности требований к качеству выполнения работ по оценке, используемым принципам оценки&raquo; (зарегистрирован в Реестре государственной регистрации нормативных правовых актов № 2071 и опубликован в Бюллетене нормативных правовых актов центральных исполнительных и иных государственных органов Республики Казахстан, 2003 г., № 3, ст.774)</p>', '<ul>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой - то документ из базы</a></li>\r\n</ul>\r\n<p>Об отмене Стандарт оценки &laquo;Оценка отчуждаемого для государственных нужд земельного участка или иного недвижимого имущества в связи с изъятием земельного участка для государственных нужд&raquo;</p>\r\n<p>1. СТ РК 1126-2003 &laquo;Система оценки имущества Республики Казахстан. Принципы оценки&raquo;</p>\r\n<p>2. СТ РК 1127-2002 &laquo;Система оценки имущества Республики Казахстан. Термины и определения&raquo;</p>\r\n<p>3. Совместный приказ Министра юстиции Республики Казахстан от 21 ноября 2002 года N 172 и Министра финансов Республики Казахстан от 2 декабря 2002 года N 598 Об утверждении Правил по применению субъектами оценочной деятельности требований к содержанию и форме отчета об оценке (с изменениями, внесенными совместным приказом Министра юстиции РК от 01.09.04 г.</p>\r\n<p>N 250 и Министра финансов РК от 10.09.04 г. N 349)</p>\r\n<p>4. Совместный приказ Министра юстиции Республики Казахстан от 1 сентября 2004 года № 250 и Министра финансов Республики Казахстан от 10 сентября 2004 года № 349 &laquo;О внесении изменений и дополнений в совместный приказ Министра юстиции Республики Казахстан от 21 ноября 2002 года № 172 и Министра финансов Республики Казахстан от 2 декабря 2002 года № 598 &laquo;Об утверждении Правил по применению субъектами оценочной деятельности требований к содержанию и форме отчета об оценке&raquo; (зарегистрирован в Реестре государственных нормативных правовых актов № 3102, опубликован в Бюллетене нормативных правовых актов центральных исполнительных и иных государственных органов Республики Казахстан, 2004 г., № 41-44, ст. 1030).</p>\r\n<p>5. Приказ Министра юстиции Республики Казахстан от 23 ноября 2002 года № 179 &laquo;Об утверждении Правил по применению субъектами оценочной деятельности требований к качеству выполнения работ по оценке, используемым принципам оценки&raquo; (зарегистрирован в Реестре государственной регистрации нормативных правовых актов № 2071 и опубликован в Бюллетене нормативных правовых актов центральных исполнительных и иных государственных органов Республики Казахстан, 2003 г., № 3, ст.774)</p>'),
(4, 'links_exp', '<ul>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n</ul>', '<ul>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n</ul>'),
(5, 'docs_exp', '<ul>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n</ul>', '<ul>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на тестовый документ</a></li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Структура таблицы `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_ru` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL,
  `date_kz` varchar(255) NOT NULL,
  `text_kz` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `exams`
--

INSERT INTO `exams` (`id`, `date`, `date_ru`, `text_ru`, `date_kz`, `text_kz`) VALUES
(1, '2019-05-28', '28 мая', 'название экзамена', '28 мая', 'название экзамена'),
(2, '2019-06-29', '29 мая', 'название экзамена', '29 мая', 'название экзамена'),
(3, '2019-06-04', '4 июня', 'название экзамена', '4 июня', 'название экзамена'),
(4, '2019-06-19', '19 июня', 'название экзамена', '19 июня', 'название экзамена'),
(5, '2019-07-08', '8 июля', 'название экзамена', '8 июля', 'название экзамена');

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
(3, 'faq', 'Вопросы и ответы', 'Вопросы и ответы', '', '', '', ''),
(4, 'about', 'about', 'about', 'about', 'about', 'about', 'about'),
(5, 'news', 'news', 'news', 'news', 'news', 'news', 'news'),
(6, 'register', 'register', 'register', 'register', 'register', 'register', 'register'),
(7, 'join', 'join', 'join', 'join', 'join', 'join', 'join'),
(8, 'exams', 'exams', 'exams', 'exams', 'exams', 'exams', 'exams'),
(9, 'training', 'training', 'training', 'training', 'training', 'training', 'training'),
(10, 'contacts', 'contacts', 'contacts', 'contacts', 'contacts', 'contacts', 'contacts'),
(11, 'base', 'base', 'base', 'base', 'base', 'base', 'base'),
(12, 'experts', 'experts', 'experts', 'experts', 'experts', 'experts', 'experts');

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
(4, '2019-07-07', 'test1', 0, 'Название статьи', '<p>Повседневная практика показывает, что реализация<br />намеченных плановых заданий требуют определения<br />и уточнения существенных финансовых<br />и административных условий. Разнообразный<br />и богатый опыт консультация с широким активом<br />влечет за собой процесс внедрения и модернизации<br />форм развития. С другой стороны постоянный<br />количественный рост и сфера нашей активности<br />позволяет выполнять важные задания по разработке<br />форм развития. Не следует, однако забывать,<br />что сложившаяся структура организации<br />обеспечивает широкому кругу (специалистов)<br />участие в формировании систем массового участия.</p>', 'Название статьи', '<p>Повседневная практика показывает, что реализация<br />намеченных плановых заданий требуют определения<br />и уточнения существенных финансовых<br />и административных условий. Разнообразный<br />и богатый опыт консультация с широким активом<br />влечет за собой процесс внедрения и модернизации<br />форм развития. С другой стороны постоянный<br />количественный рост и сфера нашей активности<br />позволяет выполнять важные задания по разработке<br />форм развития. Не следует, однако забывать,<br />что сложившаяся структура организации<br />обеспечивает широкому кругу (специалистов)<br />участие в формировании систем массового участия.</p>', 'l9_1.jpg'),
(5, '2019-06-30', 'test2', 0, 'Название статьи 2', '<p>Повседневная практика показывает, что реализация<br />намеченных плановых заданий требуют определения<br />и уточнения существенных финансовых<br />и административных условий. Разнообразный<br />и богатый опыт консультация с широким активом<br />влечет за собой процесс внедрения и модернизации<br />форм развития. С другой стороны постоянный<br />количественный рост и сфера нашей активности<br />позволяет выполнять важные задания по разработке<br />форм развития. Не следует, однако забывать,<br />что сложившаяся структура организации<br />обеспечивает широкому кругу (специалистов)<br />участие в формировании систем массового участия.</p>', 'Название статьи 2', '<p>Повседневная практика показывает, что реализация<br />намеченных плановых заданий требуют определения<br />и уточнения существенных финансовых<br />и административных условий. Разнообразный<br />и богатый опыт консультация с широким активом<br />влечет за собой процесс внедрения и модернизации<br />форм развития. С другой стороны постоянный<br />количественный рост и сфера нашей активности<br />позволяет выполнять важные задания по разработке<br />форм развития. Не следует, однако забывать,<br />что сложившаяся структура организации<br />обеспечивает широкому кругу (специалистов)<br />участие в формировании систем массового участия.</p>', 'rbanner.jpg'),
(6, '2019-06-04', 'test3', 0, 'Название статьи 3', '<p>Повседневная практика показывает, что реализация<br />намеченных плановых заданий требуют определения<br />и уточнения существенных финансовых<br />и административных условий. Разнообразный<br />и богатый опыт консультация с широким активом<br />влечет за собой процесс внедрения и модернизации<br />форм развития. С другой стороны постоянный<br />количественный рост и сфера нашей активности<br />позволяет выполнять важные задания по разработке<br />форм развития. Не следует, однако забывать,<br />что сложившаяся структура организации<br />обеспечивает широкому кругу (специалистов)<br />участие в формировании систем массового участия.</p>', 'Название статьи 3', '<p>Повседневная практика показывает, что реализация<br />намеченных плановых заданий требуют определения<br />и уточнения существенных финансовых<br />и административных условий. Разнообразный<br />и богатый опыт консультация с широким активом<br />влечет за собой процесс внедрения и модернизации<br />форм развития. С другой стороны постоянный<br />количественный рост и сфера нашей активности<br />позволяет выполнять важные задания по разработке<br />форм развития. Не следует, однако забывать,<br />что сложившаяся структура организации<br />обеспечивает широкому кругу (специалистов)<br />участие в формировании систем массового участия.</p>', 'new.png'),
(7, '2019-07-10', 'test4', 0, 'Название статьи 4', '<p>Повседневная практика показывает, что реализация<br />намеченных плановых заданий требуют определения<br />и уточнения существенных финансовых<br />и административных условий. Разнообразный<br />и богатый опыт консультация с широким активом<br />влечет за собой процесс внедрения и модернизации<br />форм развития. С другой стороны постоянный<br />количественный рост и сфера нашей активности<br />позволяет выполнять важные задания по разработке<br />форм развития. Не следует, однако забывать,<br />что сложившаяся структура организации<br />обеспечивает широкому кругу (специалистов)<br />участие в формировании систем массового участия.</p>', 'Название статьи 4', '<p>Повседневная практика показывает, что реализация<br />намеченных плановых заданий требуют определения<br />и уточнения существенных финансовых<br />и административных условий. Разнообразный<br />и богатый опыт консультация с широким активом<br />влечет за собой процесс внедрения и модернизации<br />форм развития. С другой стороны постоянный<br />количественный рост и сфера нашей активности<br />позволяет выполнять важные задания по разработке<br />форм развития. Не следует, однако забывать,<br />что сложившаяся структура организации<br />обеспечивает широкому кругу (специалистов)<br />участие в формировании систем массового участия.</p>', 'new.png'),
(8, '2019-07-11', 'test5', 0, 'Название статьи 5', '<p>Повседневная практика показывает, что реализация<br />намеченных плановых заданий требуют определения<br />и уточнения существенных финансовых<br />и административных условий. Разнообразный<br />и богатый опыт консультация с широким активом<br />влечет за собой процесс внедрения и модернизации<br />форм развития. С другой стороны постоянный<br />количественный рост и сфера нашей активности<br />позволяет выполнять важные задания по разработке<br />форм развития. Не следует, однако забывать,<br />что сложившаяся структура организации<br />обеспечивает широкому кругу (специалистов)<br />участие в формировании систем массового участия.</p>', 'Название статьи 5', '<p>Повседневная практика показывает, что реализация<br />намеченных плановых заданий требуют определения<br />и уточнения существенных финансовых<br />и административных условий. Разнообразный<br />и богатый опыт консультация с широким активом<br />влечет за собой процесс внедрения и модернизации<br />форм развития. С другой стороны постоянный<br />количественный рост и сфера нашей активности<br />позволяет выполнять важные задания по разработке<br />форм развития. Не следует, однако забывать,<br />что сложившаяся структура организации<br />обеспечивает широкому кругу (специалистов)<br />участие в формировании систем массового участия.</p>', 'new.png');

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
-- Структура таблицы `qreports`
--

CREATE TABLE `qreports` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `text_ru` text NOT NULL,
  `title_kz` varchar(255) NOT NULL,
  `text_kz` text NOT NULL,
  `show` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `qreports`
--

INSERT INTO `qreports` (`id`, `date`, `title_ru`, `text_ru`, `title_kz`, `text_kz`, `show`) VALUES
(1, '2018-12-30', 'Какой- то квартал 2018', '<ul>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n</ul>', 'Какой- то квартал 2018', '<ul>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li>&nbsp;</li>\r\n</ul>', 1),
(2, '2019-07-18', 'Какой- то квартал 2019', '<ul>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n</ul>', 'Какой- то квартал 2019', '<ul>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n<li><a href=\"../../../web/uploads/documents/test/exxx.pdf\">Ссылка на какой-то документ</a></li>\r\n</ul>', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sdocs`
--

CREATE TABLE `sdocs` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL,
  `text_kz` varchar(255) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sdocs`
--

INSERT INTO `sdocs` (`id`, `link`, `text_ru`, `text_kz`, `position`) VALUES
(1, '/web/uploads/documents/test/exxx.pdf', 'test 1', 'test 1', 1),
(2, '/web/uploads/documents/test/exxx.pdf', 'test 2', 'test 2', 2),
(3, '/web/uploads/documents/test/exxx.pdf', 'test 3', 'test 3', 3),
(4, '/web//uploads/documents/test/exxx.pdf', 'test 4', 'test 4', 4),
(5, '/web//uploads/documents/test/exxx.pdf', 'test 5', 'test 5', 5),
(6, '/web//uploads/documents/test/exxx.pdf', 'test 6', 'test 6', 6),
(7, '/web//uploads/documents/test/exxx.pdf', 'test 7', 'test 7', 7),
(8, '/web//uploads/documents/test/exxx.pdf', 'test 8', 'test 8', 8),
(9, '/web//uploads/documents/test/exxx.pdf', 'test 9', 'test 9', 9),
(10, '/web//uploads/documents/test/exxx.pdf', 'test 10', 'test 10', 10),
(11, '/web//uploads/documents/test/exxx.pdf', 'test 11', 'test 11', 11),
(12, '/web//uploads/documents/test/exxx.pdf', 'test 12', 'test 12', 12),
(13, '/web//uploads/documents/test/exxx.pdf', 'test 13', 'test 13', 13),
(14, '/web//uploads/documents/test/exxx.pdf', 'test 14', 'test 14', 14),
(15, '/web//uploads/documents/test/exxx.pdf', 'test 15', 'test 15', 15),
(16, '/web//uploads/documents/test/exxx.pdf', 'test 16', 'test 16', 16),
(17, '/web//uploads/documents/test/exxx.pdf', 'test 17', 'test 17', 17),
(18, '/web//uploads/documents/test/exxx.pdf', 'test 18', 'test 18', 18),
(19, '/web//uploads/documents/test/exxx.pdf', 'test 19', 'test 19', 19),
(22, '/web//uploads/documents/test/exxx.pdf	', 'test 20', 'test 20', 20);

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
-- Индексы таблицы `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `qreports`
--
ALTER TABLE `qreports`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sdocs`
--
ALTER TABLE `sdocs`
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
-- AUTO_INCREMENT для таблицы `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT для таблицы `qreports`
--
ALTER TABLE `qreports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `sdocs`
--
ALTER TABLE `sdocs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `text_blocks`
--
ALTER TABLE `text_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
