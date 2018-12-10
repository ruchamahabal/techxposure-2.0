-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2018 at 06:44 AM
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
-- Table structure for table `fine_arts_events`
--

DROP TABLE IF EXISTS `fine_arts_events`;
CREATE TABLE IF NOT EXISTS `fine_arts_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` text,
  `rules` text,
  `members` text,
  `registration_fees` text,
  `prize` text,
  `time` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fine_arts_events`
--

INSERT INTO `fine_arts_events` (`id`, `title`, `description`, `rules`, `members`, `registration_fees`, `prize`, `time`) VALUES
(1, 'Quilling', 'Quilling involves the use of strips of paper, fabric, glass, or even fondant that are rolled, shaped, and attached together to create interesting designs. Your artwork should be related to our theme i.e Evolution of Games ', '1. Participant should bring their own material.<br>\r\n2. Material should not contain any readymade artwork.<br>\r\n3. Usage of any digital or physical reference for design patterns at the place of competition is restricted.<br>\r\n4. Judges\' decision will be final.<br>\r\n', '1', 'FREE', 'NA', '1 hr 30 mins'),
(2, 'T-Shirt Painting', 'Make a colourful painting on a t-shirt based on our theme - Evolution of Games ', '1. One t-shirt will be provided.<br>\r\n2. Electronic devices of any form will not be allowed.<br>\r\n4. The art work should be based on our theme or any technical awareness topic.<br>\r\n5. Participants should carry their own colours and brushes.<br>\r\n6. Any digital or physical reference at the venue are restricted.<br>\r\n3. Judge\'s decision will be the final decision', '1', 'FREE', 'NA', '1 hr 30 mins'),
(3, 'Best Out of E-Waste', '\"Think outside the Trash\" ', '1. Duration - 2 hrs<br>\r\n2. Only e-waste will be provided ( participants can bring their own e-waste also). <br>\r\n3. Glue , scissors, and another stationery should be carried by the participants.<br>\r\n4. Use of mobile phones or other reference materials is not allowed.<br>\r\n5. Judge\'s decision will be the final decision.', '2', 'Rs. 30 per participant', 'NA', '2 hrs');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `name` varchar(50) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`name`, `college_name`, `email`, `phone`) VALUES
('rucha', 'ruia', 'ruchamahabal2@gmail.com', '9167855097');

-- --------------------------------------------------------

--
-- Table structure for table `solo_registrations`
--

DROP TABLE IF EXISTS `solo_registrations`;
CREATE TABLE IF NOT EXISTS `solo_registrations` (
  `email` varchar(255) DEFAULT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_events`
--

DROP TABLE IF EXISTS `sub_events`;
CREATE TABLE IF NOT EXISTS `sub_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` text,
  `rules` text,
  `members` text,
  `registration_fees` text,
  `prize` text,
  `time` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_events`
--

INSERT INTO `sub_events` (`id`, `title`, `description`, `rules`, `members`, `registration_fees`, `prize`, `time`) VALUES
(1, 'Maze Racing', 'On the Spot Pay and Play', 'NA', 'NA', 'NA', 'NA', 'NA'),
(2, 'Rubic\'s Cube', 'A puzzle to be solved in the form of a 3x3 plastic cube covered with multicoloured squares, which the player has to twist and turn so that all the squares on each face are of the same colour. The fastest one wins!', 'NA', '1', 'FREE', 'NA', 'No time limit. The fastest one wins!'),
(3, 'PUBG', 'DAY 1: Squad<br>\r\nDAY 2: Duo', '3 classic room matches will be played. Average of these matches will be taken to decide the 1st, 2nd and 3rd positions.\r\n', 'DAY 1: Squad<br>\r\nDAY 2: Duo', 'DAY 1: Squad - Rs. 80 per Team<br>\r\nDAY 2: Duo - Rs. 40 per Team', '1st position - Rs. 800 + Trophy<br>\r\n2nd position - Rs. 600<br>\r\n3rd position - Rs. 300<br>', 'NA'),
(4, 'Treasure Hunt', 'Level after another, get closer to the treasure, be intelligent, smarter and faster to reach the ultimate goal!', '1. Maximum 5 members in a team.<br>\r\n2. Details of the event will be disclosed at the venue', '1 to 5', 'Rs. 50', 'Rs. 500 + Vouchers', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `team_registrations`
--

DROP TABLE IF EXISTS `team_registrations`;
CREATE TABLE IF NOT EXISTS `team_registrations` (
  `email` varchar(255) DEFAULT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `no_of_members` int(11) DEFAULT NULL,
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `registration_fees` text NOT NULL,
  `prize` text NOT NULL,
  `time` text,
  `levels` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_events`
--

