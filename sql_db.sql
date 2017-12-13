-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2017 at 03:45 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_posts`
--

INSERT INTO `lab_posts` (`post_id`, `subject`, `message`, `username`, `preferred_name`, `date_posted`) VALUES
(1, 'PEP Assignment 9', 'Any clues how to do part (b) of the assignment?', 'k1631089@kcl.ac.uk', 'Farooqi, Omar', '2017-12-13 03:37:02'),
(2, 'Lab Project Issues', 'How do I use gradle?', '', '', '2017-12-13 03:37:14'),
(3, 'Issues With Swing', 'I keep getting an exception', 'k1630513@kcl.ac.uk', 'Papatheodoulou, Dimitris', '2017-12-13 03:39:53'),
(4, 'Microsoft Word VS Pages', 'Which do you guys suggest I use for documentation?', '', '', '2017-12-13 03:44:05');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_replies`
--

INSERT INTO `post_replies` (`reply_id`, `message`, `post_id`, `username`, `preferred_name`, `date_posted`) VALUES
(1, 'Have you tried reading the brief?', 1, 'k1631089@kcl.ac.uk', 'Farooqi, Omar', '2017-12-13 03:27:02'),
(2, 'Please look at the other answers for hints.', 1, '', '', '2017-12-13 03:27:16'),
(3, 'I would like help on this too please.', 1, 'k1630513@kcl.ac.uk', 'Papatheodoulou, Dimitris', '2017-12-13 03:33:44'),
(4, 'There are some suggested tutorials on KEATS', 2, '', '', '2017-12-13 03:37:48'),
(5, 'Use a try-catch block', 3, 'k1630241@kcl.ac.uk', 'Demmy, Zolt', '2017-12-13 03:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `preferred_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `preferred_name`) VALUES
(1, 'k1631089@kcl.ac.uk', 'Farooqi, Omar'),
(2, 'k1630513@kcl.ac.uk', 'Papatheodoulou, Dimitris'),
(3, 'k1630241@kcl.ac.uk', 'Demmy, Zolt');

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `post_replies`
--
ALTER TABLE `post_replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;