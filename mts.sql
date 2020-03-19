-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 มี.ค. 2020 เมื่อ 01:54 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mts`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `ability`
--

CREATE TABLE `ability` (
  `A_id` int(10) NOT NULL,
  `Talent` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `A_Language` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Degree_Language` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `NewsForm` varchar(7) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `admin`
--

CREATE TABLE `admin` (
  `Ad_id` int(10) NOT NULL,
  `Username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `education`
--

CREATE TABLE `education` (
  `E_id` int(10) NOT NULL,
  `SchoolName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Year_Admission` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Year_Graduation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Graduation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GPA` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `family`
--

CREATE TABLE `family` (
  `F_id` int(10) NOT NULL,
  `Father_Fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mother_Fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Father_Old` int(2) NOT NULL,
  `Mother_Old` int(2) NOT NULL,
  `Father_Career` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Mother_Career` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tel` int(10) NOT NULL,
  `Brother` int(2) NOT NULL,
  `You` int(2) NOT NULL,
  `M_StatusLive` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `StatusRelation` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `F_StatusLive` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `student`
--

CREATE TABLE `student` (
  `S_id` int(100) NOT NULL,
  `S_Fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Old` int(2) NOT NULL,
  `Height` int(4) NOT NULL,
  `Balance` int(4) NOT NULL,
  `Race` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Nationality` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Culture` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `IDcard` int(13) NOT NULL,
  `Country` varchar(77) COLLATE utf8_unicode_ci NOT NULL,
  `CurrentAddress` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `S_Phone` int(10) NOT NULL,
  `EContact_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Relation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `EContact_Phone` int(10) NOT NULL,
  `EContact_Address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Class` varchar(21) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ability`
--
ALTER TABLE `ability`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Ad_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`E_id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`F_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
