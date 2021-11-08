-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2020 at 03:00 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Copy` varchar(40) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Contect` varchar(11) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `updationDate` varchar(50) NOT NULL,
  `Profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_id`, `Name`, `Copy`, `Email`, `Contect`, `Password`, `updationDate`, `Profile`) VALUES
(1, 'Priyank ', '2019-2020 Priyank P Patel', 'priyankbhingradiya@gmail.com', '9824556577', '21232f297a57a5a743894a0e4a801fc3', '12-Mar-2020 11:38:35 AM', 'member.png');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `P_id` int(11) DEFAULT NULL,
  `C_id` int(11) NOT NULL,
  `H_id` int(11) DEFAULT NULL,
  `D_id` int(11) DEFAULT NULL,
  `Date` varchar(15) NOT NULL,
  `Time` varchar(15) DEFAULT NULL,
  `Payment` double DEFAULT NULL,
  `Payment_status` varchar(7) DEFAULT NULL,
  `description` longtext,
  `illness` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`P_id`, `C_id`, `H_id`, `D_id`, `Date`, `Time`, `Payment`, `Payment_status`, `description`, `illness`) VALUES
(1, 1, 1, 1, '2020-Mar-20', '4:00 PM', 123, 'Paid', '', ''),
(1, 2, 1, 1, '2020-Mar-25', '6:00 PM', 400, 'Unpaid', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(11) NOT NULL,
  `city` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `city`) VALUES
