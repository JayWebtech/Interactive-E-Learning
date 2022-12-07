-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2021 at 07:41 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `backend`
--

CREATE TABLE `backend` (
  `id` int(11) NOT NULL auto_increment,
  `uname` varchar(100) NOT NULL,
  `pword` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `backend`
--

INSERT INTO `backend` (`id`, `uname`, `pword`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `id` int(100) NOT NULL auto_increment,
  `textcap` mediumtext NOT NULL,
  `imgfile` varchar(200) NOT NULL,
  `lesson_type` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id`, `textcap`, `imgfile`, `lesson_type`, `class`, `video`) VALUES
(1, '<b>INTRODUCTION TO BASIC ARITHMETIC<br></b><br>Lorem ipsum dolor sit \r\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut \r\nlabore et dolore magna aliqua. Ut enim ad minim veniam,', '1623996405048.jpg', 'imgtext', 'Primary 1', ''),
(2, '<b>INTRODUCTION TO BASIC ARITHMETIC<br></b><br>Lorem ipsum dolor sit \r\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut \r\nlabore et dolore magna aliqua. Ut enim ad minim veniam,', '', 'videotext', 'Primary 1', 'VID-20200419-WA0002.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `english`
--

CREATE TABLE `english` (
  `id` int(100) NOT NULL auto_increment,
  `textcap` varchar(50000) NOT NULL,
  `imgfile` varchar(200) NOT NULL,
  `lesson_type` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `english`
--

INSERT INTO `english` (`id`, `textcap`, `imgfile`, `lesson_type`, `class`, `video`) VALUES
(1, '<b>INTRODUCTION TO BASIC ARITHMETIC<br></b><br>Lorem ipsum dolor sit \r\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut \r\nlabore et dolore magna aliqua. Ut enim ad minim veniam,', '1623996368396.jpg', 'imgtext', 'Primary 1', ''),
(2, '<b>INTRODUCTION TO BASIC ARITHMETIC<br></b><br>Lorem ipsum dolor sit \r\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut \r\nlabore et dolore magna aliqua. Ut enim ad minim veniam,', '', 'videotext', 'Primary 2', 'VID-20200419-WA0002.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `maths`
--

CREATE TABLE `maths` (
  `id` int(100) NOT NULL auto_increment,
  `textcap` varchar(50000) NOT NULL,
  `imgfile` varchar(200) NOT NULL,
  `lesson_type` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `maths`
--

INSERT INTO `maths` (`id`, `textcap`, `imgfile`, `lesson_type`, `class`, `video`) VALUES
(1, '<b>INTRODUCTION TO BASIC ARITHMETIC</b><br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qui', '1623996336733.jpg', 'imgtext', 'Primary 1', ''),
(2, '<b>INTRODUCTION TO BASIC ARITHMETIC<br></b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qui', '', 'videotext', 'Primary 1', 'VID-20200419-WA0002.mp4'),
(3, '<b>INTRODUCTION TO BASIC ARITHMETIC<br></b><br>Lorem ipsum dolor sit \r\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut \r\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quiLorem ipsum dolor sit \r\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut \r\nlabore et dolore magna aliqua. Ut enim ad minim veniam, qui Lorem ipsum dolor sit \r\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut \r\nlabore et dolore magna aliqua. Ut enim ad minim veniam, qui Lorem ipsum dolor sit \r\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut \r\nlabore et dolore magna aliqua. Ut enim ad minim veniam, qui Lorem ipsum dolor sit \r\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut \r\nlabore et dolore magna aliqua. Ut enim ad minim veniam, qui', '1625996584304.jpg', 'imgtext', 'Primary 1', '');
