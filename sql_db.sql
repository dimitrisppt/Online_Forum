-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2017 at 11:34 AM
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
  `message` text NOT NULL
  `topic_post` int(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_posts`
--

INSERT INTO `lab_posts` (`post_id`, `subject`, `message`) VALUES
(1, 'Does this work?', 'Yes it works'),
(2, 'New Question', 'New Post'),
(3, 'test subj', 'test msg');

-- --------------------------------------------------------

--
-- Table structure for table `post_replies`
--

CREATE TABLE `post_replies` (
  `post_id` int(11) NOT NULL,
  `message` text NOT NULL
  `post_topic` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab_posts`
--
ALTER TABLE `lab_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab_posts`
--
ALTER TABLE `lab_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
  
--need to link lab posts to users
--need to link post replies to users


--linking post replies to lab posts
ALTER TABLE `post_replies` ADD FOREIGN KEY(`post_topic`) REFERENCES `lab_posts`(`post_id`) ON DELETE CASCADE ON UPDATE CASCADE



--
-- Indexes for table `lab_posts`
--
ALTER TABLE `lab_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab_posts`
--
ALTER TABLE `lab_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;


-- -------------------------------------------------------

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
(4, 'disihifsdo@odfjo.com', 'usertest', 'passtest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

-- -------------------------------------------------------
--
-- Database: `lab-indigo`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;