(1, 'Timbi'),
(2, 'Adalaj'),
(3, 'Adityana'),
(4, 'Ahmadabad '),
(5, 'Alang '),
(6, 'Ambaji'),
(7, 'Ambaliyasan'),
(8, 'Amreli'),
(9, 'Anand'),
(10, 'Andada'),
(11, 'Anjar'),
(12, 'Anklav'),
(13, 'Anklesvar'),
(14, 'Antaliya'),
(15, 'Arambhada'),
(16, 'Atul'),
(17, 'Bagasara'),
(18, 'Balasinor'),
(19, 'Bantwa'),
(20, 'Bardoli'),
(21, 'Bavla'),
(22, 'Bhachau'),
(23, 'Bhanvad'),
(24, 'Bharuch'),
(25, 'Bharuch'),
(26, 'Bhavnagar'),
(27, 'Bhayavadar'),
(28, 'Bhuj'),
(29, 'Bilimora'),
(30, 'Bodeli'),
(31, 'Boriavi'),
(32, 'Borsad'),
(33, 'Botad'),
(34, 'Chaklasi'),
(35, 'Chala'),
(36, 'Chalala'),
(37, 'Chalthan'),
(38, 'Chanasma'),
(39, 'Chanod'),
(40, 'Chhatral'),
(41, 'Chhota Udaipur'),
(42, 'Chikhli'),
(43, 'Chiloda'),
(44, 'Chorvad'),
(45, 'Dabhoi'),
(46, 'Dakor'),
(47, 'Damnagar'),
(48, 'Deesa'),
(49, 'Dehgam'),
(50, 'Devsar'),
(51, 'Dhandhuka'),
(52, 'Dhanera'),
(53, 'Dhola'),
(54, 'Dholka'),
(55, 'Dhoraji'),
(56, 'Dhrangadhra'),
(57, 'Dhrol'),
(58, 'Digvijaygram'),
(59, 'Dohad'),
(60, 'Dungra'),
(61, 'Dwarka'),
(62, 'Gadhada'),
(63, 'Gandevi'),
(64, 'Gandhidham'),
(65, 'Gandhinagar'),
(66, 'Gariadhar'),
(67, 'Ghogha'),
(68, 'Godhra'),
(69, 'Gondal'),
(70, 'Hajira'),
(71, 'Halol'),
(72, 'Halvad'),
(73, 'Harij'),
(74, 'Himatnagar'),
(75, 'Idar'),
(76, 'Jafrabad'),
(77, 'Jambusar'),
(78, 'Jamjodhpur'),
(79, 'Jamnagar'),
(80, 'Jasdan'),
(81, 'Jetpur Navagadh'),
(82, 'Jhalod'),
(83, 'Junagadh'),
(84, 'Kadi'),
(85, 'Kadodara'),
(86, 'Kalavad'),
(87, 'Kalol'),
(88, 'Kalol'),
(89, 'Kalol'),
(90, 'Kalol'),
(91, 'Kandla'),
(92, 'Kapadvanj'),
(93, 'Karjan'),
(94, 'Katpar'),
(95, 'Keshod'),
(96, 'Kevadiya'),
(97, 'Khambhalia'),
(98, 'Khambhat'),
(99, 'Kharaghoda'),
(100, 'Kheda'),
(101, 'Khedbrahma'),
(102, 'Kheralu'),
(103, 'Kodinar'),
(104, 'Kosamba'),
(105, 'Kutiyana'),
(106, 'Lathi'),
(107, 'Limbdi'),
(108, 'Limla'),
(109, 'Lunawada'),
(110, 'Mahesana'),
(111, 'Mahudha'),
(112, 'Mahuva'),
(113, 'Mahuvar'),
(114, 'Malpur'),
(115, 'Manavadar'),
(116, 'Mandvi'),
(117, 'Mangrol'),
(118, 'Mansa'),
(119, 'Meghraj'),
(120, 'Mehmedabad'),
(121, 'Mithapur'),
(122, 'Modasa'),
(123, 'Morbi'),
(124, 'Mundra'),
(125, 'Nadiad'),
(126, 'Nandej'),
(127, 'Navsari'),
(128, 'Ode'),
(129, 'Okha Port'),
(130, 'Paddhari'),
(131, 'Padra'),
(132, 'Palanpur'),
(133, 'Palej'),
(134, 'Palitana'),
(135, 'Pardi'),
(136, 'Parnera'),
(137, 'Patan'),
(138, 'Petlad'),
(139, 'Porbandar'),
(140, 'Prantij'),
(141, 'Radhanpur'),
(142, 'Rajkot'),
(143, 'Rajpipla'),
(144, 'Rajula'),
(145, 'Ranavav'),
(146, 'Rapar'),
(147, 'Salaya'),
(148, 'Sanand'),
(149, 'Santrampur'),
(150, 'Sarigam'),
(151, 'Savarkundla'),
(152, 'Sayan'),
(153, 'Sidhpur'),
(154, 'Sihor'),
(155, 'Sikka'),
(156, 'Songadh'),
(157, 'Surajkaradi'),
(158, 'Surat'),
(159, 'Talaja'),
(160, 'Talod'),
(161, 'Thangadh'),
(162, 'Tharad'),
(163, 'Ukai'),
(164, 'Umbergaon'),
(165, 'Umbergaon'),
(166, 'Umreth'),
(167, 'Una'),
(168, 'Unjha'),
(169, 'Upleta'),
(170, 'Vadia'),
(171, 'Vadnagar'),
(172, 'Vadodara'),
(173, 'Vaghodia'),
(174, 'Valsad'),
(175, 'Valsad'),
(176, 'Vanthali'),
(177, 'Vapi'),
(178, 'Vartej'),
(179, 'Vasna Borsad'),
(180, 'Veraval'),
(181, 'Vijapur'),
(182, 'Viramgam'),
(183, 'Visavadar'),
(184, 'Visnagar'),
(185, 'Vyara'),
(186, 'Wadhwan'),
(187, 'Wankaner');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `D_id` int(11) NOT NULL,
  `H_id` int(11) DEFAULT NULL,
  `F_Name` varchar(15) NOT NULL,
  `L_Name` varchar(20) NOT NULL,
  `Specialist` varchar(25) NOT NULL,
  `Address` varchar(99) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Pincode` varchar(7) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Contect` varchar(11) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `updationDate` varchar(100) DEFAULT NULL,
  `Profile` varchar(255) DEFAULT NULL,
  `App_num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_id`, `H_id`, `F_Name`, `L_Name`, `Specialist`, `Address`, `City`, `Pincode`, `Email`, `Contect`, `Password`, `updationDate`, `Profile`, `App_num`) VALUES
