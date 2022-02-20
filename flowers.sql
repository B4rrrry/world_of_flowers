-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 20 2022 г., 22:15
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
-- База данных: `flowers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `boquets`
--

CREATE TABLE `boquets` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `isNew` tinyint(1) DEFAULT NULL,
  `isHit` tinyint(1) DEFAULT NULL,
  `lenght` varchar(10) DEFAULT NULL,
  `forWho` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `boquets`
--

INSERT INTO `boquets` (`id`, `name`, `price`, `photo`, `isNew`, `isHit`, `lenght`, `forWho`) VALUES
(1, 'Букет Нежный', 123, '1.png', 1, 1, '35см', 'Девушке'),
(2, 'Букет Хороший', 10000, '2.png', 0, 1, '30см', NULL),
(3, 'Букет Кайфовый', 100500, '3.png', 1, 0, '40см', 'Маме'),
(4, 'Букет Праздничный', 4200, '4.png', 1, 1, '50см', 'Бабушке'),
(5, 'Букет Необычный', 980, '5.png', 0, 0, '45см', 'Сестре'),
(6, 'Букет Красивый', 2190, '6.png', 0, 0, '50см', NULL),
(10, 'Тестовый', 9999, '444-1000x1000.jpg', NULL, NULL, NULL, NULL),
(11, 'Отличный букетище', 10012, '5.png', NULL, NULL, NULL, NULL),
(12, 'Отличный букетище', 10012, '5.png', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `boquet_content`
--

CREATE TABLE `boquet_content` (
  `id` int NOT NULL,
  `boquet` int NOT NULL,
  `flower` int DEFAULT NULL,
  `element` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `boquet_content`
--

INSERT INTO `boquet_content` (`id`, `boquet`, `flower`, `element`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 3, 3),
(4, 1, NULL, 4),
(5, 2, 4, 2),
(6, 2, 3, 3),
(7, 2, 2, 4),
(8, 3, 6, 2),
(9, 3, 2, 4),
(10, 3, 7, 1),
(11, 4, 2, 3),
(12, 4, 5, 4),
(13, 4, 6, 2),
(14, 4, NULL, 1),
(15, 5, 3, 2),
(16, 5, 2, 1),
(17, 5, 1, NULL),
(18, 5, 5, NULL),
(19, 6, 2, 3),
(20, 6, 3, 2),
(21, 6, 4, 1),
(22, 6, 5, 4),
(23, 6, 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `decor_elements`
--

CREATE TABLE `decor_elements` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `decor_elements`
--

INSERT INTO `decor_elements` (`id`, `name`) VALUES
(1, 'Декоративная зелень'),
(2, 'Лента'),
(3, 'Вереск'),
(4, 'Крафт-упаковка');

-- --------------------------------------------------------

--
-- Структура таблицы `flowers`
--

CREATE TABLE `flowers` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `flowers`
--

INSERT INTO `flowers` (`id`, `name`) VALUES
(1, 'Голландские роза'),
(2, 'Хризантема'),
(3, 'Роза красная'),
(4, 'Ромашка'),
(5, 'Красный мак'),
(6, 'Орхидея'),
(7, 'Гвоздика');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `getcart`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `getcart` (
`login` varchar(25)
,`name` varchar(255)
,`price` bigint
,`photo` varchar(255)
,`count` int
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `getfavprods`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `getfavprods` (
`id` int
,`userId` int
,`name` varchar(255)
,`price` int
,`photo` varchar(255)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `getorders`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `getorders` (
`id` int
,`name` varchar(30)
,`phone` varchar(20)
,`email` varchar(255)
,`address` varchar(255)
,`flat` varchar(10)
,`date` date
,`startTime` varchar(10)
,`endTime` varchar(10)
,`isAnonym` varchar(3)
,`recName` varchar(30)
,`recPhone` varchar(20)
,`payment` varchar(30)
,`amount` int
,`userName` varchar(50)
,`status` varchar(25)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `getproductcontent`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `getproductcontent` (
`id` int
,`flower` varchar(255)
,`decor` varchar(255)
);

-- --------------------------------------------------------

--
-- Структура таблицы `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int NOT NULL,
  `client_name` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `newsletter`
--

INSERT INTO `newsletter` (`id`, `client_name`, `email`) VALUES
(1, 'test', 'test@test'),
(2, 'Дмитрий', 'dmitry@mail.ru'),
(3, 'ывпывпвыпывп', 'sdgsdgsdg@dsgsdgs');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `flat` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `startTime` varchar(10) DEFAULT NULL,
  `endTime` varchar(10) DEFAULT NULL,
  `isAnonym` varchar(3) DEFAULT NULL,
  `recName` varchar(30) DEFAULT NULL,
  `recPhone` varchar(20) DEFAULT NULL,
  `payment` varchar(30) DEFAULT NULL,
  `amount` int NOT NULL,
  `userId` int DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `address`, `flat`, `date`, `startTime`, `endTime`, `isAnonym`, `recName`, `recPhone`, `payment`, `amount`, `userId`, `status`) VALUES
(3, 'sdgsdg', 'sdgsdgs', 'sdgsdg', 'sdgsdgddg', 'sdgsg', '2022-02-23', '', '', 'Да', 'sdgsgsg', 'sdgsdgs', 'По карте', 33550, 1, 'Не обработан');

-- --------------------------------------------------------

--
-- Структура таблицы `phone_queries`
--

