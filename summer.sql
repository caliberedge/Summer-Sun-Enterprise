-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2022 at 11:31 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `summer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `firstname`, `lastname`, `username`, `phone`, `password`) VALUES
(1, 'Daniel', 'Summer Sun', 'admin', '+234 8062979549', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `phone`, `address`, `message`) VALUES
(26, 'Ephraim Jeremiah', 'ephraimjeremaih64@gmail.com', '08062979549', '5 parklane Ayobo-Ipaja Lagos', 'jcakjxajskjajjkjjdkajkdkajdkjakjdkakdkadkkjdkjakkakkl\r\n\r\n\r\nmkdsakjkjajsjajkjdaj'),
(27, 'Ephraim Jeremiah', 'ephraimjeremaih64@gmail.com', '08062979549', '5 parklane Ayobo-Ipaja Lagos', ' cgjgdctjgcvtfrytvyvtvctfvifvy');

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

DROP TABLE IF EXISTS `editor`;
CREATE TABLE IF NOT EXISTS `editor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `about` longtext NOT NULL,
  `about_us` longtext NOT NULL,
  `business` longtext NOT NULL,
  `construction` longtext NOT NULL,
  `entertainment` longtext NOT NULL,
  `hospitality` longtext NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `map` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`ID`, `about`, `about_us`, `business`, `construction`, `entertainment`, `hospitality`, `address`, `email`, `phone`, `map`) VALUES
(1, '<h3 style=\"text-align:justify\"><span style=\"color:#800080\"><strong>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</strong></span></h3>\r\n\r\n<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n\r\n<ol>\r\n	<li><em>&nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat.</em></li>\r\n	<li><em><em>&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit.</em></em></li>\r\n	<li><em><em><em>&nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</em></em></em></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><em><em><em>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</em></em></em></p>\r\n', '<p>kjdjjjj</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>djjsjCras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>\r\n', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n\r\n<ol>\r\n	<li><em>&nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat.</em></li>\r\n	<li><em>&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit.</em></li>\r\n	<li><em>&nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</em></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><em>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</em></p>\r\n', '<ol>\r\n	<li style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>\r\n	<li style=\"text-align:justify\">hjhjhjh</li>\r\n	<li style=\"text-align:justify\">lklllk</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">jkjkjkkkkj</li>\r\n	<li style=\"text-align:justify\">kjkkjjk</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li><em>&nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat.</em></li>\r\n	<li><em>&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit.</em></li>\r\n	<li><em>&nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</em></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><em>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</em></p>\r\n', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n\r\n<ol>\r\n	<li><em>&nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat.</em></li>\r\n	<li><em>&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit.</em></li>\r\n	<li><em>&nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</em></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><em>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</em></p>\r\n', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n\r\n<ol>\r\n	<li><em>&nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat.</em></li>\r\n	<li><em>&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit.</em></li>\r\n	<li><em>&nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</em></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><em>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</em></p>\r\n', '5 pdfgghgjfgos', 'ephraimjeremaih64@gmail.com', '08062979549', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `slider1` varchar(2000) NOT NULL,
  `slider` varchar(2000) NOT NULL,
  `slider2` varchar(2000) NOT NULL,
  `slider3` varchar(2000) NOT NULL,
  `slider5` text NOT NULL,
  `slider6` text NOT NULL,
  `mission` varchar(2000) NOT NULL,
  `vission` varchar(2000) NOT NULL,
  `sse` varchar(5000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`ID`, `slider1`, `slider`, `slider2`, `slider3`, `slider5`, `slider6`, `mission`, `vission`, `sse`) VALUES
(1, 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', 'kosoitosigosjjsj', 'spopkgpskkwo-05o-wo-o-to2-o-wo-o', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', '<h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>\r\n\r\n<p>magna aliqua.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>\r\n	<li>irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>\r\n</ul>\r\n\r\n<p>culpa qui officia deserunt mollit anim id est laborum</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `pictures_name` varchar(2000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`ID`, `pictures_name`) VALUES
(1, '121125146about.jpg'),
(2, '661438326bus co.jpeg'),
(3, '955505415cccc.jpg'),
(4, '58075893preview.jpg'),
(5, '215485403hm.gif'),
(6, '957519573images (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `songlink` varchar(1000) NOT NULL,
  `songtittle` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `songtype` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `songlink`, `songtittle`, `artist`, `songtype`) VALUES
(7, 'https://audiomack.com/summersun-entertainment/song/are-you-lonely', 'Are You Lonely', 'D. Real', 'Afrobeats');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
