-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 02:08 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

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
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `ID` int(11) NOT NULL,
  `LecturerID` int(11) NOT NULL,
  `ExemptionID` int(11) NOT NULL,
  `Status` int(11) DEFAULT NULL,
  `AdminID` int(11) DEFAULT NULL,
  `Plan_ID` int(11) NOT NULL,
  `Start` date DEFAULT NULL,
  `End` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classify`
--

CREATE TABLE `classify` (
  `ID` int(11) NOT NULL,
  `ClassName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classify`
--

INSERT INTO `classify` (`ID`, `ClassName`) VALUES
(1, 'Giảng viên tập sự'),
(2, 'Giảng viên mới, năm thứ nhất');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(11) NOT NULL,
  `DepartName` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `DepartName`, `Description`) VALUES
(1, 'Khoa CNTT', 'Khoa Công Nghệ Thông Tin'),
(2, 'Khoa Hóa', 'Khoa Hóa Học');

-- --------------------------------------------------------

--
-- Table structure for table `exemption`
--

CREATE TABLE `exemption` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Formula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reduction` int(11) NOT NULL,
  `ID_quota` int(11) NOT NULL,
  `Start` date DEFAULT NULL,
  `End` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exemption`
--

INSERT INTO `exemption` (`ID`, `Name`, `Formula`, `reduction`, `ID_quota`, `Start`, `End`) VALUES
(23, 'Giảng viên mới', '0.8*x', 470, 1, '2021-06-11', '2021-06-25'),
(28, 'giảng viên tập sự', '0.85*x', 1, 1, '2021-06-13', '2021-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `exemption_type`
--

CREATE TABLE `exemption_type` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Ratio` float NOT NULL,
  `reduce_type` text COLLATE utf8_unicode_ci NOT NULL,
  `time_application` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exemption_type`
--

INSERT INTO `exemption_type` (`ID`, `Name`, `Description`, `Ratio`, `reduce_type`, `time_application`) VALUES
(1, 'Giảng viên tập sự', 'Đang thử việc', 0, '*', '07/05/2021 - 07/08/2021'),
(2, 'Giảng viên mới', 'Năm thứ nhất', 0.5, '*', '08/05/2021 - 08/05/2022'),
(4, 'Giảng viên mới', 'năm thứ 2', 0.7, '*', '08/05/2021 - 08/05/2022'),
(5, 'Giảng viên mới', 'năm thứ 2', 0.7, '*', '08/05/2021 - 08/05/2022');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `ID` int(11) NOT NULL,
  `GroupName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`ID`, `GroupName`) VALUES
(1, 'Admin'),
(2, 'Lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Year` int(4) NOT NULL,
  `Times` int(2) NOT NULL,
  `Start` date DEFAULT NULL,
  `End` date DEFAULT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`ID`, `Name`, `Description`, `Year`, `Times`, `Start`, `End`, `Status`) VALUES
