-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 29 2022 г., 21:47
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aist-royal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `register-form`
--

CREATE TABLE `register-form` (
  `id` int UNSIGNED NOT NULL,
  `count` int NOT NULL,
  `baby-group` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int UNSIGNED NOT NULL,
  `avtor` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `avtor`, `comment`) VALUES
(1, 'Maria Sofarova', '                                I want to express my gratitude to you once again! You have\r\n                                a wonderful kindergarten and an amazing teaching staff!\r\n                                Ilyasik has such positive changes, the whole family can\'t stop admiring you all!'),
(2, 'Irina Maksimova', '                                My daughter Maryam started going to Stork Academy every day for 3 months.\r\n                                My original goal was at least adapted to understand the command in Russian,\r\n                                but how happy I was even now at home.'),
(3, 'Anna Bobrenko', '                                I think that for children who go to English-speaking kindergartens, the Russian-speaking\r\n                                winter camp in Aist\r\n                                is a great opportunity to keep their 2nd language. The center is located in its own\r\n                                separate villa with a good area');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `register-form`
--
ALTER TABLE `register-form`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `register-form`
--
ALTER TABLE `register-form`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
