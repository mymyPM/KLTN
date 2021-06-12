-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 02:20 PM
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
  `Updated_at` date DEFAULT NULL,
  `Start` date DEFAULT NULL,
  `End` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`ID`, `LecturerID`, `ExemptionID`, `Status`, `AdminID`, `Plan_ID`, `Updated_at`, `Start`, `End`) VALUES
(56, 4, 101, 1, 2, 8, NULL, '2021-06-11', '2021-06-25'),
(57, 4, 101, 2, 2, 9, NULL, '2021-06-11', '2021-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `classify`
--

CREATE TABLE `classify` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Time_norms` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classify`
--

INSERT INTO `classify` (`ID`, `Name`, `Time_norms`) VALUES
(1, 'Giảng viên tập sự', 0),
(2, 'Giảng viên mới, năm thứ nhất', 50);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `Name`, `Description`) VALUES
(1, 'Khoa CNTT', 'Khoa Công Nghệ Thông Tin'),
(2, 'Khoa Hóa', 'Khoa Hóa Học');

-- --------------------------------------------------------

--
-- Table structure for table `exemption`
--

CREATE TABLE `exemption` (
  `ID` int(11) NOT NULL,
  `Reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reduction_time` int(10) NOT NULL,
  `ID_test` int(11) NOT NULL,
  `Start` date DEFAULT NULL,
  `End` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exemption`
--

INSERT INTO `exemption` (`ID`, `Reason`, `Reduction_time`, `ID_test`, `Start`, `End`) VALUES
(82, 'Giảng viên mới,năm thứ 1', 294, 6, '2021-06-11', '2021-06-25'),
(83, 'Giảng viên mới,năm thứ 2', 411, 7, NULL, NULL),
(84, 'Giảng viên nữ,nuôi con dưới 12 tháng', 514, 8, NULL, NULL),
(85, 'Trưởng khoa,khoa có 40 giảng viên', 411, 9, NULL, NULL),
(86, 'Phó trưởng khoa,khoa có 40 giảng viên', 440, 10, NULL, NULL),
(87, 'Trưởng khoa,khoa có dưới 40 giảng viên', 440, 11, NULL, NULL),
(88, 'Myupdate,năm thứ 2', 440, 12, NULL, NULL),
(89, 'C_update,năm thứ 2', 440, 13, NULL, NULL),
(93, 'Myupdate,năm thứ 2', 440, 14, NULL, NULL),
(94, 'Giảng viên mới,năm thứ 3', 352, 15, NULL, NULL),
(95, 'Nghiên cứu sinh,năm thứ 4', 437, 16, NULL, NULL),
(96, 'Giảng viên đang đảm nhận công tác tại các đơn vị khối quản\r\nlý và phục vụ', 0, 0, '2021-06-01', '2021-06-10'),
(97, 'Giảng viên đang đảm nhận công tác quản lý tại các đơn vị đào tạo,Trưởng bộ môn', 470, 17, NULL, NULL),
(98, '2021-06-25,Phó trưởng bộ môn', 499, 18, NULL, NULL),
(99, 'Giảng viên đang đảm nhận công tác quản lý tại các đơn vị đào tạo,năm thứ 2', 0, 19, NULL, NULL),
(100, 'Giảng viên đang đảm nhận công tác quản lý tại các đơn vị đào tạo,Phó trưởng bộ môn2', 499, 20, NULL, NULL),
(101, 'Giảng viên đang đảm nhận công tác quản lý tại các đơn vị đào tạo,Phó trưởng bộ môn1', 499, 21, '2021-06-11', '2021-06-25'),
(102, 'Giảng viên mới123,345', 0, 22, '2021-06-11', '2021-07-07'),
(103, 'Giảng viên mới,năm thứ 4', 470, 23, '2021-06-11', '2021-06-25');

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
(6, 'Đợt xét 1', 'đầu năm 1', 20211, 2, '2021-06-19', '2021-06-26', 1),
(7, 'Myupdate', 'năm thứ 2', 2023, 6000, '2021-06-12', '2021-06-19', 1),
(8, 'Myupdate', 'năm thứ 2', 2023, 1234, '2021-06-12', '2021-06-19', 1),
(9, 'đợt', 'xét', 2021, 2, '2021-06-12', '2021-06-19', 0);

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
(1, 2021, 587),
(2, 2022, 350),
(8, 2023, 124);

-- --------------------------------------------------------

--
-- Table structure for table `reason`
--

CREATE TABLE `reason` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Time_norms` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ID` int(11) NOT NULL,
  `LecturerID` int(11) NOT NULL,
  `AdminID` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Rating` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ID`, `LecturerID`, `AdminID`, `Status`, `Rating`, `Content`) VALUES
(1, 4, 2, 0, '', ''),
(2, 4, 2, 0, '', ''),
(3, 4, 2, 1, '', ''),
(4, 4, 2, 2, '', ''),
(5, 4, 2, 2, '', ''),
(6, 4, 2, 2, '', ''),
(7, 4, 2, 1, '', ''),
(8, 4, 2, 1, '', ''),
(9, 4, 2, 2, '', ''),
(10, 4, 2, 2, '', ''),
(11, 3, 2, 1, '', ''),
(12, 3, 2, 2, '', ''),
(13, 3, 2, 1, '', ''),
(14, 3, 2, 2, '', ''),
(15, 3, 2, 1, '', ''),
(16, 4, 2, 1, '', ''),
(17, 4, 2, 1, '', ''),
(18, 4, 2, 1, '', ''),
(19, 4, 2, 1, '', ''),
(20, 4, 2, 2, '', ''),
(21, 4, 2, 2, '', '');

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
  `Tyle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reseach`
--

INSERT INTO `reseach` (`ID`, `LecturerID`, `Name_topic`, `Topic_classic`, `Time_reseach`, `Tyle`) VALUES
(13, 4, 'NCKH', 2, '', 30),
(14, 4, 'Nghiên cứu mèo', 2, '', 50);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID`, `Name`, `Description`) VALUES
(1, 'Trưởng Khoa', 'Vị trí trưởng khoa'),
(2, 'Bí thư đoàn khoa', 'Bí thư đoàn');

