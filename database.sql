-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2022-09-08 16:54:21
-- 服务器版本： 5.7.39
-- PHP 版本： 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `u22s2105_team_105`
--

-- --------------------------------------------------------

--
-- 表的结构 `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `appointment_description` text,
  `client_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `appointments`
--

INSERT INTO `appointments` (`id`, `appointment_description`, `client_id`, `company_id`, `date`, `address`) VALUES
(5, 'To visit', 7, 131, '2022-09-14', 'gjgjhgjhgjhgjhg');

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
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `clients`
--

INSERT INTO `clients` (`id`, `firstname`, `lastname`, `contactno`, `address`, `email`, `required_documents`, `payment`) VALUES
(6, 'Mariane', 'Mariane', '0267384756', 'Street:  44 Springhill Bottom Road\r\nCity:  Acacia Hills\r\nState/province/area:   Tasmania\r\nZip code  7306\r\nCountry  Australia', 'aslkdj@gmail.com', 'asdlkfj', 123514),
(7, 'Mary', 'khkhkj', '11313', 'whkjwqhkjeqweeqk;lkqw;ekqw', 'mary.jabbarzadh@monash.edu', 'hgjhgjhgj.erjwhgrjhewrgjwe', 112000);

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
(131, 'Mariane Pty Ltd', 'Street:  44 Springhill Bottom Road\r\nCity:  Acacia Hills\r\nState/province/area:   Tasmania\r\nZip code  7306\r\nCountry  Australia', '0273647589', 6),
(132, 'jkhkjhkj', 'hiuiu', '4354353', 7);

-- --------------------------------------------------------

--
-- 表的结构 `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `doctype` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `docfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `documents`
--

INSERT INTO `documents` (`id`, `doctype`, `client_id`, `docfile`) VALUES
(4, 'Option3', 6, 'Screen Shot 2022-09-08 at 1.57.00 pm.png'),
(5, 'Option3', 7, 'Screen Shot 2022-09-08 at 1.57.00 pm.png');

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
(10, 'Mariane', 'Mariane', 'regular', NULL, 'Mariane', '$2y$10$YPXR5dgvve/QBExdnLsay.PhLy/rtNQhmu.eDmyYukb.3SN9Nag8i'),
(11, 'Leslie', 'Leslie', 'admin', NULL, 'Leslie', '$2y$10$bcvgOplK34Rwm279LAd/d.ODL6XmzoaGfHzooV25F.fUjsl3A9F3W'),
(12, 'Lacey', 'Lacey', 'admin', NULL, 'Lacey', '$2y$10$U6CDWWQKDCixW32/8Cb.kOmjl3Z/D1EncYCdEbbEHGc4DtiMYqjAe');

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
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- 表的索引 `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- 使用表AUTO_INCREMENT `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- 限制表 `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

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
