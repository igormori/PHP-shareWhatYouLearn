-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 03:19 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_group_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `Reply_id` int(5) UNSIGNED NOT NULL,
  `Topic_id` int(5) UNSIGNED NOT NULL,
  `replier_name` varchar(70) NOT NULL,
  `Comment` text NOT NULL,
  `Date_replied` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`Reply_id`, `Topic_id`, `replier_name`, `Comment`, `Date_replied`) VALUES
(7, 5, 'dfdsfsda', 'hghgfhgh', '2018-01-09'),
(8, 5, 'dfdsfsda', 'dfdgfdgf', '2018-01-09'),
(9, 5, 'aaa', 'dsfdsafdsafsdf', '2018-01-09'),
(10, 3, 'aaa', 'fgfhgfh', '2018-01-09'),
(11, 3, 'aaa', 'tytrytryery', '2018-01-09'),
(12, 11, 'dsfsdfsadfasdf', '        static int DummyMethod(int i)\r\n        {\r\n            Console.WriteLine(\"In DummyMethod method i = \" + i);\r\n            return i + 10;\r\n        }\r\n\r\n        static void Main(string[] args)\r\n        {    \r\n            List<Methodx> methods = new List<Methodx>();\r\n\r\n            for (int i = 0; i < 5; ++i)\r\n            {\r\n                methods.Add(delegate(object obj) { return DummyMethod(i); });\r\n            }\r\n\r\n            //methods.Add(delegate(object obj) { return DummyMethod(1); });\r\n            //methods.Add(delegate(object obj) { return DummyMethod(2); });\r\n            //methods.Add(delegate(object obj) { return DummyMethod(3); });\r\n            //methods.Add(delegate(object obj) { return DummyMethod(4); });\r\n\r\n            foreach (var method in methods)\r\n            {\r\n                int c = method(null);\r\n                Console.WriteLine(\"In main method c = \" + c);\r\n            }\r\n        }\r\n        static int DummyMethod(int i)\r\n        {\r\n            Console.WriteLine(\"In DummyMethod method i = \" + i);\r\n            return i + 10;\r\n        }\r\n\r\n        static void Main(string[] args)\r\n        {    \r\n            List<Methodx> methods = new List<Methodx>();\r\n\r\n            for (int i = 0; i < 5; ++i)\r\n            {\r\n                methods.Add(delegate(object obj) { return DummyMethod(i); });\r\n            }\r\n\r\n            //methods.Add(delegate(object obj) { return DummyMethod(1); });\r\n            //methods.Add(delegate(object obj) { return DummyMethod(2); });\r\n            //methods.Add(delegate(object obj) { return DummyMethod(3); });\r\n            //methods.Add(delegate(object obj) { return DummyMethod(4); });\r\n\r\n            foreach (var method in methods)\r\n            {\r\n                int c = method(null);\r\n                Console.WriteLine(\"In main method c = \" + c);\r\n            }\r\n        }', '2018-01-09'),
(13, 5, '', 'new rply', '2018-01-09'),
(14, 3, 'aaa', 'new rply', '2018-01-09'),
(15, 3, 'aaa', 'xvdsdscdscds', '2018-01-09'),
(16, 3, 'aaa', 'another r', '2018-01-09'),
(17, 3, 'aaa', 'another r', '2018-01-09'),
(18, 3, 'aaa', 'more reply', '2018-01-09'),
(19, 3, 'aaa', 'dfdsfdfdfdf', '2018-01-09'),
(20, 3, 'aaa', 'dfdsfdfdfdf', '2018-01-09'),
(21, 3, 'aaa', 'dfdsfdfdfdf', '2018-01-09'),
(24, 3, 'aaa', 'last', '2018-01-09'),
(25, 3, '', '', '2018-01-09'),
(26, 1, '', '', '2018-01-09'),
(27, 2, '', 'sdfsd', '2018-01-09'),
(28, 2, '', 'sdfsdf', '2018-01-09'),
(29, 2, '', 'sdfasdfasdfdsfasdf', '2018-01-09'),
(30, 2, '', 'dfadfsfadfadsf efdfadsfasdfadsfads', '2018-01-09'),
(31, 2, '', '', '2018-01-09'),
(32, 2, '', '', '2018-01-09'),
(33, 3, '', 'sdfsdf', '2018-01-09'),
(34, 2, 'aaa', 'last rep', '2018-01-09'),
(35, 1, 'zzz', 'reply to first topic', '2018-01-09'),
(36, 2, '', 'from search', '2018-01-09'),
(37, 2, '', 'reply earch', '2018-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `Student_id` int(5) UNSIGNED NOT NULL,
  `College_id` int(10) UNSIGNED NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Program_name` varchar(60) NOT NULL,
  `Profile_pic` varchar(30) NOT NULL,
  `Phone_no` int(15) NOT NULL,
  `Address` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`Student_id`, `College_id`, `User_name`, `Password`, `Email`, `Program_name`, `Profile_pic`, `Phone_no`, `Address`) VALUES
(22, 34343434, 'dsfsdfsadfasdf', '$2y$10$hPHur7zhmgpL7lkwaGrAbOb7z8JOPGhBj1lITY6Odcfc6uZQ9Yzae', 'adsf@gmail.com', 'T141', '1.jpg', 2323, 'fd'),
(23, 333, 'fretyy', '$2y$10$DimL0Yx7U9LNYbyBYr67iuPCFvM7qWox0mbrb25LVRbbuAlN5/JTy', 'tyt@gmail.com', 'T141', '1.jpg', 789, 'rrt'),
(24, 555, 'fadgfgfd', '$2y$10$fQMeIfBRnEBf2TuaFwhEhuStPr48iY42KXjM6vzAZcDYEMdqWJedC', 'adsf@gmail.com', 'T127', '1.jpg', 3223, 'sdfjdsh'),
(25, 1212121, 'dsfsadfds', '$2y$10$VaXoMyeqT92T.wQUHSfWieVNls4OsVrQikB6H0mLUpDrcSW26Nozq', 'sdfasdf@gmail.com', 'T127', '', 12, 'sdf'),
(26, 1111, 'raiyan', '$2y$10$8rCn2zfoGiTZ.NSVtxudXOLrCuAQGPtLoZ1AVeErNvNGqGU2V8O8G', 'raiyan@gmail.com', 'T163', '', 123456, 'sdfa'),
(27, 212, 'hgj', '$2y$10$4v2LWFJVXPFSaHUG8LympegsIVHUlLK6Tz8CyWTQ9I23BA2k5V7vG', 'farhad@gmail.com', 'T127', '', 55, 'jj'),
(28, 21131, 'fretyy', '$2y$10$iyRlMVfuiE9T4f1VY7gpE.PmYNCkZX2/jxk9vQPODZDV1nwQJqOtm', 'farhad@gmail.com', 'T127', '', 4554, 'dsfa'),
(29, 555, 'sdfadsfasd', '$2y$10$JGCv8B16T8UU/fyO0EONCenDSmAQM8D28T2sC3WWveCfixPylWTjO', 'cltutor@georgebrown.ca', 'T127', '', 55, 'adsf'),
(30, 101056010, 'rtrtr', '$2y$10$qoPEAYfrd.lP4vmRekQLWO6ewxuh5KvCVDmY.OBQ3ceW0zbopkYC6', 'cltutor@georgebrown.ca', 'T127', '', 55, 'fd'),
(31, 12211, 'aaa', '$2y$10$VjxWDG6ZJawuyRUVqmWeFeNPX/Ds8zir.2/Oa7LTYG0R44iRoOdWO', 'cltutor@georgebrown.ca', 'T127', '', 55, 'kk'),
(32, 8878, 'iu', '$2y$10$GoxoW4VnwpRvcVcrAEdkhOSYkaISEFWLOoUJtqHeVgvLJG3C28YG2', 'cltutor@georgebrown.ca', 'T127', '', 55, 'yuy'),
(33, 88787, 'p', '$2y$10$v4CUIgHzfU5cpEKaVCHpFOrLIbhlZOqd/GiCEmBNl/KP6VJZk1Cvi', 'cltutor@georgebrown.ca', 'T127', '', 787887, 'dfsdf'),
(34, 48787, 'zzz', '$2y$10$fLQyDqzZ9pPyskWiTAjYteCTdt4EjH7qnTjYO/g9dPyDO44dFbfOy', 'cltutor@georgebrown.ca', 'T127', '', 555, 'fadsa');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `Topic_id` int(5) UNSIGNED NOT NULL,
  `Student_name` varchar(70) NOT NULL,
  `Topic_title` varchar(150) NOT NULL,
  `Topic_description` text NOT NULL,
  `Topic_cont` text NOT NULL,
  `Date_posted` date NOT NULL,
  `Views` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`Topic_id`, `Student_name`, `Topic_title`, `Topic_description`, `Topic_cont`, `Date_posted`, `Views`) VALUES
(1, '', 'first topic', 'description', '', '0000-00-00', 0),
(2, 'dsfsdfsadfasdf', 't2', 'd2', 'sdfasdfsadfsd adsfsad', '0000-00-00', 0),
(3, 'dsfsdfsadfasdf', 't3', 'd4', 'sdfasdfsadfsd adsfsad\r\nsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsad', '2018-01-09', 0),
(4, 'dsfsdfsadfasdf', 't3', 'd4', 'sdfasdfsadfsd adsfsad\r\nsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsad', '0000-00-00', 0),
(5, 'dsfsdfsadfasdf', 't5', 'd4', 'sdfasdfsadfsd adsfsad\r\nsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsad', '0000-00-00', 0),
(6, 'dsfsdfsadfasdf', 't5', 'd4', 'sdfasdfsadfsd adsfsad\r\nsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsadsdfasdfsadfsd adsfsad', '0000-00-00', 0),
(7, '', 'sd', 'wdw', 'gfgfgfg', '0000-00-00', 0),
(8, '', 'fddfd', 'sdfs', 'dsfsdfsd', '2018-01-09', 0),
(9, 'aaa', 'dsfas', 'dsfads', 'dsfasd', '2018-01-09', 0),
(10, 'aaa', 'new', 'sdfa', 'sdfa', '2018-01-09', 0),
(11, 'dsfsdfsadfasdf', 'delegates', 'I have a problem with creating delegates', '        static int DummyMethod(int i)\r\n        {\r\n            Console.WriteLine(\"In DummyMethod method i = \" + i);\r\n            return i + 10;\r\n        }\r\n\r\n        static void Main(string[] args)\r\n        {    \r\n            List<Methodx> methods = new List<Methodx>();\r\n\r\n            for (int i = 0; i < 5; ++i)\r\n            {\r\n                methods.Add(delegate(object obj) { return DummyMethod(i); });\r\n            }\r\n\r\n            //methods.Add(delegate(object obj) { return DummyMethod(1); });\r\n            //methods.Add(delegate(object obj) { return DummyMethod(2); });\r\n            //methods.Add(delegate(object obj) { return DummyMethod(3); });\r\n            //methods.Add(delegate(object obj) { return DummyMethod(4); });\r\n\r\n            foreach (var method in methods)\r\n            {\r\n                int c = method(null);\r\n                Console.WriteLine(\"In main method c = \" + c);\r\n            }\r\n        }', '2018-01-09', 0),
(12, 'dsfsdfsadfasdf', 'new topic', 'new desdfd', 'dsfadsf\r\nfsadf', '2018-01-09', 0),
(13, 'zzz', 'new by zzz', 'descr', 'sdfadsdsafa', '2018-01-09', 0),
(14, 'zzz', 'another new', 'dsfadsdsfs df', 'dsfdsfsdf', '2018-01-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_no` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_no`, `user_name`, `password`, `email`, `program`) VALUES
(1, 'far', '121212', 'farhadtex2011@gmail.com', 'T147'),
(2, 'sabbir', '555555555555', 'sabbir@gmail.com', 'T127'),
(13, 'sdfasdfdsdf', 'j', 'ererfe', 'T127');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`Reply_id`),
  ADD KEY `Topic_id` (`Topic_id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`Student_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`Topic_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `Reply_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `Student_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `Topic_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`Topic_id`) REFERENCES `topics` (`Topic_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
