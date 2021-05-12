-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 08 2021 г., 21:54
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testsite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles1`
--

CREATE TABLE `articles1` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `articles1`
--

INSERT INTO `articles1` (`id`, `title`, `content`) VALUES
(2, 'Определение селектора', '<p><u><strong>Селектор</strong></u>&nbsp;- это часть CSS-правила, которая сообщает браузеру, к какому элементу (или элементам) веб-страницы будет применён стиль.</p>\r\n\r\n<p>Обратите внимание - не существует селекторов, которые бы позволили выбрать родителя (содержащий контейнер) или соседа родителя или потомков соседа родителя.</p>\r\n\r\n<p>Термин селектор может относиться к простому селектору (simple selector), составному селектору (compound selector), сложному селектору (complex selector) или списку селекторов.</p>\r\n\r\n<p>К&nbsp;простым селекторам&nbsp;относятся:</p>\r\n\r\n<ul>\r\n	<li>селектор типа</li>\r\n	<li>универсальный селектор</li>\r\n	<li>селекторы атрибутов</li>\r\n	<li>селектор идентификатора</li>\r\n	<li>селектор класса</li>\r\n	<li>псевдо-классы</li>\r\n</ul>\r\n'),
(3, 'Базовые селекторы', '<h2><u><span style=\"font-size:14px\">Универсальный селектор</span></u></h2>\r\n\r\n<p>Выбирает все элементы. По желанию, он может быть ограничен определённым пространством имён или относиться ко всему пространству имён.<br />\r\n<strong>Синтаксис:</strong>&nbsp;<code>*</code>&nbsp;<code><var>ns</var>|*</code>&nbsp;<code>*|*</code><br />\r\n<strong>Пример:</strong>&nbsp;<code>*</code>&nbsp;будет соответствовать всем элементам на странице.</p>\r\n\r\n<p><u><span style=\"font-size:14px\">Селекторы по типу элемента</span></u></p>\r\n\r\n<p>Этот базовый селектор выбирает тип элементов, к которым&nbsp;будет&nbsp;применяться правило.<br />\r\n<strong>Синтаксис:&nbsp;</strong><code><var>элемент</var></code><br />\r\n<strong>Пример:&nbsp;</strong>селектор<strong>&nbsp;</strong><code>input</code>&nbsp;выберет все элементы&nbsp;.</p>\r\n\r\n<p><u><span style=\"font-size:14px\">Селекторы по классу</span></u></p>\r\n\r\n<p>Этот базовый селектор выбирает элементы, основываясь на значении их атрибута&nbsp;<code>class</code>.<br />\r\n<strong>Синтаксис:&nbsp;</strong><code>.<em>имяКласса</em></code><br />\r\n<strong>Пример:&nbsp;</strong>селектор<strong>&nbsp;</strong><code>.index</code>&nbsp;выберет все элементы с соответствующим&nbsp;классом (который был определён в атрибуте&nbsp;<code>class=&quot;index&quot;</code>).</p>\r\n\r\n<p><u><span style=\"font-size:14px\">Селекторы по&nbsp;идентификатору</span></u></p>\r\n\r\n<p>Этот базовый селектор выбирает элементы, основываясь на значении их&nbsp;<code>id</code>&nbsp;атрибута. Не забывайте, что идентификатор&nbsp;должен быть уникальным, т. е. использоваться только для одного элемента в HTML-документе.&nbsp;<br />\r\n<strong>Синтаксис:&nbsp;</strong><code>#имяИдентификатора</code><br />\r\n<strong>Пример:&nbsp;</strong>селектор&nbsp;<code>#toc</code>&nbsp;выберет элемент с идентификатором&nbsp;toc (который был определён в атрибуте&nbsp;<code>id=&quot;toc&quot;</code>).</p>\r\n\r\n<p><span style=\"font-size:14px\"><u>Селекторы по атрибуту</u></span></p>\r\n\r\n<p>Этот селектор выбирает все элементы, имеющие данный атрибут или атрибут с определённым значением.<br />\r\n<strong>Синтаксис:</strong>&nbsp;<code>[attr] [attr=value] [attr~=value] [attr|=value] [attr^=value] [attr$=value] [attr*=value]</code><br />\r\n<strong>Пример:&nbsp;</strong>селектор&nbsp;<code>[autoplay]</code>&nbsp;выберет все элементы, у которых есть&nbsp; атрибут&nbsp;<code>autoplay</code>&nbsp;(независимо от его значения).<br />\r\n<strong>Ещё пример</strong>: a[href$=&quot;.jpg&quot;] выберет все ссылки, у которых адрес заканчивается на &quot;.jpg&quot;.<br />\r\n<strong>Ещё пример</strong>: a[href^=&quot;https&quot;] выберет все ссылки, у которых адрес начинается на &quot;https&quot;.</p>\r\n'),
(4, 'Комбинаторы', '<h2><u><span style=\"font-size:14px\">Комбинатор запятая</span></u></h2>\r\n\r\n<p>Комбинатор&nbsp;<code>,</code>&nbsp;это способ группировки, он выбирает все совпадающие узлы.<br />\r\n<strong>Синтаксис:</strong>&nbsp;<code><var>A</var>,&nbsp;<var>B</var></code><br />\r\n<strong>Пример:</strong>&nbsp;<code>div, span</code>&nbsp;выберет оба элемента - и&nbsp;<a href=\"https://developer.mozilla.org/ru/docs/Web/HTML/Element/div\"><code>&lt;div&gt;</code></a>&nbsp;и&nbsp;<a href=\"https://developer.mozilla.org/ru/docs/Web/HTML/Element/span\"><code>&lt;span&gt;</code></a>.</p>\r\n\r\n<p>Комбинатор потомков</p>\r\n\r\n<p>Комбинатор&nbsp;<code>&#39; &#39;</code>&nbsp;(пробел) выбирает элементы, которые находятся внутри указанного элемента (вне зависимости от уровня вложенности).<br />\r\n<strong>Синтаксис:</strong>&nbsp;<code>A B</code><br />\r\n<strong>Пример:&nbsp;</strong>селектор&nbsp;<code>div span</code>&nbsp;выберет все элементы&nbsp;<a href=\"https://developer.mozilla.org/ru/docs/Web/HTML/Element/span\"><code>&lt;span&gt;</code></a>, которые находятся внутри элемента&nbsp;<a href=\"https://developer.mozilla.org/ru/docs/Web/HTML/Element/div\"><code>&lt;div&gt;</code></a>.</p>\r\n\r\n<p>Дочерние&nbsp;селекторы</p>\r\n\r\n<p>Комбинатор&nbsp;<code>&#39;&gt;&#39;</code>&nbsp;в отличие от пробела выбирает только те элементы, которые являются дочерними непосредственно по отношению к указанному элементу.<br />\r\n<strong>Синтаксис:</strong>&nbsp;<code><var>A</var>&nbsp;&gt;&nbsp;<var>B</var></code><br />\r\n<strong>Пример:&nbsp;</strong>селектор<strong>&nbsp;</strong><code>ul &gt; li</code>&nbsp;выберет только дочерние элементы&nbsp;<a href=\"https://developer.mozilla.org/ru/docs/Web/HTML/Element/li\"><code>&lt;li&gt;</code></a>, которые находятся внутри, на первом уровне вложенности по отношению к элементу&nbsp;<a href=\"https://developer.mozilla.org/ru/docs/Web/HTML/Element/ul\"><code>&lt;ul&gt;</code></a>.</p>\r\n\r\n<p>Комбинатор всех соседних элементов</p>\r\n\r\n<p>Комбинатор&nbsp;<code>&#39;~&#39;</code>&nbsp;выбирает элементы, которые находятся на этом же уровне вложенности, после указанного элемента, с тем же родителем.<br />\r\n<strong>Синтаксис:</strong>&nbsp;<code><var>A</var>&nbsp;~&nbsp;<var>B</var></code><br />\r\n<strong>Пример:</strong>&nbsp;<code>p ~ span</code>&nbsp;выберет все элементы&nbsp;, которые находятся после элемента&nbsp;&nbsp;внутри одного родителя.</p>\r\n\r\n<p>Комбинатор следующего соседнего элемента</p>\r\n\r\n<p>Комбинатор&nbsp;<code>&#39;+&#39;</code>&nbsp;выбирает элемент, который&nbsp;находится непосредственно после указанного элемента, если у них общий родитель.<br />\r\n<strong>Синтаксис:</strong>&nbsp;<code><var>A</var>&nbsp;+&nbsp;<var>B</var></code><br />\r\n<strong>Пример:&nbsp;</strong>селектор&nbsp;<code>ul + li</code>&nbsp;выберет любой&nbsp;&nbsp;элемент, который &nbsp;находится непосредственно после элемента&nbsp;<a href=\"https://developer.mozilla.org/ru/docs/Web/HTML/Element/ul\"><code>&lt;ul&gt;</code></a>.</p>\r\n'),
(5, 'Псевдо', '<p><u>Псевдоклассы</u></p>\r\n\r\n<p>Знак&nbsp;<code>:</code>&nbsp;позволяет выбрать элементы, основываясь на информации, которой нет в дереве элементов.<br />\r\n<strong>Пример:&nbsp;</strong><code>a:visited</code>&nbsp;соответствует всем элементам&nbsp;&nbsp;которые имеют статус &quot;посещённые&quot;.<br />\r\n<strong>Ещё пример</strong>:&nbsp;<code>div:hover</code>&nbsp;соответствует элементу, над которым проходит указатель мыши.<br />\r\n<strong>Ещё пример</strong>:&nbsp;<code>input:focus</code>&nbsp;соответствует полю ввода, которое получило фокус.</p>\r\n\r\n<p><u>Псевдоэлементы</u></p>\r\n\r\n<p>Знак&nbsp;<code>::</code>&nbsp;позволяет выбрать вещи, которых нет в HTML.<br />\r\n<strong>Пример:</strong>&nbsp;<code>p::first-line</code>&nbsp;соответствует первой линии абзаца&nbsp;.</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `articles2`
--

CREATE TABLE `articles2` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `articles3`
--

CREATE TABLE `articles3` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `articles3`
--

INSERT INTO `articles3` (`id`, `title`, `content`) VALUES
(1, 'Наследование', '<p>Начнем с самой простой для понимания концепции CSS. Суть ее состоит в том, что стили, присвоенные некоторому элементу,&nbsp;<strong>наследуются</strong>&nbsp;всеми потомками (вложенными элементами), если они не переопределены явно. Например, размер шрифта и его цвет достаточно применить к дескриптору body чтобы все элементы внутри имели те же свойства. Но, для заголовков h1-h6 размер шрифта не будет присвоен, потому что у браузера для них есть своя таблица стилей по умолчанию, а наследованные стили имеют самый низкий приоритет. Аналогичная ситуация с цветом ссылок.</p>\r\n\r\n<p>Таким образом, наследование позволяет сократить таблицу CSS. Но в то же время если стилей много, то отследить какой родительский элемент установил некоторое свойство, становится довольно сложно.</p>\r\n'),
(2, 'Каскадирование', '<p>Правила каскадирования позволяют разрешать ситуации, когда для одного элемента прописано несколько стилей.&nbsp;<strong>Каскадирование&nbsp;</strong>основано на присвоении некоторого приоритета каждому правилу. Авторские таблицы стилей имеют самый большой приоритет, меньший &mdash; пользовательские, самый низкий &mdash; таблицы стилей по умолчанию браузера. У пользователя есть возможность переопределить авторское правило путем добавления флага !important к своему.</p>\r\n\r\n<p>Правила каскадирования определяют следующие приоритеты:</p>\r\n\r\n<ol>\r\n	<li>пользовательские стили, отмеченные !important</li>\r\n	<li>авторские стили, отмеченные !important</li>\r\n	<li>авторские стили</li>\r\n	<li>пользовательские стили</li>\r\n	<li>стили по умолчанию</li>\r\n</ol>\r\n\r\n<p>После каскадирования правила упорядочиваются на основе специфичности селекторов.</p>\r\n'),
(3, 'Специфичность', '<p>Специфичность &mdash; это некоторое число в системе с неопределенно высоким основанием, которое является отражением приоритета какого-либо правила. Вычисляется оно на основе&nbsp;<strong>специфичности</strong>&nbsp;каждого из селекторов, входящих в правило CSS.</p>\r\n\r\n<p>Специфичность селектора разбивается на 4 группы &mdash; a b c d:</p>\r\n\r\n<ul>\r\n	<li>если стиль встроенный, т.е. определен как style=&quot;&quot;, то а=1</li>\r\n	<li>значение b равно количеству селекторов идентификаторов</li>\r\n	<li>значение c равно количеству классов, псевдоклассов и селекторов атрибутов</li>\r\n	<li>значение d равно количеству селекторов типов</li>\r\n</ul>\r\n\r\n<p>Пример вычисления специфичности:</p>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>Селектор</th>\r\n			<th>Специфичность</th>\r\n			<th>Специфичность в системе<br />\r\n			с основанием 10</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Style=&quot;&quot;</td>\r\n			<td>1,0,0,0</td>\r\n			<td>1000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>#wrapper #content {}</td>\r\n			<td>0,2,0,0</td>\r\n			<td>200</td>\r\n		</tr>\r\n		<tr>\r\n			<td>#content .datePosted {}</td>\r\n			<td>0,1,1,0</td>\r\n			<td>110</td>\r\n		</tr>\r\n		<tr>\r\n			<td>div#content {}</td>\r\n			<td>0,1,0,1</td>\r\n			<td>101</td>\r\n		</tr>\r\n		<tr>\r\n			<td>#content {}</td>\r\n			<td>0,1,0,0</td>\r\n			<td>100</td>\r\n		</tr>\r\n		<tr>\r\n			<td>p.comment .datePosted {}</td>\r\n			<td>0,0,2,1</td>\r\n			<td>21</td>\r\n		</tr>\r\n		<tr>\r\n			<td>p.comment {}</td>\r\n			<td>0,0,1,1</td>\r\n			<td>11</td>\r\n		</tr>\r\n		<tr>\r\n			<td>div p {}</td>\r\n			<td>0,0,0,2</td>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>p {}</td>\r\n			<td>0,0,0,1</td>\r\n			<td>1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Неопределенно высокое основание системы счисления является следствием того, что неизвестно заранее, насколько большими будут числа a, b, c, d. Если они меньше 10, то удобно использовать десятичную СС.</p>\r\n\r\n<p>Некоторые особенности:</p>\r\n\r\n<ul>\r\n	<li>если два правила имеют одинаковую специфичность, то приоритетным становится правило, определенное последним</li>\r\n	<li>наследованные стили имеют нулевую специфичность</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles1`
--
ALTER TABLE `articles1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles2`
--
ALTER TABLE `articles2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles3`
--
ALTER TABLE `articles3`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles1`
--
ALTER TABLE `articles1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `articles2`
--
ALTER TABLE `articles2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `articles3`
--
ALTER TABLE `articles3`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
