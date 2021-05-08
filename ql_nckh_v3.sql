-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 12:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_nckh_v3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `GroupID`, `Name`, `Username`, `Password`, `Img`) VALUES
(1, 1, 'Phan Ngoc My', 'ngocmyy.phan@gmail.com', '17ccdf2bff481f9eab342202cc80801e', 'my3.jpg'),
(2, 2, 'My', 'My@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'my2.jpg'),
(3, 1, 'Hoàng Thiên', 'thienis.iuh@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(4, 2, 'Thiên', 'Thien@iuh.com', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(19, 2, 'B', 'aad@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', ''),
(20, 2, 'C', 'E@gmail.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', ''),
(25, 1, 'TestAd', 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(26, 2, 'Phan Ngọc My', 'my.phanngoc@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(27, 1, 'Test12', 'test12@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(31, 2, 'testt', 'Myyy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'my3.jpg'),
(34, 1, 'Phan Ngọc My', 'ngocmycutea6@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'a.png'),
(36, 2, 'My2', 'My2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2.jpg'),
(37, 2, 'My2', 'My2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2.jpg'),
(38, 1, 'My3', 'My3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `ID` int(11) NOT NULL,
  `LectureID` int(11) NOT NULL,
  `ExemptionID` int(11) NOT NULL,
  `Status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Start` datetime NOT NULL,
  `End` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classify`
--

CREATE TABLE `classify` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time_norms` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classify`
--

INSERT INTO `classify` (`ID`, `Name`, `Time_norms`) VALUES
(1, 'Giảng viên tập sự', 0),
(2, 'Giảng viên mới, năm thứ nhất', 50);

-- --------------------------------------------------------

--
-- Table structure for table `exemption`
--

CREATE TABLE `exemption` (
  `ID` int(11) NOT NULL,
  `LectureID` int(11) DEFAULT NULL,
  `Reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdminID` int(11) DEFAULT NULL,
  `Reduction_time` int(11) NOT NULL,
  `Reason_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exemption`
--

INSERT INTO `exemption` (`ID`, `LectureID`, `Reason`, `AdminID`, `Reduction_time`, `Reason_ID`) VALUES
(3, NULL, 'Giảng viên mới, năm thứ nhất', NULL, 194, NULL),
(4, NULL, 'Giảng viên mới, năm thứ hai', NULL, 271, NULL),
(5, NULL, 'Trưởng khoa', NULL, 271, NULL),
(6, NULL, 'Bí thư đoàn khoa Hóa', NULL, 150, NULL),
(7, NULL, 'tapSu', NULL, 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `ID` int(11) NOT NULL,
  `GroupName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`ID`, `GroupName`) VALUES
(1, 'Admin'),
(2, 'Lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Birthday` date DEFAULT NULL,
  `Phone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ClassifyID` int(11) NOT NULL,
  `Time` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`ID`, `Name`, `Birthday`, `Phone`, `Email`, `Address`, `ClassifyID`, `Time`) VALUES
(2, 'My', '0000-00-00', '0852335598', 'My@gmail.com', '44 Bùi cầm hổ', 1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `reason`
--

CREATE TABLE `reason` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time_norms` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ID` int(11) NOT NULL,
  `LectureID` int(11) NOT NULL,
  `AdminID` int(11) NOT NULL,
  `Rating` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scientific_research`
--

CREATE TABLE `scientific_research` (
  `ID` int(11) NOT NULL,
  `LectureID` int(11) DEFAULT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` int(11) NOT NULL,
  `Expense` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Proof` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scientific_research`
--

INSERT INTO `scientific_research` (`ID`, `LectureID`, `Name`, `Time`, `Expense`, `Proof`) VALUES
(2, NULL, 'Đề tài cấp Nhà nước', 3000, 'Theo hợp đồng. Nguồn kinh phí từ cơ quan quản lý đề tài', 'Hợp đồng. Biên bản nghiệm thu: đề tài đạt từ trung bình trở lên. Bản thanh lý hợp đồng.'),
(3, NULL, 'Bài đăng tạp chí ISI, hoặc đạt Scopus Q1, A, A* thuộc ABDC', 600, 'Theo quy chế chi tiêu nội bộ', 'Bài đăng trên Tạp chí hoặc Thư chấp nhận của tạp chí');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GroupID` (`GroupID`);

--
-- Indexes for table `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LectureID` (`LectureID`),
  ADD KEY `ExemptionID` (`ExemptionID`);

--
-- Indexes for table `classify`
--
ALTER TABLE `classify`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `exemption`
--
ALTER TABLE `exemption`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LectureID` (`LectureID`),
  ADD KEY `AdminID` (`AdminID`),
  ADD KEY `Reason_ID` (`Reason_ID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ClassifyID` (`ClassifyID`);

--
-- Indexes for table `reason`
--
ALTER TABLE `reason`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LectureID` (`LectureID`),
  ADD KEY `AdminID` (`AdminID`);

--
-- Indexes for table `scientific_research`
--
ALTER TABLE `scientific_research`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LectureID` (`LectureID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `approved`
--
ALTER TABLE `approved`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classify`
--
ALTER TABLE `classify`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exemption`
--
ALTER TABLE `exemption`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reason`
--
ALTER TABLE `reason`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scientific_research`
--
ALTER TABLE `scientific_research`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`GroupID`) REFERENCES `groups` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `approved`
--
ALTER TABLE `approved`
  ADD CONSTRAINT `approved_ibfk_1` FOREIGN KEY (`LectureID`) REFERENCES `lecturers` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `approved_ibfk_2` FOREIGN KEY (`ExemptionID`) REFERENCES `exemption` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exemption`
--
ALTER TABLE `exemption`
  ADD CONSTRAINT `exemption_ibfk_1` FOREIGN KEY (`LectureID`) REFERENCES `lecturers` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exemption_ibfk_2` FOREIGN KEY (`Reason_ID`) REFERENCES `reason` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exemption_ibfk_3` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD CONSTRAINT `lecturers_ibfk_1` FOREIGN KEY (`ClassifyID`) REFERENCES `classify` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`LectureID`) REFERENCES `lecturers` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scientific_research`
--
ALTER TABLE `scientific_research`
  ADD CONSTRAINT `scientific_research_ibfk_1` FOREIGN KEY (`LectureID`) REFERENCES `lecturers` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
