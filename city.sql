-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 01:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19_korsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `idCity` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `idProvince` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`idCity`, `city`, `idProvince`) VALUES
(0, 'Tidak Diketahui', 0),
(1, 'Gangnam-gu', 1),
(2, 'Gangdong-gu', 1),
(3, 'Gangbuk-gu', 1),
(4, 'Gangseo-gu', 1),
(5, 'Gwanak-gu', 1),
(6, 'Gwangjin-gu', 1),
(7, 'Guro-gu', 1),
(8, 'Geumcheon-gu', 1),
(9, 'Nowon-gu', 1),
(10, 'Dobong-gu', 1),
(11, 'Dongdaemun-gu', 1),
(12, 'Dongjak-gu', 1),
(13, 'Mapo-gu', 1),
(14, 'Seodaemun-gu', 1),
(15, 'Seocho-gu', 1),
(16, 'Seongdong-gu', 1),
(17, 'Seongbuk-gu', 1),
(18, 'Songpa-gu', 1),
(19, 'Yangcheon-gu', 1),
(20, 'Yeongdeungpo-gu', 1),
(21, 'Yongsan-gu', 1),
(22, 'Eunpyeong-gu', 1),
(23, 'Jongno-gu', 1),
(24, 'Jung-gu', 1),
(25, 'Jungnang-gu', 1),
(26, 'Gangseo-gu', 2),
(27, 'Geumjeong-gu', 2),
(28, 'Gijang-gun', 2),
(29, 'Nam-gu', 2),
(30, 'Dong-gu', 2),
(31, 'Dongnae-gu', 2),
(32, 'Busanjin-gu', 2),
(33, 'Buk-gu', 2),
(34, 'Sasang-gu', 2),
(35, 'Saha-gu', 2),
(36, 'Seo-gu', 2),
(37, 'Suyeong-gu', 2),
(38, 'Yeonje-gu', 2),
(39, 'Yeongdo-gu', 2),
(40, 'Jung-gu', 2),
(41, 'Haeundae-gu', 2),
(42, 'Nam-gu', 3),
(43, 'Dalseo-gu', 3),
(44, 'Dalseong-gun', 3),
(45, 'Dong-gu', 3),
(46, 'Buk-gu', 3),
(47, 'Seo-gu', 3),
(48, 'Suseong-gu', 3),
(49, 'Jung-gu', 3),
(50, 'Gwangsan-gu', 4),
(51, 'Nam-gu', 4),
(52, 'Dong-gu', 4),
(53, 'Buk-gu', 4),
(54, 'Seo-gu', 4),
(55, 'Ganghwa-gun', 5),
(56, 'Gyeyang-gu', 5),
(57, 'Michuhol-gu', 5),
(58, 'Namdong-gu', 5),
(59, 'Dong-gu', 5),
(60, 'Bupyeong-gu', 5),
(61, 'Seo-gu', 5),
(62, 'Yeonsu-gu', 5),
(63, 'Ongjin-gun', 5),
(64, 'Jung-gu', 5),
(65, 'Daedeok-gu', 6),
(66, 'Dong-gu', 6),
(67, 'Seo-gu', 6),
(68, 'Yuseong-gu', 6),
(69, 'Jung-gu', 6),
(70, 'Nam-gu', 7),
(71, 'Dong-gu', 7),
(72, 'Buk-gu', 7),
(73, 'Ulju-gun', 7),
(74, 'Jung-gu', 7),
(75, 'Sejong', 8),
(76, 'Gapyeong-gun', 9),
(77, 'Goyang-si', 9),
(78, 'Gwacheon-si', 9),
(79, 'Gwangmyeong-si', 9),
(80, 'Gwangju-si', 9),
(81, 'Guri-si', 9),
(82, 'Gunpo-si', 9),
(83, 'Gimpo-si', 9),
(84, 'Namyangju-si', 9),
(85, 'Dongducheon-si', 9),
(86, 'Bucheon-si', 9),
(87, 'Seongnam-si', 9),
(88, 'Suwon-si', 9),
(89, 'Siheung-si', 9),
(90, 'Ansan-si', 9),
(91, 'Anseong-si', 9),
(92, 'Anyang-si', 9),
(93, 'Yangju-si', 9),
(94, 'Yangpyeong-gun', 9),
(95, 'Yeoju-si', 9),
(96, 'Yeoncheon-gun', 9),
(97, 'Osan-si', 9),
(98, 'Yongin-si', 9),
(99, 'Uiwang-si', 9),
(100, 'Uijeongbu-si', 9),
(101, 'Icheon-si', 9),
(102, 'Paju-si', 9),
(103, 'Pyeongtaek-si', 9),
(104, 'Pocheon-si', 9),
(105, 'Hanam-si', 9),
(106, 'Hwaseong-si', 9),
(107, 'Gangneung-si', 10),
(108, 'Goseong-gun', 10),
(109, 'Donghae-si', 10),
(110, 'Samcheok-si', 10),
(111, 'Sokcho-si', 10),
(112, 'Yanggu-gun', 10),
(113, 'Yangyang-gun', 10),
(114, 'Yeongwol-gun', 10),
(115, 'Wonju-si', 10),
(116, 'Inje-gun', 10),
(117, 'Jeongseon-gun', 10),
(118, 'Cheorwon-gun', 10),
(119, 'Chuncheon-si', 10),
(120, 'Taebaek-si', 10),
(121, 'Pyeongchang-gun', 10),
(122, 'Hongcheon-gun', 10),
(123, 'Hwacheon-gun', 10),
(124, 'Hoengseong-gun', 10),
(125, 'Goesan-gun', 11),
(126, 'Danyang-gun', 11),
(127, 'Boeun-gun', 11),
(128, 'Yeongdong-gun', 11),
(129, 'Okcheon-gun', 11),
(130, 'Eumseong-gun', 11),
(131, 'Jecheon-si', 11),
(132, 'Jeungpyeong-gun', 11),
(133, 'Jincheon-gun', 11),
(134, 'Cheongju-si', 11),
(135, 'Chungju-si', 11),
(136, 'Gyeryong-si', 12),
(137, 'Gongju-si', 12),
(138, 'Geumsan-gun', 12),
(139, 'Nonsan-si', 12),
(140, 'Dangjin-si', 12),
(141, 'Boryeong-si', 12),
(142, 'Buyeo-gun', 12),
(143, 'Seosan-si', 12),
(144, 'Seocheon-gun', 12),
(145, 'Asan-si', 12),
(146, 'Yesan-gun', 12),
(147, 'Cheonan-si', 12),
(148, 'Cheongyang-gun', 12),
(149, 'Taean-gun', 12),
(150, 'Hongseong-gun', 12),
(151, 'Gochang-gun', 13),
(152, 'Gunsan-si', 13),
(153, 'Gimje-si', 13),
(154, 'Namwon-si', 13),
(155, 'Muju-gun', 13),
(156, 'Buan-gun', 13),
(157, 'Sunchang-gun', 13),
(158, 'Wanju-gun', 13),
(159, 'Iksan-si', 13),
(160, 'Imsil-gun', 13),
(161, 'Jangsu-gun', 13),
(162, 'Jeonju-si', 13),
(163, 'Jeongeup-si', 13),
(164, 'Jinan-gun', 13),
(165, 'Gangjin-gun', 14),
(166, 'Goheung-gun', 14),
(167, 'Gokseong-gun', 14),
(168, 'Gwangyang-si', 14),
(169, 'Gurye-gun', 14),
(170, 'Naju-si', 14),
(171, 'Damyang-gun', 14),
(172, 'Mokpo-si', 14),
(173, 'Muan-gun', 14),
(174, 'Boseong-gun', 14),
(175, 'Suncheon-si', 14),
(176, 'Sinan-gun', 14),
(177, 'Yeosu-si', 14),
(178, 'Yeonggwang-gun', 14),
(179, 'Yeongam-gun', 14),
(180, 'Wando-gun', 14),
(181, 'Jangseong-gun', 14),
(182, 'Jangheung-gun', 14),
(183, 'Jindo-gun', 14),
(184, 'Hampyeong-gun', 14),
(185, 'Haenam-gun', 14),
(186, 'Hwasun-gun', 14),
(187, 'Gyeongsan-si', 15),
(188, 'Gyeongju-si', 15),
(189, 'Goryeong-gun', 15),
(190, 'Gumi-si', 15),
(191, 'Gunwi-gun', 15),
(192, 'Gimcheon-si', 15),
(193, 'Mungyeong-si', 15),
(194, 'Bonghwa-gun', 15),
(195, 'Sangju-si', 15),
(196, 'Seongju-gun', 15),
(197, 'Andong-si', 15),
(198, 'Yeongdeok-gun', 15),
(199, 'Yeongyang-gun', 15),
(200, 'Yeongju-si', 15),
(201, 'Yeongcheon-si', 15),
(202, 'Yecheon-gun', 15),
(203, 'Ulleung-gun', 15),
(204, 'Uljin-gun', 15),
(205, 'Uiseong-gun', 15),
(206, 'Cheongdo-gun', 15),
(207, 'Cheongsong-gun', 15),
(208, 'Chilgok-gun', 15),
(209, 'Pohang-si', 15),
(210, 'Geoje-si', 16),
(211, 'Geochang-gun', 16),
(212, 'Goseong-gun', 16),
(213, 'Gimhae-si', 16),
(214, 'Namhae-gun', 16),
(215, 'Miryang-si', 16),
(216, 'Sacheon-si', 16),
(217, 'Sancheong-gun', 16),
(218, 'Yangsan-si', 16),
(219, 'Uiryeong-gun', 16),
(220, 'Jinju-si', 16),
(221, 'Changnyeong-gun', 16),
(222, 'Changwon-si', 16),
(223, 'Tongyeong-si', 16),
(224, 'Hadong-gun', 16),
(225, 'Haman-gun', 16),
(226, 'Hamyang-gun', 16),
(227, 'Hapcheon-gun', 16),
(228, 'Jeju-do', 17),
(229, 'Yangpyeong-si', 0),
(230, 'Dalsung-gun', 0),
(231, 'Kyeongsan-si', 0),
(232, 'Icheon-dong', 0),
(233, 'Sankyeock-dong', 0),
(234, 'etc', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`idCity`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;