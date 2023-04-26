-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 26 2023 г., 19:37
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `RHYTHMICS`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Administrator`
--

CREATE TABLE `Administrator` (
  `Id` int(11) NOT NULL,
  `Surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Patronymic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Administrator`
--

INSERT INTO `Administrator` (`Id`, `Surname`, `Name`, `Patronymic`, `Mail`) VALUES
(1, 'Барышников', 'Андрей', 'Евгеньевич', 'andreibarishnikov2004@gmail.com'),
(2, 'Войцеховский', 'Артём', 'Олегович', 'artemvoj@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `Basket`
--

CREATE TABLE `Basket` (
  `Id` int(11) NOT NULL,
  `Id_Client` int(11) NOT NULL,
  `Id_Product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Basket`
--

INSERT INTO `Basket` (`Id`, `Id_Client`, `Id_Product`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `Category`
--

CREATE TABLE `Category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Category`
--

INSERT INTO `Category` (`Id`, `Name`) VALUES
(1, 'Кроссовки'),
(2, 'Штаны'),
(3, 'Футболки'),
(4, 'Худи');

-- --------------------------------------------------------

--
-- Структура таблицы `Client`
--

CREATE TABLE `Client` (
  `Id` int(11) NOT NULL,
  `Surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Patronymic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Credit_account` int(255) DEFAULT NULL,
  `Payment` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Client`
--

INSERT INTO `Client` (`Id`, `Surname`, `Name`, `Patronymic`, `Mail`, `Username`, `Password`, `Credit_account`, `Payment`) VALUES
(1, 'Фалалеев', 'Никита', 'Алексеевич', 'falnik@gmail.com', '', '', 1330, 4200),
(2, 'Гуляев', 'Михаил', 'Олегович', 'gulm@gmail.com', '', '', 1255, 3900),
(3, 'Войцеховский', 'Артём', 'Олегович', 'artemvoj2906@gmail.com', 'artemvoj', '123456', 3500, NULL),
(4, 'Барышников', 'Андрей', 'Евгеньевич', 'andrei2004g@mail.ru', 'dron', '123456', 2345, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

CREATE TABLE `Product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double UNSIGNED NOT NULL,
  `old_price` double UNSIGNED NOT NULL,
  `Id_Category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Product`
--

INSERT INTO `Product` (`id`, `title`, `img`, `price`, `old_price`, `Id_Category`) VALUES
(1, 'ADIDAS FORUM BONEGA MID W', 'ak1.png', 4499, 6499, 1),
(2, 'NIKE SNEAKERS GTS 97', 'ak2.png', 4999, 5999, 1),
(3, 'REEBOK CLASSIC LEATHER SP', 'ak4.png', 4999, 5899, 1),
(4, 'PUMA White-Pearl Pin', 'ak5.png', 5199, 6199, 1),
(5, 'ADIDAS Брюки спортивные SST TP', 'ak6.png', 5999, 8999, 2),
(6, 'NIKE Брюки спортивные M NSW', 'ak7.png', 7199, 9199, 2),
(7, 'REEBOK Брюки спортивные CL ND', 'ak8.png', 6499, 8699, 2),
(8, 'PUMA Брюки спортивные T7 TREND', 'ak9.png', 7199, 8799, 2),
(9, 'ADIDAS Футболка TRF LINEAR TEE', 'ak10.png', 3899, 4999, 3),
(10, 'NIKE Футболка M NSW TEE', 'ak11.png', 3499, 4499, 3),
(11, 'REEBOK Футболка CL ND TEE', 'ak12.png', 3999, 4899, 3),
(12, 'PUMA Футболка ESS Logo Tee', 'ak13.png', 2999, 3999, 3),
(13, 'ADIDAS Худи TRF LINEAR HDY', 'ak14.png', 5199, 8999, 4),
(14, 'NIKE Худи M NK CLUB', 'ak15.png', 5899, 9299, 4),
(15, 'REEBOK Худи RI FT BIG LOGO', 'ak16.png', 5399, 8999, 4),
(16, 'PUMA Худи RAD/CAL Half-Zip', 'ak17.png', 5599, 8799, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `Storage`
--

CREATE TABLE `Storage` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_Product` int(11) NOT NULL,
  `Id_Administrator` int(11) NOT NULL,
  `Id_Worker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Storage`
--

INSERT INTO `Storage` (`Id`, `Name`, `Id_Product`, `Id_Administrator`, `Id_Worker`) VALUES
(1, 'ЗОЖ', 1, 2, 2),
(2, 'Здоровье', 2, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Worker`
--

CREATE TABLE `Worker` (
  `Id` int(11) NOT NULL,
  `Surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Patronymic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Worker`
--

INSERT INTO `Worker` (`Id`, `Surname`, `Name`, `Patronymic`, `Address`, `Phone`) VALUES
(1, 'Бузуев', 'Никита', 'Евгеньевич', 'Шоссе Металлургов 53Б', '89518199787'),
(2, 'Манаев', 'Евгений', 'Павлович', 'Краснооктябрьская 26', '89192253641');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Administrator`
--
ALTER TABLE `Administrator`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Basket`
--
ALTER TABLE `Basket`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Client` (`Id_Client`),
  ADD KEY `Id_Product` (`Id_Product`);

--
-- Индексы таблицы `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_Category` (`Id_Category`);

--
-- Индексы таблицы `Storage`
--
ALTER TABLE `Storage`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Product` (`Id_Product`),
  ADD KEY `Id_Administrator` (`Id_Administrator`),
  ADD KEY `Id_Worker` (`Id_Worker`);

--
-- Индексы таблицы `Worker`
--
ALTER TABLE `Worker`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Administrator`
--
ALTER TABLE `Administrator`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Basket`
--
ALTER TABLE `Basket`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Category`
--
ALTER TABLE `Category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Client`
--
ALTER TABLE `Client`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `Storage`
--
ALTER TABLE `Storage`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Worker`
--
ALTER TABLE `Worker`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Basket`
--
ALTER TABLE `Basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`Id_Client`) REFERENCES `Client` (`Id`),
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`Id_Product`) REFERENCES `Product` (`id`);

--
-- Ограничения внешнего ключа таблицы `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Id_Category`) REFERENCES `Category` (`Id`);

--
-- Ограничения внешнего ключа таблицы `Storage`
--
ALTER TABLE `Storage`
  ADD CONSTRAINT `storage_ibfk_2` FOREIGN KEY (`Id_Administrator`) REFERENCES `Administrator` (`Id`),
  ADD CONSTRAINT `storage_ibfk_3` FOREIGN KEY (`Id_Worker`) REFERENCES `Worker` (`Id`),
  ADD CONSTRAINT `storage_ibfk_4` FOREIGN KEY (`Id_Product`) REFERENCES `Product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
