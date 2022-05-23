-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2022 г., 19:39
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yeticave`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bid`
--

CREATE TABLE `bid` (
  `id_bid` int NOT NULL,
  `bid_date` date NOT NULL,
  `bid_sum` int NOT NULL,
  `id_user` int NOT NULL,
  `id_lot` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `bid`
--

INSERT INTO `bid` (`id_bid`, `bid_date`, `bid_sum`, `id_user`, `id_lot`) VALUES
(1, '2022-05-16', 11001, 1, 5),
(2, '2022-05-16', 161000, 1, 2),
(3, '2022-05-16', 5500, 1, 6),
(4, '2022-05-16', 11001, 1, 4),
(5, '2022-05-16', 9508, 1, 3),
(6, '2022-05-16', 12000, 1, 1),
(7, '2022-05-11', 13000, 1, 4),
(8, '2022-05-23', 5000, 1, 26);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id_category` int NOT NULL,
  `name_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Доски и лыжи'),
(2, 'Крепления'),
(3, 'Ботинки'),
(4, 'Одежда'),
(5, 'Инструменты'),
(6, 'Разное');

-- --------------------------------------------------------

--
-- Структура таблицы `lot`
--

CREATE TABLE `lot` (
  `id_lot` int NOT NULL,
  `creation_date` date NOT NULL,
  `lot_name` varchar(100) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL,
  `start_price` int NOT NULL,
  `end_date` date NOT NULL,
  `iteration` int NOT NULL,
  `id_author` int NOT NULL,
  `id_winner` int NOT NULL,
  `id_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `lot`
--

INSERT INTO `lot` (`id_lot`, `creation_date`, `lot_name`, `descr`, `img`, `start_price`, `end_date`, `iteration`, `id_author`, `id_winner`, `id_category`) VALUES
(1, '2022-05-16', 'Лучшая доска для сёрфинга \"Snow_Cow\"', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-1.jpg', 10999, '2022-05-17', 1, 1, 2, 1),
(2, '2022-05-16', 'DC Ply Mens 2016/2017 Snowboard', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-2.jpg', 159999, '2022-05-17', 1, 1, 2, 1),
(3, '2022-05-16', 'Крепления Union Contact Pro 2015 года размер L/XL', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-3.jpg', 8000, '2022-05-17', 1, 1, 2, 2),
(4, '2022-05-16', 'Ботинки для сноуборда DC Mutiny Charocal', 'Куртка The North Face пригодится, чтобы непогода не застигла вас врасплох во время хайкинга в горах.\r\n\r\nЭКОЛОГИЧНОСТЬ\r\nПри производстве модели использовался переработанный нейлон. Водоотталкивающая пропитка не содержит вредных для окружающей среды PFC.\r\nВОДОНЕПРОНИЦАЕМАЯ МЕМБРАНА\r\nМембрана DryVent, дополненная водоотталкивающей пропиткой и полностью проклеенными швами, защищает от промокания и поддерживает оптимальный микроклимат. Показатели водонепроницаемости и паропроницаемости: 17 000 мм / 19 000 г/м2/24 ч.\r\nКОМФОРТНАЯ ПОСАДКА\r\nПрямой крой для комфортной посадки.\r\nЗАЩИТА ОТ ВЕТРА\r\nВетрозащитная планка защищает от продувания.\r\nЗАЩИТА ОТ НЕПОГОДЫ\r\nРегулируемый капюшон и утяжка по низу помогут сохранить тепло в плохую погоду.\r\nПРАКТИЧНОСТЬ\r\nПредусмотрено 2 кармана для рук на молнии.\r\nУСТОЙЧИВОСТЬ К ИЗНОСУ\r\nПрочный внешний материал с плетением рипстоп устойчив к порезам.', 'img/lot-4.jpg', 10999, '2022-05-17', 1, 1, 2, 3),
(5, '2022-05-16', 'Куртка для сноуборда DC Mutiny Charocal', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-5.jpg', 7500, '2022-05-17', 1, 1, 2, 4),
(6, '2022-05-16', 'Маска Oakley Canopy', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-6.jpg', 5400, '2022-05-17', 1, 1, 2, 6),
(26, '2022-05-20', 'Высокие  повседневные кроссовки  \"Naruto\" ', 'Ранее кроссовки считались исключительно спортивным атрибутом, но сейчас все изменилось. Сегодня они изготавливаются производителями для самых различных целей:\r\nСпорт. Эта причина, как и в былые времена, остается на первом месте;\r\nПовседневная носка. Поскольку данный вид обуви набирает все больше популярности, современными дизайнерами разработаны модели самых различных расцветок и моделей (зимние, летние, демисезонные);\r\nКультовый атрибут. Высокие кроссовки уверенно занимают позицию культа в уличной моде. Являясь подходящим вариантом для человека любого возраста, они становятся, по истине, модным каноном.', 'img/boots.png', 4500, '2022-05-29', 500, 1, 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `reg_date` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `contacts` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `reg_date`, `email`, `login`, `password`, `avatar`, `contacts`) VALUES
(1, '2022-05-15', 'gmail@gmail.com', 'Itashiro', '12345', 'avatar.jpg', '88005553535'),
(2, '2022-05-16', 'user@gmail.com', 'user', '12345', 'avatar.jpg', '88005553536');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id_bid`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_lot` (`id_lot`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `lot`
--
ALTER TABLE `lot`
  ADD PRIMARY KEY (`id_lot`),
  ADD KEY `id_author` (`id_author`),
  ADD KEY `id_winner` (`id_winner`),
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bid`
--
ALTER TABLE `bid`
  MODIFY `id_bid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `lot`
--
ALTER TABLE `lot`
  MODIFY `id_lot` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`id_lot`) REFERENCES `lot` (`id_lot`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `lot`
--
ALTER TABLE `lot`
  ADD CONSTRAINT `lot_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lot_ibfk_2` FOREIGN KEY (`id_author`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lot_ibfk_3` FOREIGN KEY (`id_winner`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
