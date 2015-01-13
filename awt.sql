-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2015 at 02:04 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `awt`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
`ans_id` int(11) NOT NULL,
  `ques_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `answer` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('148cd64428ba8921c8af11ffb8e0760b', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0', 1421145543, ''),
('655eaca573bc9f763f66b401cc902d12', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0', 1421145543, ''),
('79dce58c66b0c38b1eee09b4760ff4ab', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0', 1421145299, ''),
('90f017d1b464d0dd2da59a99022a83f1', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0', 1421152432, ''),
('951725502da35365264054574def9770', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0', 1421145543, ''),
('f62669a38e3e41961fe51ed95c1860f6', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0', 1421145844, '');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `session_id` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`session_id`, `name`) VALUES
('03b119d8bab42359ea67872ff49560c7', 'rr'),
('20a63f692137b6dbae29773c9c4f0ded', 'Mr. Bean'),
('30d0605958d2809a2861f8f32871c6c1', 'eshan'),
('46b4174aff6817490bc1f9390ab5985e', 'rr'),
('5ac3cbe01169555abe5cc91e29fb3837', 'Mr. Bean'),
('6ff5854ed7caabdee488ac02fa868a53', 'rr'),
('71dfc151f5c564d55e1a0fdccb64e2b3', 'rr'),
('76df6b9d90fd39ab8d44dcf1f136b4f6', 'rr'),
('c26e0bc58adb673e3f77860224a760ab', 'rr'),
('ebd23f214df85128da2e489199925886', 'rr');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`ques_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `question` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ques_id`, `category`, `title`, `tags`, `question`) VALUES
(1, '0', 'Ques1', '', 'ques1 description'),
(2, '0', 'Ques2', '', 'Ques2 description');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `email`, `password`) VALUES
('Mr. Bean', 'bean', 'bean@yahoo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
('sdfa', 'd', 'dd@d.lk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('dfdf', 'dfgvdf', 'aa@kk.lk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('asdd', 'dfrhy', 'asd@ddf.lk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('eshan', 'esh', 'esh@sfds.lk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('slfjer', 'lijfre', 'hr@ff.lk', 'ac2646028f5b8b9bbf7a967f4ac71b8866135211'),
('ijueir', 'lrej', 'fer@ff.lk', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
('rr', 'rr', 'ss@dd.lk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
 ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
MODIFY `ans_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `ques_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