(6, 'Đợt xét 1', 'đầu năm 1', 2021, 1, '2021-06-19', '2021-06-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quota`
--

CREATE TABLE `quota` (
  `ID` int(11) NOT NULL,
  `Year` int(5) NOT NULL,
  `Time_quota` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quota`
--

INSERT INTO `quota` (`ID`, `Year`, `Time_quota`) VALUES
(0, 2026, 500),
(1, 2021, 587);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ID` int(11) NOT NULL,
  `LecturerID` int(11) NOT NULL,
  `AdminID` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ID`, `LecturerID`, `AdminID`, `Status`) VALUES
(1, 4, 2, 0),
(2, 4, 2, 0),
(3, 4, 2, 1),
(4, 4, 2, 2),
(5, 4, 2, 2),
(6, 4, 2, 2),
(7, 4, 2, 1),
(8, 4, 2, 1),
(9, 4, 2, 2),
(10, 4, 2, 2),
(11, 3, 2, 1),
(12, 3, 2, 2),
(13, 3, 2, 1),
(14, 3, 2, 2),
(15, 3, 2, 1),
(16, 4, 2, 1),
(17, 4, 2, 1),
(18, 4, 2, 1),
(19, 4, 2, 1),
(20, 4, 2, 2),
(21, 4, 2, 2),
(22, 25, 24, 1),
(23, 25, 24, 2),
(24, 24, 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reseach`
--

CREATE TABLE `reseach` (
  `ID` int(11) NOT NULL,
  `LecturerID` int(11) NOT NULL,
  `Name_topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Topic_classic` int(11) NOT NULL,
  `Time_reseach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tyle` int(11) NOT NULL,
  `AdminID` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `Quota_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scientific_research`
--

CREATE TABLE `scientific_research` (
  `ID` int(11) NOT NULL,
  `Name_scien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Time` int(11) NOT NULL,
  `Expense` text COLLATE utf8_unicode_ci NOT NULL,
  `Proof` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scientific_research`
--

INSERT INTO `scientific_research` (`ID`, `Name_scien`, `Time`, `Expense`, `Proof`) VALUES
(2, 'Đề tài cấp Nhà nước', 3000, 'Theo hợp đồng. Nguồn kinh phí từ cơ quan quản lý đề tài', 'Hợp đồng. Biên bản nghiệm thu: đề tài đạt từ trung bình trở lên. Bản thanh lý hợp đồng.'),
(3, 'Bài đăng tạp chí ISI, hoặc đạt Scopus Q1, A, A* thuộc ABDC', 600, 'Theo quy chế chi tiêu nội bộ', 'Bài đăng trên Tạp chí hoặc Thư chấp nhận của tạp chí'),
(10, 'Đề tài cấp Tỉnh', 6000, '- Theo Quyết định của Hiệu trưởng; - Nguồn kinh phí của Trường', '- Hợp đồng - Biên bản nghiệm thu: đề tài đạt từ trung bình trở lên - Bản thanh lý hợp đồng');

-- --------------------------------------------------------

--
-- Table structure for table `statistic`
--

CREATE TABLE `statistic` (
  `ID` int(11) NOT NULL,
  `Lecturer_id` int(11) NOT NULL,
  `Department_id` int(11) NOT NULL,
  `Time` int(11) NOT NULL,
  `Rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `Username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Department_id` int(11) DEFAULT NULL,
  `Classify_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `GroupID`, `Username`, `Password`, `Name`, `Phone`, `Birthday`, `Address`, `Img`, `Department_id`, `Classify_id`) VALUES
(24, 1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Phan Ngọc My', '0852335598', '1999-10-08', '143 Phạm Huy Thông', 'upload/my3.jpg', 1, 2),
(25, 2, 'GV@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'GV', NULL, NULL, NULL, 'upload/3.jpg', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_exemption` (`ExemptionID`),
  ADD KEY `fk_lec` (`LecturerID`),
  ADD KEY `fk_plan` (`Plan_ID`);

--
-- Indexes for table `classify`
--
ALTER TABLE `classify`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `exemption`
--
ALTER TABLE `exemption`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_quota` (`ID_quota`);

--
-- Indexes for table `exemption_type`
--
ALTER TABLE `exemption_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `quota`
--
ALTER TABLE `quota`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LectureID` (`LecturerID`),
  ADD KEY `AdminID` (`AdminID`);

--
-- Indexes for table `reseach`
--
ALTER TABLE `reseach`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_topic` (`Topic_classic`),
  ADD KEY `fk_lec` (`LecturerID`),
  ADD KEY `fk_quota2` (`Quota_id`);

--
-- Indexes for table `scientific_research`
--
ALTER TABLE `scientific_research`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_lecturer` (`Lecturer_id`),
  ADD KEY `fk_department` (`Department_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_group` (`GroupID`),
  ADD KEY `fk_classify` (`Classify_id`),
  ADD KEY `fk_department1` (`Department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approved`
--
ALTER TABLE `approved`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `classify`
--
ALTER TABLE `classify`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exemption`
--
ALTER TABLE `exemption`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `exemption_type`
--
ALTER TABLE `exemption_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `quota`
--
ALTER TABLE `quota`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reseach`
--
ALTER TABLE `reseach`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `scientific_research`
--
ALTER TABLE `scientific_research`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `statistic`
--
ALTER TABLE `statistic`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approved`
--
ALTER TABLE `approved`
  ADD CONSTRAINT `fk_plan` FOREIGN KEY (`Plan_ID`) REFERENCES `plan` (`ID`);

--
-- Constraints for table `exemption`
--
ALTER TABLE `exemption`
  ADD CONSTRAINT `fk_quota` FOREIGN KEY (`ID_quota`) REFERENCES `quota` (`ID`);

--
-- Constraints for table `reseach`
--
ALTER TABLE `reseach`
  ADD CONSTRAINT `fk_lec` FOREIGN KEY (`LecturerID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `fk_quota2` FOREIGN KEY (`Quota_id`) REFERENCES `quota` (`ID`),
  ADD CONSTRAINT `fk_topic` FOREIGN KEY (`Topic_classic`) REFERENCES `scientific_research` (`ID`);

--
-- Constraints for table `statistic`
--
ALTER TABLE `statistic`
  ADD CONSTRAINT `fk_department` FOREIGN KEY (`Department_id`) REFERENCES `department` (`ID`),
  ADD CONSTRAINT `fk_lecturer` FOREIGN KEY (`Lecturer_id`) REFERENCES `user` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_classify` FOREIGN KEY (`Classify_id`) REFERENCES `classify` (`ID`),
  ADD CONSTRAINT `fk_department1` FOREIGN KEY (`Department_id`) REFERENCES `department` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
