-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 15, 2018 at 10:33 PM
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
-- Database: `txp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'txp', '$2y$12$njYAEdF7Fm7M30OO56Vot.SgRlnUSdovdS3D4IxXWvMDHg2E.cam6');

-- --------------------------------------------------------

--
-- Table structure for table `event_participants`
--

DROP TABLE IF EXISTS `event_participants`;
CREATE TABLE IF NOT EXISTS `event_participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` int(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `college` varchar(100) NOT NULL,
  `team_members` varchar(250) DEFAULT NULL,
  `event` varchar(25) NOT NULL,
  `payment` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_participants`
--

INSERT INTO `event_participants` (`id`, `uid`, `name`, `contact`, `email`, `college`, `team_members`, `event`, `payment`) VALUES
(1, 'LG101', 'parth', 1234567891, 'abc@abc.com', 'abcdefg', 'parth , deepesh , vini , sachin', 'LAN GAMING', 1),
(2, 'DN101', 'ravi', 1234567891, 'def@def.com', 'def', 'shaquib , bombe , arnav', 'DANCING', 1),
(3, 'LG102', 'lorem', 1234567891, 'asd@asd.com', 'asd', 'lorem, ipsum , lorem', 'LAN GAMING', 0),
(4, 'DN102', 'qwerty', 1234567891, 'qwe@qwe.com', 'qwe', 'asda asd asd asd ', 'DANCING', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tech_events`
--

DROP TABLE IF EXISTS `tech_events`;
CREATE TABLE IF NOT EXISTS `tech_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `rules` text NOT NULL,
  `members` text,
  `languages` text NOT NULL,
  `registration_fees` int(11) NOT NULL,
  `prize` text NOT NULL,
  `time` double DEFAULT NULL,
  `levels` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_events`
--

INSERT INTO `tech_events` (`id`, `title`, `description`, `rules`, `members`, `languages`, `registration_fees`, `prize`, `time`, `levels`) VALUES
(1, 'CodeMapper', 'Get your brains thinking in this amazing Python Coding Challenge!', 'NA', '1', 'Python', 30, 'Trophy', 120, 1),
(2, 'Error Hunt', 'Test how observant and speedy you are by finding the errors in the 3 Java or C++ snippets given to you, as fast\r\nas possible!', 'NA', '1', 'C++, Java', 20, 'Winner: 300 Rs.\r\nRunner up: 150 Rs.\r\n', 60, 3),
(3, 'Blind Coding', 'Master of Code? Blind Coding should be an easy task for you then! Participants will have their monitors shut as\r\nthey race against time and of course other programmers to code 1 simple program in Java. Winner takes all!\r\n', 'NA', '1', 'Java', 20, '300 Rs.', 60, 1),
(4, 'Photoshop', 'Inspired by James Friedman?! We got your backs! Come here and showcase how creative you can get with your\r\nPhotoshop skills and how fast you can come up with exemplary ideas in a pinch situation!', 'NA', '1', 'NA', 50, '300 Rs.', 60, 1),
(5, 'Code In Less', 'Fan of optimization? Prepare the Best code using as few lines and resources as possible and solve the problem in the most fashionable\r\nway possible! Choose from either c++, Java or Python, but most importantly, choose wisely.\r\n', 'NA', '1', 'PHP, Java, Python, C++', 20, '300 Rs.', 60, 1),
(6, 'Switch Hero', 'Venture into the wilderness of creating codes for the corporates! Write codes which will be completed by your partner\r\nwithout any means of communication!<br> Consequently, complete his code in as less time as possible and become The\r\nUltimate Switch Hero!\r\n<br>\r\n2 man teams, race against a time limit of 1:30 hrs', 'NA', '2', 'Java, Python', 30, '400 Rs.', 90, 1),
(7, 'Quiz', 'Got a Million Tera Bytes of Tech Data in your head? Participate in the Ultimate quizzing event and go from Self\r\nProclaimed Tech Guru to Certified Tech Guru! Take from your past experiences of gaming and tech knowledge to\r\nmake your competition bite the dust!\r\n<br>\r\nLevel 1: Evolution of Games\r\n<br>\r\nLevel 2: Tech Quiz', 'NA', '1', 'NA', 0, 'Certificate', 120, 2),
(8, 'Tech Debate', 'Indulge yourself in the most productive event at TXP 2.0 as you debate your way along the most controversial tech\r\ntopics and showcase not just new ideas but win people\'s hearts with the amazing deductions and best possible\r\nconclusions!', 'NA', '2 to 5', 'NA', 0, 'NA', 10, 1),
(9, 'Code Relay', 'Level 1: Prepare codes in as many languages as possible using the input output set given to you!\r\nTeam to get expected outputs in as many languages as possible wins! 2PC\'s Per team\r\n<br>Level 2: Put your cognitive abilities to the test as you analyse the given code and translate it into another language!', 'NA', '1 to 3', 'NA', 30, 'Trophy', 120, 2),
(10, 'Web Designing', 'Love Naruto? Become a master of cloning and coding as you try and create the same website as flashed on screen!', 'NA', '1', 'NA', 30, '400 Rs.', 120, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