(1, 1, 'Dr.Dhruv', 'Kabir', 'General Physician', '23,Dhola main bajar', 'Dhola', '364320', 'dhruv@gmail.com', '9845768934', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '24-Feb-2020 05:20:20 PM', 'docpro.jpg', 4),
(2, 1, ' Dr. Jaysh', 'Patel', 'Ophthalmology', '234,Hilldraw Waghawadi Rode', 'Bhavnagar', '402112', 'jaysh@gmail.com', '9823567898', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `H_id` int(11) NOT NULL,
  `Gr_no` varchar(16) NOT NULL,
  `F_Name` varchar(15) NOT NULL,
  `L_Name` varchar(20) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Pincode` varchar(7) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Contect` varchar(11) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `updationDate` varchar(100) DEFAULT NULL,
  `Profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`H_id`, `Gr_no`, `F_Name`, `L_Name`, `Name`, `Address`, `City`, `Pincode`, `Email`, `Contect`, `Password`, `updationDate`, `Profile`) VALUES
(1, 'qw1234', 'Jagdishabhai', 'Bhingradiya', 'Swami Shree Nirdoshanandji Manavseva Hospital', 'Timbi,Ta Umrala, Dist. Bhavnagar Gujarat', 'Timbi', '364320', 'nirdoshhealth@yahoo.com', '8758234744', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '24-Feb-2020 04:49:13 PM', 'abc.jpg'),
(2, '2324qwqw23', 'jogesh', 'patel', 'HCG Hospital', '139 Sir Patini Road, Krishna Nagar, Meghani Circle, Bhavnagar, Gujarat', 'Bhavnagar', ' 364001', 'hcg@gmail.com', '9834545453', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '24-Feb-2020 06:26:58 PM', 'hlogo.jpg'),
(3, 'QR2323WW', 'Anil', 'Dhapa', 'Pulse Plus Multi Speciality Hospital ', 'Gopal Arcade", Near Top-3 Circle Adhewada Talaja Road', 'Bhavnagar', '365490', 'pluse@gmail.com', '6359599090', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '24-Feb-2020 06:41:05 PM', 'hologo.jpg'),
(4, 'GSSSS2324RD', 'Snehal', 'Patel', 'BIMS Multispeciality Hospital', 'Opp.Sir T Hospital, , Jail Rd, Bhavnagar, Gujarat ', 'Bhavnagar', '364001', 'bims@gmail.com', '2786644444', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '24-Feb-2020 06:54:27 PM', 'bims.jpg'),
(5, 'WWOP3434Pl', 'Ankit', 'Desai', 'CITY DENTAL &  MAXILLOFACIAL HOSPITAL', '1st floor, Ratna Plaza Complex, Vishwakarma circle, RTO-Vithalwadi road', 'Bhavnagar', '364001', 'citydental@gmail.com', '7046660660', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '24-Feb-2020 07:11:12 PM', 'cityd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `L_id` int(11) NOT NULL,
  `Gr_no` varchar(16) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `F_Name` varchar(15) NOT NULL,
  `L_Name` varchar(20) NOT NULL,
  `Address` varchar(99) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Pincode` varchar(7) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Contect` varchar(11) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `updationDate` varchar(60) DEFAULT NULL,
  `Profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`L_id`, `Gr_no`, `Name`, `F_Name`, `L_Name`, `Address`, `City`, `Pincode`, `Email`, `Contect`, `Password`, `updationDate`, `Profile`) VALUES
(1, '12qwew123', 'Red Pluse', 'Sinzo', 'shes', '234,dhola main bazzar ', 'Dhola', '364320', 'red@gmail.com', '9823546789', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '07-Mar-2020 09:07:06 AM', 'red.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `N_id` int(11) NOT NULL,
  `H_id` int(11) DEFAULT NULL,
  `F_Name` varchar(15) NOT NULL,
  `L_Name` varchar(20) NOT NULL,
  `Address` varchar(99) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Pincode` varchar(7) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Contect` varchar(11) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `updationDate` varchar(60) DEFAULT NULL,
  `Profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`N_id`, `H_id`, `F_Name`, `L_Name`, `Address`, `City`, `Pincode`, `Email`, `Contect`, `Password`, `updationDate`, `Profile`) VALUES
(1, 1, 'komal', 'raval', '245,Dhola Umarala ', 'Dhola', '364320', 'komal@gmail.com', '3456678945', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '20-Mar-2020 10:58:07 AM', '1584549470751cotet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `P_id` int(11) NOT NULL,
  `F_Name` varchar(50) NOT NULL,
  `L_Name` varchar(50) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Dob` varchar(15) NOT NULL,
  `Blood_group` varchar(4) NOT NULL,
  `Disability` varchar(90) DEFAULT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Pincode` varchar(7) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `updationDate` varchar(40) DEFAULT NULL,
  `Profile` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_id`, `F_Name`, `L_Name`, `Gender`, `Dob`, `Blood_group`, `Disability`, `Address`, `City`, `Pincode`, `Email`, `Phone`, `Password`, `updationDate`, `Profile`) VALUES
