-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2019 at 06:15 PM
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
-- Database: `disease_recognition_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

DROP TABLE IF EXISTS `diagnosis`;
CREATE TABLE IF NOT EXISTS `diagnosis` (
  `P_Id` int(11) NOT NULL DEFAULT '0',
  `Diagnosed` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disease_details`
--

DROP TABLE IF EXISTS `disease_details`;
CREATE TABLE IF NOT EXISTS `disease_details` (
  `Disease_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Disease_name` varchar(50) NOT NULL,
  `Disease_type` varchar(50) NOT NULL,
  `Disease_description` longtext NOT NULL,
  PRIMARY KEY (`Disease_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease_details`
--

INSERT INTO `disease_details` (`Disease_Id`, `Disease_name`, `Disease_type`, `Disease_description`) VALUES
(1, 'common cold', 'Genral', 'The viruses that cause colds in people are generally species-specific. Its not a common disease that can be easily cured with proper care'),
(2, 'Acne', 'Skin Disease', 'Acne tends to come on at puberty, from five to eight months of age. Typically it is gone by the time the dog reaches one year of age.'),
(3, 'Acute Vomiting', 'Upset Digestive System', 'They might have eaten something that upset their stomachs, or just have sensitive digestive systems. However, it becomes acute when the vomiting does not stop and when there is nothing left in the stomach to throw up except bile (a yellow fluid).'),
(4, 'Pyrexia', 'Fever', 'Fever, referred to medically as pyrexia, can be defined as a higher than normal body temperature in dogs. With the normal range falling between 99.5-102.5 Fahrenheit, a body temperature of at least 103.5 ° F (39.7° C) can be considered a fever.');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_consultant`
--

DROP TABLE IF EXISTS `doctor_consultant`;
CREATE TABLE IF NOT EXISTS `doctor_consultant` (
  `Disease_Id` int(11) NOT NULL DEFAULT '0',
  `Doc_consultant` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

DROP TABLE IF EXISTS `doctor_details`;
CREATE TABLE IF NOT EXISTS `doctor_details` (
  `Doc_Id` int(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Doc_name` varchar(30) NOT NULL,
  `Speciality` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Availability` varchar(30) NOT NULL,
  PRIMARY KEY (`Doc_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doc_appointment`
--

DROP TABLE IF EXISTS `doc_appointment`;
CREATE TABLE IF NOT EXISTS `doc_appointment` (
  `Appointment_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Doc_Id` int(11) NOT NULL,
  `U_Id` int(11) NOT NULL,
  PRIMARY KEY (`Appointment_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `d_search`
--

DROP TABLE IF EXISTS `d_search`;
CREATE TABLE IF NOT EXISTS `d_search` (
  `U_Id` int(11) NOT NULL,
  `Disease_Id` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Search_Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Search_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_search`
--

INSERT INTO `d_search` (`U_Id`, `Disease_Id`, `Date`, `Search_Id`) VALUES
(17, 1, '2019-08-30 17:19:03', 1),
(17, 1, '2019-08-30 17:19:29', 2),
(17, 1, '2019-08-30 17:25:07', 3);

-- --------------------------------------------------------

--
-- Table structure for table `healthcard_update_table`
--

DROP TABLE IF EXISTS `healthcard_update_table`;
CREATE TABLE IF NOT EXISTS `healthcard_update_table` (
  `Updation_id` int(11) NOT NULL AUTO_INCREMENT,
  `Pid` int(11) NOT NULL,
  `Doc_id` int(11) NOT NULL,
  `Age` tinyint(1) NOT NULL,
  `Weight` tinyint(1) NOT NULL,
  `Allergies` tinyint(1) NOT NULL,
  `Medication` tinyint(1) NOT NULL,
  `Update_time` tinyint(1) NOT NULL,
  PRIMARY KEY (`Updation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pet_allergies`
--

DROP TABLE IF EXISTS `pet_allergies`;
CREATE TABLE IF NOT EXISTS `pet_allergies` (
  `P_Id` int(11) NOT NULL DEFAULT '0',
  `Allergies` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_allergies`
--

INSERT INTO `pet_allergies` (`P_Id`, `Allergies`) VALUES
(21, 'mushroom'),
(21, 'peanut'),
(22, 'mushroom'),
(22, 'peanut'),
(23, 'mushroom'),
(23, 'adreanaline'),
(24, 'j'),
(24, 'hj'),
(25, 'skin'),
(25, ' pollution');

-- --------------------------------------------------------

--
-- Table structure for table `pet_appointment`
--

DROP TABLE IF EXISTS `pet_appointment`;
CREATE TABLE IF NOT EXISTS `pet_appointment` (
  `U_Id` int(11) NOT NULL,
  `P_Id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pet_details`
--

DROP TABLE IF EXISTS `pet_details`;
CREATE TABLE IF NOT EXISTS `pet_details` (
  `P_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Breed` varchar(30) NOT NULL,
  `Blood_group` varchar(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  PRIMARY KEY (`P_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_details`
--

INSERT INTO `pet_details` (`P_Id`, `Name`, `Breed`, `Blood_group`, `Age`, `Weight`) VALUES
(9, 'saasas', 's', 's', 0, 0),
(6, 'a', 'a', 'a', 0, 0),
(7, 'nb', 'knk', 'nj', 0, 0),
(8, 'aads', 'sdas', 'sadsa', 0, 0),
(23, 'lei', 'desi', 'b+', 7, 22),
(22, 'bahubali', 'human', 'b+', 50, 91),
(21, 'bahubali', 'human', 'b+', 50, 91),
(20, 'sajal', 'human', 'b+', 52, 74),
(19, 'kkk', 'human', 'b-', 67, 67),
(18, 'nithya', 'human', 'b+', 64, 93),
(24, 'grb', 'bgr', 'b', 5, 56),
(25, 'aman', 'mc', 'a+', 6, 52);

-- --------------------------------------------------------

--
-- Table structure for table `pet_medic`
--

DROP TABLE IF EXISTS `pet_medic`;
CREATE TABLE IF NOT EXISTS `pet_medic` (
  `P_Id` int(11) NOT NULL DEFAULT '0',
  `Medication` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_medic`
--

INSERT INTO `pet_medic` (`P_Id`, `Medication`) VALUES
(23, 'cough'),
(23, 'cold'),
(24, 'a'),
(24, 'rf'),
(25, 'piles'),
(25, ' hygine problem');

-- --------------------------------------------------------

--
-- Table structure for table `remedies`
--

DROP TABLE IF EXISTS `remedies`;
CREATE TABLE IF NOT EXISTS `remedies` (
  `Disease_Id` int(11) NOT NULL DEFAULT '0',
  `Remedies` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remedies`
--

INSERT INTO `remedies` (`Disease_Id`, `Remedies`) VALUES
(1, 'Encourage your dog to rest, drink, and eat'),
(1, ' Wipe your dog\'s eyes and nose with a warm, damp cloth to keep him comfortable.'),
(2, 'Shampoo twice a week with a special preparation that contains benzoyl peroxide'),
(2, 'applying the topical medications (antibiotics)'),
(3, 'Dietary changes'),
(4, 'apply cool water around his paws and ears. Cover him with a blanket.'),
(4, 'Encourage to drink plenty of water'),
(4, 'Give him homemade soup by boiling chicken and vegetables in water.'),
(3, ' give him homemade food such as boiled potatoes, rice and well-cooked, skinless chicken');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

DROP TABLE IF EXISTS `symptoms`;
CREATE TABLE IF NOT EXISTS `symptoms` (
  `Disease_Id` int(11) NOT NULL DEFAULT '0',
  `Symptoms` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`Disease_Id`, `Symptoms`) VALUES
(1, ' runny or stuffed up nose'),
(1, ' watery eyes'),
(1, 'sneezing and coughing'),
(2, 'Blackheads'),
(2, 'Red bumps'),
(2, 'Swelling'),
(3, 'Vomiting that will not stop'),
(3, 'Weakness'),
(3, 'Pain and distress'),
(4, 'High body temperature'),
(4, 'Shivering'),
(4, 'Rapid heart rate'),
(4, 'Shock');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `U_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Street` longtext NOT NULL,
  `City` longtext NOT NULL,
  `State` longtext NOT NULL,
  PRIMARY KEY (`U_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`U_Id`, `Password`, `Name`, `Email`, `Phone`, `Street`, `City`, `State`) VALUES
(14, 'koustabh101', 'Koustabh Krishna', '', 70021711, 'MC Road', 'Guwahati', 'Assam'),
(11, '123456789k', 'rahul', '', 700217117, 'street101', 'Guwahati', 'Assam'),
(15, 'somya101', 'Somya', '', 567898, 'MC Road', 'Guwahati', 'Assam'),
(9, 'jaip101', 'jai', '', 67969769, 'ggjv', 'hjbhjbjhb', 'hhbhk'),
(16, 'Nismon23', 'nismon', '', 2147483647, 'MC Road', 'Guwahati', 'Assam'),
(17, '1234Abcd', 'a', 'ANILADVANI.16@GMAIL.COM', 8766043767, 'B-19, DADU MARG BRAHMPURI KHURRA', 'JAIPUR', 'Rajasthan'),
(18, 'jghgA2233', 'nbvf', 'hfh@xz', 7456566556, 'svsd', 'sacx', 'ccxz'),
(19, 'kkkkkkkkkkkkkk1A', 'aa', 'ANILADVANI.16@GMAIL.COM', 8766043767, 'B-19, DADU MARG BRAHMPURI KHURRA', 'JAIPUR', 'Rajasthan'),
(20, 'aa@12Aaa', 'aa', 'ANILADVANI.16@GMAIL.C', 8766043767, 'B-19, DADU MARG BRAHMPURI KHURRA', 'JAIPUR', 'Rajasthan'),
(21, 'saasAA123', 'saas', 'ANILADVANI.16@GMAIL.c', 8766043767, 'B-19, DADU MARG BRAHMPURI KHURRA', 'JAIPUR', 'Rajasthan'),
(22, 'bhjhA123', 'asa@', 'bhj@gmail.com', 8766043767, 'buu', 'uhbh', 'ghyg'),
(23, 'abcd1234A', 'saas', 'ANILADVANI.16@GMAIL.COM', 8766043767, 'B-19, DADU MARG BRAHMPURI KHURRA', 'JAIPUR', 'Rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `user_pet`
--

DROP TABLE IF EXISTS `user_pet`;
CREATE TABLE IF NOT EXISTS `user_pet` (
  `P_Id` int(11) NOT NULL DEFAULT '0',
  `U_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
