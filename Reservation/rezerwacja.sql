-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 01 2020 г., 01:09
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rezerwacja`
--

-- --------------------------------------------------------

--
-- Структура таблицы `miejsce`
--

CREATE TABLE `miejsce` (
  `id_miejsce` int(11) NOT NULL,
  `Numer` int(11) NOT NULL,
  `Opis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `miejsce`
--

INSERT INTO `miejsce` (`id_miejsce`, `Numer`, `Opis`) VALUES
(1, 1, 'Lorem ipsum miejsce'),
(2, 2, 'Lorem ipsum'),
(3, 3, 'Ipsum'),
(4, 4, 'Fajne'),
(5, 5, 'L-o-rem ipsum'),
(6, 6, 'Lorem ipsum123'),
(7, 7, '-_-Lorem ipsum'),
(8, 8, 'Zwykle'),
(9, 9, 'Lorem ipsum213123'),
(10, 10, ':)Lorem ipsum'),
(11, 11, 'Ladne'),
(12, 12, 'Lorem ipsum213'),
(13, 13, 'Lorem ipsum:)'),
(14, 14, 'Lorem ipsum1'),
(15, 15, 'Lorem ipsum123'),
(16, 16, 'Lorem ipsum123');

-- --------------------------------------------------------

--
-- Структура таблицы `osoba`
--

CREATE TABLE `osoba` (
  `id_osoba` int(11) NOT NULL,
  `Imie` varchar(255) NOT NULL,
  `Nazwisko` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telefon` varchar(255) NOT NULL,
  `Opis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `osoba`
--

INSERT INTO `osoba` (`id_osoba`, `Imie`, `Nazwisko`, `Email`, `Telefon`, `Opis`) VALUES
(1, 'Ada', 'WIŚNIEWSKA', 'aaa@gmail.com', '2131', NULL),
(2, 'Adela', 'WIŚNIEWSKA', 'bbbb@gmail.com', '33333', NULL),
(3, 'Alesja', 'WIŚNIEWSKA', 'rrrr@gmail.com', '222', NULL),
(4, 'Dorota', 'KOWALSKA', 'ffff@gmail.com', '1111', NULL),
(5, 'Eliza', 'KOWALSKA', 'dddd@gmail.com', '4545', NULL),
(6, 'Jakub', 'Lisowski', 'ssss@gmail.com', '3434', NULL),
(7, 'Natan', 'Lisowski', 'wwww@gmail.com', '232', NULL),
(8, 'Patryk', 'Kowalski', 'tttt@gmail.com', '123', NULL),
(9, 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Структура таблицы `wyposazenie`
--

CREATE TABLE `wyposazenie` (
  `id_wyp` int(11) NOT NULL,
  `Rodzaj` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Oznaczenie` varchar(255) NOT NULL,
  `Rok_zakupu` date NOT NULL,
  `Wartosc` int(11) NOT NULL,
  `Opis_wyp` varchar(255) NOT NULL,
  `miejsce` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wyposazenie`
--

INSERT INTO `wyposazenie` (`id_wyp`, `Rodzaj`, `Model`, `Oznaczenie`, `Rok_zakupu`, `Wartosc`, `Opis_wyp`, `miejsce`) VALUES
(1, 'komputer', 'lenovo', 'a1', '1980-12-11', 11100, 'good', 6),
(2, 'komputer', 'lenovo', 'a2', '1980-11-12', 11100, 'good', 14),
(3, 'komputer', 'lenovo', 'a3', '1980-11-12', 11100, 'good', 3),
(4, 'komputer', 'lenovo', 'a4', '1980-11-12', 11100, 'good', 4),
(5, 'komputer', 'lenovo', 'a5', '1980-11-12', 11100, 'good', 5),
(6, 'komputer', 'lenovo', 'a6', '1980-11-12', 11100, 'good', 1),
(7, 'komputer', 'lenovo', 'a7', '1980-11-12', 11100, 'good', 7),
(8, 'komputer', 'lenovo', 'a8', '1980-11-12', 11100, 'good', 8),
(9, 'komputer', 'lenovo', 'a9', '1980-11-12', 11100, 'good', 9),
(10, 'komputer', 'lenovo', 'a10', '1980-11-12', 11100, 'good', 10),
(20, 'komputer', 'lenovo', 'a11', '1980-11-12', 11100, 'good', 11),
(21, 'komputer', 'lenovo', 'a12', '1980-11-12', 11100, 'good', 12),
(22, 'komputer', 'lenovo', 'a13', '1980-11-12', 11100, 'good', 13),
(23, 'drukarka', 'hp', 'd1', '2000-11-12', 7600, 'average', 16),
(24, 'drukarka', 'hp', 'd2', '2000-11-12', 7600, 'average', 1),
(25, 'drukarka', 'hp', 'd3', '2000-11-12', 7600, 'average', 11),
(26, 'drukarka', 'hp', 'd4', '2000-11-12', 7600, 'average', 7),
(27, 'drukarka', 'hp', 'd5', '2000-11-12', 7600, 'average', 4),
(28, 'drukarka', 'hp', 'd6', '2000-11-12', 7600, 'average', 13),
(29, 'telefon', 'sumsung', 't1', '2000-11-12', 300, 'ladny', 1),
(30, 'telefon', 'sumsung', 't2', '2000-11-12', 300, 'ladny', 2),
(31, 'telefon', 'sumsung', 't3', '2000-11-12', 300, 'ladny', 6),
(32, 'telefon', 'sumsung', 't4', '2000-11-12', 300, 'ladny', 11),
(33, 'telefon', 'sumsung', 't5', '2000-11-12', 300, 'ladny', 16),
(34, 'telefon', 'siemens', 't14', '2020-10-10', 500, ':)', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `zamowenie`
--

CREATE TABLE `zamowenie` (
  `id_zam` int(11) NOT NULL,
  `osoba_email` varchar(255) NOT NULL,
  `miejsce` int(11) NOT NULL,
  `od` datetime NOT NULL,
  `do` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zamowenie`
--

INSERT INTO `zamowenie` (`id_zam`, `osoba_email`, `miejsce`, `od`, `do`) VALUES
(9, 'aaa@gmail.com', 8, '2020-04-02 09:39:00', '2020-04-03 16:30:00'),
(10, 'aaa@gmail.com', 4, '2020-04-02 09:39:00', '2020-04-03 16:30:00'),
(11, 'aaa@gmail.com', 11, '2020-04-02 09:39:00', '2020-04-03 16:30:00'),
(12, 'a', 1, '2020-05-01 10:10:00', '2020-05-01 11:11:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `miejsce`
--
ALTER TABLE `miejsce`
  ADD PRIMARY KEY (`id_miejsce`);

--
-- Индексы таблицы `osoba`
--
ALTER TABLE `osoba`
  ADD PRIMARY KEY (`id_osoba`);

--
-- Индексы таблицы `wyposazenie`
--
ALTER TABLE `wyposazenie`
  ADD PRIMARY KEY (`id_wyp`);

--
-- Индексы таблицы `zamowenie`
--
ALTER TABLE `zamowenie`
  ADD PRIMARY KEY (`id_zam`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `miejsce`
--
ALTER TABLE `miejsce`
  MODIFY `id_miejsce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `osoba`
--
ALTER TABLE `osoba`
  MODIFY `id_osoba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `wyposazenie`
--
ALTER TABLE `wyposazenie`
  MODIFY `id_wyp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `zamowenie`
--
ALTER TABLE `zamowenie`
  MODIFY `id_zam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
