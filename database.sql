-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2022-10-10 06:02:48
-- 服务器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `fit3047 team 105`
--

-- --------------------------------------------------------

--
-- 表的结构 `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `appointment_description` text DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `appointments`
--

INSERT INTO `appointments` (`id`, `appointment_description`, `client_id`, `company_id`, `date`, `address`) VALUES
(14, 'asdfad', 6, 131, '2022-11-06 00:00:00', '1'),
(12938, 'asdf', 6, 131, '2022-10-06 07:52:02', 'adsgasdg'),
(12959, '', 6, 131, '2022-10-11 09:49:55', ''),
(12960, '', 6, 131, '2022-10-18 01:50:09', ''),
(12961, '', 6, 131, '2022-10-12 23:55:51', ''),
(12962, '', 6, 131, '2022-10-13 13:56:06', '');

-- --------------------------------------------------------

--
-- 表的结构 `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `contactno` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `required_documents` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `clients`
--

INSERT INTO `clients` (`id`, `firstname`, `lastname`, `contactno`, `address`, `email`, `required_documents`, `user_id`) VALUES
(6, 'Mariane', 'Handerson', '0412345678', 'Street:  44 Springhill Bottom Road\r\nCity:  Acacia Hills\r\nState/province/area:   Tasmania\r\nZip code  7306\r\nCountry  Australia', 'mariane22@gmail.com', 'Authority for agents', 10);

-- --------------------------------------------------------

--
-- 表的结构 `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `contactno` text NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `contactno`, `client_id`) VALUES
(131, 'Mariane Pty Ltd', 'Street:  44 Springhill Bottom Road\r\nCity:  Acacia Hills\r\nState/province/area:   Tasmania\r\nZip code  7306\r\nCountry  Australia', '0273647589', 6);

-- --------------------------------------------------------

--
-- 表的结构 `conversations`
--

CREATE TABLE `conversations` (
  `id` int(11) NOT NULL,
  `conversation_description` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Keep all conversations with clients';

--
-- 转存表中的数据 `conversations`
--

INSERT INTO `conversations` (`id`, `conversation_description`, `client_id`) VALUES
(1, 'asd', 6);

-- --------------------------------------------------------

--
-- 表的结构 `conversationtypes`
--

CREATE TABLE `conversationtypes` (
  `id` int(11) NOT NULL,
  `contype_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Types for conversation';

-- --------------------------------------------------------

--
-- 表的结构 `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `doctype` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `docfile` varchar(255) NOT NULL,
  `doc_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `documents`
--

INSERT INTO `documents` (`id`, `doctype`, `client_id`, `docfile`, `doc_date`) VALUES
(12, 'Client Engagement Agreement', 6, 'phpcs.xml', '0000-00-00'),
(13, 'Client Engagement Agreement', 6, 'phpstan.neon', '0000-00-00'),
(14, 'Client Engagement Agreement', 6, 'login.html', '0000-00-00'),
(15, 'Authority for Agency', 6, 'phpstan.neon', '0000-00-00'),
(16, 'Client Engagement Agreement', 6, '.gitignore', '0000-00-00'),
(17, 'Client Engagement Agreement', 6, 'index.php', '0000-00-00'),
(18, 'Option3', 6, 'login.html', '0000-00-00');

-- --------------------------------------------------------

--
-- 表的结构 `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `staff_firstname` int(11) NOT NULL,
  `staff_lastname` int(11) NOT NULL,
  `staff_contactno` int(11) NOT NULL,
  `staff_address` int(11) NOT NULL,
  `staff_email` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `role` text NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `role`, `client_id`, `username`, `password`) VALUES
(10, 'Mariane', 'Handerson', 'regular', NULL, 'Mariane', '$2y$10$YPXR5dgvve/QBExdnLsay.PhLy/rtNQhmu.eDmyYukb.3SN9Nag8i'),
(11, 'Leslie', 'Horland', 'admin', NULL, 'Leslie', '$2y$10$bcvgOplK34Rwm279LAd/d.ODL6XmzoaGfHzooV25F.fUjsl3A9F3W'),
(12, 'Lacey', 'Lacey', 'admin', NULL, 'Lacey', '$2y$10$U6CDWWQKDCixW32/8Cb.kOmjl3Z/D1EncYCdEbbEHGc4DtiMYqjAe'),
(15, 'ha', 'asf', 'regular', NULL, 'test', '$2y$10$/ys00YsXSKD/tl9a5L4WE.Gizet1elUPCY1e.MLiKW.tDrp8g.t/m');

--
-- 转储表的索引
--

--
-- 表的索引 `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`,`company_id`),
  ADD KEY `company_id` (`company_id`);

--
-- 表的索引 `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_user_id_fk` (`user_id`);

--
-- 表的索引 `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- 表的索引 `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- 表的索引 `conversationtypes`
--
ALTER TABLE `conversationtypes`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- 表的索引 `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USERS_CLIENTS` (`client_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12963;

--
-- 使用表AUTO_INCREMENT `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;

--
-- 使用表AUTO_INCREMENT `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- 使用表AUTO_INCREMENT `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `conversationtypes`
--
ALTER TABLE `conversationtypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用表AUTO_INCREMENT `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 限制导出的表
--

--
-- 限制表 `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- 限制表 `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- 限制表 `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- 限制表 `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- 限制表 `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
