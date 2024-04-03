-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 03 2024 г., 10:32
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `auto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `login` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `login`, `password`, `images`) VALUES
(125489, 'admin', 'root', 'https://on-desktop.com/wps/2017Auto___Ford___GT_Yellow_sports_car_Ford_GT_114988_.jpg'),
(156468, 'sidorovich', '4d68qd46', 'https://avtorinok.ru/cache/photo/pics/jaguar/xf/46521-gthumb-gwdata1200-ghdata1000-gfitdatamax.jpg'),
(179852, 'ivanovich', '46qd84d6', 'https://carsinvasion.com/gallery/2015-chevrolet-ss/2015-chevrolet-ss-05.jpg'),
(655594, 'petrovich', '216c4884', 'https://masyamba.ru/ягуар-машина/49-ягуар-машина-фото.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `учет автотранспорта`
--

CREATE TABLE `учет автотранспорта` (
  `Номер автомобиля` varchar(256) NOT NULL,
  `Марка/модель` varchar(256) NOT NULL,
  `Год выпуска` varchar(256) NOT NULL,
  `Пробег` varchar(256) NOT NULL,
  `Дата последнего технического обслуживания` varchar(256) NOT NULL,
  `Затраты на обслуживание` varchar(256) NOT NULL,
  `Сроки страхования` varchar(256) NOT NULL,
  `Расходы на топливо` varchar(256) NOT NULL,
  `Дата последнего ремонта` varchar(256) NOT NULL,
  `Состояние автомобиля` varchar(256) NOT NULL,
  `Предыдущие владельцы` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `учет автотранспорта`
--

INSERT INTO `учет автотранспорта` (`Номер автомобиля`, `Марка/модель`, `Год выпуска`, `Пробег`, `Дата последнего технического обслуживания`, `Затраты на обслуживание`, `Сроки страхования`, `Расходы на топливо`, `Дата последнего ремонта`, `Состояние автомобиля`, `Предыдущие владельцы`) VALUES
('И489КР', 'Kia Rio', '2019', '4000 км', '01.07.2023', '3 500руб.', '01.08.2023 - 01.08.2024', '4 000руб.', 'Отсутствует', 'Отличное', 'Иванов П.П.'),
('М158ЛО', 'Toyota Camry', '2018', '5500 км', '01.03.2023', '5 000руб.', '01.04.2023 - 01.04.2024', '2 500руб.', '15.02.2023', 'Отличное', 'Петров И.И.'),
('С598МА', 'Volkswagen Polo', '2016', '8000 км', '15.05.2023', '4 000руб.', '01.06.2023 - 01.06.2024', '3 000руб.', '01.04.2023', 'Хорошее', 'Сидоров А.А.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `учет автотранспорта`
--
ALTER TABLE `учет автотранспорта`
  ADD PRIMARY KEY (`Номер автомобиля`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=655596;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