INSERT INTO `tech_events` (`id`, `title`, `description`, `rules`, `members`, `languages`, `registration_fees`, `prize`, `time`, `levels`) VALUES
(1, 'CodeMapper', 'Get your brains thinking in this amazing Python Coding Challenge!', '1. Three python levels to be solved as a part of the challenge.<br>\r\n2. Access to any electronic media is prohibited.<br>\r\n3. Compilation is allowed only ten times in the entire challenge.', '1', 'Python', '30', 'Trophy + Certificate', '2 hrs', 1),
(2, 'Error Hunt', 'Test how observant and speedy you are by finding the errors in the 3 Java or C++ snippets given to you, as fast\r\nas possible!', 'NA', '1', 'C++, Java', '20', 'Winner: 300 Rs.\r\nRunner up: 150 Rs.\r\n', '1 hr', 3),
(3, 'Blind Coding', 'Master of Code? Blind Coding should be an easy task for you then! Participants will have their monitors shut as\r\nthey race against time and of course other programmers to code 1 simple program in Java. Winner takes all!\r\n', '1. You can only switch on the monitor when you submit the final code.<br>\r\n2. Evaluation will be based on how much error free your code is.', '1', 'Java', '20', '300 Rs.', '60', 1),
(4, 'Photoshop', 'Inspired by James Friedman?! We got your backs! Come here and showcase how creative you can get with your\r\nPhotoshop skills and how fast you can come up with exemplary ideas in a pinch situation!', '1.Twenty images will be provided. Participants have to create a composite image using atleast 5 images.<br>\r\n', '1', 'NA', '50 Rs.', '300 Rs.', '1 hr', 1),
(5, 'Code In Less', 'Fan of optimization? Prepare the Best code using as few lines and resources as possible and solve the problem in the most fashionable\r\nway possible! Choose from either c++, Java or Python, but most importantly, choose wisely.\r\n', 'NA', '1', 'PHP, Java, Python, C++', '20', '300 Rs.', '60', 1),
(6, 'Switch Hero', 'Venture into the wilderness of creating codes for the corporates! Write codes which will be completed by your partner\r\nwithout any means of communication!<br> Consequently, complete his code in as less time as possible and become The\r\nUltimate Switch Hero!\r\n<br>\r\n2 man teams, race against a time limit of 1:30 hrs', '1. The switch will be done either after completing 5 lines of code or after every ten minutes.<br>\r\n2. Switching will happen till both the team members finish their code or the time limit is exceeded. ', '2', 'Java, Python', '30', '400 Rs.', '1 hr 30 mins', 1),
(7, 'Quiz', 'Got a Million Tera Bytes of Tech Data in your head? Participate in the Ultimate quizzing event and go from Self\r\nProclaimed Tech Guru to Certified Tech Guru! Take from your past experiences of gaming and tech knowledge to\r\nmake your competition bite the dust!\r\n<br>\r\nLevel 1: Evolution of Games\r\n<br>\r\nLevel 2: Tech Quiz', 'NA', '1', 'NA', '0', 'Certificate', '120', 2),
(8, 'Tech Debate', 'Indulge yourself in the most productive event at TXP 2.0 as you debate your way along the most controversial tech\r\ntopics and showcase not just new ideas but win people\'s hearts with the amazing deductions and best possible\r\nconclusions!', 'NA', '2 to 5', 'NA', '0', 'NA', '10', 1),
(9, 'Code Relay', 'Level 1: Prepare codes in as many languages as possible using the input output set given to you!\r\nTeam to get expected outputs in as many languages as possible wins! 2PC\'s Per team\r\n<br>Level 2: Put your cognitive abilities to the test as you analyse the given code and translate it into another language!', 'NA', '1 to 3', 'NA', '30', 'Trophy', '120', 2),
(10, 'Web Designing', 'Love Naruto? Become a master of cloning and coding as you try and create the same website as flashed on screen!', 'NA', '1', 'NA', '30', '400 Rs.', '120', 2),
(11, 'Tech Exhibition', 'Think something new and out of the box! Come up with something innovative and impressive in the form of a project and showcase your skills to the world!', '1. Max 3 student per team.\r\n2. Student should bring their own laptop and electronic associate needed for their project.\r\n3. Abstract should be mailed on or before 1st Jan ,2019 along with student\'s name , department, year, college name, mail id, and phone number.\r\n4. Only working projects are allowed to be showcased.\r\n5. Judge\'s decision will be the final\r\ndecision', '1 to 3 members per team', 'NA', '0', 'NA', '0', 1),
(12, 'Tech PPT Competition', 'Present a PPT to showcase your communication and interaction skills. Research on the interesting topics(to be disclosed soon) and present and convince the audience and judges with the best of the facts and valid explanations!', 'NA', 'NA', 'NA', '0', 'NA', '0', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
