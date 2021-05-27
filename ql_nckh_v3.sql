-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 15, 2021 lúc 02:01 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

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
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ID`, `GroupID`, `Name`, `Username`, `Password`, `Img`) VALUES
(1, 1, 'Phan Ngoc My', 'ngocmyy.phan@gmail.com', '17ccdf2bff481f9eab342202cc80801e', ''),
(2, 2, 'My', 'My@gmail.com', '6864f389d9876436bc8778ff071d1b6c', ''),
(3, 1, 'Hoàng Thiên', 'thienis.iuh@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'my3.jpg'),
(4, 2, 'Thiên', 'Thien@iuh.com', 'c4ca4238a0b923820dcc509a6f75849b', '39.jpg'),
(12, 2, 'A', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(13, 2, 'B', 'aad@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', ''),
(14, 2, 'C', 'E@gmail.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', ''),
(15, 2, 'A', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(16, 2, 'B', 'aad@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', ''),
(17, 2, 'C', 'E@gmail.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', ''),
(18, 2, 'A', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(19, 2, 'B', 'aad@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', '1.jpg'),
(20, 2, 'C', 'E@gmail.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', ''),
(21, 2, 'A', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(25, 2, 'TestGV', 'gvtest@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'my3.jpg'),
(26, 2, 'Phan Ngọc My', 'my.phanngoc@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(28, 1, 'Thien', 'thien@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', '39.jpg'),
(29, 2, 'Test GV', 'gv@gmail.com', '202cb962ac59075b964b07152d234b70', '5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `approved`
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
-- Cấu trúc bảng cho bảng `classify`
--

CREATE TABLE `classify` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time_norms` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `LectureID` int(11) DEFAULT NULL,
  `Reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdminID` int(11) DEFAULT NULL,
  `Reduction_time` int(11) NOT NULL,
  `Reason_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `exemption`
--

INSERT INTO `exemption` (`ID`, `LectureID`, `Reason`, `AdminID`, `Reduction_time`, `Reason_ID`) VALUES
(3, NULL, 'Giảng viên mới, năm thứ nhất', NULL, 194, NULL),
(4, NULL, 'Giảng viên mới, năm thứ hai', NULL, 271, NULL),
(5, NULL, 'Trưởng khoa', NULL, 271, NULL),
(6, NULL, 'Bí thư đoàn khoa Hóa', NULL, 150, NULL),
(7, NULL, 'tapSu', NULL, 100, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exemption_type`
--

CREATE TABLE `exemption_type` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ratio` float NOT NULL,
  `reduce_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_application` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `GroupName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`ID`, `GroupName`) VALUES
(1, 'Admin'),
(2, 'Lecturer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lecturers`
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
-- Đang đổ dữ liệu cho bảng `lecturers`
--

INSERT INTO `lecturers` (`ID`, `Name`, `Birthday`, `Phone`, `Email`, `Address`, `ClassifyID`, `Time`) VALUES
(2, 'Giảng Viên Test', '1990-01-01', '0123456789', 'giangvientest@gmail.com', 'Lê Lợi, P3, Gò Vấp, TP.HCM', 1, 0),
(3, 'Giảng Viên 2', '1985-12-01', '0123456788', 'giangvien2@gmail.com', 'Lê Lợi, P3, Gò Vấp, TP.HCM', 2, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plan`
--

CREATE TABLE `plan` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year` int(4) NOT NULL,
  `Times` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time_norms` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `report`
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
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` int(11) NOT NULL,
  `Expense` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Proof` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `scientific_research`
--

INSERT INTO `scientific_research` (`ID`, `LectureID`, `Name`, `Time`, `Expense`, `Proof`) VALUES
(2, NULL, 'Đề tài cấp Nhà nước', 3000, 'Theo hợp đồng. Nguồn kinh phí từ cơ quan quản lý đề tài', 'Hợp đồng. Biên bản nghiệm thu: đề tài đạt từ trung bình trở lên. Bản thanh lý hợp đồng.'),
(3, NULL, 'Bài đăng tạp chí ISI, hoặc đạt Scopus Q1, A, A* thuộc ABDC', 600, 'Theo quy chế chi tiêu nội bộ', 'Bài đăng trên Tạp chí hoặc Thư chấp nhận của tạp chí');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GroupID` (`GroupID`);

--
-- Chỉ mục cho bảng `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LectureID` (`LectureID`),
  ADD KEY `ExemptionID` (`ExemptionID`);

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
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LectureID` (`LectureID`),
  ADD KEY `AdminID` (`AdminID`),
  ADD KEY `Reason_ID` (`Reason_ID`);

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
-- Chỉ mục cho bảng `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ClassifyID` (`ClassifyID`);

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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `approved`
--
ALTER TABLE `approved`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT cho bảng `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`GroupID`) REFERENCES `groups` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `approved`
--
ALTER TABLE `approved`
  ADD CONSTRAINT `approved_ibfk_1` FOREIGN KEY (`LectureID`) REFERENCES `lecturers` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `approved_ibfk_2` FOREIGN KEY (`ExemptionID`) REFERENCES `exemption` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `exemption`
--
ALTER TABLE `exemption`
  ADD CONSTRAINT `exemption_ibfk_1` FOREIGN KEY (`LectureID`) REFERENCES `lecturers` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exemption_ibfk_2` FOREIGN KEY (`Reason_ID`) REFERENCES `reason` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exemption_ibfk_3` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lecturers`
--
ALTER TABLE `lecturers`
  ADD CONSTRAINT `lecturers_ibfk_1` FOREIGN KEY (`ClassifyID`) REFERENCES `classify` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
