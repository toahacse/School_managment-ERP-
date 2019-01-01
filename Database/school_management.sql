-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 06:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(111) NOT NULL,
  `admin_name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `admin_email` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(111) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `password`) VALUES
(1, 'Md. Ismat Toaha', 'toahacse@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(111) NOT NULL,
  `class` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `img` text COLLATE utf16_unicode_ci NOT NULL,
  `discraption` text COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `class`, `name`, `img`, `discraption`) VALUES
(3, 'Six', 'Assignment Name Six 1.', 'images/package4.jpg', '                                                Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....                                            '),
(4, 'Six', 'Assignment Name Six 2.', 'images/c1.jpg', 'Assignment Discraption 2..Assignment Discraption 2..Assignment Discraption 2..Assignment Discraption 2..Assignment Discraption 2..Assignment Discraption 2..Assignment Discraption 2..Assignment Discraption 2..Assignment Discraption 2..Assignment Discraption 2..Assignment Discraption 2..'),
(5, 'Ten', 'Assignment Name Ten 1.', 'images/a7.jpg', 'Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....Assignment Discraption 1....'),
(6, 'Ten', 'Assignment Name Ten 2.', 'images/a6.jpg', 'Assignment Discraption 2....Assignment Discraption 2....Assignment Discraption 2....Assignment Discraption 2....Assignment Discraption 2....Assignment Discraption 2....Assignment Discraption 2....Assignment Discraption 2....Assignment Discraption 2....Assignment Discraption 2....');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(111) NOT NULL,
  `attendance` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `student_id` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `student_name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `class` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `roll_no` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `date` varchar(111) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `attendance`, `student_id`, `student_name`, `class`, `roll_no`, `date`) VALUES
(38, 'Present', '13', 'mr. A', 'Ten', '1', '25-12-2018'),
(39, 'Present', '14', 'mr. B', 'Ten', '2', '25-12-2018'),
(40, 'Present', '15', 'mr. C', 'Ten', '3', '25-12-2018'),
(41, 'Absent', '16', 'mr. D', 'Ten', '4', '25-12-2018'),
(42, 'Present', '17', 'mr. E', 'Ten', '5', '25-12-2018'),
(43, 'Absent', '8', 'mr. A', 'Six', '1', '25-12-2018'),
(44, 'Present', '9', 'mr. B', 'Six', '2', '25-12-2018'),
(45, 'Present', '10', 'mr. C', 'Six', '3', '25-12-2018'),
(46, 'Present', '11', 'mr. D', 'Six', '4', '25-12-2018'),
(47, 'Absent', '12', 'mr. E', 'Six', '5', '25-12-2018');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id` int(111) NOT NULL,
  `librarian_name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `librarian_email` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(111) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id`, `librarian_name`, `librarian_email`, `password`) VALUES
(2, 'mr. L1', 'l1@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(111) NOT NULL,
  `student_id` int(111) NOT NULL,
  `student_name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `class` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `roll_no` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `bangla` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `english` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `mathematics` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `science` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `religion` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `banglaGPA` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `englishGPA` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `mathematicsGPA` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `scienceGPA` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `religionGPA` varchar(111) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `student_id`, `student_name`, `class`, `roll_no`, `bangla`, `english`, `mathematics`, `science`, `religion`, `banglaGPA`, `englishGPA`, `mathematicsGPA`, `scienceGPA`, `religionGPA`) VALUES
(5, 8, 'mr. A', 'Six', '1', 'A-', 'A+', 'A', 'B', 'A', '3.80', '5.00', '4.44', '3.20', '4.30'),
(6, 13, 'mr. A', 'Ten', '1', 'A-', 'A+', 'A', 'B', 'A', '3.60', '5.00', '4.67', '3.30', '4.70');

-- --------------------------------------------------------

--
-- Table structure for table `savebookforstudent`
--

