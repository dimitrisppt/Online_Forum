-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2017 at 01:06 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_posts`
--

INSERT INTO `lab_posts` (`post_id`, `subject`, `message`) VALUES
(1, 'Does this work?', 'Yes it works'),
(2, 'New Question', 'New Post'),
(3, 'test subj', 'test msg'),
(4, 'Hello', 'Hello fkuhufish'),
(5, 'Hello', 'Hello fkuhufish'),
(6, 'fgfg', 'dfgdfg'),
(7, 'fgfg', 'dfgdfg'),
(8, 'dfhuisdh', 'lfihohdfodwfhf'),
(9, 'This is 2132', 'qhiuhiuhiwhIDHWFIF'),
(10, 'This is a question', 'this is an answer'),
(11, 'This is a question', 'this is an answer'),
(12, 'hfiufhd', 'sfdhufdhs'),
(13, 'This is a question #2', 'This is a message #2'),
(14, 'Test', 'testno3\r\n'),
(15, 'Adding a question', 'question message'),
(16, 'This is a test of height', 'Test of height\r\nTest of height\r\nTest of height\r\nTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of heightTest of \r\nTest of height\r\nTest of height\r\nTest of height\r\nTest of height\r\nTest of height');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_replies`
--

INSERT INTO `post_replies` (`reply_id`, `subject`, `message`) VALUES
(1, 'Check reply ', 'check reply message'),
(2, 'check reply #2', 'check #2'),
(3, 'Thats the answer', 'answer'),
(4, 'test', 'test'),
(5, 'Message', 'new message'),
(6, 'blank page test', 'blank page'),
(7, 'new reply', 'reply message'),
(8, 'odiufsdiu', 'dsfkhdsfiuhsfd'),
(9, 'kuhfiuhafi', 'kjhisdhffsdhfds'),
(10, 'ddsffd', 'sdffs');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post_replies`
--
ALTER TABLE `post_replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