CREATE TABLE `phone_queries` (
  `id` int NOT NULL,
  `clientName` varchar(25) NOT NULL,
  `clientPhone` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `phone_queries`
--

INSERT INTO `phone_queries` (`id`, `clientName`, `clientPhone`, `date`, `status`) VALUES
(1, 'тнст', 'нварвр', '2022-02-17', 'Обработан'),
(2, '36346ы343впвпып', 'ывпывпывпып', '2022-02-17', 'Не обработан');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(50) NOT NULL,
  `access` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `access`) VALUES
(1, 'customer', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Покупатель', NULL),
(2, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'Администратор', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int NOT NULL,
  `boquet` int NOT NULL,
  `count` int NOT NULL,
  `user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_cart`
--

INSERT INTO `user_cart` (`id`, `boquet`, `count`, `user`) VALUES
(5, 1, 1, 1),
(6, 3, 1, 1),
(7, 3, 1, 1),
(8, 3, 1, 1),
(9, 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user_fav`
--

CREATE TABLE `user_fav` (
  `id` int NOT NULL,
  `user` int NOT NULL,
  `boquet` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура для представления `getcart`
--
DROP TABLE IF EXISTS `getcart`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `getcart` (`login`, `name`, `price`, `photo`, `count`) AS   select `u`.`login` AS `login`,`b`.`name` AS `name`,(`b`.`price` * `uc`.`count`) AS `b.price * uc.count`,`b`.`photo` AS `photo`,`uc`.`count` AS `count` from ((`user_cart` `uc` join `boquets` `b` on((`uc`.`boquet` = `b`.`id`))) join `users` `u` on((`uc`.`user` = `u`.`id`)))  ;

-- --------------------------------------------------------

--
-- Структура для представления `getfavprods`
--
DROP TABLE IF EXISTS `getfavprods`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `getfavprods` (`id`, `userId`, `name`, `price`, `photo`) AS   select `b`.`id` AS `id`,`uf`.`user` AS `user`,`b`.`name` AS `name`,`b`.`price` AS `price`,`b`.`photo` AS `photo` from (`user_fav` `uf` join `boquets` `b` on((`uf`.`boquet` = `b`.`id`)))  ;

-- --------------------------------------------------------

--
-- Структура для представления `getorders`
--
DROP TABLE IF EXISTS `getorders`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `getorders` (`id`, `name`, `phone`, `email`, `address`, `flat`, `date`, `startTime`, `endTime`, `isAnonym`, `recName`, `recPhone`, `payment`, `amount`, `userName`, `status`) AS   select `o`.`id` AS `id`,`o`.`name` AS `name`,`o`.`phone` AS `phone`,`o`.`email` AS `email`,`o`.`address` AS `address`,`o`.`flat` AS `flat`,`o`.`date` AS `date`,`o`.`startTime` AS `startTime`,`o`.`endTime` AS `endTime`,`o`.`isAnonym` AS `isAnonym`,`o`.`recName` AS `recName`,`o`.`recPhone` AS `recPhone`,`o`.`payment` AS `payment`,`o`.`amount` AS `amount`,`u`.`name` AS `name`,`o`.`status` AS `status` from (`orders` `o` join `users` `u` on((`o`.`userId` = `u`.`id`)))  ;

-- --------------------------------------------------------

--
-- Структура для представления `getproductcontent`
--
DROP TABLE IF EXISTS `getproductcontent`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `getproductcontent` (`id`, `flower`, `decor`) AS   select `b`.`id` AS `id`,`f`.`name` AS `name`,`de`.`name` AS `name` from (((`boquet_content` `bc` join `boquets` `b` on((`bc`.`boquet` = `b`.`id`))) join `flowers` `f` on((`bc`.`flower` = `f`.`id`))) join `decor_elements` `de` on((`bc`.`element` = `de`.`id`)))  ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `boquets`
--
ALTER TABLE `boquets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `boquet_content`
--
ALTER TABLE `boquet_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bq` (`boquet`),
  ADD KEY `fk_fl` (`flower`),
  ADD KEY `fk_el` (`element`);

--
-- Индексы таблицы `decor_elements`
--
ALTER TABLE `decor_elements`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`userId`);

--
-- Индексы таблицы `phone_queries`
--
ALTER TABLE `phone_queries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_bq` (`boquet`),
  ADD KEY `fk_cart_user` (`user`);

--
-- Индексы таблицы `user_fav`
--
ALTER TABLE `user_fav`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_fav` (`user`),
  ADD KEY `fk_bq_fav` (`boquet`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `boquets`
--
ALTER TABLE `boquets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `boquet_content`
--
ALTER TABLE `boquet_content`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `decor_elements`
--
ALTER TABLE `decor_elements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `phone_queries`
--
ALTER TABLE `phone_queries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `user_fav`
--
ALTER TABLE `user_fav`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `boquet_content`
--
ALTER TABLE `boquet_content`
  ADD CONSTRAINT `fk_bq` FOREIGN KEY (`boquet`) REFERENCES `boquets` (`id`),
  ADD CONSTRAINT `fk_el` FOREIGN KEY (`element`) REFERENCES `decor_elements` (`id`),
  ADD CONSTRAINT `fk_fl` FOREIGN KEY (`flower`) REFERENCES `flowers` (`id`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_cart`
--
ALTER TABLE `user_cart`
  ADD CONSTRAINT `fk_cart_bq` FOREIGN KEY (`boquet`) REFERENCES `boquets` (`id`),
  ADD CONSTRAINT `fk_cart_user` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_fav`
--
ALTER TABLE `user_fav`
  ADD CONSTRAINT `fk_bq_fav` FOREIGN KEY (`boquet`) REFERENCES `boquets` (`id`),
  ADD CONSTRAINT `fk_user_fav` FOREIGN KEY (`user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
