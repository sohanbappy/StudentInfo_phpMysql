-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 03:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `st_name` varchar(20) NOT NULL,
  `id` varchar(8) NOT NULL,
  `st_dof` date NOT NULL,
  `sex` varchar(20) NOT NULL,
  `st_mail` varchar(20) NOT NULL,
  `st_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`st_name`, `id`, `st_dof`, `sex`, `st_mail`, `st_phone`) VALUES
('sdjkdkja', '23214', '1987-12-12', 'male', 'sjcdhjshh@gmail.com', '2939292'),
('djkckjdsbkjcjsd', '28623487', '1997-11-11', 'male', 'cbsadjjsfjh3uy734@', '2332435'),
('BAPPY   AB', '33333333', '2016-11-04', 'Male', 'bappy@yahoo.com', '01969000000'),
('gfsghdfg1', '34523t45', '2016-11-09', 'Male', 'ewqqrqet', '543254'),
('eoioiefuiejijj', '44848484', '2016-11-16', 'Male', 'mamun@', '909090'),
('1111111111111d', 'aaaaaaaa', '2016-11-09', 'Female', 'ekloiefndin@ifhjnjk.', '09u23y983'),
('fekfkdskjskjf', 'lkfefnlk', '1999-12-12', 'Male', 'DVDKVK@lskkdlfk', '132323232323');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
