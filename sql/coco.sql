-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-06-27 11:59:08
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `網設專題`
--

-- --------------------------------------------------------

--
-- 資料表結構 `coco`
--

CREATE TABLE `coco` (
  `id` varchar(4) NOT NULL,
  `品名` varchar(50) NOT NULL,
  `總熱量` int(5) NOT NULL,
  `價格` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `coco`
--

INSERT INTO `coco` (`id`, `品名`, `總熱量`, `價格`) VALUES
('A101', '茉莉綠茶', 195, 30),
('A102', '四季春青茶', 117, 30),
('A103', '莊園紅茶', 119, 30),
('A104', '雲朵奶蓋紅', 330, 45),
('A105', '雲朵奶蓋綠', 366, 45),
('A106', '蜜香凍紅茶', 270, 40),
('A107', '蜜香凍綠茶', 294, 40),
('A108', '蜜香凍青茶', 294, 40),
('A201', '綠豆沙', 539, 50),
('A202', '芒果冰沙', 455, 50),
('A203', '芒果歐蕾', 383, 60),
('A204', '綠豆沙牛奶', 435, 65),
('A301', '百香綠茶', 279, 35),
('A302', '鮮檸檬紅茶', 227, 40),
('A303', '鮮檸檬綠茶', 227, 40),
('A304', '鮮檸檬青茶', 227, 40),
('A305', '芒果綠茶', 279, 40),
('A306', '檸檬冬瓜露', 279, 40),
('A307', '蕎麥冬瓜露', 208, 45),
('A308', '蜜香檸凍紅', 384, 45),
('A309', '蜜香檸凍綠', 409, 45),
('A310', '蜜香檸凍青', 433, 45),
('A311', '蜜香檸凍冬', 451, 45),
('A312', '百香雙響炮', 487, 55),
('A313', '冬瓜西谷米', 325, 40),
('A314', '檸檬養樂多', 409, 55),
('A315', '檸檬霸', 396, 55),
('A316', '鮮榨蘋果百', 357, 55),
('A317', '鮮香橙冰茶', 420, 60),
('A318', '星空葡萄', 478, 75),
('A401', '阿薩姆奶茶', 448, 35),
('A402', '珍珠奶茶', 616, 45),
('A403', '西谷米奶茶', 565, 45),
('A404', '布丁奶茶', 526, 45),
('A405', '奶茶三兄弟', 526, 50),
('A501', '英式鮮奶茶', 220, 50),
('A502', '珍珠鮮奶茶', 565, 65),
('A601', '美式咖啡', 43, 45),
('A602', '拿鐵咖啡', 159, 55),
('A603', '珍珠拿鐵咖', 291, 60);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `coco`
--
ALTER TABLE `coco`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