CREATE TABLE `savebookforstudent` (
  `id` int(111) NOT NULL,
  `student_id` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `student_name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `class` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `roll_no` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `book` varchar(111) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `savebookforstudent`
--

INSERT INTO `savebookforstudent` (`id`, `student_id`, `student_name`, `class`, `roll_no`, `book`) VALUES
(11, '8', 'mr. A', 'Six', '1', 'Book Name 4.'),
(12, '13', 'mr. A', 'Ten', '1', 'Book Name 2.'),
(13, '11', 'mr. D', 'Six', '4', 'Book Name 3.');

-- --------------------------------------------------------

--
-- Table structure for table `save_book`
--

CREATE TABLE `save_book` (
  `id` int(111) NOT NULL,
  `book_name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `author_name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `price` varchar(111) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `save_book`
--

INSERT INTO `save_book` (`id`, `book_name`, `author_name`, `price`) VALUES
(4, 'Book Name 1.', 'Author name 1', '100 Tk'),
(5, 'Book Name 2.', 'Author name 2', '200 Tk'),
(6, 'Book Name 3.', 'Author name 3', '300 Tk'),
(7, 'Book Name 4.', 'Author name 4', '400 Tk'),
(8, 'Book Name 5.', 'Author name 5', '500 TK');

-- --------------------------------------------------------

--
-- Table structure for table `save_event`
--

CREATE TABLE `save_event` (
  `id` int(111) NOT NULL,
  `name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `img` text COLLATE utf16_unicode_ci NOT NULL,
  `discraption` text COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `save_event`
--

INSERT INTO `save_event` (`id`, `name`, `img`, `discraption`) VALUES
(3, 'Event Name 1', 'images/5.jpg', 'Event Discraption 1...Event Discraption 1...Event Discraption 1...Event Discraption 1...Event Discraption 1...Event Discraption 1...Event Discraption 1...Event Discraption 1...Event Discraption 1...Event Discraption 1...Event Discraption 1...Event Discraption 1...Event Discraption 1...'),
(4, 'Event Name 2', 'images/a2.jpg', 'Event Discraption 2...Event Discraption 2...Event Discraption 2...Event Discraption 2...Event Discraption 2...Event Discraption 2...Event Discraption 2...Event Discraption 2...Event Discraption 2...Event Discraption 2...Event Discraption 2...Event Discraption 2...Event Discraption 2...');

-- --------------------------------------------------------

--
-- Table structure for table `save_librarian`
--

CREATE TABLE `save_librarian` (
  `id` int(111) NOT NULL,
  `name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `img` text COLLATE utf16_unicode_ci NOT NULL,
  `address` text COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `save_librarian`
--

INSERT INTO `save_librarian` (`id`, `name`, `email`, `img`, `address`) VALUES
(2, 'mr. L1', 'l1@gmail.com', 'images/t3.jpg', 'Bangladesh.'),
(3, 'mr. L2', 'l2@gmail.com', 'images/team_9.jpg', 'Bangladesh.');

-- --------------------------------------------------------

--
-- Table structure for table `save_student`
--

CREATE TABLE `save_student` (
  `id` int(111) NOT NULL,
  `name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `father_name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `class` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `roll_no` int(111) NOT NULL,
  `fee` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `img` text COLLATE utf16_unicode_ci NOT NULL,
  `address` text COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `save_student`
--

INSERT INTO `save_student` (`id`, `name`, `email`, `father_name`, `class`, `roll_no`, `fee`, `img`, `address`) VALUES
(8, 'mr. A', 'a@gmail.com', 'mr.1', 'Six', 1, '200 Tk', 'images/t1 - Copy - Copy.jpg', 'Bangladesh.                                        '),
(9, 'mr. B', 'b@gmail.com', 'mr.2', 'Six', 2, '200 Tk', 'images/t2 - Copy - Copy.jpg', 'Chittagong'),
(10, 'mr. C', 'c@gmail.com', 'mr.3', 'Six', 3, '200 Tk', 'images/t3 - Copy - Copy.jpg', 'Bangladesh'),
(11, 'mr. D', 'd@gmail.com', 'mr.4', 'Six', 4, '200 Tk', 'images/team_6 - Copy - Copy.jpg', 'Bangladesh'),
(12, 'mr. E', 'e@gmail.com', 'mr.5', 'Six', 5, '200 Tk', 'images/team_7 - Copy - Copy.jpg', 'Bangladesh'),
(13, 'mr. A', 'a10@gmail.com', 'mr.1', 'Ten', 1, '500 Tk', 'images/t1 - Copy.jpg', 'Bangladesh                                       '),
(14, 'mr. B', 'b10@gmail.com', 'mr.2', 'Ten', 2, '500 Tk', 'images/t2 - Copy.jpg', 'Bangladesh'),
(15, 'mr. C', 'c10@gmail.com', 'mr.3', 'Ten', 3, '500 Tk', 'images/t3 - Copy.jpg', 'Bangladesh                                        '),
(16, 'mr. D', 'd10@gmail.com', 'mr.4', 'Ten', 4, '500 Tk', 'images/team_6 - Copy.jpg', 'Bangladesh'),
(17, 'mr. E', 'e10@gmail.com', 'mr.5', 'Ten', 5, '500 Tk', 'images/team_7 - Copy.jpg', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `save_teacher`
--

CREATE TABLE `save_teacher` (
  `id` int(111) NOT NULL,
  `name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `department` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `img` text COLLATE utf16_unicode_ci NOT NULL,
  `address` text COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `save_teacher`
--

INSERT INTO `save_teacher` (`id`, `name`, `email`, `department`, `img`, `address`) VALUES
(2, 'mr. T1', 't1@gmail.com', 'Technical', 'images/t1.jpg', 'Bangladesh.'),
(3, 'mr. T2', 't2@gmail.com', 'Science', 'images/t2.jpg', 'Bangladesh.                                        '),
(4, 'mr. T3', 't3@gmail.com', 'Commerce', 'images/team_6.jpg', 'Bangladesh.'),
(5, 'mr. T4', 't4@gmail.com', 'Technical', 'images/team_7.jpg', 'Bangladesh.'),
(6, 'mr. T5', 't5@gmail.com', 'Science', 'images/team_9 - Copy - Copy.jpg', 'Bangladesh.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(111) NOT NULL,
  `student_name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `student_email` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(111) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `student_email`, `password`) VALUES
(2, 'mr. A', 'a@gmail.com', '12345'),
(3, 'mr. B', 'b@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(111) NOT NULL,
  `teacher_name` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `teacher_email` varchar(111) COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(111) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `teacher_name`, `teacher_email`, `password`) VALUES
(2, 'mr. T1', 't1@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savebookforstudent`
--
ALTER TABLE `savebookforstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_book`
--
ALTER TABLE `save_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_event`
--
ALTER TABLE `save_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_librarian`
--
ALTER TABLE `save_librarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_student`
--
ALTER TABLE `save_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_teacher`
--
ALTER TABLE `save_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `savebookforstudent`
--
ALTER TABLE `savebookforstudent`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `save_book`
--
ALTER TABLE `save_book`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `save_event`
--
ALTER TABLE `save_event`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `save_librarian`
--
ALTER TABLE `save_librarian`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `save_student`
--
ALTER TABLE `save_student`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `save_teacher`
--
ALTER TABLE `save_teacher`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
