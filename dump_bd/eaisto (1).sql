-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 19 2016 г., 06:50
-- Версия сервера: 5.7.11
-- Версия PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eaisto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `card_price` varchar(5) NOT NULL,
  `payment_period` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `id_user`, `card_price`, `payment_period`) VALUES
(3, 'fa3333', '133', ''),
(4, 'f4444', '133', '2week'),
(5, 'FA7777', '200', '2week');

-- --------------------------------------------------------

--
-- Структура таблицы `dkp`
--

CREATE TABLE `dkp` (
  `id` int(11) NOT NULL,
  `make` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `vin` varchar(17) NOT NULL,
  `engine` varchar(20) NOT NULL,
  `shasi_num` varchar(17) NOT NULL DEFAULT '0',
  `body_num` varchar(17) NOT NULL,
  `year` varchar(4) NOT NULL,
  `type` varchar(20) NOT NULL,
  `reg_num` varchar(10) NOT NULL,
  `num_srts` varchar(25) NOT NULL,
  `serie_srts` varchar(7) NOT NULL,
  `srts_giving_date` varchar(20) NOT NULL,
  `strs_who_gave` varchar(60) NOT NULL,
  `num_pts` varchar(20) NOT NULL,
  `serie_pts` varchar(7) NOT NULL,
  `pts_giving_date` varchar(20) NOT NULL,
  `pts_who_gave` varchar(60) NOT NULL,
  `sellerFio` varchar(30) DEFAULT NULL,
  `sellerDocumentSeries` varchar(30) DEFAULT NULL,
  `sellerDocumentNumber` varchar(30) DEFAULT NULL,
  `sellerDocumentDate` varchar(30) DEFAULT NULL,
  `sellerDocumentOrganization` varchar(30) DEFAULT NULL,
  `sellerAddress` varchar(30) DEFAULT NULL,
  `sellerTrusteeFio` varchar(30) DEFAULT NULL,
  `sellerTrusteeDocumentSeries` varchar(30) DEFAULT NULL,
  `sellerTrusteeDocumentNumber` varchar(30) DEFAULT NULL,
  `sellerTrusteeDocumentDate` varchar(30) DEFAULT NULL,
  `sellerTrusteeDocumentOrganization` varchar(30) DEFAULT NULL,
  `sellerTrusteeAddress` varchar(100) DEFAULT NULL,
  `sellerTrusteeWarrantSeries` varchar(30) DEFAULT NULL,
  `sellerTrusteeWarrantNumber` varchar(30) DEFAULT NULL,
  `sellerTrusteeWarrantDate` varchar(30) DEFAULT NULL,
  `sellerTrusteeWarrantOrganization` varchar(30) DEFAULT NULL,
  `buyerFio` varchar(30) DEFAULT NULL,
  `buyerDocumentSeries` varchar(30) DEFAULT NULL,
  `buyerDocumentNumber` varchar(30) DEFAULT NULL,
  `buyerDocumentDate` varchar(30) DEFAULT NULL,
  `buyerDocumentOrganization` varchar(30) DEFAULT NULL,
  `buyerAddress` varchar(30) DEFAULT NULL,
  `buyerTrusteeFio` varchar(30) DEFAULT NULL,
  `buyerTrusteeDocumentNumber` varchar(30) DEFAULT NULL,
  `buyerTrusteeDocumentSeries` varchar(30) DEFAULT NULL,
  `buyerTrusteeDocumentDate` varchar(30) DEFAULT NULL,
  `buyerTrusteeDocumentOrganization` varchar(30) DEFAULT NULL,
  `buyerTrusteeAddress` varchar(30) DEFAULT NULL,
  `buyerTrusteeWarrantNumber` varchar(30) DEFAULT NULL,
  `buyerTrusteeWarrantSeries` varchar(30) DEFAULT NULL,
  `buyerTrusteeWarrantDate` varchar(30) DEFAULT NULL,
  `buyerTrusteeWarrantOrganization` varchar(30) DEFAULT NULL,
  `carPrice` varchar(30) DEFAULT NULL,
  `attorneyFio` varchar(30) DEFAULT NULL,
  `attorneyFioRP` varchar(30) DEFAULT NULL,
  `attorneyCompany` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `documentDate` varchar(30) DEFAULT NULL,
  `attorneyAddress` varchar(30) DEFAULT NULL,
  `agentPrice` varchar(30) DEFAULT NULL,
  `login` varchar(30) NOT NULL,
  `billed` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dkp`
--

INSERT INTO `dkp` (`id`, `make`, `model`, `color`, `vin`, `engine`, `shasi_num`, `body_num`, `year`, `type`, `reg_num`, `num_srts`, `serie_srts`, `srts_giving_date`, `strs_who_gave`, `num_pts`, `serie_pts`, `pts_giving_date`, `pts_who_gave`, `sellerFio`, `sellerDocumentSeries`, `sellerDocumentNumber`, `sellerDocumentDate`, `sellerDocumentOrganization`, `sellerAddress`, `sellerTrusteeFio`, `sellerTrusteeDocumentSeries`, `sellerTrusteeDocumentNumber`, `sellerTrusteeDocumentDate`, `sellerTrusteeDocumentOrganization`, `sellerTrusteeAddress`, `sellerTrusteeWarrantSeries`, `sellerTrusteeWarrantNumber`, `sellerTrusteeWarrantDate`, `sellerTrusteeWarrantOrganization`, `buyerFio`, `buyerDocumentSeries`, `buyerDocumentNumber`, `buyerDocumentDate`, `buyerDocumentOrganization`, `buyerAddress`, `buyerTrusteeFio`, `buyerTrusteeDocumentNumber`, `buyerTrusteeDocumentSeries`, `buyerTrusteeDocumentDate`, `buyerTrusteeDocumentOrganization`, `buyerTrusteeAddress`, `buyerTrusteeWarrantNumber`, `buyerTrusteeWarrantSeries`, `buyerTrusteeWarrantDate`, `buyerTrusteeWarrantOrganization`, `carPrice`, `attorneyFio`, `attorneyFioRP`, `attorneyCompany`, `city`, `documentDate`, `attorneyAddress`, `agentPrice`, `login`, `billed`) VALUES
(1, 'FORD', 'FOCUS', 'СЕРЫЙ', '12345678901234567', '', '', '', '1994', 'Легковое', 'н889нх178', '123123123', '1231', '18.10.2016', 'Гибдд', '1232131231', '0510', '18.10.2016', 'гибдд', 'Самойлов Игорь Михайлович', '1231', '123123', '18.10.2016', 'уфмс', 'дом', '', '', '', '18.10.2016', '', '', '', '', '18.10.2016', '', 'Прокопенко Иван Иваныч', '12321', '123123', '18.10.2016', '123123', 'дом', '', '', '', '18.10.2016', '', '', '', '', '18.10.2016', '', '100000', 'Наебнико Прохвост Емельяныч', 'Наебнико Прохвоста Емельяныча', 'Интересная', 'Москва', '21.10.2016', 'адресный', '100', 'FA2222', 0),
(2, 'FORD', 'MONDEO', 'СЕРЫЙ', '12345678901234567', '', '', '', '1994', 'Грузовое', 'н889нх178', '123123123', '1231', '18.10.2016', 'Гибдд', '1232131231', '0510', '18.10.2016', 'гибдд', 'Самойлов Игорь Михайлович', '1231', '123123', '18.10.2016', 'уфмс', 'дом', '', '', '', '18.10.2016', '', '', '', '', '18.10.2016', '', 'Прокопенко Иван Иваныч', '12321', '123123', '18.10.2016', '123123', 'дом', '', '', '', '18.10.2016', '', '', '', '', '18.10.2016', '', '100000', 'Наебнико Прохвост Емельяныч', 'Наебнико Прохвоста Емельяныча', 'Интересная', 'Москва', '18.10.2016', 'адресный', '100', 'fa3333', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `operators`
--

CREATE TABLE `operators` (
  `id_operator` int(11) NOT NULL,
  `site` varchar(30) DEFAULT NULL,
  `post_index` int(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `street` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `reestr_num` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT '0',
  `query_type` int(1) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `status_date` varchar(50) DEFAULT NULL,
  `comment` varchar(100) NOT NULL,
  `login` varchar(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `payments`
--

INSERT INTO `payments` (`id`, `date`, `amount`, `quantity`, `query_type`, `status`, `status_date`, `comment`, `login`) VALUES
(7, '18.10.2016', 134, 1, 1, 1, NULL, 'комментарий', 'fa3333'),
(9, '18.10.2016', 134, 1, 1, 0, NULL, 'комментарий', 'fa3333'),
(21, '19.10.2016', 200, 1, 1, 1, NULL, 'no', 'FA2222'),
(25, '19.10.2016', 200, 1, 0, 0, NULL, 'no', 'FA2222');

-- --------------------------------------------------------

--
-- Структура таблицы `referals`
--

CREATE TABLE `referals` (
  `id` int(11) NOT NULL,
  `id_agent` varchar(30) NOT NULL,
  `id_referal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `referals`
--

INSERT INTO `referals` (`id`, `id_agent`, `id_referal`) VALUES
(1, 'FA2222', 'fa3333'),
(4, 'fa3333', 'f4444'),
(5, 'FA2222', 'fa5555'),
(6, 'fa5555', 'fa6666'),
(7, 'fa3333', 'FA7777');

-- --------------------------------------------------------

--
-- Структура таблицы `sides`
--

CREATE TABLE `sides` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass_serie` varchar(6) NOT NULL,
  `pass_num` varchar(10) NOT NULL,
  `giving_date` date NOT NULL,
  `who_gave` varchar(120) NOT NULL,
  `registration` varchar(150) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `contract_number` int(11) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `tel` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `laws` int(1) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `site` varchar(100) DEFAULT NULL,
  `card_price` int(5) NOT NULL,
  `disabled` int(1) NOT NULL DEFAULT '0',
  `count` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `contract_number`, `name`, `surname`, `fname`, `tel`, `mail`, `laws`, `date`, `create_date`, `site`, `card_price`, `disabled`, `count`) VALUES
(1, 'FA2222', 'a6752a10c5ac90b24e629fcf5d1c850f0257cdbb698cd9228a8b516c3dd8cd40fc17eadcd2a5c5947020afc139be1fcee28d590796576ac627f3f75af4d889d1', 75145, 'Александр', 'Попов', 'Михайлович', '+7 (000) 000-00-00', 'psdfksdlkfasldf@mail.ru', 0, '2016-10-19', '2016-10-12 23:05:48', NULL, 133, 0, 0),
(2, 'fa3333', '432804507600aff1093dd83b3b45d743fa741de6aa5c3913a5dd0279915613a654bd145b335054e5675caf3b68c5762e5163db41829ea7ee9417b72adfc365c6', NULL, 'Nikita', '', NULL, '', '', 0, '2016-10-18', '2016-10-12 23:05:48', NULL, 134, 0, 0),
(3, 'fa5555', 'a6752a10c5ac90b24e629fcf5d1c850f0257cdbb698cd9228a8b516c3dd8cd40fc17eadcd2a5c5947020afc139be1fcee28d590796576ac627f3f75af4d889d1', NULL, 'KOLYA', 'Vikin', NULL, '', 'mail@mail.com', 0, NULL, '2016-10-15 23:20:44', NULL, 140, 0, 0),
(4, 'f4444', 'a6752a10c5ac90b24e629fcf5d1c850f0257cdbb698cd9228a8b516c3dd8cd40fc17eadcd2a5c5947020afc139be1fcee28d590796576ac627f3f75af4d889d1', NULL, 'IGOR', 'Vikin', NULL, '', 'mail@mail.com', 0, NULL, '2016-10-15 23:20:44', NULL, 150, 0, 0),
(5, 'FA7777', '589e641d832dbd8ba427a8339c7c6324b515459c949b4c89a9a849ac7e32ad9e1829bc74b962008d36e1289196474f552757d9e0cda02759a2e5dadb66648420', NULL, 'Olga', 'Kolesnikova', NULL, '', 'mail.mas@aksl.to', 0, NULL, '2016-10-15 15:34:31', NULL, 160, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dkp`
--
ALTER TABLE `dkp`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id_operator`);

--
-- Индексы таблицы `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `referals`
--
ALTER TABLE `referals`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sides`
--
ALTER TABLE `sides`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `dkp`
--
ALTER TABLE `dkp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `operators`
--
ALTER TABLE `operators`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `referals`
--
ALTER TABLE `referals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `sides`
--
ALTER TABLE `sides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
