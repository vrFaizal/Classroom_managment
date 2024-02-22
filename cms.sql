-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 03:41 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `display` (IN `name` INT)  select * from class where class_id=name$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `allocate`
--

CREATE TABLE `allocate` (
  `f_id` varchar(20) NOT NULL,
  `cr_id` varchar(20) NOT NULL,
  `class_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sem` int(1) NOT NULL,
  `start` time(1) NOT NULL,
  `end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `allocate`
--
DELIMITER $$
CREATE TRIGGER `check` BEFORE INSERT ON `allocate` FOR EACH ROW if new.end>'17:00:00' THEN
SET new.end='17:00:00';
end if
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `status`) VALUES
(101, 1),
(102, 0),
(103, 0),
(104, 0),
(105, 0),
(201, 0),
(202, 0),
(203, 0),
(204, 0),
(205, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cr`
--

CREATE TABLE `cr` (
  `img` varchar(30) NOT NULL,
  `cr_id` varchar(20) NOT NULL,
  `cr_name` varchar(20) NOT NULL,
  `cr_branch` varchar(20) NOT NULL,
  `sem` int(1) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cr`
--

INSERT INTO `cr` (`img`, `cr_id`, `cr_name`, `cr_branch`, `sem`, `mobile`) VALUES
('return.JPG', '4NI22CS406', 'Harsha', 'CS&E', 5, '8722831505'),
('return.JPG', '4NI22CS407', 'Harsha', 'CS&E', 6, '8310163073'),
('return.JPG', '4NI22CS408', 'Kiran', 'CS&E', 3, '8310163073'),
('return.JPG', '4NI22CS411', 'Vaishnavi', 'CS&E', 4, '8496939603'),
('return.JPG', '4NI22IS401', 'Afrid', 'IS&E', 6, '8317477430'),
('return.JPG', '4NI22IS404', 'Balaji', 'IS&E', 3, '7892575763'),
('return.JPG', '4NI22IS409', 'Krushik Gowda', 'IS&E', 5, '9620366469'),
('return.JPG', '4NI22IS410', 'Farhan', 'IS&E', 4, '7349457250');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `img` varchar(30) NOT NULL,
  `f_id` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `f_branch` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`img`, `f_id`, `fname`, `lname`, `f_branch`, `phone`, `email`) VALUES
('KVM_3603-1.jpg', 'FY100', 'Rashmi ', 'M R', 'CS&E', '8888888888', 'rashmimr@gmail.com'),
('sandhya-cse.jpg', 'FY101', 'Sandhya', 'S', 'CS&E', '9999999999', 'sandhyas@gmail.com'),
('bsj-cse.jpg', 'FY102', 'Jayashree', 'B S', 'CS&E', '7777777777', 'jayashreebs@gmail.com');

-- --------------------------------------------------------

--
-- Stand-in structure for view `free`
-- (See below for the actual view)
--
CREATE TABLE `free` (
`class_id` int(3)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `frees`
-- (See below for the actual view)
--
CREATE TABLE `frees` (
`class_id` int(3)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `img` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `mno` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`img`, `fname`, `position`, `user_id`, `mno`, `password`, `branch`) VALUES
('return.JPG', 'Harsha', 'cr', '4NI22CS406', '8722831505', '0511@haru', 'CS&E'),
('return.JPG', 'Harsha', 'cr', '4NI22CS407', '8310163073', 'harshav', 'CS&E'),
('return.JPG', 'Kiran', 'cr', '4NI22CS408', '8310163073', 'kiranganachari', 'CS&E'),
('return.JPG', 'Vaishnavi', 'cr', '4NI22CS411', '8496939603', 'vaishnavi', 'CS&E'),
('return.JPG', 'Afrid', 'cr', '4NI22IS401', '8317477430', 'afrid', 'IS&E'),
('return.JPG', 'Balaji', 'cr', '4NI22IS404', '7892575763', 'balaji', 'IS&E'),
('return.JPG', 'Krushik Gowda', 'cr', '4NI22IS409', '9620366469', 'krushikgowda', 'IS&E'),
('return.JPG', 'Farhan', 'cr', '4NI22IS410', '7349457250', 'farhan', 'IS&E'),
('KVM_3603-1.jpg', 'Rashmi ', 'faculty', 'FY100', '8888888888', 'rashmimr', 'CS&E'),
('sandhya-cse.jpg', 'Sandhya', 'faculty', 'FY101', '9999999999', 'sandhyas', 'CS&E'),
('bsj-cse.jpg', 'Jayashree', 'faculty', 'FY102', '7777777777', 'jayashreebs', 'CS&E');

-- --------------------------------------------------------

--
-- Structure for view `free`
--
DROP TABLE IF EXISTS `free`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `free`  AS  select `class`.`class_id` AS `class_id`,`class`.`status` AS `status` from `class` where (`class`.`status` = 0) ;

-- --------------------------------------------------------

--
-- Structure for view `frees`
--
DROP TABLE IF EXISTS `frees`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `frees`  AS  select `class`.`class_id` AS `class_id`,`class`.`status` AS `status` from `class` where (`class`.`status` = 0) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocate`
--
ALTER TABLE `allocate`
  ADD UNIQUE KEY `class_id` (`class_id`) USING BTREE,
  ADD KEY `cr_id` (`cr_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `cr`
--
ALTER TABLE `cr`
  ADD PRIMARY KEY (`cr_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `login_data` (`fname`,`position`,`mno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
