-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-07-13 15:30:41
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `zs`
--

-- --------------------------------------------------------

--
-- 資料表結構 `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `acc` varchar(30) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `ctime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `article`
--

INSERT INTO `article` (`article_id`, `acc`, `title`, `content`, `ctime`) VALUES
(1, 'abc', '測試', '測試測試測試測試測試測試測試', '2023-07-10 09:57:30'),
(2, 'abc', '測試2', '測試測試測試測試測試測試測試2', '2023-07-10 10:05:15'),
(3, 'abc', '測試3', '測試3測試3測試3測試3測試3測試3', '2023-07-10 12:06:39'),
(4, 'abc', '測試4', '測試4測試4測試4測試4測試4測試4', '2023-07-10 12:23:13');

-- --------------------------------------------------------

--
-- 資料表結構 `article_reply`
--

CREATE TABLE `article_reply` (
  `article_id` int(11) NOT NULL,
  `acc` varchar(30) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `ctime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `article_reply`
--

INSERT INTO `article_reply` (`article_id`, `acc`, `content`, `ctime`) VALUES
(2, 'abc', '回覆2回覆2回覆2回覆2回覆2', '2023-07-10 12:56:38'),
(2, 'zs1', 'admin回覆', '2023-07-10 12:59:44'),
(2, 'abc', '你好', '2023-07-11 00:05:53');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_img` varchar(50) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_img`, `num`) VALUES
(1, '隨身硬碟4TB', 3000, 'harddisk.jpg', 0),
(2, '手機', 10000, 'phone.jpg', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `acc` varchar(30) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `prio` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`acc`, `pass`, `prio`) VALUES
('zs1', 'pass1', 0),
('abc', '54321', 1),
('go', 'gogo', 2);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
