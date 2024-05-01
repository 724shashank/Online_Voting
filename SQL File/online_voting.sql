-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2021 at 01:04 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `user` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user`, `date`, `subject`, `message`) VALUES
('shashankyadav724@gmail.com', '2020-12-22', 'Allowance ', 'kindly allow me to cast vote my current status is disallowed');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user` varchar(50) NOT NULL,
  `pswd` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pswd`, `utype`) VALUES
('admin', '12345', 'admin'),
('happu@gmail.com', '12345', 'voter'),
('Harsh724@gmail.com', '12345', 'voter'),
('ishan724@gmail.com', '12345', 'voter'),
('ishan@gmail.com', '12345678', 'voter'),
('Pappu@gmail.com', '12345', 'voter'),
('shashankyadav724@gmail.com', '12345', 'voter'),
('yadav724@gmail.com', '12345678', 'voter'),
('yadav@gmail.com', '12345678', 'voter');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(100) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `msg`) VALUES
(1, 'Kindly check site for regular updates.'),
(2, 'Voter can vote only once make your vote count.'),
(3, 'Online-voting starts from xx/xx/xxxx.'),
(4, 'Voter can give feed-back after logging in.'),
(5, 'Voter will have to candidate acc. to there area.'),
(6, 'Voter can view results by clicking on View-Results button.'),
(7, 'If your status is  disallowed you can not vote.');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE IF NOT EXISTS `party` (
  `cname` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `vote` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`cname`, `pname`, `state`, `area`, `address`, `photo`, `vote`) VALUES
('Ashish Bajpai', 'Congress', 'Uttar-Pradesh', 'Sitapur', 'Civil-lines Sitapur', 'images/congress.png', 3),
('Rishabh Bajpai', 'BJP', 'Uttar-Pradesh', 'Sitapur', 'Civil-lines Sitapur', 'images/bjp.png', 2),
('Shashank Yadav', 'Samajwadi-Party', 'Uttar-Pradesh', 'Sitapur', 'Civil-lines Sitapur', 'images/vote-for-your-party-i-samajwadi-party.png', 2),
('Vishal Gautam', 'BSP', 'Uttar-Pradesh', 'Sitapur', 'Sanjay Nagar', 'images/BSP Flag.png', 0),
('Ashish Pandey', 'BJP', 'Uttar-Pradesh', 'kanpur', 'Sanjay Nagar', 'images/bjp.png', 1),
('Harsh Yadav', 'Samajwadi-Party', 'Uttar-Pradesh', 'kanpur', '18 loharbagh,sitapur', 'images/vote-for-your-party-i-samajwadi-party.png', 1),
('Rishabh Pandey', 'Congress', 'Uttar-Pradesh', 'kanpur', '18 Arya-Nagar,Sitapur', 'images/congress.png', 0),
('Rohit kumar', 'BSP', 'Uttar-Pradesh', 'kanpur', '18 Arya-Nagar,kanpur', 'images/BSP Flag.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `user` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `mobile` int(20) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `chance` int(100) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user`, `name`, `state`, `city`, `address`, `dob`, `mobile`, `utype`, `photo`, `status`, `chance`) VALUES
('happu@gmail.com', 'Happu', 'UP', 'Kanpur', 'Kanpur', '12/2/2001', 1234567890, 'Voter', 'images/Photo.JPG', 'allowed', 1),
('Harsh724@gmail.com', 'Harsh Yadav', 'UP', 'Sitapur', 'loharbagh ', '28/12/2001', 2147483647, 'Voter', 'images/Photo.JPG', 'allowed', 1),
('ishan@gmail.com', 'Ishan ', 'UP', 'Sitapur', 'Lohar Bagh', '25/12/2009', 1234567890, 'Voter', 'images/passport_picture.jpg', 'allowed', 1),
('Pappu@gmail.com', 'Pappu', 'UP', 'Sitapur', 'Sitapur', '28-12-2001', 1234567890, 'Voter', 'images/Photo.JPG', 'allowed', 1),
('shashankyadav724@gmail.com', 'Shashank Yadav', 'Uttar-Pradesh', 'Sitapur', '18 loharbagh,Sitapur', '28/12/2001', 2147483647, 'Voter', 'images/passport_picture.jpg', 'allowed', 1),
('yadav724@gmail.com', 'Yadav', 'UP', 'Sitapur', 'Sitapur', '28/12/2001', 1234567890, 'Voter', 'images/passport_picture_.jpg', 'allowed', 1),
('yadav@gmail.com', 'Harsh', 'UP', 'Sitapur', 'Sitapur', '28/12/2001', 1234567890, 'Voter', 'images/Photo.JPG', 'allowed', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
