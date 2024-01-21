-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 08:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newhome`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookid` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `job` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `discuption` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `landid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookid`, `firstname`, `lastname`, `email`, `phone`, `job`, `location`, `discuption`, `status`, `landid`) VALUES
(1, 'mukiza', 'samuelson', 'eric@gmail.com', '0787899075', '', 'muhanga', 'hfgfggfhf', 1, NULL),
(2, 'nzabimana', 'samuelson', 'benjaminwell250@gmail.com', '0787899075', '', 'muhanga', 'gffhhffhfhhg', 1, NULL),
(3, 'nzabimana', 'samuelson', 'benjaminwell250@gmail.com', '0787899075', 'developer', 'muhanga', 'gffhhffhfhhg', 1, NULL),
(4, 'aline', 'niyongira', 'benjaminwell250@gmail.com', '07879696996', 'developer', 'muhanga', 'hghghghhghhhgh', 1, NULL),
(5, 'habiyakare', 'emy', 'amigo@gmail.com', '0787899063', 'developer', 'muhanga', 'hgghghghhghhghghh', 1, NULL),
(6, 'habiyakare', 'emy', 'amigo@gmail.com', '0787899063', 'developer', 'muhanga', 'hgghghghhghhghghh', 1, NULL),
(7, 'habiyakare', 'emy', 'amigo@gmail.com', '0787899063', 'developer', 'muhanga', 'hgghghghhghhghghh', 1, NULL),
(8, 'habiyakare', 'samuelson', 'eric@gmail.com', '0787899075', 'developer', 'kigali', 'hfhhhfhghhgghhg', 1, NULL),
(9, 'aline', 'niyongira', 'benjaminwell250@gmail.com', '07879696996', 'developer', 'muhanga', 'hghghghhghhhgh', 1, NULL),
(10, 'aline', 'niyongira', 'benjaminwell250@gmail.com', '07879696996', 'developer', 'muhanga', 'hghghghhghhhgh', 1, NULL),
(11, 'aline', 'niyongira', 'benjaminwell250@gmail.com', '07879696996', 'developer', 'muhanga', 'hghghghhghhhgh', 1, NULL),
(12, 'karamire', 'emy', 'eric@gmail.com', '0787899063', 'developer', 'kigali', 'hghhghgjgj', 1, NULL),
(13, 'habiyakare', 'samuelson', 'eric@gmail.com', '0787899075', 'developer', 'kigali', 'hfhhhfhghhgghhg', 1, NULL),
(14, 'karamire', 'emy', 'eric@gmail.com', '0787899063', 'developer', 'kigali', 'hghhghgjgj', 1, NULL),
(15, 'karamire', 'emy', 'eric@gmail.com', '0787899063', 'developer', 'kigali', 'hghhghgjgj', NULL, NULL),
(16, 'niyonkuru', 'samuelson', 'niyonkuru@gmail.com', '0787879990', 'developer', 'Gk city', 'hghghhghghggh', NULL, 0),
(17, 'niyonkuru', 'samuelson', 'niyonkuru@gmail.com', '0787879990', 'developer', 'Gk city', 'hghghhghghggh', 1, 89),
(18, 'mukiza', 'samuelson', 'mukizasamuelson@gmail.com', '0790253029', 'surveyor', 'nyamirambo', 'hfhghgjgjgjg', 1, 96),
(19, 'mukiza', 'samuelson', 'eric@gmail.com', '0787899075', 'surveyor', 'muhanga', 'i want classic room for 2 weeks', 1, 153),
(20, 'mukiza', 'samuelson', 'hagenimanafils@gmail.com', '0787899075', 'developer', 'muhanga', 'hhghghghjggj', 1, 80);

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `landid` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL,
  `propert` varchar(50) DEFAULT NULL,
  `characte` text DEFAULT NULL,
  `contract` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `pdfcontract` varchar(500) DEFAULT NULL,
  `Payment` varchar(100) DEFAULT NULL,
  `Payment_info` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`landid`, `fullname`, `location`, `type`, `email`, `phone`, `file`, `propert`, `characte`, `contract`, `price`, `status`, `pdfcontract`, `Payment`, `Payment_info`) VALUES
