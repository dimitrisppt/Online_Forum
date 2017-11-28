-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 11:21 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c9`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab_posts`
--

CREATE TABLE IF NOT EXISTS `lab_posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lab_posts`
--

INSERT INTO `lab_posts` (`post_id`, `subject`, `message`) VALUES
(1, 'Does this work?', 'Yes it works'),
(2, 'New Question', 'New Post'),
(3, 'test subj', 'test msg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'User1', 'pass'),
(2, 'User1', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `post_replies`
--

CREATE TABLE IF NOT EXISTS `post_replies` (
  `post_id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `email`, `username`, `password`) VALUES
(1, 'Full Name ', 'User1', 'pass'),
(2, 'user2', 'username2', 'pass2'),
(3, 'emailTest', 'usernameTest', 'passtest'),
(4, 'disihifsdo@odfjo.com', 'usertest', 'passtest'),
(5, 'test', 'test', 'test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
