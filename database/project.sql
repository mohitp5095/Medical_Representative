-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2017 at 04:58 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `backupchem`
--

DROP TABLE IF EXISTS `backupchem`;
CREATE TABLE IF NOT EXISTS `backupchem` (
  `Date` date DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `First_name` varchar(50) DEFAULT NULL,
  `Last_name` varchar(60) DEFAULT NULL,
  `Reg_no` varchar(50) DEFAULT NULL,
  `Mob_no` bigint(50) DEFAULT NULL,
  `Client_id` int(20) DEFAULT NULL,
  `Emp_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backupchem`
--

INSERT INTO `backupchem` (`Date`, `Address`, `First_name`, `Last_name`, `Reg_no`, `Mob_no`, `Client_id`, `Emp_id`) VALUES
('0000-00-00', 'Wani', 'Warje\r\nm', 'M456898', '2147483647', 10, 1001, 20171101);

-- --------------------------------------------------------

--
-- Table structure for table `backupdoc`
--

DROP TABLE IF EXISTS `backupdoc`;
CREATE TABLE IF NOT EXISTS `backupdoc` (
  `First_name` varchar(255) DEFAULT NULL,
  `Last_name` varchar(50) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `Reg_no` varchar(50) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Speciality` varchar(25) DEFAULT NULL,
  `Mob_no` bigint(50) DEFAULT NULL,
  `Client_id` int(20) DEFAULT NULL,
  `Emp_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backupdoc`
--

INSERT INTO `backupdoc` (`First_name`, `Last_name`, `Address`, `Reg_no`, `Email`, `Date`, `Speciality`, `Mob_no`, `Client_id`, `Emp_id`) VALUES
('Yogesh', 'Marne', 'Pune', 'D154765', 'Yogesh@yahoo.com', '2017-11-03', 'Orthopedic', 2147483647, 14, 1001),
('Rahul', 'Rana', 'Pimpri', 'D65432', 'Rahulrana@gmail.com', '2017-11-03', 'Dentist', 2147483647, 4, 1001),
('Narenra', 'PATIL', 'PUNE', 'b454', 'ABC@GMAIL.COM', '2016-10-30', '454', 54, 18, 1001),
('Mohit', 'Patil', 'shglsg gdj fg', 'D15944986', 'mohit@gmail.com', '0000-00-00', 'Orthopedic', 2147483647, 2, 1002),
('SAMEER', 'PATIL', 'PUNE', 'b5454', 'sahilpatil32@gmail.com', '2017-12-31', 'HEART', 695665656, 19, 1001);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `First_name` varchar(20) DEFAULT NULL,
  `Last_name` varchar(30) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `Reg_no` varchar(10) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Speciality` varchar(20) DEFAULT NULL,
  `Mob_no` bigint(20) DEFAULT NULL,
  `Client_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `Emp_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`Client_id`),
  UNIQUE KEY `Reg_no` (`Reg_no`),
  KEY `Emp_id` (`Emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`First_name`, `Last_name`, `Address`, `Reg_no`, `Email`, `Date`, `Speciality`, `Mob_no`, `Client_id`, `Emp_id`) VALUES
('Vilesh', 'Patil', 'Dhule', 'D123354', 'vilesh@gmail.com', '1992-09-12', 'Orthopedic', 2147483647, 3, 1002),
('Sangram', 'Surve', 'Satara', 'D45987', 'sangram@gmail.com', '2017-11-01', 'Dermatology', 2147483647, 16, 1004),
('Ramesh', 'Patil', 'Thane', 'G48789', 'Ramesh@gmail.com', '2017-12-01', 'Dentists', 2147483647, 7, 1001),
('Archit', 'Agrawal', 'Pune', 'D15464', 'archit@yahoo.com', '2017-11-03', 'gynecologist', 2147483647, 15, 1004),
('Sahil', 'Patil', 'Pune', 'b545', 'sahilpatil32@gmail.com', '2016-11-01', 'Heart', 966655555, 20, 1001);

--
-- Triggers `doctor`
--
DROP TRIGGER IF EXISTS `trg_delete`;
DELIMITER $$
CREATE TRIGGER `trg_delete` BEFORE DELETE ON `doctor` FOR EACH ROW BEGIN
insert into backupdoc VALUES(old.First_name,old.Last_name,old.Address,old.Reg_no,old.Email,old.Date,old.Speciality,old.Mob_no,old.Client_id,old.Emp_id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

DROP TABLE IF EXISTS `holiday`;
CREATE TABLE IF NOT EXISTS `holiday` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `date`, `day`, `event`) VALUES
(6, '2017-01-14', 'Saturday', '  Bhogi/Makar Sankranti/Uttrayane'),
(7, '2017-01-26', 'Thursday', '  Republic Day'),
(8, '2017-03-13', 'Monday', 'Bhogi/Makar Sankranti/Uttrayane'),
(9, '2017-05-01', 'Monday', ' Maharashtra Day'),
(10, '2017-08-15', 'Tuesday', 'Independance Day'),
(11, '2017-09-30', 'Saturday', 'Dasara/Durga Pooja/Vijayadasham'),
(12, '2017-10-02', 'Monday', '  Gandhi Jayanti'),
(13, '2017-10-19', 'Thursday', 'Diwali'),
(14, '2017-10-20', 'Friday', ' Diwali- Baalipratipada/ New year');

-- --------------------------------------------------------

--
-- Table structure for table `medical_store`
--

DROP TABLE IF EXISTS `medical_store`;
CREATE TABLE IF NOT EXISTS `medical_store` (
  `Date` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `First_name` varchar(20) DEFAULT NULL,
  `Last_name` varchar(20) DEFAULT NULL,
  `Reg_no` varchar(25) DEFAULT NULL,
  `Mob_no` bigint(20) DEFAULT NULL,
  `Client_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `Emp_id` int(10) NOT NULL,
  PRIMARY KEY (`Client_id`),
  UNIQUE KEY `Reg_num` (`Reg_no`),
  KEY `Emp_id` (`Emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_store`
--

INSERT INTO `medical_store` (`Date`, `Address`, `First_name`, `Last_name`, `Reg_no`, `Mob_no`, `Client_id`, `Emp_id`) VALUES
('2017-10-11', 'fgdfg', 'asdfg', 'zxcvb@asd.cd', 'D234234', 464, 3, 1002),
('2017-11-03', 'Katraj', 'Ravindra', 'Waje', 'M459786', 2147483647, 11, 1001),
('2017-11-04', 'Nagar', 'Shubham', 'Sheamdage', 'S544979', 2147483647, 12, 1004),
('2017-11-16', 'xxxx', 'xxxx', 'xxxx', 'xxxx', 1111, 9, 1002);

--
-- Triggers `medical_store`
--
DROP TRIGGER IF EXISTS `trg_che`;
DELIMITER $$
CREATE TRIGGER `trg_che` BEFORE DELETE ON `medical_store` FOR EACH ROW BEGIN
insert into backupchem values(old.First_name,old.Last_name,old.Address,old.Reg_no,old.Mob_no,old.Client_id,old.Emp_id,old.date);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE IF NOT EXISTS `medicine` (
  `M_id` int(10) NOT NULL,
  `M_name` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`M_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`M_id`, `M_name`) VALUES
(22, 'Alcarex_Dm');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `message` varchar(400) DEFAULT NULL,
  `city` varchar(80) DEFAULT NULL,
  `readed` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `mobile`, `message`, `city`, `readed`) VALUES
(5, 'Rajendra Shrivastava', 'raj12@yahoo.com', 9865451235, 'Please give information about Alcarex 10 mg', 'Jabalpur', 1),
(6, 'rohit', 'rohitsharma@gmail.com', 9852226633, 'hello please contact me', 'hyderabad', 1),
(21, 'test', 'test@self.com', 999, 'test', 'test', 1),
(26, 'Ram Sharma', 'ramsharma@gmail.com', 9865142425, ' hello team !!!', 'Pune', 1),
(24, 'Prakash', 'waniprakash@rediff.com', 8895754514, 'Provide tab alerx 10 mg', 'Thane', 1),
(20, 'radhe', 'radhe@radhe.co', 12326547865, 'hello', 'pune', 1),
(27, 'asd', 'asd@asd.com', 0, 'asd', 'asd', 1),
(19, 'Mohit Patil', 'mohit@gmail.com', 9856321254, 'its working?', 'mumbai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `representatives`
--

DROP TABLE IF EXISTS `representatives`;
CREATE TABLE IF NOT EXISTS `representatives` (
  `Emp_id` int(5) NOT NULL,
  `Emp_name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Mobile_No` bigint(10) NOT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Area_under` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `representatives`
--

INSERT INTO `representatives` (`Emp_id`, `Emp_name`, `DOB`, `Mobile_No`, `Email`, `Area_under`, `PASSWORD`) VALUES
(1001, 'Mohit Patil', '2017-10-17', 9823375894, 'mohit@gmail.com', 'pune', '1001'),
(1002, 'Rahul Rana', '2017-06-13', 9865481535, 'rahul@gmail.com', 'Nashik', '1002'),
(1004, 'Vilesh Patil', '2017-10-05', 9865324589, 'Vilesh@gmail.com', 'Vadodara', '1004'),
(1496, 'Sachin Bagal', '1996-04-01', 9552295611, 'sachin1066@gmail.com', 'Jalgaon', '1496');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
