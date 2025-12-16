-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 18 2024 г., 21:32
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `notepaddb`
--

CREATE DATABASE IF NOT EXISTS `notepaddb` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE notepaddb;

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text_crop` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `userId`, `title`, `text_crop`, `text`) VALUES
(2, 3, 'Дневник. День 2', 'Но постоянное информационно-пропагандистское обеспечение нашей деятельности однозначно фиксирует нео...', 'Но постоянное информационно-пропагандистское обеспечение нашей деятельности однозначно фиксирует необходимость своевременного выполнения сверхзадачи. А также некоторые особенности внутренней политики, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. В рамках спецификации современных стандартов, реплицированные с зарубежных источников, современные исследования набирают популярность среди определенных слоев населения, а значит, должны быть разоблачены. Наше дело не так однозначно, как может показаться: существующая теория предоставляет широкие возможности для соответствующих условий активизации. Господа, высококачественный прототип будущего проекта предоставляет широкие возможности для вывода текущих активов. В своём стремлении повысить качество жизни, они забывают, что перспективное планирование создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса системы обучения кадров, соответствующей насущным потребностям.'),
(3, 1, ' ^*$#Err&^*%_#*%*^&^*)(404$*^&%*^#@%$%$', 'Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake...', 'Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! Wake up, Neo!!! '),
(4, 3, 'Крутяк', 'Ништяк!!!', 'Ништяк!!!'),
(5,2, 'Test','test123','test123');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Surname`, `name`, `login`, `password`) VALUES
(1, 'Чернуха', 'Александр', 'Greenrider1337', 'root1234'),
(2, 'Мамедов', 'Ярослав', 'root', '1234'),
(3, 'Чарьянц', 'Нина', 'Dxrkness', '1234'),
(4, 'Попов', 'Иван', 'DDD_2024', '1234');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
