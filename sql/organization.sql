-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 04:38 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto_razer`
--

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `Org_name` text NOT NULL,
  `Description` varchar(30) NOT NULL,
  `Fund_Needed` int(11) NOT NULL,
  `Fund_Raised` int(11) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Wallet_Address` varchar(64) NOT NULL,
  `Ending_Date` date NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`Org_name`, `Description`, `Fund_Needed`, `Fund_Raised`, `Status`, `Wallet_Address`, `Ending_Date`, `Id`) VALUES
('Blue Moon', 'our Moto is to provide Shelter', 3, 0, 1, '0xb1a0787780Da376C8e2AfD057c1daE82430A1662', '2022-05-02', 2),
('SamTech', 'We encourage Poor Children to ', 10, 0, 1, '0xc91a35AF656EA0329aEbB38fc618c4177b96142c', '2022-06-01', 3),
('IndiaGo', 'Seeing the poverty in India gi', 25, 0, 1, '0xaB8a67743325347Aa53bCC66850f8F13df87e3AF', '2022-09-01', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
