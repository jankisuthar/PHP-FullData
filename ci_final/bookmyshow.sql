-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 06:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmyshow`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_reg` (IN `un` VARCHAR(100), IN `pa` VARCHAR(100), IN `ge` VARCHAR(100), IN `la` VARCHAR(100), IN `cid` INT(100), IN `file` VARCHAR(100), IN `status` VARCHAR(100))  BEGIN
insert into reg(unm,pass,gen,lag,cid,file1,status) values (un,pa,ge,la,cid,file,status);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `anm` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `anm`, `pass`) VALUES
(1, 'admin', 'admin@1234');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `cid` int(11) NOT NULL,
  `cnm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `cnm`) VALUES
(1, 'INDIA'),
(2, 'JAPAN'),
(3, 'RASIA'),
(4, 'CHINA'),
(5, 'UK'),
(6, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `email`, `comment`) VALUES
(1, 'shreya@gmail.com', 'Nice Service'),
(2, 'vivek@gmail.com', 'its very bad.'),
(3, 'shraddha@gmail.com', 'Horrible service');

--
-- Triggers `feedback`
--
DELIMITER $$
CREATE TRIGGER `ins_feedback_tri` BEFORE INSERT ON `feedback` FOR EACH ROW BEGIN 
insert into feedback_log(feed_id,email,comment) values(new.feed_id,new.email,new.comment);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_log`
--

CREATE TABLE `feedback_log` (
  `log_id` int(11) NOT NULL,
  `feed_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_log`
--

INSERT INTO `feedback_log` (`log_id`, `feed_id`, `email`, `comment`) VALUES
(1, 4, 'akash@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inq_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `status` enum('Pending','Sent') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inq_id`, `email`, `sub`, `comment`, `status`) VALUES
(1, 'rajeshnagarn@gmail.com', 'price', 'what  price', 'Sent');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `uid` int(11) NOT NULL,
  `unm` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `lag` varchar(100) NOT NULL,
  `cid` int(100) NOT NULL,
  `file1` varchar(100) NOT NULL,
  `status` enum('Block','Unblock') NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`uid`, `unm`, `pass`, `gen`, `lag`, `cid`, `file1`, `status`) VALUES
(13, 'manali.shah59@gmail.com', 'f0379aa3b94f435c057060d21e7afb10', 'Female', 'Gujarati', 3, 'new.jpg', 'Block'),
(14, 'saikiran.kodunuri143@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 'Hindi,Gujarati', 3, 'new.jpg', 'Unblock'),
(15, 'rajeshnagarn@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Male', 'Hindi,Gujarati', 4, 'new.jpg', 'Block'),
(16, 'saadat@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 'Hindi', 4, '4.jpg', 'Unblock'),
(17, 'saadatalikhan2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 'Hindi', 4, '2.jpg', 'Unblock'),
(20, 'nagar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 'Hindi,Gujarati,English', 4, 'acne1.jpg', 'Block'),
(21, 'shreyajanibca@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', 'Hindi,Gujarati,English', 1, 'news_girl.jpg', 'Unblock');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_reg`
-- (See below for the actual view)
--
CREATE TABLE `view_reg` (
`uid` int(11)
,`unm` varchar(100)
,`gen` varchar(100)
,`lag` varchar(100)
,`cid` int(100)
);

-- --------------------------------------------------------

--
-- Structure for view `view_reg`
--
DROP TABLE IF EXISTS `view_reg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_reg`  AS SELECT `reg`.`uid` AS `uid`, `reg`.`unm` AS `unm`, `reg`.`gen` AS `gen`, `reg`.`lag` AS `lag`, `reg`.`cid` AS `cid` FROM `reg` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `feedback_log`
--
ALTER TABLE `feedback_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `ind_reg` (`uid`,`unm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback_log`
--
ALTER TABLE `feedback_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reg`
--
ALTER TABLE `reg`
  ADD CONSTRAINT `reg_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `country` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