(79, 'habimana', 'kigali', 'Town', 'habimana@gmail.com', 787899087, 'uploads/apartement_nyarutarama.jpg', 'two person', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(80, 'mukiza', 'gicumbi', 'townhouse', 'samuelson@gmail.com', 78554332, 'uploads/background.jpg', 'one person', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(81, 'mukiza', 'gicumbi', 'townhouse', 'samuelson@gmail.com', 78554332, 'uploads/background.jpg', 'one person', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(82, 'eric dusenge', 'muhanga', 'single-family', 'dusenge@gmail.com', 787899453, 'uploads/mordenmarket.jpeg', 'for office', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(83, 'benjamin', 'nyamata', 'townhouse', 'humura@gmail.com', 787995432, 'uploads/m_hotel.jpeg', 'select properties of renter', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(84, 'habiyakare', 'muhanga', 'single-family', 'time12@gmail.com', 78787966, 'uploads/slams for renter.jpeg', 'one person', '', 'this before enter pay some fee for repairment', NULL, 1, NULL, NULL, NULL),
(85, 'bayisezere emmy', 'nyamata', 'townhouse', 'access@gmail.com', 787965787, 'uploads/icyamunara.jpeg', 'one person', '', 'contract me for some thing', 0, 1, NULL, NULL, NULL),
(86, 'bayisezere emmy', 'nyamata', 'townhouse', 'access@gmail.com', 787965787, 'uploads/icyamunara.jpeg', 'one person', '', 'contract me for some thing', 0, 1, NULL, NULL, NULL),
(87, 'bayisezere emmy', 'nyamata', 'townhouse', 'access@gmail.com', 787965787, 'uploads/icyamunara.jpeg', 'one person', '', 'contract me for some thing', 0, 1, NULL, NULL, NULL),
(88, 'bayisezere emmy', 'nyamata', 'townhouse', 'access@gmail.com', 787965787, 'uploads/icyamunara.jpeg', 'one person', '', 'contract me for some thing', 0, 1, NULL, NULL, NULL),
(89, 'bayisezere emmy', 'nyamata', 'townhouse', 'access@gmail.com', 787965787, 'uploads/icyamunara.jpeg', 'one person', '', 'contract me for some thing', 0, 1, NULL, NULL, NULL),
(90, 'bayisezere emmy', 'nyamata', 'townhouse', 'access@gmail.com', 787965787, 'uploads/icyamunara.jpeg', 'one person', '', 'contract me for some thing', 0, 1, NULL, NULL, NULL),
(91, 'bayisezere emmy', 'nyamata', 'townhouse', 'access@gmail.com', 787965787, 'uploads/icyamunara.jpeg', 'one person', '', 'contract me for some thing', 0, 1, NULL, NULL, NULL),
(92, 'hagemina fils', 'kigali', 'apartment', 'hagenimanafils@gmail.com', 789787856, 'uploads/kigali_guesr.jpg', 'two person', '', '', 300000, 1, NULL, NULL, NULL),
(94, 'tuyisenge', 'muhanga', 'single-family', 'hagenimanafils@gmail.com', 787899063, 'uploads/icyumba.jpg', 'two person', 'for two pepeople', 'yryhrnhrhnh', 30000, 1, NULL, NULL, NULL),
(95, 'tuyisenge', 'musanze', 'apartment', 'amigo@gmail.com', 787899075, 'uploads/kimihurura_slam_zone.jpg', 'one person', 'ggggg', 'hhhhhhhh', 30000, 1, NULL, NULL, NULL),
(96, 'tuyisenge', 'musanze', 'apartment', 'amigo@gmail.com', 787899075, 'uploads/kimihurura_slam_zone.jpg', 'one person', 'ggggg', 'hhhhhhhh', 30000, 1, NULL, NULL, NULL),
(97, 'pactric', 'nyamata', 'apartment', 'felicianhouse@gmail.com', 787899075, 'uploads/kigali.jpg', 'two person', 'benenfd', 'fghghgj ', 4000, 1, NULL, NULL, NULL),
(98, 'tuyisenge', 'kirenge', 'apartment', 'hagenimanafils@gmail.com', 787899075, 'uploads/gakenke-kivuruga.jpg', 'one person', 'ffffff', 'dfddddd', 444, 1, NULL, NULL, NULL),
(99, 'tuyisenge', 'kirenge', 'apartment', 'hagenimanafils@gmail.com', 787899075, 'uploads/gakenke-kivuruga.jpg', 'one person', 'ffffff', 'dfddddd', 444, 1, NULL, NULL, NULL),
(100, 'tuyisenge', 'muhanga', 'townhouse', 'felicianhouse@gmail.com', 787899063, 'uploads/gitega_zone.jpg', 'for office', '', '', 34555, 1, NULL, NULL, NULL),
(101, 'tuyisenge', 'muhanga', 'townhouse', 'felicianhouse@gmail.com', 787899063, 'uploads/gitega_zone.jpg', 'for office', '', '', 34555, 1, NULL, NULL, NULL),
(102, 'tuyisenge', 'kirenge', 'apartment', 'amigo@gmail.com', 787899063, 'uploads/65a80ef2d550a_EGP_cat[1] (3).pdf', 'two person', 'ggffgfh', 'hhgghhghhg', 30000, 1, '65a80ef2d550a_EGP_cat[1] (3).pdf', NULL, NULL),
(103, 'tuyisenge', 'muhanga', 'apartment', 'eric@gmail.com', 250, 'uploads/images/65a812a8d5d78_muhanga_hotel.jpg', 'over 2 or family', 'hhghghhghgh', NULL, 3000, 1, 'uploads/pdfs/65a812a8d9756_VUEJS DEVELOPER - Academic Bridge.pdf', NULL, NULL),
(104, 'tuyisenge', 'muhanga', 'apartment', 'eric@gmail.com', 250, 'uploads/images/65a812e35db19_muhanga_hotel.jpg', 'over 2 or family', 'hhghghhghgh', NULL, 3000, 1, 'uploads/pdfs/65a812e35de5d_VUEJS DEVELOPER - Academic Bridge.pdf', NULL, NULL),
(105, 'tuyisenge', 'kirenge', 'single-family', 'benjaminwell250@gmail.com', 250, 'uploads/images/65a813274f1fe_gakenke-kivuruga.jpg', 'two person', 'hghghhghg', NULL, 688678, 1, 'uploads/pdfs/65a813274f84f_Assignment_2_Math_For_EngII (2).pdf', NULL, NULL),
(106, 'eric dusenge', 'muhanga', 'townhouse', 'time12@gmail.com', 250, 'uploads/images/65a81514d9667_apartment.png', 'for trading', 'ggggggggg', NULL, 50000, 1, 'uploads/pdfs/65a81514d9c25_EGP_cat[1] (3).pdf', NULL, NULL),
(152, 'habiyakare jmv', 'muhanga', 'single-family', 'amigo@gmail.com', 787899063, 'uploads/images/65a8cca408937_isoko.jpeg', 'two person', 'hhghhghghhghhjf', NULL, 200000, 1, 'uploads/pdfs/65a8cca408dcc_tuyisenge resume blochchain.pdf', NULL, NULL),
(153, 'tuyisenge benjamin', 'nyamata', 'single-family', 'benjamintuyisenge2003@gmail.com', 787899063, 'uploads/images/65aa62cc76f8d_umubano_hotel.jpeg', 'two person', 'this is hotel you choose either class nor public', NULL, 50000, 1, 'uploads/pdfs/65aa62cc777a5_tuyisenge resume blochchain.pdf', 'mtn', '0787899063||'),
(154, 'Iradukunda J. paul', 'musanze', 'condo', 'felicianhouse@gmail.com', 78990543, 'uploads/images/65ac166d1ae9d_gutura_mukizung.webp', 'two person', 'this is a good rent for commercial we have stock for inside', NULL, 70000, 1, 'uploads/pdfs/65ac166d1ba11_CAT_and_Exam_MARKS_Math_For_Eng_II_CSE_students (1).pdf', 'mtn', '0787899063||');

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE `welcome` (
  `comeid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `service` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `datetime` varchar(30) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`comeid`, `name`, `email`, `phone`, `service`, `password`, `datetime`, `status`) VALUES
(100, 'hagemina fils', 'hagenimanafils@gmail.com', 787899075, 'renter', 'fils', NULL, 0),
(136, 'tuyisenge benjamin', 'hagenimanafils@gmail.com', 787899057, 'renter', 'tuyisenge', NULL, 0),
(137, 'hetimana eric', 'hetimana@gmail.com', 789085056, 'renter', 'hetimana', NULL, 0),
(138, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(139, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(140, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(141, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(142, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(143, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 1),
(144, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 1),
(145, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(146, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(147, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(148, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(149, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(150, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(151, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(152, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(153, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 1),
(154, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(155, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(156, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(157, '', '', 0, '', '', NULL, 0),
(158, '', '', 0, '', '', NULL, 0),
(159, 'iradunda program', 'program@cosss', 2147483647, 'renter', 'iradukunda', NULL, 0),
(160, '', '', 0, '', '', NULL, 0),
(161, '', '', 0, '', '', NULL, 0),
(162, '', '', 0, '', '', NULL, 0),
(163, '', '', 0, '', '', NULL, 0),
(164, '', '', 0, '', '', NULL, 0),
(165, '', '', 0, '', '', NULL, 0),
(166, '', '', 0, '', '', NULL, 0),
(167, '', '', 0, '', '', NULL, 0),
(168, '', '', 0, '', '', NULL, 0),
(169, '', '', 0, '', '', NULL, 0),
(170, '', '', 0, '', '', NULL, 0),
(171, '', '', 0, '', '', NULL, 0),
(172, 'ntavuhiganayo claver', 'claverntawuhiganayo@gmail.com', 2147483647, 'renter', 'ntawuhiganayo', NULL, 0),
(173, 'ntavuhiganayo claver', 'claverntawuhiganayo@gmail.com', 2147483647, 'renter', 'ntawuhiganayo', NULL, 0),
(174, '', '', 0, '', '', NULL, 0),
(175, '', '', 0, '', '', NULL, 0),
(176, '', '', 0, '', '', NULL, 0),
(177, '', '', 0, '', '', NULL, 0),
(178, '', '', 0, '', '', NULL, 0),
(179, '', '', 0, '', '', NULL, 0),
(180, '', '', 0, '', '', NULL, 0),
(181, 'tuyisenge benjamin', 'benjaminwell250@gmail.com', 787899063, 'admin', 'tuyisenge', NULL, 1),
(182, '', '', 0, '', '', NULL, 0),
(183, '', '', 0, '', '', NULL, 0),
(184, '', '', 0, '', '', NULL, 0),
(185, '', '', 0, '', '', NULL, 0),
(186, '', '', 0, '', '', NULL, 0),
(187, '', '', 0, '', '', NULL, 0),
(188, '', '', 0, '', '', NULL, 0),
(189, '', '', 0, '', '', NULL, 0),
(190, '', '', 0, '', '', NULL, 0),
(191, '', '', 0, '', '', NULL, 0),
(192, '', '', 0, '', '', NULL, 0),
(193, '', '', 0, '', '', NULL, 0),
(194, '', '', 0, '', '', NULL, 0),
(195, '', '', 0, '', '', NULL, 0),
(196, '', '', 0, '', '', NULL, 0),
(197, '', '', 0, '', '', NULL, 0),
(198, '', '', 0, '', '', NULL, 0),
(199, '', '', 0, '', '', NULL, 0),
(200, 'tuyisenge', 'hagenimanafils@gmail.com', 787899075, 'renter', 'trttrttrt', NULL, 0),
(201, 'tuyisenge', 'hagenimanafils@gmail.com', 787899075, 'renter', 'trttrttrt', NULL, 0),
(202, 'tuyisenge', 'hagenimanafils@gmail.com', 787899075, 'renter', 'trttrttrt', NULL, 0),
(203, '', '', 0, '', '', NULL, 0),
(204, 'tuyisenge', 'hagenimanafils@gmail.com', 787899075, 'renter', 'vvvvv', NULL, 0),
(205, 'tuyisenge', 'hagenimanafils@gmail.com', 787899075, 'renter', 'GFGFFG', NULL, 0),
(206, 'tuyisenge', 'hagenimanafils@gmail.com', 787899063, 'renter', 'KFKKF', NULL, 0),
(207, 'harerimana', 'harerimanaemy@gmail.com', 2147483647, 'landlord', 'harerimana', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`landid`);

--
-- Indexes for table `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`comeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `landlord`
--
ALTER TABLE `landlord`
  MODIFY `landid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `welcome`
--
ALTER TABLE `welcome`
  MODIFY `comeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
