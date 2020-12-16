-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 01:53 AM
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
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `idProvince` int(10) NOT NULL,
  `province` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`idProvince`, `province`) VALUES
(0, 'Tidak Diketahui'),
(1, 'Seoul'),
(2, 'Busan'),
(3, 'Daegu'),
(4, 'Gwangju'),
(5, 'Incheon'),
(6, 'Daejeon'),
(7, 'Ulsan'),
(8, 'Sejong'),
(9, 'Gyeonggi-do'),
(10, 'Gangwon-do'),
(11, 'Chungcheongbuk-do'),
(12, 'Chungcheongnam-do'),
(13, 'Jeollabuk-do'),
(14, 'Jeollanam-do'),
(15, 'Gyeongsangbuk-do'),
(16, 'Gyeongsangnam-do'),
(17, 'Jeju-do');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`idProvince`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