-- --------------------------------------------------------

--
-- Table structure for table `scientific_research`
--

CREATE TABLE `scientific_research` (
  `ID` int(11) NOT NULL,
  `LectureID` int(11) DEFAULT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Time` int(11) NOT NULL,
  `Time_reseach` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Expense` text COLLATE utf8_unicode_ci NOT NULL,
  `Proof` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scientific_research`
--

INSERT INTO `scientific_research` (`ID`, `LectureID`, `Name`, `Time`, `Time_reseach`, `Expense`, `Proof`) VALUES
(2, NULL, 'Đề tài cấp Nhà nước', 3000, '', 'Theo hợp đồng. Nguồn kinh phí từ cơ quan quản lý đề tài', 'Hợp đồng. Biên bản nghiệm thu: đề tài đạt từ trung bình trở lên. Bản thanh lý hợp đồng.'),
(3, NULL, 'Bài đăng tạp chí ISI, hoặc đạt Scopus Q1, A, A* thuộc ABDC', 600, '', 'Theo quy chế chi tiêu nội bộ', 'Bài đăng trên Tạp chí hoặc Thư chấp nhận của tạp chí'),
(10, NULL, 'Đề tài cấp Tỉnh', 6000, '', '- Theo Quyết định của Hiệu trưởng; - Nguồn kinh phí của Trường', '- Hợp đồng - Biên bản nghiệm thu: đề tài đạt từ trung bình trở lên - Bản thanh lý hợp đồng');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Formula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reduction` int(11) NOT NULL,
  `ID_quota` int(11) NOT NULL,
  `Start` date DEFAULT NULL,
  `End` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`ID`, `Name`, `Description`, `Formula`, `reduction`, `ID_quota`, `Start`, `End`) VALUES
(19, 'Giảng viên đang đảm nhận công tác quản lý tại các đơn vị đào tạo', 'năm thứ 2', '0', 0, 1, '2021-06-11', '2021-06-25'),
(20, 'Giảng viên đang đảm nhận công tác quản lý tại các đơn vị đào tạo', 'Phó trưởng bộ môn1', '0.85*x', 499, 1, '2021-06-11', '2021-06-25'),
(21, 'Giảng viên đang đảm nhận công tác quản lý tại các đơn vị đào tạo', 'Phó trưởng bộ môn1', '0.85*x', 499, 1, '2021-06-11', '2021-06-25'),
(22, 'Giảng viên mới123', '345', '0', 0, 1, '2021-06-11', '2021-07-07'),
(23, 'Giảng viên mới', 'năm thứ 4', '0.8*x', 470, 1, '2021-06-11', '2021-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `Username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `GroupID`, `Username`, `Password`, `Name`, `Email`, `Phone`, `Birthday`, `Address`, `Img`) VALUES
(1, 1, 'ngocmy', '123456', 'My_update_4', 'ngocmy@gmail.com', '0852335598', '2021-06-12', '143 Phạm Huy Thông', ''),
(2, 1, 'ngocmyy.phan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Phan Ngọc My', NULL, NULL, NULL, NULL, '2.jpg'),
(4, 2, 'My@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'My_update2', NULL, NULL, NULL, NULL, 'a.png'),
(11, 2, 'windy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'windy', NULL, NULL, NULL, NULL, ''),
(12, 2, 'test1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'test1', NULL, NULL, NULL, NULL, ''),
(13, 2, 'test@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '4.jpg', NULL, NULL, NULL, NULL, 'upload/4.jpg'),
(14, 2, 'test3@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'test3', NULL, NULL, NULL, NULL, '2.jpg'),
(15, 2, 'test4@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'test4', NULL, NULL, NULL, NULL, 'a.png'),
(16, 2, 'test5@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'test5', NULL, NULL, NULL, NULL, 'upload/4.jpg'),
(17, 1, 'test6@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'test6', NULL, NULL, NULL, NULL, 'upload/my3.jpg');

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
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `reason`
--
ALTER TABLE `reason`
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
  ADD KEY `fk_lec` (`LecturerID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `scientific_research`
--
ALTER TABLE `scientific_research`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LectureID` (`LectureID`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_quota` (`ID_quota`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_group` (`GroupID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approved`
--
ALTER TABLE `approved`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `classify`
--
ALTER TABLE `classify`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exemption`
--
ALTER TABLE `exemption`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quota`
--
ALTER TABLE `quota`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reason`
--
ALTER TABLE `reason`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reseach`
--
ALTER TABLE `reseach`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `scientific_research`
--
ALTER TABLE `scientific_research`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approved`
--
ALTER TABLE `approved`
  ADD CONSTRAINT `fk_plan` FOREIGN KEY (`Plan_ID`) REFERENCES `plan` (`ID`);

--
-- Constraints for table `reseach`
--
ALTER TABLE `reseach`
  ADD CONSTRAINT `fk_lec` FOREIGN KEY (`LecturerID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `fk_topic` FOREIGN KEY (`Topic_classic`) REFERENCES `scientific_research` (`ID`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `fk_quota` FOREIGN KEY (`ID_quota`) REFERENCES `quota` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
