-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 05:24 AM
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
-- Table structure for table `caseconfirmed`
--

CREATE TABLE `caseconfirmed` (
  `case_id` varchar(7) NOT NULL,
  `province` int(10) NOT NULL,
  `city` int(10) DEFAULT NULL,
  `groupinfected` varchar(5) NOT NULL,
  `confirmed` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caseconfirmed`
--

INSERT INTO `caseconfirmed` (`case_id`, `province`, `city`, `groupinfected`, `confirmed`) VALUES
('1000001', 1, 0, 'TRUE', 139),
('1000002', 1, 0, 'TRUE', 119),
('1000003', 1, 0, 'TRUE', 95),
('1000004', 1, 0, 'TRUE', 43),
('1000005', 1, 0, 'TRUE', 43),
('1000006', 1, 0, 'TRUE', 41),
('1000007', 1, 0, 'TRUE', 36),
('1000008', 1, 0, 'TRUE', 17),
('1000009', 1, 0, 'TRUE', 25),
('1000010', 1, 0, 'TRUE', 30),
('1000011', 1, 0, 'TRUE', 14),
('1000012', 1, 0, 'TRUE', 13),
('1000013', 1, 0, 'TRUE', 10),
('1000014', 1, 0, 'TRUE', 7),
('1000015', 1, 0, 'TRUE', 7),
('1000016', 1, 0, 'TRUE', 5),
('1000017', 1, 0, 'TRUE', 7),
('1000018', 1, 0, 'TRUE', 6),
('1000019', 1, 0, 'TRUE', 1),
('1000020', 1, 0, 'TRUE', 6),
('1000021', 1, 0, 'TRUE', 8),
('1000022', 1, 0, 'TRUE', 5),
('1000023', 1, 0, 'TRUE', 13),
('1000024', 1, 0, 'TRUE', 3),
('1000025', 1, 0, 'TRUE', 1),
('1000026', 1, 0, 'TRUE', 3),
('1000027', 1, 0, 'TRUE', 5),
('1000028', 1, 0, 'TRUE', 1),
('1000029', 1, 0, 'TRUE', 4),
('1000030', 1, 0, 'TRUE', 0),
('1000031', 1, 0, 'TRUE', 4),
('1000032', 1, 0, 'TRUE', 3),
('1000033', 1, 0, 'TRUE', 2),
('1000034', 1, 0, 'TRUE', 1),
('1000035', 1, 0, 'TRUE', 3),
('1000036', 1, 0, 'FALSE', 298),
('1000037', 1, 0, 'FALSE', 162),
('1000038', 1, 0, 'FALSE', 100),
('1100001', 2, 0, 'TRUE', 39),
('1100002', 2, 0, 'TRUE', 12),
('1100003', 2, 0, 'TRUE', 5),
('1100004', 2, 0, 'TRUE', 6),
('1100005', 2, 0, 'TRUE', 4),
('1100006', 2, 0, 'TRUE', 4),
('1100007', 2, 0, 'TRUE', 1),
('1100008', 2, 0, 'FALSE', 36),
('1100009', 2, 0, 'FALSE', 19),
('1100010', 2, 0, 'FALSE', 30),
('1200001', 3, 0, 'TRUE', 4511),
('1200002', 3, 0, 'TRUE', 196),
('1200003', 3, 0, 'TRUE', 124),
('1200004', 3, 0, 'TRUE', 101),
('1200005', 3, 0, 'TRUE', 39),
('1200006', 3, 0, 'TRUE', 2),
('1200007', 3, 0, 'TRUE', 2),
('1200008', 3, 0, 'FALSE', 41),
('1200009', 3, 0, 'FALSE', 917),
('1200010', 3, 0, 'FALSE', 747),
('1300001', 4, 0, 'TRUE', 5),
('1300002', 4, 0, 'TRUE', 9),
('1300003', 4, 0, 'FALSE', 23),
('1300004', 4, 0, 'FALSE', 5),
('1300005', 4, 0, 'FALSE', 1),
('1400001', 5, 0, 'TRUE', 53),
('1400002', 5, 0, 'TRUE', 42),
('1400003', 5, 0, 'TRUE', 20),
('1400004', 5, 0, 'TRUE', 2),
('1400005', 5, 0, 'FALSE', 68),
('1400006', 5, 0, 'FALSE', 6),
('1400007', 5, 0, 'FALSE', 11),
('1500001', 6, 0, 'TRUE', 55),
('1500002', 6, 0, 'TRUE', 13),
('1500003', 6, 0, 'TRUE', 7),
('1500004', 6, 0, 'TRUE', 4),
('1500005', 6, 0, 'TRUE', 3),
('1500006', 6, 0, 'TRUE', 2),
('1500007', 6, 0, 'TRUE', 2),
('1500008', 6, 0, 'FALSE', 15),
('1500009', 6, 0, 'FALSE', 15),
('1500010', 6, 0, 'FALSE', 15),
('1600001', 7, 0, 'TRUE', 16),
('1600002', 7, 0, 'FALSE', 25),
('1600003', 7, 0, 'FALSE', 3),
('1600004', 7, 0, 'FALSE', 7),
('1700001', 8, 0, 'TRUE', 31),
('1700002', 8, 0, 'TRUE', 8),
('1700003', 8, 0, 'TRUE', 1),
('1700004', 8, 0, 'FALSE', 5),
('1700005', 8, 0, 'FALSE', 3),
('1700006', 8, 0, 'FALSE', 1),
('2000001', 9, 0, 'TRUE', 67),
('2000002', 9, 0, 'TRUE', 67),
('2000003', 9, 0, 'TRUE', 59),
('2000004', 9, 0, 'TRUE', 58),
('2000005', 9, 0, 'TRUE', 50),
('2000006', 9, 0, 'TRUE', 50),
('2000007', 9, 0, 'TRUE', 29),
('2000008', 9, 0, 'TRUE', 28),
('2000009', 9, 0, 'TRUE', 25),
('2000010', 9, 0, 'TRUE', 22),
('2000011', 9, 0, 'TRUE', 22),
('2000012', 9, 0, 'TRUE', 15),
('2000013', 9, 0, 'TRUE', 17),
('2000014', 9, 0, 'TRUE', 10),
('2000015', 9, 0, 'TRUE', 7),
('2000016', 9, 0, 'TRUE', 6),
('2000017', 9, 0, 'TRUE', 6),
('2000018', 9, 0, 'TRUE', 5),
('2000019', 9, 0, 'TRUE', 5),
('2000020', 9, 0, 'FALSE', 305),
('2000021', 9, 0, 'FALSE', 63),
('2000022', 9, 0, 'FALSE', 84),
('3000001', 10, 0, 'TRUE', 17),
('3000002', 10, 0, 'TRUE', 10),
('3000003', 10, 0, 'TRUE', 4),
('3000004', 10, 0, 'TRUE', 4),
('3000005', 10, 0, 'TRUE', 4),
('3000006', 10, 0, 'FALSE', 16),
('3000007', 10, 0, 'FALSE', 0),
('3000008', 10, 0, 'FALSE', 7),
('4000001', 11, 0, 'TRUE', 11),
('4000002', 11, 0, 'TRUE', 9),
('4000003', 11, 0, 'TRUE', 2),
('4000004', 11, 0, 'TRUE', 6),
('4000005', 11, 0, 'FALSE', 13),
('4000006', 11, 0, 'FALSE', 8),
('4000007', 11, 0, 'FALSE', 11),
('4100001', 12, 0, 'TRUE', 103),
('4100002', 12, 0, 'TRUE', 10),
('4100003', 12, 0, 'TRUE', 9),
('4100004', 12, 0, 'TRUE', 3),
('4100005', 12, 0, 'TRUE', 3),
('4100006', 12, 0, 'FALSE', 16),
('4100007', 12, 0, 'FALSE', 2),
('4100008', 12, 0, 'FALSE', 12),
('5000001', 13, 0, 'TRUE', 2),
('5000002', 13, 0, 'TRUE', 3),
('5000003', 13, 0, 'TRUE', 1),
('5000004', 13, 0, 'FALSE', 12),
('5000005', 13, 0, 'FALSE', 5),
('5100001', 14, 0, 'TRUE', 2),
('5100002', 14, 0, 'TRUE', 1),
('5100003', 14, 0, 'FALSE', 14),
('5100004', 14, 0, 'FALSE', 4),
('5100005', 14, 0, 'FALSE', 4),
('6000001', 15, 0, 'TRUE', 566),
('6000002', 15, 0, 'TRUE', 119),
('6000003', 15, 0, 'TRUE', 68),
('6000004', 15, 0, 'TRUE', 66),
('6000005', 15, 0, 'TRUE', 41),
('6000006', 15, 0, 'TRUE', 40),
('6000007', 15, 0, 'TRUE', 36),
('6000008', 15, 0, 'TRUE', 17),
('6000009', 15, 0, 'TRUE', 16),
('6000010', 15, 0, 'TRUE', 10),
('6000011', 15, 0, 'FALSE', 22),
('6000012', 15, 0, 'FALSE', 190),
('6000013', 15, 0, 'FALSE', 133),
('6100001', 16, 0, 'TRUE', 32),
('6100002', 16, 0, 'TRUE', 10),
('6100003', 16, 0, 'TRUE', 9),
('6100004', 16, 0, 'TRUE', 8),
('6100005', 16, 0, 'TRUE', 7),
('6100006', 16, 0, 'TRUE', 7),
('6100007', 16, 0, 'TRUE', 3),
('6100008', 16, 0, 'TRUE', 2),
('6100009', 16, 0, 'TRUE', 2),
('6100010', 16, 0, 'FALSE', 26),
('6100011', 16, 0, 'FALSE', 6),
('6100012', 16, 0, 'FALSE', 20),
('7000001', 17, 0, 'FALSE', 14),
('7000002', 17, 0, 'FALSE', 0),
('7000003', 17, 0, 'FALSE', 4),
('7000004', 17, 0, 'TRUE', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caseconfirmed`
--
ALTER TABLE `caseconfirmed`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `province` (`province`),
  ADD KEY `city` (`city`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `caseconfirmed`
--
ALTER TABLE `caseconfirmed`
  ADD CONSTRAINT `fk_city_case` FOREIGN KEY (`city`) REFERENCES `city` (`idCity`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_province_case` FOREIGN KEY (`province`) REFERENCES `province` (`idProvince`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
