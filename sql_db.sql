-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2017 at 05:57 PM
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
  `username` varchar(50) DEFAULT NULL,
  `preferred_name` varchar(50) NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_posts`
--

INSERT INTO `lab_posts` (`post_id`, `subject`, `message`, `username`, `preferred_name`, `date_posted`) VALUES
(19, 'PEP Assignment 9', 'How do you do it?', 'user1', '', '2017-12-05 00:00:00'),
(20, 'Lab Project Issues', 'Can I not do it?', 'user1', '', '2017-12-05 00:00:00'),
(21, 'sdfgsdfg', 'sdfgsdfg', 'k1631089@kcl.ac.uk', '', '2017-12-12 00:00:00'),
(22, 'reeee', 'gaaaaa', 'k1631089@kcl.ac.uk', '', '2017-12-12 00:00:00'),
(23, 'llkkkkk', 'ffffqq', 'k1631089@kcl.ac.uk', 'k1631089@kcl.ac.uk', '2017-12-12 00:00:00'),
(24, 'last one', 'ggggg', 'k1631089@kcl.ac.uk', 'Farooqi, Omar', '2017-12-12 00:00:00'),
(25, 't-2', 'sdfgsdfg', 'k1631089@kcl.ac.uk', 'Farooqi, Omar', '2017-12-12 00:00:00'),
(26, 'Test', 'sdgggqqqqq', '', '', '2017-12-12 00:00:00'),
(27, 'new one', 'ssaaa', '', '', '2017-12-12 16:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `post_replies`
--

CREATE TABLE `post_replies` (
  `reply_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `preferred_name` varchar(50) NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_replies`
--

INSERT INTO `post_replies` (`reply_id`, `message`, `post_id`, `username`, `preferred_name`, `date_posted`) VALUES
(20, 'No clue bro', 19, 'user1', '', '2017-12-05 00:00:00'),
(21, 'yes', 20, 'user1', '', '2017-12-05 00:00:00'),
(22, 'Test reply', 19, 'user1', '', '2017-12-05 00:00:00'),
(23, 'test', 19, '', '', '2017-12-08 00:00:00'),
(24, 'yeaaa', 21, 'k1631089@kcl.ac.uk', '', '2017-12-12 00:00:00'),
(25, 'tstt', 24, 'k1631089@kcl.ac.uk', '', '2017-12-12 00:00:00'),
(26, 'raw', 19, 'k1631089@kcl.ac.uk', 'Farooqi, Omar', '2017-12-12 00:00:00'),
(27, 'sdfsdfg', 25, 'k1631089@kcl.ac.uk', 'Farooqi, Omar', '2017-12-12 00:00:00'),
(28, 'test', 25, 'k1631089@kcl.ac.uk', 'Farooqi, Omar', '2017-12-12 00:00:00'),
(29, 'yqqs', 19, '', '', '2017-12-12 16:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `preferred_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `preferred_name`) VALUES
(8, 'k1631089@kcl.ac.uk', 'Farooqi, Omar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab_posts`
--
ALTER TABLE `lab_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_replies`
--
ALTER TABLE `post_replies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab_posts`
--
ALTER TABLE `lab_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `post_replies`
--
ALTER TABLE `post_replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;