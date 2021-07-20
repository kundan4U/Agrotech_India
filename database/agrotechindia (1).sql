-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 12:55 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrotechindia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` varchar(20) NOT NULL,
  `user_pssword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `user_pssword`) VALUES
('admin', 'Pass@123');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `choice` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `services` varchar(50) DEFAULT NULL,
  `budget` varchar(50) DEFAULT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`choice`, `name`, `email`, `services`, `budget`, `message`) VALUES
('say hi', 'kameshear', 'kameshwarmaurya123@gmail.com', 'travell', 'yes', 'hi'),
('say-hi', 'manish', 'kameshwarmaurya123@gmail.com', 'Needed Services', 'Budget', 'hii'),
('say-hi', 'manish', 'kameshwarmaurya123@gmail.com', 'Needed Services', 'Budget', 'hii'),
('say-hi', 'manish', 'kameshwarmaurya123@gmail.com', 'Needed Services', 'Budget', 'hii'),
('say-hi', 'manish', 'kameshwarmaurya123@gmail.com', 'Needed Services', 'Budget', 'hii'),
('say-hi', 'manish', 'manish@gmail.com', 'Needed Services', 'Budget', 'hi i am manish'),
('say-hi', 'manish', 'manish@gmail.com', 'Needed Services', 'Budget', 'hi i am manish'),
('get-quote', 'manish', 'tigermanishkumar1999@gmail.com', 'Online Services', '2000 $', 'interested'),
('get-quote', 'ashish', 'tigermanishkumar1999@gmail.com', 'eCommerce Bussiness', '1500 $', 'intersted'),
('say-hi', 'manish kumar', 'kameshwarmaurya123@gmail.com', 'Needed Services', 'Budget', 'manish'),
('say-hi', 'love', 'love@gmail.com', 'Needed Services', 'Budget', 'love kumar'),
('say-hi', 'khghvkh', 'fhgt@gmail.com', 'Needed Services', 'Budget', 'fgxgrxgfxgfcxgxgxrxfg\r\nfxextrxf\r\nvtufvjh');

-- --------------------------------------------------------

--
-- Table structure for table `cropallocation`
--

CREATE TABLE `cropallocation` (
  `wh_id` varchar(20) NOT NULL,
  `wh_name` varchar(50) NOT NULL,
  `wh_capacity` int(50) NOT NULL,
  `cs_id` varchar(50) NOT NULL,
  `cs_name` varchar(50) NOT NULL,
  `cs_qauntity` int(50) NOT NULL,
  `wh_state` text NOT NULL,
  `wh_dist` text NOT NULL,
  `wh_area` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cropallocation`
--

INSERT INTO `cropallocation` (`wh_id`, `wh_name`, `wh_capacity`, `cs_id`, `cs_name`, `cs_qauntity`, `wh_state`, `wh_dist`, `wh_area`) VALUES
('Ali234', 'Alinagar godam', 120000, 'c1', 'potato', 8, 'UTTAR PRADESH', 'AGRA', 'PALHI');

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `crop_id` varchar(20) NOT NULL,
  `crop_name` varchar(50) NOT NULL,
  `crop_price` int(50) NOT NULL,
  `crop_qaulity` varchar(50) NOT NULL,
  `crop_discription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`crop_id`, `crop_name`, `crop_price`, `crop_qaulity`, `crop_discription`) VALUES
('c1', 'kharif crop', 500, 'High Quality', 'this quality is very good'),
('c2', 'Ravi crop', 320, 'Medium Quality', 'this quality bellow than very good quality'),
('c3', 'Zaid crop', 450, 'Poor Quality', 'this crop qulity is very poor'),
('c4', 'Rice', 1200, 'High Quality', 'this is very good quality');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`name`, `email`, `mobile`, `description`) VALUES
('kameshwar', 'kundanchauhan125@gmail.com', '7376150180', ''),
('kundaknd', 'kc946605@gmail.com', '7376150180', '                hii'),
('à¤¬à¤¸à¤œà¤¸à¤µà¥à¤', 'kundanchauhan125@gmail.com', '7376150180', '                hii');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizers`
--

CREATE TABLE `fertilizers` (
  `fertilizer_id` varchar(20) NOT NULL,
  `fertilizer_name` varchar(50) NOT NULL,
  `fertilizer_price` int(50) NOT NULL,
  `ferilizer_quantity` int(50) NOT NULL,
  `crop_used` varchar(50) NOT NULL,
  `fertilizer_discription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fertilizers`
--

INSERT INTO `fertilizers` (`fertilizer_id`, `fertilizer_name`, `fertilizer_price`, `ferilizer_quantity`, `crop_used`, `fertilizer_discription`) VALUES
('F1', 'Uria', 1500, 1, 'Crops 2', 'this is used in low quantity'),
('F2', 'Can', 263, 2, 'Crops 3', 'this is low denger'),
('F3', 'Nitro Fasfet', 450, 3, 'Crops 1', 'this is used for');

-- --------------------------------------------------------

--
-- Table structure for table `seeds`
--

CREATE TABLE `seeds` (
  `seed_id` varchar(20) NOT NULL,
  `seed_name` varchar(50) NOT NULL,
  `seed_price` int(50) NOT NULL,
  `seed_type` varchar(50) NOT NULL,
  `seed_categary` varchar(50) NOT NULL,
  `seed_discription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seeds`
--

INSERT INTO `seeds` (`seed_id`, `seed_name`, `seed_price`, `seed_type`, `seed_categary`, `seed_discription`) VALUES
('s1', 'alasi', 0, '', '', 'it is more usefull seeds'),
('s2', 'jeera', 200, 'Type 2', 'Categary 2', 'hi you are the best'),
('s3', 'kalimirch', 120, 'Type 3', 'Categary 3', 'kalimirch is the most usefull seeds for us'),
('s4', 'Applesad', 300, 'Type 1', 'Categary 1', 'this is also usefull'),
('s5', 'mango seeds', 300, 'Type 2', 'Categary 1', 'this is the most popular fruits');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `Name` varchar(30) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `Email_Id` varchar(25) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`Name`, `mobile_no`, `Email_Id`, `pass`) VALUES
('kameshwar', '7376150180', 'kameshwarmaurya123@gmail.', 'Maurya@199');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `cpassword`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cropallocation`
--
ALTER TABLE `cropallocation`
  ADD PRIMARY KEY (`wh_id`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`crop_id`);

--
-- Indexes for table `fertilizers`
--
ALTER TABLE `fertilizers`
  ADD PRIMARY KEY (`fertilizer_id`);

--
-- Indexes for table `seeds`
--
ALTER TABLE `seeds`
  ADD PRIMARY KEY (`seed_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
