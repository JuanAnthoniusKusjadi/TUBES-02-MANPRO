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
-- Table structure for table `caseinfection`
--

CREATE TABLE `caseinfection` (
  `case_id` varchar(7) NOT NULL,
  `infection_case` varchar(100) NOT NULL,
  `latitude` decimal(25,5) NOT NULL,
  `longitude` decimal(25,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caseinfection`
--

INSERT INTO `caseinfection` (`case_id`, `infection_case`, `latitude`, `longitude`) VALUES
('1000001', 'Itaewon Clubs', '37.53862', '126.99265'),
('1000002', 'Richway', '37.48208', '126.90138'),
('1000003', 'Guro-gu Call Center', '37.50816', '126.88439'),
('1000004', 'Yangcheon Table Tennis Club', '37.54606', '126.87421'),
('1000005', 'Day Care Center', '37.67942', '127.04437'),
('1000006', 'Manmin Central Church', '37.48106', '126.89434'),
('1000007', 'SMR Newly Planted Churches Group', '0.00000', '0.00000'),
('1000008', 'Dongan Church', '37.59289', '127.05677'),
('1000009', 'Coupang Logistics Center', '0.00000', '0.00000'),
('1000010', 'Wangsung Church', '37.48174', '126.93012'),
('1000011', 'Eunpyeong St. Mary\'s Hospital', '37.63369', '126.91650'),
('1000012', 'Seongdong-gu APT', '37.55713', '127.04030'),
('1000013', 'Jongno Community Center', '37.57681', '127.00600'),
('1000014', 'Samsung Medical Center', '37.48825', '127.08559'),
('1000015', 'Jung-gu Fashion Company', '37.56241', '126.98438'),
('1000016', 'Yeonana News Class', '37.55815', '126.94380'),
('1000017', 'Korea Campus Crusade of Christ', '37.59478', '126.96802'),
('1000018', 'Gangnam Yeoksam-dong gathering', '0.00000', '0.00000'),
('1000019', 'Daejeon door-to-door sales', '0.00000', '0.00000'),
('1000020', 'Geumcheon-gu rice milling machine manufacture', '0.00000', '0.00000'),
('1000021', 'Shincheonji Church', '0.00000', '0.00000'),
('1000022', 'Guri Collective Infection', '0.00000', '0.00000'),
('1000023', 'KB Life Insurance', '37.56090', '126.96700'),
('1000024', 'Yeongdeungpo Learning Institute', '37.52085', '126.93128'),
('1000025', 'Gangnam Dongin Church', '37.52233', '127.05739'),
('1000026', 'Biblical Language study meeting', '37.52462', '126.84312'),
('1000027', 'Seocho Family', '0.00000', '0.00000'),
('1000028', 'Anyang Gunpo Pastors Group', '0.00000', '0.00000'),
('1000029', 'Samsung Fire & Marine Insurance', '37.49828', '127.03014'),
('1000030', 'SJ Investment Call Center', '37.55965', '126.83510'),
('1000031', 'Yongin Brothers', '0.00000', '0.00000'),
('1000032', 'Seoul City Hall Station safety worker', '37.56570', '126.97708'),
('1000033', 'Uiwang Logistics Center', '0.00000', '0.00000'),
('1000034', 'Orange Life', '0.00000', '0.00000'),
('1000035', 'Daezayeon Korea', '37.48684', '126.89316'),
('1000036', 'overseas inflow', '0.00000', '0.00000'),
('1000037', 'contact with patient', '0.00000', '0.00000'),
('1000038', 'etc', '0.00000', '0.00000'),
('1100001', 'Onchun Church', '35.21628', '129.07710'),
('1100002', 'Shincheonji Church', '0.00000', '0.00000'),
('1100003', 'Suyeong-gu Kindergarten', '35.16708', '129.11240'),
('1100004', 'Haeundae-gu Catholic Church', '35.20599', '129.12560'),
('1100005', 'Jin-gu Academy', '35.17371', '129.06330'),
('1100006', 'Itaewon Clubs', '0.00000', '0.00000'),
('1100007', 'Cheongdo Daenam Hospital', '0.00000', '0.00000'),
('1100008', 'overseas inflow', '0.00000', '0.00000'),
('1100009', 'contact with patient', '0.00000', '0.00000'),
('1100010', 'etc', '0.00000', '0.00000'),
('1200001', 'Shincheonji Church', '35.84008', '128.56670'),
('1200002', 'Second Mi-Ju Hospital', '35.85738', '128.46665'),
('1200003', 'Hansarang Convalescent Hospital', '35.88559', '128.55665'),
('1200004', 'Daesil Convalescent Hospital', '35.85739', '128.46665'),
('1200005', 'Fatima Hospital', '35.88395', '128.62406'),
('1200006', 'Itaewon Clubs', '0.00000', '0.00000'),
('1200007', 'Cheongdo Daenam Hospital', '0.00000', '0.00000'),
('1200008', 'overseas inflow', '0.00000', '0.00000'),
('1200009', 'contact with patient', '0.00000', '0.00000'),
('1200010', 'etc', '0.00000', '0.00000'),
('1300001', 'Gwangneuksa Temple', '35.13604', '126.95641'),
('1300002', 'Shincheonji Church', '0.00000', '0.00000'),
('1300003', 'overseas inflow', '0.00000', '0.00000'),
('1300004', 'contact with patient', '0.00000', '0.00000'),
('1300005', 'etc', '0.00000', '0.00000'),
('1400001', 'Itaewon Clubs', '0.00000', '0.00000'),
('1400002', 'Coupang Logistics Center', '0.00000', '0.00000'),
('1400003', 'Guro-gu Call Center', '0.00000', '0.00000'),
('1400004', 'Shincheonji Church', '0.00000', '0.00000'),
('1400005', 'overseas inflow', '0.00000', '0.00000'),
('1400006', 'contact with patient', '0.00000', '0.00000'),
('1400007', 'etc', '0.00000', '0.00000'),
('1500001', 'Door-to-door sales in Daejeon', '0.00000', '0.00000'),
('1500002', 'Dunsan Electronics Town', '36.34010', '127.39271'),
('1500003', 'Orange Town', '36.33987', '127.38197'),
('1500004', 'Dreaming Church', '36.34687', '127.36859'),
('1500005', 'Korea Forest Engineer Institute', '36.35812', '127.38886'),
('1500006', 'Shincheonji Church', '0.00000', '0.00000'),
('1500007', 'Seosan-si Laboratory', '0.00000', '0.00000'),
('1500008', 'overseas inflow', '0.00000', '0.00000'),
('1500009', 'contact with patient', '0.00000', '0.00000'),
('1500010', 'etc', '0.00000', '0.00000'),
('1600001', 'Shincheonji Church', '0.00000', '0.00000'),
('1600002', 'overseas inflow', '0.00000', '0.00000'),
('1600003', 'contact with patient', '0.00000', '0.00000'),
('1600004', 'etc', '0.00000', '0.00000'),
('1700001', 'Ministry of Oceans and Fisheries', '36.50471', '127.26517'),
('1700002', 'gym facility in Sejong', '36.48025', '127.28900'),
('1700003', 'Shincheonji Church', '0.00000', '0.00000'),
('1700004', 'overseas inflow', '0.00000', '0.00000'),
('1700005', 'contact with patient', '0.00000', '0.00000'),
('1700006', 'etc', '0.00000', '0.00000'),
('2000001', 'River of Grace Community Church', '37.45569', '127.16163'),
('2000002', 'Coupang Logistics Center', '37.53058', '126.77525'),
('2000003', 'Itaewon Clubs', '0.00000', '0.00000'),
('2000004', 'Richway', '0.00000', '0.00000'),
('2000005', 'Uijeongbu St. Mary’s Hospital', '37.75864', '127.07772'),
('2000006', 'Guro-gu Call Center', '0.00000', '0.00000'),
('2000007', 'Shincheonji Church', '0.00000', '0.00000'),
('2000008', 'Yangcheon Table Tennis Club', '0.00000', '0.00000'),
('2000009', 'SMR Newly Planted Churches Group', '0.00000', '0.00000'),
('2000010', 'Bundang Jesaeng Hospital', '37.38833', '127.12180'),
('2000011', 'Anyang Gunpo Pastors Group', '37.38178', '126.93615'),
('2000012', 'Lotte Confectionery logistics center', '37.28736', '127.01383'),
('2000013', 'Lord Glory Church', '37.40372', '126.95494'),
('2000014', 'Suwon Saeng Myeong Saem Church', '37.23760', '127.05170'),
('2000015', 'Korea Campus Crusade of Christ', '0.00000', '0.00000'),
('2000016', 'Geumcheon-gu rice milling machine manufacture', '0.00000', '0.00000'),
('2000017', 'Wangsung Church', '0.00000', '0.00000'),
('2000018', 'Seoul City Hall Station safety worker', '0.00000', '0.00000'),
('2000019', 'Seongnam neighbors gathering', '0.00000', '0.00000'),
('2000020', 'overseas inflow', '0.00000', '0.00000'),
('2000021', 'contact with patient', '0.00000', '0.00000'),
('2000022', 'etc', '0.00000', '0.00000'),
('3000001', 'Shincheonji Church', '0.00000', '0.00000'),
('3000002', 'Uijeongbu St. Mary’s Hospital', '0.00000', '0.00000'),
('3000003', 'Wonju-si Apartments', '37.34276', '127.98382'),
('3000004', 'Richway', '0.00000', '0.00000'),
('3000005', 'Geumcheon-gu rice milling machine manufacture', '0.00000', '0.00000'),
('3000006', 'overseas inflow', '0.00000', '0.00000'),
('3000007', 'contact with patient', '0.00000', '0.00000'),
('3000008', 'etc', '0.00000', '0.00000'),
('4000001', 'Goesan-gun Jangyeon-myeon', '36.82422', '127.95520'),
('4000002', 'Itaewon Clubs', '0.00000', '0.00000'),
('4000003', 'Guro-gu Call Center', '0.00000', '0.00000'),
('4000004', 'Shincheonji Church', '0.00000', '0.00000'),
('4000005', 'overseas inflow', '0.00000', '0.00000'),
('4000006', 'contact with patient', '0.00000', '0.00000'),
('4000007', 'etc', '0.00000', '0.00000'),
('4100001', 'gym facility in Cheonan', '36.81503', '127.11390'),
('4100002', 'Door-to-door sales in Daejeon', '0.00000', '0.00000'),
('4100003', 'Seosan-si Laboratory', '37.00035', '126.35444'),
('4100004', 'Richway', '0.00000', '0.00000'),
('4100005', 'Eunpyeong-Boksagol culture center', '0.00000', '0.00000'),
('4100006', 'overseas inflow', '0.00000', '0.00000'),
('4100007', 'contact with patient', '0.00000', '0.00000'),
('4100008', 'etc', '0.00000', '0.00000'),
('5000001', 'Itaewon Clubs', '0.00000', '0.00000'),
('5000002', 'Door-to-door sales in Daejeon', '0.00000', '0.00000'),
('5000003', 'Shincheonji Church', '0.00000', '0.00000'),
('5000004', 'overseas inflow', '0.00000', '0.00000'),
('5000005', 'etc', '0.00000', '0.00000'),
('5100001', 'Manmin Central Church', '35.07883', '126.31675'),
('5100002', 'Shincheonji Church', '0.00000', '0.00000'),
('5100003', 'overseas inflow', '0.00000', '0.00000'),
('5100004', 'contact with patient', '0.00000', '0.00000'),
('5100005', 'etc', '0.00000', '0.00000'),
('6000001', 'Shincheonji Church', '0.00000', '0.00000'),
('6000002', 'Cheongdo Daenam Hospital', '35.64887', '128.73680'),
('6000003', 'Bonghwa Pureun Nursing Home', '36.92757', '128.90990'),
('6000004', 'Gyeongsan Seorin Nursing Home', '35.78215', '128.80150'),
('6000005', 'Pilgrimage to Israel', '0.00000', '0.00000'),
('6000006', 'Yechun-gun', '36.64685', '128.43742'),
('6000007', 'Milal Shelter', '36.05810', '128.49410'),
('6000008', 'Gyeongsan Jeil Silver Town', '35.84819', '128.76210'),
('6000009', 'Gyeongsan Cham Joeun Community Center', '35.82558', '128.73730'),
('6000010', 'Gumi Elim Church', '0.00000', '0.00000'),
('6000011', 'overseas inflow', '0.00000', '0.00000'),
('6000012', 'contact with patient', '0.00000', '0.00000'),
('6000013', 'etc', '0.00000', '0.00000'),
('6100001', 'Shincheonji Church', '0.00000', '0.00000'),
('6100002', 'Geochang Church', '35.68556', '127.91270'),
('6100003', 'Wings Tower', '35.16485', '128.12697'),
('6100004', 'Geochang-gun Woongyang-myeon', '35.80568', '127.91781'),
('6100005', 'Hanmaeum Changwon Hospital', '35.22115', '128.68660'),
('6100006', 'Changnyeong Coin Karaoke', '35.54127', '128.50080'),
('6100007', 'Soso Seowon', '35.33881', '129.01751'),
('6100008', 'Itaewon Clubs', '0.00000', '0.00000'),
('6100009', 'Onchun Church', '0.00000', '0.00000'),
('6100010', 'overseas inflow', '0.00000', '0.00000'),
('6100011', 'contact with patient', '0.00000', '0.00000'),
('6100012', 'etc', '0.00000', '0.00000'),
('7000001', 'overseas inflow', '0.00000', '0.00000'),
('7000002', 'contact with patient', '0.00000', '0.00000'),
('7000003', 'etc', '0.00000', '0.00000'),
('7000004', 'Itaewon Clubs', '0.00000', '0.00000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caseinfection`
--
ALTER TABLE `caseinfection`
  ADD KEY `case_id` (`case_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `caseinfection`
--
ALTER TABLE `caseinfection`
  ADD CONSTRAINT `fk_case` FOREIGN KEY (`case_id`) REFERENCES `caseconfirmed` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
