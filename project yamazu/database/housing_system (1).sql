-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 11:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housing system`
--

-- --------------------------------------------------------

--
-- Table structure for table `adimin`
--

CREATE TABLE `adimin` (
  `ID` int(11) NOT NULL,
  `Email` varchar(2550) NOT NULL,
  `Password` varchar(2550) NOT NULL,
  `Comfpassword` varchar(2550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `yourname` varchar(70) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_Number` int(14) NOT NULL,
  `messages` varchar(5000) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `yourname`, `Email`, `Phone_Number`, `messages`, `Date`) VALUES
(9, 'Muganwa', 'muvunyi@gmail.com', 78955527, 'muzatuzanire nibindi byinshi tutabona haruguru', '2021-08-09 13:49:07'),
(10, 'Mugwaneza Karisa', 'mugwaneza@gmail.com', 789923456, 'ko muduha amazu yo mumujyi gusa nayahandi ntabwo yemewe????', '2021-08-13 19:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `house_east`
--

CREATE TABLE `house_east` (
  `ID` int(11) NOT NULL,
  `filenames` varchar(255) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `HouseAddress` varchar(255) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Done_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_east`
--

INSERT INTO `house_east` (`ID`, `filenames`, `Phone_Number`, `HouseAddress`, `Details`, `Cost`, `Done_at`) VALUES
(6, 'images/4.jpg', 2147483647, 'Karangazi', '', 190000, '2021-08-14 10:25:48'),
(8, 'images/5.jpg', 2147483647, 'nyamagabe', 'isaro intwbe nzinza', 1000000, '2021-08-14 19:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `house_kigali`
--

CREATE TABLE `house_kigali` (
  `ID` int(11) NOT NULL,
  `filenames` varchar(255) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `HouseAddress` varchar(255) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Done_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_kigali`
--

INSERT INTO `house_kigali` (`ID`, `filenames`, `Phone_Number`, `HouseAddress`, `Details`, `Cost`, `Done_at`) VALUES
(21, 'images/2.png', 2147483647, 'nyamagabe', '', 1000000, '2021-08-14 13:34:57'),
(22, 'images/2.png', 777777777, 'Nyanza', '', 20007500, '2021-08-14 13:51:24'),
(23, 'images/2.png', 789171113, 'kicukiro,gacuriro', 'chember', 120, '2021-08-14 19:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `house_nouth`
--

CREATE TABLE `house_nouth` (
  `ID` int(11) NOT NULL,
  `filenames` varchar(255) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `HouseAddress` varchar(255) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Done_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_nouth`
--

INSERT INTO `house_nouth` (`ID`, `filenames`, `Phone_Number`, `HouseAddress`, `Details`, `Cost`, `Done_at`) VALUES
(1, 'images/homepic.jpg', 781345944, 'Nyagatare karangazi', '', 190000, '2021-08-04 15:22:20'),
(4, 'images/4.jpg', 789970999, 'muruhengeri', ' ibyumba 9', 12000, '2021-08-14 18:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `house_south`
--

CREATE TABLE `house_south` (
  `ID` int(11) NOT NULL,
  `filenames` varchar(255) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `HouseAddress` varchar(255) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `Done_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_south`
--

INSERT INTO `house_south` (`ID`, `filenames`, `Phone_Number`, `HouseAddress`, `Cost`, `Details`, `Done_at`) VALUES
(1, 'images/homepic.jpg', 781345944, 'Nyagatare karangazi', 700000000, '', '2021-08-04 15:28:55'),
(2, 'images/house noth.jpg', 0, '12', 122000, '', '2021-08-05 14:51:42'),
(3, 'images/house3.jpg', 0, 'Nyagatare karangazi', 700000000, '', '2021-08-05 14:54:29'),
(4, 'images/house5.jpg', 781345944, 'SELECT*FROM sinup --', 700000000, '', '2021-08-05 14:57:08'),
(7, 'images/4.jpg', 2147483647, 'huye', 133334000, '', '2021-08-14 10:28:38'),
(8, 'images/home4.jpg', 2147483647, 'Nyarugenge,kicukiro', 1000000, 'ibyumba2 nasaro', '2021-08-14 18:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `house_west`
--

CREATE TABLE `house_west` (
  `ID` int(11) NOT NULL,
  `filenames` varchar(255) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `HouseAddress` varchar(255) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Done_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_west`
--

INSERT INTO `house_west` (`ID`, `filenames`, `Phone_Number`, `HouseAddress`, `Details`, `Cost`, `Done_at`) VALUES
(4, 'images/inzu.jpg', 789171112, 'kimisagara', 'isaro intwbe nzinza', 18800000, '2021-08-14 18:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Passwords` varchar(255) NOT NULL,
  `confpassword` varchar(255) NOT NULL,
  `Done_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `FirstName`, `LastName`, `Email`, `Passwords`, `confpassword`, `Done_at`) VALUES
(2, 'Ntagwabira', 'gaspard', 'gaspard@2gmail.com', 'akagera', ' akagera', '2021-08-03 07:35:27'),
(3, 'Ntagwabira', 'gaspard', 'gaspard@2gmail.com', 'akagera', ' akagera', '2021-08-03 07:36:10'),
(4, 'Ntagwabira', 'gaspard', 'gaspard@2gmail.com', 'karame', ' karame', '2021-08-03 07:36:49'),
(5, 'Augustine', 'Nshimiyimana', 'Augustinous72@gmail.com', '0987', ' 0987', '2021-08-04 09:05:51'),
(6, 'Augustine', 'Nshimiyimana', 'Augustinous72@gmail.com', '0987654321', ' 0987654321', '2021-08-04 09:06:09'),
(7, 'Augustine', 'Nshimiyimana', 'Augustinous72@gmail.com', '741', ' 741', '2021-08-04 09:06:43'),
(8, 'qwertyu', 'qwertyui', 'emmy3837@gmail.com', '789456', ' 789456', '2021-08-04 09:08:25'),
(11, 'gaju', 'nadia', 'gaju@gmail.com', 'gaju12', ' gaju12', '2021-08-05 13:28:35'),
(12, 'qwertyuio', 'asdfghjk', 'asdfgh@gmail.com', '1234567890', ' 1234567890', '2021-08-05 14:42:26'),
(13, 'Augustine', 'Nshimiyimana', 'Augustinous72@gmail.com', '2222222222', ' 2222222222', '2021-08-06 09:04:13'),
(14, 'muberarugo', 'clemantine', 'muberarugo@gmail.com', 'muberarugo', ' muberarugo', '2021-08-13 20:47:09'),
(15, 'muberarugo', 'clemantine', 'muberarugo@gmail.com', 'muberarugo', ' muberarugo', '2021-08-13 20:58:20'),
(16, 'muberarugo', 'clemantine', 'muberarugo@gmail.com', 'muberarugo', ' muberarugo', '2021-08-13 21:01:04'),
(17, 'muberarugo', 'clemantine', 'muberarugo@gmail.com', 'muberarugo', ' muberarugo', '2021-08-13 21:01:31'),
(18, 'muberarugo', 'clemantine', 'muberarugo@gmail.com', 'muberarugo', ' muberarugo', '2021-08-13 21:03:08'),
(20, 'kk', 'wertyu', 'kk2@gmail.com', '1234567890p', ' 1234567890p', '2021-08-13 21:06:40'),
(21, 'kk', 'uytrewq', 'August@gmail.com', '1234567890', ' 1234567890', '2021-08-13 21:12:46'),
(22, 'kk', 'uytrewq', 'August@gmail.com', '0987654321', ' 0987654321', '2021-08-13 21:14:03'),
(23, 'kk', 'clemantine', 'August@gmail.com', '12345', ' 12345', '2021-08-13 21:27:47'),
(24, 'kk', 'clemantine', 'August@gmail.com', '12345', ' 12345', '2021-08-13 21:35:43'),
(27, 'muhamed', 'muhamed', 'August@gmail.com', '99999', ' 99999', '2021-08-14 10:08:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adimin`
--
ALTER TABLE `adimin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `house_east`
--
ALTER TABLE `house_east`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `house_kigali`
--
ALTER TABLE `house_kigali`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `house_nouth`
--
ALTER TABLE `house_nouth`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `house_south`
--
ALTER TABLE `house_south`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `house_west`
--
ALTER TABLE `house_west`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adimin`
--
ALTER TABLE `adimin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `house_east`
--
ALTER TABLE `house_east`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `house_kigali`
--
ALTER TABLE `house_kigali`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `house_nouth`
--
ALTER TABLE `house_nouth`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `house_south`
--
ALTER TABLE `house_south`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `house_west`
--
ALTER TABLE `house_west`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
