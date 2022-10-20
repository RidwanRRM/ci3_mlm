-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 08:35 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci3_mlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_login`
--

CREATE TABLE `m_login` (
  `id_users` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `member_id` varchar(9) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `parent` int(11) NOT NULL,
  `bonus` varchar(255) NOT NULL,
  `status` varchar(30) DEFAULT 'Active',
  `lup` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_login`
--

INSERT INTO `m_login` (`id_users`, `username`, `member_id`, `password`, `nama`, `level`, `parent`, `bonus`, `status`, `lup`) VALUES
(1, 'admin', '', '25d55ad283aa400af464c76d713c07ad', 'ADMINISTRATOR', '0', 0, '', 'Active', '2022-10-17 14:56:15'),
(18, 'user1', 'DBDEPMB2', '81dc9bdb52d04dc20036dbd8313ed055', 'User 1', '1', 1, '2.5', 'Active', '2022-10-20 16:06:58'),
(19, 'user2', 'J4V3P6VQ', '81dc9bdb52d04dc20036dbd8313ed055', 'User 2', '1', 1, '2.5', 'Active', '2022-10-20 16:10:43'),
(20, 'user3', '07ZQNA8K', '81dc9bdb52d04dc20036dbd8313ed055', 'User 3', '1', 1, '1.5', 'Active', '2022-10-20 15:36:22'),
(21, 'user1_1', 'DC37PL55', '81dc9bdb52d04dc20036dbd8313ed055', 'User 1-1', '2', 18, '3', 'Active', '2022-10-20 14:53:14'),
(24, 'user4', 'FT53SJXW', '81dc9bdb52d04dc20036dbd8313ed055', 'User 4', '1', 1, '0', 'Active', '2022-10-20 14:53:38'),
(25, 'user1_1_1', 'KUKXAKI3', '81dc9bdb52d04dc20036dbd8313ed055', 'User 1-1-1', '3', 21, '0', 'Active', '2022-10-20 15:26:29'),
(26, 'user1_1_2', 'GTTWHTEH', '81dc9bdb52d04dc20036dbd8313ed055', 'User 1-1-2', '3', 21, '0', 'Active', '2022-10-20 15:26:35'),
(27, 'user1_1_3', '7YQ0XBBQ', '81dc9bdb52d04dc20036dbd8313ed055', 'User 1-1-3', '3', 21, '', 'Active', '2022-10-19 16:06:15'),
(28, 'user2_1', 'IO1Y7M0P', '81dc9bdb52d04dc20036dbd8313ed055', 'User 2-1', '2', 19, '0', 'Active', '2022-10-20 14:53:43'),
(29, 'user2_2', 'EKWSSQBZ', '81dc9bdb52d04dc20036dbd8313ed055', 'User 2-2', '2', 19, '1', 'Active', '2022-10-20 15:26:20'),
(30, 'user2_2_1', 'OQWA38SO', '81dc9bdb52d04dc20036dbd8313ed055', 'User 2-2-1', '3', 29, '', 'Active', '2022-10-19 16:09:09'),
(31, 'user3_1', 'NMR7BU8K', '81dc9bdb52d04dc20036dbd8313ed055', 'User 3-1', '2', 20, '1', 'Active', '2022-10-20 15:26:24'),
(32, 'user3_1_1', '0GM8J9SM', '81dc9bdb52d04dc20036dbd8313ed055', 'User 3-1-1', '3', 31, '2', 'Active', '2022-10-20 15:26:45'),
(33, 'user3_1_1_1', 'SP08XSNC', '81dc9bdb52d04dc20036dbd8313ed055', 'User 3-1-1-1', '4', 32, '', 'Active', '2022-10-19 16:11:37'),
(34, 'user3_1_1_2', 'M-DQ529VJ', '81dc9bdb52d04dc20036dbd8313ed055', 'User 3-1-1-2', '4', 32, '', 'Active', '2022-10-19 16:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('5ttsjv77uib6b7dv2ae55rmdvf79i81f', '::1', 1666288026, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238383030363b637372665f746f6b656e7c733a34303a2263373761633765386630666136363861646235306232643339336461663732336666343430373865223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('6e9sot2r5cuo7uagu775rb9buhc9neqc', '::1', 1666281808, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238313830383b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('7f00emusie55cv99huib0mpgbojjel1d', '::1', 1666284188, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238343138383b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('7jp71ivpvg4lacc0h2gf5hag47i8bum4', '::1', 1666278719, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363237383731393b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d666c6173687c733a34323a22426f6e7573203c7374726f6e673e626572686173696c3c2f7374726f6e673e20646920686974756e6721223b5f5f63695f766172737c613a313a7b733a353a22666c617368223b733a333a226f6c64223b7d),
('7t4u52uig2s1u0m0ek8ltcl8bcnj89pb', '::1', 1666286712, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238363731323b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('890hettdpktlgn8gjniq8hs15fen9rph', '::1', 1666280420, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238303432303b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d666c6173687c733a34323a22426f6e7573203c7374726f6e673e626572686173696c3c2f7374726f6e673e20646920686974756e6721223b5f5f63695f766172737c613a313a7b733a353a22666c617368223b733a333a226f6c64223b7d),
('ait6tns10v63do20djo6t1k0f13ojcun', '::1', 1666283088, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238333038383b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('b46qngvm9uj2imi84fatgfr0colse2c9', '::1', 1666286210, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238363231303b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('buh6sk6mefb4gev3tvf0uju5q3h8b4mm', '::1', 1666282220, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238323232303b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('c4kqjhi1sh8ibbitaol4uu76h1bl9vvf', '::1', 1666287032, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238373033323b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('d78afsbsso5dc81vjhrk1m9l8mo4f6lc', '::1', 1666290775, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363239303535393b637372665f746f6b656e7c733a34303a2235313532656664386430626333383665336365623839643665646438613839373662343632663533223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('e3r628io94othn1fc5h1ukgldoqobta9', '::1', 1666285506, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238353530363b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('ea6eirufgs4ggk96shptckm2dpqdbo90', '::1', 1666290556, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363239303535363b637372665f746f6b656e7c733a34303a2231373036393338303935613438653661343232616664326265323564353964643031633831346264223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a227573657232223b733a343a226e616d61223b733a363a22557365722032223b733a353a226c6576656c223b733a313a2231223b733a383a2269645f7573657273223b733a323a223139223b733a363a22706172656e74223b733a313a2231223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('evuhacrrqg58pgo09uha9444iu8nkhir', '::1', 1666284526, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238343532363b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('gr3u8dbv64b0runhcqvavlfnbtjsl999', '::1', 1666279801, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363237393830313b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('ifea53vlga4jgg0nojj0pp0uplb9bv87', '::1', 1666290108, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363239303130383b637372665f746f6b656e7c733a34303a2231373036393338303935613438653661343232616664326265323564353964643031633831346264223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a227573657232223b733a343a226e616d61223b733a363a22557365722032223b733a353a226c6576656c223b733a313a2231223b733a383a2269645f7573657273223b733a323a223139223b733a363a22706172656e74223b733a313a2231223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('k37hco9nvf13aqjugahnquu8p41b2cuk', '::1', 1666284827, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238343832373b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('kctfh5ie8rclj45u6ga0bq34a0o5et88', '::1', 1666285184, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238353138343b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('kkr7cm5pr8crrftkp4cvs8eb2md0u0kr', '::1', 1666282684, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238323638343b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('l2k5u76dc8irs25t4dc1v77p2pojqg2t', '::1', 1666283748, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238333734383b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('m7hrn4vblb1r7c3tr3dce9dkv9hgcsc7', '::1', 1666287343, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238373334333b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d666c6173687c733a33393a2244617461203c7374726f6e673e626572686173696c3c2f7374726f6e673e206469686170757321223b5f5f63695f766172737c613a313a7b733a353a22666c617368223b733a333a226e6577223b7d),
('m953cpto109md3fgefbfav7qkd8hnmjq', '::1', 1666280109, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238303130393b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('m9gdniu40360a8mji7glsut9ia481164', '::1', 1666285891, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238353839313b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('mo74g8jd96akrken9gdngogjs7365rt7', '::1', 1666280770, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238303737303b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d666c6173687c733a34323a22426f6e7573203c7374726f6e673e626572686173696c3c2f7374726f6e673e20646920686974756e6721223b5f5f63695f766172737c613a313a7b733a353a22666c617368223b733a333a226f6c64223b7d),
('mu35nk9pq6qgvb90tr0fun8vtt6pdk3b', '::1', 1666283425, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238333432353b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('n2nu8qt8dsaa963ghppe82erjphe089t', '::1', 1666279038, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363237393033383b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('nau4ep8e95lmhs7tm2unhs99005omcec', '::1', 1666281077, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238313037373b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('r3htnvmlq077jecksv02fco9ip46lcng', '::1', 1666281464, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238313436343b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('sr3n3ba6k84eke3q13bnammkrkkln8ba', '::1', 1666279398, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363237393339383b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('trlnr7akfvmunghcs2hrk0q1q1qcirjb', '::1', 1666289669, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238393636393b637372665f746f6b656e7c733a34303a2231373036393338303935613438653661343232616664326265323564353964643031633831346264223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a227573657232223b733a343a226e616d61223b733a363a22557365722032223b733a353a226c6576656c223b733a313a2231223b733a383a2269645f7573657273223b733a323a223139223b733a363a22706172656e74223b733a313a2231223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d),
('v92j0u733v5ls1lvaojlpaaiobghpni6', '::1', 1666287688, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363238373638383b637372665f746f6b656e7c733a34303a2239393264643934393234653138353435643066656265386637613337356666663965346335653065223b6c6f676765645f696e7c613a373a7b733a383a22757365726e616d65223b733a353a2261646d696e223b733a343a226e616d61223b733a31333a2241444d494e4953545241544f52223b733a353a226c6576656c223b733a313a2230223b733a383a2269645f7573657273223b733a313a2231223b733a363a22706172656e74223b733a313a2230223b733a353a22746168756e223b4e3b733a363a22737461747573223b733a363a22416374697665223b7d);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_login`
--
ALTER TABLE `m_login`
  ADD PRIMARY KEY (`id_users`) USING BTREE;

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `ci_sessions_timestamp` (`timestamp`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_login`
--
ALTER TABLE `m_login`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
