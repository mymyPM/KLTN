-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 27, 2021 lúc 11:22 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_nckh_v3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `approved`
--

CREATE TABLE `approved` (
  `ID` int(11) NOT NULL,
  `LecturerID` int(11) NOT NULL,
  `ExemptionID` int(11) NOT NULL,
  `Status` int(11) DEFAULT NULL,
  `AdminID` int(11) DEFAULT NULL,
  `Updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `approved`
--

INSERT INTO `approved` (`ID`, `LecturerID`, `ExemptionID`, `Status`, `AdminID`, `Updated_at`) VALUES
(1, 4, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classify`
--

CREATE TABLE `classify` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Time_norms` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `classify`
--

INSERT INTO `classify` (`ID`, `Name`, `Time_norms`) VALUES
(1, 'Giảng viên tập sự', 0),
(2, 'Giảng viên mới, năm thứ nhất', 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `department`
--

CREATE TABLE `department` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `department`
--

INSERT INTO `department` (`ID`, `Name`, `Description`) VALUES
(1, 'Khoa CNTT', 'Khoa Công Nghệ Thông Tin'),
(2, 'Khoa Hóa', 'Khoa Hóa Học');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exemption`
--

CREATE TABLE `exemption` (
  `ID` int(11) NOT NULL,
  `Reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reduction_time` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `exemption`
--

INSERT INTO `exemption` (`ID`, `Reason`, `Reduction_time`) VALUES
(1, 'Giảng viên mới, năm thứ nhất', 194),
(2, 'Trưởng khoa', 271);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exemption_type`
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
-- Đang đổ dữ liệu cho bảng `exemption_type`
--

INSERT INTO `exemption_type` (`ID`, `Name`, `Description`, `Ratio`, `reduce_type`, `time_application`) VALUES
(1, 'Giảng viên tập sự', 'Đang thử việc', 0, '*', '07/05/2021 - 07/08/2021'),
(2, 'Giảng viên mới', 'Năm thứ nhất', 0.5, '*', '08/05/2021 - 08/05/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `ID` int(11) NOT NULL,
  `GroupName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`ID`, `GroupName`) VALUES
(1, 'Admin'),
(2, 'Lecturer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plan`
--

CREATE TABLE `plan` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Year` int(4) NOT NULL,
  `Times` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `plan`
--

INSERT INTO `plan` (`ID`, `Name`, `Description`, `Year`, `Times`) VALUES
(1, 'Đợt xét năm 2021', 'Đợt xét duyệt trong năm 2021', 2021, 1),
(2, 'Đợt xét năm 2022', 'Xét trong năm 2022', 2022, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quota`
--

CREATE TABLE `quota` (
  `ID` int(11) NOT NULL,
  `Year` int(5) NOT NULL,
  `Time_quota` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quota`
--

INSERT INTO `quota` (`ID`, `Year`, `Time_quota`) VALUES
(1, 2021, 587),
(2, 2022, 350);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reason`
--

CREATE TABLE `reason` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Time_norms` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `report`
--

CREATE TABLE `report` (
  `ID` int(11) NOT NULL,
  `LectureID` int(11) NOT NULL,
  `AdminID` int(11) NOT NULL,
  `Rating` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`ID`, `Name`, `Description`) VALUES
(1, 'Trưởng Khoa', 'Vị trí trưởng khoa'),
(2, 'Bí thư đoàn khoa', 'Bí thư đoàn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `scientific_research`
--

CREATE TABLE `scientific_research` (
  `ID` int(11) NOT NULL,
  `LectureID` int(11) DEFAULT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Time` int(11) NOT NULL,
  `Expense` text COLLATE utf8_unicode_ci NOT NULL,
  `Proof` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `scientific_research`
--

INSERT INTO `scientific_research` (`ID`, `LectureID`, `Name`, `Time`, `Expense`, `Proof`) VALUES
(2, NULL, 'Đề tài cấp Nhà nước', 3000, 'Theo hợp đồng. Nguồn kinh phí từ cơ quan quản lý đề tài', 'Hợp đồng. Biên bản nghiệm thu: đề tài đạt từ trung bình trở lên. Bản thanh lý hợp đồng.'),
(3, NULL, 'Bài đăng tạp chí ISI, hoặc đạt Scopus Q1, A, A* thuộc ABDC', 600, 'Theo quy chế chi tiêu nội bộ', 'Bài đăng trên Tạp chí hoặc Thư chấp nhận của tạp chí');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
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
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `GroupID`, `Username`, `Password`, `Name`, `Email`, `Phone`, `Birthday`, `Address`, `Img`) VALUES
(1, 1, 'thienis.iuh@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Hoàng Thiên', NULL, NULL, NULL, NULL, NULL),
(2, 1, 'ngocmyy.phan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Phan Ngọc My', NULL, NULL, NULL, NULL, NULL),
(3, 2, 'Thien@iuh.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Thiên', NULL, NULL, NULL, NULL, NULL),
(4, 2, 'My@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'My', NULL, NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_exemption` (`ExemptionID`),
  ADD KEY `fk_lec` (`LecturerID`);

--
-- Chỉ mục cho bảng `classify`
--
ALTER TABLE `classify`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `exemption`
--
ALTER TABLE `exemption`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `exemption_type`
--
ALTER TABLE `exemption_type`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `quota`
--
ALTER TABLE `quota`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `reason`
--
ALTER TABLE `reason`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LectureID` (`LectureID`),
  ADD KEY `AdminID` (`AdminID`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `scientific_research`
--
ALTER TABLE `scientific_research`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LectureID` (`LectureID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_group` (`GroupID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `approved`
--
ALTER TABLE `approved`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `classify`
--
ALTER TABLE `classify`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `exemption`
--
ALTER TABLE `exemption`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `exemption_type`
--
ALTER TABLE `exemption_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `plan`
--
ALTER TABLE `plan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `quota`
--
ALTER TABLE `quota`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `reason`
--
ALTER TABLE `reason`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `report`
--
ALTER TABLE `report`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `scientific_research`
--
ALTER TABLE `scientific_research`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `approved`
--
ALTER TABLE `approved`
  ADD CONSTRAINT `fk_exemption` FOREIGN KEY (`ExemptionID`) REFERENCES `exemption` (`ID`),
  ADD CONSTRAINT `fk_lec` FOREIGN KEY (`LecturerID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `fk_lecture` FOREIGN KEY (`LecturerID`) REFERENCES `admin` (`ID`);

--
-- Các ràng buộc cho bảng `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`LectureID`) REFERENCES `lecturers` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `scientific_research`
--
ALTER TABLE `scientific_research`
  ADD CONSTRAINT `scientific_research_ibfk_1` FOREIGN KEY (`LectureID`) REFERENCES `lecturers` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_group` FOREIGN KEY (`GroupID`) REFERENCES `groups` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
