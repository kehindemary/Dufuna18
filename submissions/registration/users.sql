-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2018 at 03:15 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `registration_id` int(11) NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `confirmpassword` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phoneno` int(11) NOT NULL,
  `gender` enum('male','female','','') COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`registration_id`, `firstname`, `lastname`, `email`, `password1`, `confirmpassword`, `phoneno`, `gender`, `country`, `created_at`) VALUES
(30, 'Aderogba', 'C.F', 'rosebudschoolsib@gmail.com', 'dd', 'dd', 2147483647, 'female', 'nigeria', '2018-10-23 22:52:31'),
(31, 'Aderogba', 'C.F', 'rosebudschoolsib@gmail.com', '233', '456', 2147483647, 'male', 'nigeria', '2018-10-23 22:58:03'),
(32, 'mart', 'john', 'rosebudschoolsib@gmail.com', '22', '11', 2147483647, 'male', 'nigeria', '2018-10-23 23:01:20'),
(33, 'mart', 'john', 'rosebudschoolsib@gmail.com', '22', '11', 2147483647, 'male', 'nigeria', '2018-10-24 12:00:09'),
(34, 'mart', 'john', 'rosebudschoolsib@gmail.com', '22', '11', 2147483647, 'male', 'nigeria', '2018-10-24 12:00:21'),
(35, 'Aderogba', 'C.F', 'rosebudschoolsib@gmail.com', 'hn', 'hf', 2147483647, 'female', 'nigeria', '2018-10-24 12:01:54'),
(36, 'Aderogba', 'C.F', 'rosebudschoolsib@gmail.com', 'cv', 'cv', 2147483647, 'female', 'nigeria', '2018-10-24 12:02:23'),
(37, 'Aderogba', 'C.F', 'rosebudschoolsib@gmail.com', 'nm', 'nm', 2147483647, 'female', 'nigeria', '2018-10-24 12:10:23'),
(38, 'Aderogba', 'C.F', 'rosebudschoolsib@gmail.com', 'kk', 'kk', 2147483647, 'female', 'nigeria', '2018-10-24 12:10:56'),
(39, 'Aderogba', 'C.F', 'rosebudschoolsib@gmail.com', 'cv', 'cv', 2147483647, 'female', 'nigeria', '2018-10-24 12:20:31'),
(40, 'Aderogba', 'C.F', 'rosebudschoolsib@gmail.com', 'cv', 'cv', 2147483647, 'female', 'nigeria', '2018-10-24 12:23:17'),
(41, 'Aderogba', 'C.F', 'rosebudschoolsib@gmail.com', 'gh', 'mm', 2147483647, 'male', 'nigeria', '2018-10-24 12:34:35'),
(42, 'Aderogba', 'C.F', 'rosebudschoolsib@gmail.com', 'mary', 'mary', 2147483647, 'male', 'nigeria', '2018-10-24 12:34:57'),
(43, 'mary', 'kenny', 'adebolakehindemary@gmail.com', 'mee', 'mee', 908765434, 'female', 'nigeria', '2018-10-24 12:37:37'),
(44, 'lamina', 'kehinde', 'adebolakehindemary@gmail.com', 'b8e7be5dfa2ce0714d21', 'mary', 2147483647, 'female', 'nigeria', '2018-10-24 18:02:25'),
(45, 'florence', 'olufunke', 'florencefunke01@gmail.com', 'b8e7be5dfa2ce0714d21', 'mary', 980000777, 'female', 'nigeria', '2018-10-26 16:13:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