(1, 'Harsh', 'Patel', 'Male', '2002-Jun-14', 'AB+', '', '1121,vikas vila Gota', 'Ahemdabad', '400232', 'harsh@gmail.com', '9823546789', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '2020-Mar-20 10:59:56 AM', NULL),
(2, 'Umang', 'Bagdania', 'Male', '2000-Aug-9', 'A+', '', '890,New Area Mahua', 'Mahua', '345678', 'umang@gmail.com', '4576892345', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', NULL, NULL),
(3, 'Renish', 'Mithani', 'Male', '2000-Jul-11', 'AB-', '', '234,Meghani Circle', 'Bhavnagar', '430001', 'renish@gmail.com', '7689456789', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', NULL, NULL),
(5, 'Mantra', 'Patel', 'Male', '2005-Aug-16', 'AB-', '', '234,Gloden City VIP Chock Surat ', 'Surat', '342011', 'mantra@gmail.com', '9834546756', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `P_id` int(11) DEFAULT NULL,
  `C_id` int(11) NOT NULL,
  `case_h` longtext,
  `medication` longtext,
  `med_f_phy` longtext,
  `description` longtext,
  `blood_pre` varchar(11) DEFAULT NULL,
  `blood_sug` varchar(11) DEFAULT NULL,
  `opration` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`P_id`, `C_id`, `case_h`, `medication`, `med_f_phy`, `description`, `blood_pre`, `blood_sug`, `opration`) VALUES
(1, 1, 'dsfjsldfwr\r\nerterter\r\nerrtertertgdfgdfg\r\ndfgdfgdfg;rtwperioeotiw\r\ndfdgdf;gdf\r\netert', 'ueriwrw\r\nrwepiwrsf\r\nsfssdfs\r\netrtert\r\ndfdgdfg,sffsete\r\n', 'dfgdflgkdfreotier\r\nerterter;ldfg;f\r\ngdldfgd', 'fddfgdfgdlkdfgdf;\r\ngrtpoerteprt\r\ndgdfgkdkdfd\r\ngxcvxclverpwetoptwpeowprw\r\nryo[typrttrytryrty]yrttry\r\nrtyry', '124', '150', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `L_id` int(11) NOT NULL,
  `P_id` int(11) NOT NULL,
  `C_id` int(11) NOT NULL,
  `r_tital` varchar(100) DEFAULT NULL,
  `r_description` longtext,
  `p_tital` varchar(100) DEFAULT NULL,
  `pdf` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`L_id`, `P_id`, `C_id`, `r_tital`, `r_description`, `p_tital`, `pdf`) VALUES
(1, 1, 1, 'Blood Testing', 'kfdgfdgd&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dfgdfgdfgdfgkl&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;gdfgdfgdf<br>fgdgdfdfg<br><br><br>dfgdfg<br>dfgdfg<br>dfgdfg<br>dfgdfgdfg<br><br>', 'blood report', '1584803310610first Progress Report.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `reseptionist`
--

CREATE TABLE `reseptionist` (
  `R_id` int(11) NOT NULL,
  `H_id` int(11) DEFAULT NULL,
  `F_Name` varchar(15) NOT NULL,
  `L_Name` varchar(20) NOT NULL,
  `Address` varchar(99) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Pincode` varchar(7) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Contect` varchar(11) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `updationDate` varchar(60) DEFAULT NULL,
  `Profile` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reseptionist`
--

INSERT INTO `reseptionist` (`R_id`, `H_id`, `F_Name`, `L_Name`, `Address`, `City`, `Pincode`, `Email`, `Contect`, `Password`, `updationDate`, `Profile`) VALUES
(1, 1, 'Rahul', 'Chouhan', '345, Sardarnagar  near by gurukul', 'Bhavnagar', '402212', 'rahul@gmail.com', '9823456789', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `x_ray`
--

CREATE TABLE `x_ray` (
  `P_id` int(11) DEFAULT NULL,
  `C_id` int(11) NOT NULL,
  `tital_1` varchar(200) DEFAULT NULL,
  `img_1` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `x_ray`
--

INSERT INTO `x_ray` (`P_id`, `C_id`, `tital_1`, `img_1`) VALUES
(1, 1, 'xyz', '1584884056053X-ray.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD KEY `P_id` (`P_id`,`H_id`,`D_id`),
  ADD KEY `H_id` (`H_id`),
  ADD KEY `D_id` (`D_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`D_id`),
  ADD KEY `H_id` (`H_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`H_id`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`L_id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`N_id`),
  ADD KEY `H_id` (`H_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `reseptionist`
--
ALTER TABLE `reseptionist`
  ADD PRIMARY KEY (`R_id`),
  ADD KEY `H_id` (`H_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `D_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `H_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `L_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `N_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reseptionist`
--
ALTER TABLE `reseptionist`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_2` FOREIGN KEY (`H_id`) REFERENCES `hospital` (`H_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appoinment_ibfk_3` FOREIGN KEY (`D_id`) REFERENCES `doctor` (`D_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`H_id`) REFERENCES `hospital` (`H_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nurse`
--
ALTER TABLE `nurse`
  ADD CONSTRAINT `nurse_ibfk_1` FOREIGN KEY (`H_id`) REFERENCES `hospital` (`H_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reseptionist`
--
ALTER TABLE `reseptionist`
  ADD CONSTRAINT `reseptionist_ibfk_1` FOREIGN KEY (`H_id`) REFERENCES `hospital` (`H_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
