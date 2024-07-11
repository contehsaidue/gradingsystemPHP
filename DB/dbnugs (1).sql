-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 05:35 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnugs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '1234',
  `role` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `studentID` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `program` varchar(50) NOT NULL,
  `level` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `username`, `password`, `role`, `fname`, `mname`, `lname`, `studentID`, `image`, `gender`, `program`, `level`, `school`, `department`) VALUES
(1, 'admin', 'admin', 'Superadmin', 'Saidu', '', 'Conteh', '', 'assets/images/user/namibia-2049203_960_720.jpg', 'Male', '', '', '', ''),
(2, 'secant', '1234', 'Student', 'Secant', 'Emmanuel', 'Chase', '55892', 'assets/images/user/agric.jpg', 'Male', 'Computer Science', '4', 'School of Technology', 'Department of Computer Science'),
(3, 'chasey', '0000', 'Schooladmin', 'Chasey', '', 'Chase', '', 'assets/images/user/agric.jpg', 'Male', '', '', '', ''),
(4, 'chase', '1111', 'Departmentadmin', 'Saidu', '', 'Chase', '', 'assets/images/user/agric.jpg', 'Male', '', '', 'School of Technology', 'Department of Physics & Computer Science'),
(5, 'john', '1234', 'Lecturer', 'John T', '', 'Koroma', '', 'assets/images/user/agric.jpg', 'Male', '', '', 'School of Technology', 'Department of Computer Science'),
(6, 'saidu', '1234', 'Student', 'Saidu', 'Emmanuel', 'Conteh', '55892', 'assets/images/user/namibia-2049203_960_720.jpg', 'Male', 'Computer Science', '4', 'School of Technology', 'Department of Physics & Computer Science'),
(7, 'test', 'test', 'Superadmin', 'test', '', 'test', '', '', '', '', '', '', ''),
(8, 'Kadiatu ', '56390', 'Student', 'Kadiatu', '', 'Kamara', '', '', '', '', '', '', ''),
(9, 'kaday', '1234', 'Student', 'Kadiatu', '', 'Kamara', '56390', 'assets/images/user/agric.jpg', 'Female', 'BSC Business & Info Tech', '4', 'School', 'Department of Physics & Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourses`
--

CREATE TABLE `tblcourses` (
  `courseid` int(11) NOT NULL,
  `coursecode` varchar(10) NOT NULL,
  `coursename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourses`
--

INSERT INTO `tblcourses` (`courseid`, `coursecode`, `coursename`) VALUES
(1, 'comps111', 'physics'),
(2, 'comps112', 'chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`id`, `department`) VALUES
(1, 'Department of Computer Science'),
(2, 'Department of Physics & Computer Science'),
(3, 'Department of Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

CREATE TABLE `tblgallery` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblgallery`
--

INSERT INTO `tblgallery` (`id`, `image`) VALUES
(4, 'assets/images/gallery/4CF9CB4A-9030-4743-9BB7-2142A9DBCC37.jpeg'),
(5, 'assets/images/gallery/13.png'),
(6, 'assets/images/gallery/HJHJHJ.png'),
(7, 'assets/images/gallery/image_2021-05-28_055054.png'),
(8, 'assets/images/gallery/IMG-20220307-WA0000-1.jpg'),
(9, 'assets/images/gallery/njala.JPG'),
(11, 'assets/images/gallery/FV-KA7PWYAAMk6f.jpg'),
(12, 'assets/images/gallery/FNFZLdEWQAMcwwR.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblgrades`
--

CREATE TABLE `tblgrades` (
  `gradeid` int(11) NOT NULL,
  `grade` varchar(1) DEFAULT NULL,
  `course` int(11) DEFAULT NULL,
  `student` int(11) DEFAULT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblgrades`
--

INSERT INTO `tblgrades` (`gradeid`, `grade`, `course`, `student`, `semester`) VALUES
(2, 'A', 2, 6, 'First Semester');

-- --------------------------------------------------------

--
-- Table structure for table `tblprogram`
--

CREATE TABLE `tblprogram` (
  `id` int(11) NOT NULL,
  `program` varchar(100) NOT NULL,
  `department` int(11) DEFAULT NULL,
  `school` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprogram`
--

INSERT INTO `tblprogram` (`id`, `program`, `department`, `school`) VALUES
(1, 'Computer Science', 1, 2),
(12, 'ELTT', 1, 2),
(13, 'BSC Business & Info Tech', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblreview`
--

CREATE TABLE `tblreview` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblreview`
--

INSERT INTO `tblreview` (`id`, `title`, `review`, `name`, `image`, `role`) VALUES
(1, 'Done', '      Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec sit amet velit vitae purus aliquam efficitur.', 'Saidu Conteh', 'assets/images/reviews/namibia-2049203_960_720.jpg', 'Student'),
(2, 'Excellent', '      Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec sit amet velit vitae purus aliquam efficitur.', 'Kadiatu Conteh', 'assets/images/reviews/agric.jpg', 'Student'),
(3, 'Good', '      Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec sit amet velit vitae purus aliquam efficitur.', 'Chasey Chase', 'assets/images/reviews/por-do-sol-4707500_960_720.jpg', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `tblrole`
--

CREATE TABLE `tblrole` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrole`
--

INSERT INTO `tblrole` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'School  Admin'),
(3, 'Department  Admin'),
(4, 'Lecturer'),
(5, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `tblschool`
--

CREATE TABLE `tblschool` (
  `id` int(11) NOT NULL,
  `school` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblschool`
--

INSERT INTO `tblschool` (`id`, `school`) VALUES
(2, 'School of Technology'),
(3, 'School of Agriculture'),
(4, 'School of Education');

-- --------------------------------------------------------

--
-- Table structure for table `tblslider`
--

CREATE TABLE `tblslider` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblslider`
--

INSERT INTO `tblslider` (`id`, `image`) VALUES
(7, 'assets/images/slider/njala.JPG'),
(11, 'assets/images/slider/13.png'),
(12, 'assets/images/slider/FNFZLdEWQAMcwwR.jpg'),
(13, 'assets/images/slider/FV-KA7PWYAAMk6f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcourses`
--
ALTER TABLE `tblcourses`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblgallery`
--
ALTER TABLE `tblgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblgrades`
--
ALTER TABLE `tblgrades`
  ADD PRIMARY KEY (`gradeid`),
  ADD KEY `course` (`course`),
  ADD KEY `student` (`student`);

--
-- Indexes for table `tblprogram`
--
ALTER TABLE `tblprogram`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department` (`department`),
  ADD KEY `school` (`school`);

--
-- Indexes for table `tblreview`
--
ALTER TABLE `tblreview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblrole`
--
ALTER TABLE `tblrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblschool`
--
ALTER TABLE `tblschool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblslider`
--
ALTER TABLE `tblslider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblcourses`
--
ALTER TABLE `tblcourses`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblgallery`
--
ALTER TABLE `tblgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblgrades`
--
ALTER TABLE `tblgrades`
  MODIFY `gradeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblprogram`
--
ALTER TABLE `tblprogram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblreview`
--
ALTER TABLE `tblreview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblrole`
--
ALTER TABLE `tblrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblschool`
--
ALTER TABLE `tblschool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblslider`
--
ALTER TABLE `tblslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblgrades`
--
ALTER TABLE `tblgrades`
  ADD CONSTRAINT `tblgrades_ibfk_1` FOREIGN KEY (`course`) REFERENCES `tblcourses` (`courseid`),
  ADD CONSTRAINT `tblgrades_ibfk_2` FOREIGN KEY (`student`) REFERENCES `tbladmin` (`id`);

--
-- Constraints for table `tblprogram`
--
ALTER TABLE `tblprogram`
  ADD CONSTRAINT `tblprogram_ibfk_1` FOREIGN KEY (`department`) REFERENCES `tbldepartment` (`id`),
  ADD CONSTRAINT `tblprogram_ibfk_2` FOREIGN KEY (`school`) REFERENCES `tblschool` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
