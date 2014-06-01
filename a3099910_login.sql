
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2012 at 10:56 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a3099910_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `level` int(2) NOT NULL AUTO_INCREMENT,
  `answer` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`level`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` VALUES(1, '1');
INSERT INTO `answers` VALUES(2, '2');
INSERT INTO `answers` VALUES(3, '3');
INSERT INTO `answers` VALUES(4, '4');
INSERT INTO `answers` VALUES(5, '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
CREATE TABLE `users` (   
`id` BIGINT( 20 ) UNSIGNED NOT NULL AUTO_INCREMENT ,   
`name` VARCHAR( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,   
`email` VARCHAR( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,     
`ftime` int(20) NOT NULL DEFAULT '1',
`college` varchar(20) NOT NULL,
`online` int(20) NOT NULL DEFAULT '0',
`active` int(1) NOT NULL DEFAULT '1',
`rtime` int(20) NOT NULL DEFAULT '0',
`level` int(2) NOT NULL DEFAULT '1',
`phonenumber` bigint(20) NOT NULL ,
PRIMARY KEY ( `id` )   
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ; 

