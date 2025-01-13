-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2025 at 03:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprog_final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `warp_history`
--

CREATE TABLE `warp_history` (
  `version` text NOT NULL,
  `phase1Slot1` text NOT NULL,
  `phase1Slot2` text DEFAULT NULL,
  `phase1Slot3` text DEFAULT NULL,
  `phase1Slot4` text DEFAULT NULL,
  `phase2Slot1` text NOT NULL,
  `phase2Slot2` text DEFAULT NULL,
  `phase2Slot3` text DEFAULT NULL,
  `phase2Slot4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warp_history`
--

INSERT INTO `warp_history` (`version`, `phase1Slot1`, `phase1Slot2`, `phase1Slot3`, `phase1Slot4`, `phase2Slot1`, `phase2Slot2`, `phase2Slot3`, `phase2Slot4`) VALUES
('1.0', 'Images/Seele.png', 'x', 'x', 'x', 'Images/Jing Yuan.png', 'x', 'x', 'x'),
('1.1', 'Images/Silver Wolf.png', 'x', 'x', 'x', 'Images/Luocha.png', 'x', 'x', 'x'),
('1.2', 'Images/Blade.png', 'x', 'x', 'x', 'Images/Kafka.png', 'x', 'x', 'x'),
('1.3', 'Images/Dan Heng IL.png', 'x', 'x', 'x', 'Images/Fu Xuan.png', 'x', 'x', 'x'),
('1.4', 'Images/Jingliu.png', 'x', 'x', 'x', 'Images/Topaz.png', 'Images/Seele.png', 'x', 'x'),
('1.5', 'Images/Huohuo.png', 'x', 'x', 'x', 'Images/Argenti.png', 'Images/Silver Wolf.png', 'x', 'x'),
('1.6', 'Images/Ruan Mei.png', 'Images/Blade.png', 'x', 'x', 'Images/Dr Ratio.png', 'Images/Kafka.png', 'x', 'x'),
('2.0', 'Images/Black Swan.png', 'Images/Dan Heng IL.png', 'x', 'x', 'Images/Sparkle.png', 'Images/Jing Yuan.png', 'x', 'x'),
('2.1', 'Images/Acheron.png', 'Images/Luocha.png', 'x', 'x', 'Images/Aventurine.png', 'Images/Jingliu.png', 'x', 'x'),
('2.2', 'Images/Robin.png', 'Images/Topaz.png', 'x', 'x', 'Images/Boothill.png', 'Images/Fu Xuan.png', 'x', 'x'),
('2.3', 'Images/Firefly.png', 'Images/Ruan Mei.png', 'x', 'x', 'Images/Jade.png', 'Images/Argenti.png', 'x', 'x'),
('2.4', 'Images/Yunli.png', 'Images/Huohuo.png', 'x', 'x', 'Images/Jiaoqiu.png', 'Images/Sparkle.png', 'x', 'x'),
('2.5', 'Images/Feixiao.png', 'Images/Kafka.png', 'Images/Black Swan.png', 'Images/Robin.png', 'Images/Lingsha.png', 'Images/Topaz.png', 'x', 'x'),
('2.6', 'Images/Rappa.png', 'Images/Dan Heng IL.png', 'x', 'x', 'Images/Acheron.png', 'Images/Aventurine.png', 'x', 'x');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
