-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2013 at 10:17 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cerebrum`
--

-- --------------------------------------------------------

--
-- Table structure for table `codeans`
--

CREATE TABLE IF NOT EXISTS `codeans` (
  `id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q6` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q7` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q8` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q9` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q10` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q11` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q12` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q13` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q14` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q15` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q16` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q17` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q18` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q19` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q20` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `codeans`
--

INSERT INTO `codeans` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`) VALUES
('655338562', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designans`
--

CREATE TABLE IF NOT EXISTS `designans` (
  `id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q6` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q7` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q8` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q9` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q10` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q11` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q12` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q13` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q14` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q15` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q16` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q17` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q18` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q19` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q20` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `designans`
--

INSERT INTO `designans` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`) VALUES
('655338562', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/design/Untitled.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quizans`
--

CREATE TABLE IF NOT EXISTS `quizans` (
  `id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q3` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q4` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q6` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q7` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q8` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q9` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q10` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q11` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q12` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q13` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q14` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q15` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q16` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q17` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q18` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q19` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q20` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quizans`
--

INSERT INTO `quizans` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`) VALUES
('655338562', 'hi', ',.k', 'hi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(5) NOT NULL,
  `score` int(100) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `college` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `online` int(11) NOT NULL DEFAULT '0',
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level`, `score`, `name`, `email`, `phonenumber`, `college`, `online`, `username`) VALUES
('100006412233347', 4, 50, 'Cec Foces', 'cecfoces13@gmail.com', '2667+', 's5', 0, 'cec.foces.5'),
('655338562', 3, 50, 'Akhil Nadh P C', 'weneverdies@gmail.com', '9633311164', 's5d', 1, 'weneverdies');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
