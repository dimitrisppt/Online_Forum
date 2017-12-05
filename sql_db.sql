-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2017 at 10:50 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `lab-indigo`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab_posts`
--

CREATE TABLE `lab_posts` (
  `post_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `username` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_posts`
--

INSERT INTO `lab_posts` (`post_id`, `subject`, `message`, `username`) VALUES
(1, 'Does this work?', 'Yes it works', NULL),
(2, 'New Question', 'New Post', NULL),
(3, 'test subj', 'test msg', NULL),
(4, 'Hello', 'Hello fkuhufish', NULL),
(5, 'Hello', 'Hello fkuhufish', NULL),
(6, 'fgfg', 'dfgdfg', NULL),
(7, 'fgfg', 'dfgdfg', NULL),
(8, 'dfhuisdh', 'lfihohdfodwfhf', NULL),
(9, 'This is 2132', 'qhiuhiuhiwhIDHWFIF', NULL),
(10, 'This is a question', 'this is an answer', NULL),
(11, 'This is a question', 'this is an answer', NULL),
(12, 'hfiufhd', 'sfdhufdhs', NULL),
(13, 'This is a question #2', 'This is a message #2', NULL),
(14, 'Test', 'testno3\r\n', NULL),
(15, 'Adding a question', 'question message', NULL),
(16, 'This is a test of height', 'Test of height\r\nTest of height\r\nTest of height\r\nTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of \r\nTest of height\r\nTest of height\r\nTest of height\r\nTest of height\r\nTest of height', NULL),
(17, 'Username Post', 'works good', 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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

CREATE TABLE `post_replies` (
  `reply_id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_replies`
--

INSERT INTO `post_replies` (`reply_id`, `subject`, `message`, `post_id`) VALUES
(16, 'test4', 'test4', 1),
(17, 'love it ', 'thanks bro', 2),
(18, 'works good', 'yep', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `email`, `username`, `password`) VALUES
(1, 'Full Name ', 'User1', 'pass'),
(2, 'user2', 'username2', 'pass2'),
(3, 'emailTest', 'usernameTest', 'passtest'),
(4, 'disihifsdo@odfjo.com', 'usertest', 'passtest'),
(5, 'testemail@test.com', 'testuser', '1234'),
(6, 'emailTest@hotmail.com', 'user', 'test'),
(7, 'testno2@hotmail.com', 'user2', 'test2'),
(8, 'testuser@hotmail.com', 'user', 'user'),
(9, 'testEmail@test.com', 'testuser2', 'pass'),
(10, 'testUser3@test.com', 'user3', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab_posts`
--
ALTER TABLE `lab_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_replies`
--
ALTER TABLE `post_replies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab_posts`
--
ALTER TABLE `lab_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post_replies`
--
ALTER TABLE `post_replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
=======
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
