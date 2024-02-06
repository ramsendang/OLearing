-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 01:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `categoryDescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `CategoryName`, `categoryDescription`) VALUES
(1, 'Laravel', 'Laravel is a PHP framework for building Full Stack Websites'),
(2, 'PHP', 'One of the Most Used Programming Language in the world.'),
(3, 'HTML5', 'This is a Back Bone of the Website. HTML gives structure of the Website');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `courseDescription` varchar(255) NOT NULL,
  `courseImageName` varchar(255) NOT NULL,
  `courseImagePath` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `videoName` varchar(255) NOT NULL,
  `videoPath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `courseName`, `courseDescription`, `courseImageName`, `courseImagePath`, `user_id`, `price`, `category_id`, `videoName`, `videoPath`) VALUES
(1, 'Learn Laravel 8 ( Beginner Friendly PHP and Laravel Course)', 'Master PHP and Laravel 8 with in a Month', 'laravel.jpg', './database/imagedb/laravel.jpg', 5, 10, 1, 'video_659c4331650ba.mp4', './database/videodb/video_659c4331650ba.mp4'),
(2, 'Learn Login System in Laravel 8', 'Master Laravel 8 build in Login system integration', 'laravel.jpg', './database/imagedb/laravel.jpg', 5, 21, 1, 'video_659c445eea19d.mp4', './database/videodb/video_659c445eea19d.mp4'),
(3, 'Basic of PHP in One Video', 'Become Used to with PHP ', 'php.png', './database/imagedb/php.png', 5, 11, 2, 'video_659d68a4737ba.mp4', './database/videodb/video_659d68a4737ba.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(10000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `course_id`, `rating`, `review`, `user_id`, `created_at`) VALUES
(1, 1, 3, 'hello ram, Thanks for the Project Review', 5, '2024-01-08 18:48:06'),
(2, 5, 4, 'good video', 5, '2024-01-09 15:40:05'),
(3, 5, 4, 'hello\r\n', 5, '2024-01-17 10:39:38'),
(4, 9, 5, 'yo this is a great course\r\n', 9, '2024-02-02 11:51:49'),
(5, 1, 5, 'this is a very good courese. 5 stars', 7, '2024-02-05 10:05:20'),
(6, 1, 5, 'hi\r\n', 5, '2024-02-06 12:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `profileImgName` varchar(255) NOT NULL,
  `profileImgPath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullName`, `user_email`, `user_password`, `role_id`, `profileImgName`, `profileImgPath`) VALUES
(5, 'ram kumar sendang', 'ramsendang02@gmail.com', '$2y$10$FQ8aGBuZyxA6vvS.f1pEe.tmi/QkWaEIFayzNAem6mzuKvU/wEi1.', 2, 'WIN_20240205_09_35_29_Pro.jpg', './database/profile/WIN_20240205_09_35_29_Pro.jpg'),
(7, 'ram', 'sendangramkumar@gmail.com', '$2y$10$4cPKxrHvrt5etW5kIbWN3OR/PejtcTrBSudR4zviCvccyqrEbUFrO', 1, 'model.jpeg', './database/profile/model.jpeg'),
(8, 'ram sendang', 'ram.sendang57@law.ac.uk', '$2y$10$6pgTN0Kel9iPpH5j5YfUW.krJpe7fuIdY8HbVtuR8zW6GZd8kVN1.', 1, '', ''),
(9, 'hemanta', 'hemanta@emal.com', '$2y$10$vxVqUe4hSrhDQVeT6kEXWONP17l0gjIn5piyQPudyTLwBt5G.pJ5y', 1, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `courseAndUserRelation` (`user_id`),
  ADD KEY `courses_ibfk_1` (`category_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
