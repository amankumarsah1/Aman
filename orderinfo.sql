-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 06:24 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `cid` bigint(255) NOT NULL,
  `ordertype` varchar(10) NOT NULL,
  `DOD` date NOT NULL,
  `hour` bigint(20) NOT NULL,
  `min` bigint(20) NOT NULL,
  `ap` varchar(2) NOT NULL,
  `date` datetime DEFAULT NULL,
  `cname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `daddress` varchar(60) NOT NULL,
  `pin` bigint(6) NOT NULL,
  `bakery` varchar(20) NOT NULL,
  `paymentmethod` varchar(20) DEFAULT NULL,
  `msg` varchar(200) DEFAULT 'N/A',
  `mmsg` varchar(200) DEFAULT 'N/A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`cid`, `ordertype`, `DOD`, `hour`, `min`, `ap`, `date`, `cname`, `email`, `mobile`, `daddress`, `pin`, `bakery`, `paymentmethod`, `msg`, `mmsg`) VALUES
(3, 'delivery', '2021-06-09', 3, 10, 'am', NULL, 'Barun Verma', 'barun123@gmail.com', 9934794889, 'Nawada colony, chas', 831005, 'Blackforestcake', 'paytm', '		great..			', '			increase products...		'),
(4, 'pickup', '2021-05-27', 3, 10, 'am', NULL, 'Abhinav Anand', 'abhi123@gmail.com', 8894794889, 'Sector 1B , Bokaro', 827013, 'roll', 'credit', '				', '					'),
(5, 'pickup', '2021-05-11', 8, 10, 'pm', NULL, 'Aniket Chaurashia', 'anic123@gmail.com', 8894799987, 'Sector 4G , Bokaro', 827013, 'cupcake', 'cod', '				', '		Deliveri Must Be On Time...			'),
(6, 'pickup', '2021-05-11', 6, 10, 'pm', NULL, 'Dibyanshu Gupta', 'dib123@gmail.com', 8898879987, 'Gujrat colony , Bokaro', 827013, 'doughnuts', 'cod', '				Nice one...', '		Deliveri Must Be On Time...			'),
(8, 'delivery', '2021-06-30', 5, 40, 'pm', NULL, 'Sonika Aggrawal', 'soni123@gmail.com', 3987534987, 'Yadhuvansh nagar , Chas', 827013, 'cookies', 'cod', '					', '					increase iteams....'),
(9, 'delivery', '2021-06-30', 5, 40, 'pm', NULL, 'Sonika Aggrawaal', 'soni123@gmail.com', 3987534987, 'Yadhuvansh nagar , Chas', 827013, 'cookies', 'cod', '					', '					increase iteams....'),
(11, 'delivery', '2021-06-30', 5, 20, 'pm', NULL, 'Varsha Pandey', 'var123@gmail.com', 8787876545, 'Sec 1B, Bokaro', 878765, 'cookies', 'cod', '					', '					'),
(13, 'pickup', '2021-06-16', 8, 20, 'am', NULL, 'Akash Kumar Sah', 'akash123@gmail.com', 986767234, 'Chas , Bokaro', 456887, 'roll', 'gpay', '					', '					'),
(15, 'pickup', '0000-00-00', 8, 20, 'am', NULL, 'Akash Kumar Sah', 'akash123@gmail.com', 9934794889, 'Chas , Bokaro', 456887, 'roll', 'gpay', '					good', '					improve'),
(17, 'pickup', '2021-06-16', 8, 20, 'am', NULL, 'Ravi Kumar Sah', 'ravi123@gmail.com', 986767234, 'Chas , Bokaro', 456887, 'roll', 'gpay', '					good', '					improve'),
(19, 'pickup', '0000-00-00', 8, 20, 'am', NULL, 'Mukul Kumar Sah', 'ravi123@gmail.com', 986767234, 'Chas , Bokaro', 456877, 'roll', 'gpay', '					good', '					improve'),
(20, 'pickup', '2021-06-16', 8, 20, 'am', NULL, 'Mukul Kumar Sah', 'ravi123@gmail.com', 986767234, 'Chas , Bokaro', 456887, 'roll', 'gpay', '					good', '					improve'),
(21, 'pickup', '2021-06-23', 7, 30, 'am', NULL, 'Abhisek Raj', 'abhi123@gmail.com', 9876754234, 'Kadma , Jamshedpur', 831013, 'butterscotchcake', 'cod', '					', '					'),
(22, 'pickup', '2021-06-23', 7, 30, 'am', NULL, 'Abhisek Raj', 'abhi123@gmail.com', 9876754234, 'Kadma , Jamshedpur', 831013, 'butterscotchcake', 'cod', '					', '					'),
(28, 'delivery', '2021-06-16', 7, 20, 'pm', NULL, 'Nishant Kumar', 'nishant123@gmail.com', 8765432123, 'Deoghar', 765432, 'doughnuts', 'cod', '					', '					');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderinfo`
--
ALTER TABLE `orderinfo`
  MODIFY `cid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
