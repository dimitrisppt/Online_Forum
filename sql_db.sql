-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2017 at 11:51 AM
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
  `username` varchar(15) DEFAULT NULL,
  `data_posted` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_posts`
--

INSERT INTO `lab_posts` (`post_id`, `subject`, `message`, `username`, `data_posted`) VALUES
(19, 'PEP Assignment 9', 'How do you do it?', 'user1', '2017-12-05'),
(20, 'Lab Project Issues', 'Can I not do it?', 'user1', '2017-12-05');

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
  `message` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_replies`
--

INSERT INTO `post_replies` (`reply_id`, `message`, `post_id`, `username`, `date_posted`) VALUES
(20, 'No clue bro', 19, 'user1', '2017-12-05'),
(21, 'yes', 20, 'user1', '2017-12-05'),
(22, 'Test reply', 19, 'user1', '2017-12-05');

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post_replies`
--
ALTER TABLE `post_replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;