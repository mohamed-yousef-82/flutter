-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 07:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flutter`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoi`
--

CREATE TABLE `appoi` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `date` datetime NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appoi`
--

INSERT INTO `appoi` (`id`, `user_id`, `date`, `timestamp`) VALUES
(1, 1, '0000-00-00 00:00:00', '2021-02-14 10:16:45'),
(2, 1, '2021-02-14 12:16:45', '2021-02-14 10:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `book_scan`
--

CREATE TABLE `book_scan` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `path` varchar(500) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_scan`
--

INSERT INTO `book_scan` (`id`, `user_id`, `path`, `timestamp`) VALUES
(1, '2', 'image_picker88661428960616333.jpg', '2021-02-16 22:27:16'),
(2, '2', 'image_picker6782790088401491724.jpg', '2021-02-16 22:27:16'),
(3, '2', 'image_picker88661428960616333.jpg', '2021-02-16 23:40:43'),
(4, '1', 'image_picker6782790088401491724.jpg', '2021-02-16 23:40:43'),
(5, '1', 'image_picker88661428960616333.jpg', '2021-02-16 23:41:20'),
(6, '1', 'image_picker6782790088401491724.jpg', '2021-02-16 23:41:20'),
(7, '1', 'image_picker88661428960616333.jpg', '2021-02-16 23:41:26'),
(8, '1', 'image_picker6782790088401491724.jpg', '2021-02-16 23:41:26'),
(9, '1', 'image_picker948512999664189416.jpg', '2021-02-16 23:42:14'),
(10, '1', 'image_picker948512999664189416.jpg', '2021-02-16 23:42:17'),
(11, '1', 'image_picker948512999664189416.jpg', '2021-02-16 23:42:20'),
(12, '1', 'image_picker948512999664189416.jpg', '2021-02-16 23:42:24'),
(13, '1', 'image_picker5159563460839501941.jpg', '2021-02-16 23:42:24'),
(14, '1', 'image_picker948512999664189416.jpg', '2021-02-16 23:42:36'),
(15, '1', 'image_picker5159563460839501941.jpg', '2021-02-16 23:42:36'),
(16, '1', 'image_picker948512999664189416.jpg', '2021-02-16 23:44:29'),
(17, '1', 'image_picker5159563460839501941.jpg', '2021-02-16 23:44:29'),
(18, '1', 'image_picker948512999664189416.jpg', '2021-02-16 23:44:31'),
(19, '1', 'image_picker5159563460839501941.jpg', '2021-02-16 23:44:31'),
(20, '1', 'image_picker948512999664189416.jpg', '2021-02-16 23:44:41'),
(21, '1', 'image_picker5159563460839501941.jpg', '2021-02-16 23:44:41'),
(22, '1', 'image_picker2600113072520816236.jpg', '2021-02-16 23:59:19'),
(23, '1', 'image_picker5353191431048518768.jpg', '2021-02-16 23:59:19'),
(24, '1', 'image_picker7640690767434578816.jpg', '2021-02-16 23:59:19'),
(25, '1', 'image_picker3117385552152320279.jpg', '2021-02-16 23:59:19'),
(26, '1', 'image_picker8160740429943856789.jpg', '2021-02-16 23:59:19'),
(27, '1', 'image_picker8143008100583937422.jpg', '2021-02-16 23:59:19'),
(28, '1', 'image_picker5770490618437536897.jpg', '2021-02-16 23:59:19'),
(29, '1', 'IMG_20210215_130051.jpg', '2021-03-02 14:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `receiver`, `msg`, `timestamp`) VALUES
(1, '3', '1', 'hi', '2021-02-17 06:00:00'),
(2, '1', '3', 'this is the user', '2021-02-17 19:00:00'),
(18, '1', '3', '111', '2021-02-18 20:00:58'),
(19, '1', '3', '9999', '2021-02-18 20:01:05'),
(20, '1', '3', '222', '2021-02-18 20:01:33'),
(21, '1', '3', '444', '2021-02-18 20:02:47'),
(22, '1', '3', '9999', '2021-02-18 20:02:53'),
(23, '1', '3', '555', '2021-02-18 20:03:03'),
(24, '1', '3', '999', '2021-02-18 20:20:26'),
(25, '1', '3', '1', '2021-02-18 20:20:36'),
(26, '1', '3', '8', '2021-02-18 20:20:44'),
(27, '1', '3', '777', '2021-02-18 20:21:16'),
(28, '1', '3', '777', '2021-02-18 20:21:29'),
(29, '1', '3', '999', '2021-03-12 00:00:00'),
(30, '1', '3', '3klajljaljlasa', '2021-03-12 02:20:42'),
(31, '1', '3', '3klajljaljlasa', '2021-03-12 02:21:10'),
(32, '1', '28', 'sddd', '2021-03-12 02:25:02'),
(33, '1', '28', 'salmlamlaml', '2021-03-12 02:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `ques` text NOT NULL,
  `ans` text NOT NULL,
  `timestamp` datetime NOT NULL,
  `added_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `ques`, `ans`, `timestamp`, `added_by`) VALUES
(1, 'a', 'adkl;kd;lk;dk;ask;ska/ xk,sa xa\r\nasmsa;lm\r\nasml;xa;', '2021-02-16 00:00:00', 0),
(2, 'd', 'dla;sxlmalm2820909739079u93u9', '0000-00-00 00:00:00', 0),
(3, 'b', 'bdkl;kd;lk;dk;ask;ska/ xk,sa xa\r\nasmsa;lm\r\nasml;xa;', '2021-02-16 00:00:00', 0),
(4, 'c', 'cla;sxlmalm2820909739079u93u9uw\r\n21029-2', '2021-02-16 00:00:00', 0),
(5, 'e', 'f', '0000-00-00 00:00:00', 0),
(6, 'g', 'g', '0000-00-00 00:00:00', 0),
(7, 'u', 'u', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payement`
--

CREATE TABLE `payement` (
  `id` int(5) NOT NULL,
  `patient_id` int(5) NOT NULL,
  `pay` decimal(10,4) NOT NULL,
  `est_date` date NOT NULL,
  `add_by` int(5) NOT NULL,
  `invoice_no` int(5) NOT NULL,
  `invoice_path` varchar(500) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payement`
--

INSERT INTO `payement` (`id`, `patient_id`, `pay`, `est_date`, `add_by`, `invoice_no`, `invoice_path`, `timestamp`) VALUES
(46, 1, '5000.0000', '2021-11-11', 29, 50, 'invoices/invoice604d01119805a.pdf', '2021-03-13 20:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `pdftable`
--

CREATE TABLE `pdftable` (
  `id` int(11) NOT NULL,
  `pdffile` text NOT NULL,
  `name` text NOT NULL,
  `sender` int(5) NOT NULL,
  `receiver` int(5) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pdftable`
--

INSERT INTO `pdftable` (`id`, `pdffile`, `name`, `sender`, `receiver`, `timestamp`) VALUES
(0, 'pdf/doc604d00f7520b6.pdf', 'sss', 29, 1, '2021-03-13 20:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(5) NOT NULL,
  `patient_id` int(5) NOT NULL,
  `status` varchar(500) NOT NULL,
  `est_date` date NOT NULL,
  `add_by` int(5) NOT NULL,
  `scan_type` varchar(100) NOT NULL,
  `approval` varchar(100) NOT NULL,
  `package` varchar(100) NOT NULL,
  `instruction` text NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `patient_id`, `status`, `est_date`, `add_by`, `scan_type`, `approval`, `package`, `instruction`, `timestamp`) VALUES
(2, 4, 'Scan', '2021-03-03', 2, '', '', 'full', '', '2021-03-04 03:52:57'),
(3, 2, 'Design', '2021-03-17', 2, '', '', '', '', '2021-03-04 03:53:46'),
(4, 2, '', '0000-00-00', 2, '', '', '', '', '2021-03-04 04:12:15'),
(5, 2, '', '0000-00-00', 2, '', '', '', '', '2021-03-04 04:12:17'),
(6, 2, 'Done', '2021-03-12', 2, '', '', '', '', '2021-03-04 16:32:01'),
(7, 4, 'Sent for Design', '2021-03-11', 2, 'Digital', 'approval', 'full', 'knzlkxlnalxlkna\naxml;asm\nlkasxlkns\nasknxlkasn', '2021-03-08 00:00:19');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `task` varchar(1000) NOT NULL,
  `type` date NOT NULL,
  `date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `done` int(1) NOT NULL DEFAULT '0',
  `admin_id` varchar(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `task`, `type`, `date`, `delivery_date`, `done`, `admin_id`, `timestamp`) VALUES
(0, 2, 'Aligner NO:', '2020-01-01', '2021-03-13', '2020-01-02', 0, '2', '2021-03-13 02:26:39'),
(1, 1, 'go to club', '0000-00-00', '0000-00-00', '0000-00-00', 0, '3', '2021-03-13 02:18:30'),
(2, 1, 'go to mosque', '0000-00-00', '0000-00-00', '0000-00-00', 1, '3', '2021-03-13 02:14:27'),
(3, 1, 'go to mosque', '0000-00-00', '0000-00-00', '0000-00-00', 0, '3', '2021-03-13 02:14:27'),
(4, 2, 'done', '0000-00-00', '2021-03-27', '0000-00-00', 0, '3', '2021-03-13 04:03:02'),
(5, 2, 'go to club', '0000-00-00', '2021-04-10', '0000-00-00', 1, '', '2021-03-13 04:03:02'),
(7, 2, 'Aligner NO:', '2020-01-01', '2021-04-24', '2020-01-02', 0, '2', '2021-03-13 04:03:03'),
(8, 2, 'Aligner NO:', '2020-01-01', '2021-05-08', '2020-01-02', 1, '2', '2021-03-13 04:05:01'),
(26, 2, 'Aligner NO: 1', '2020-01-01', '2021-03-13', '2020-01-02', 1, '2', '2021-03-13 04:08:01'),
(27, 2, 'Aligner NO: 2', '2020-01-01', '2021-03-27', '2020-01-02', 0, '2', '2021-03-13 04:08:01'),
(28, 2, 'Aligner NO: 3', '2020-01-01', '2021-04-10', '2020-01-02', 0, '2', '2021-03-13 04:08:01'),
(29, 2, 'Aligner NO: 4', '2020-01-01', '2021-04-24', '2020-01-02', 0, '2', '2021-03-13 04:08:01'),
(30, 2, 'Aligner NO: 5', '2020-01-01', '2021-05-08', '2020-01-02', 0, '2', '2021-03-13 04:08:01'),
(31, 2, 'Aligner NO: 1', '2020-01-01', '2021-05-22', '2020-01-02', 0, '2', '2021-03-13 04:08:01'),
(32, 2, 'Aligner NO: 2', '2020-01-01', '2021-06-05', '2020-01-02', 0, '2', '2021-03-13 04:08:01'),
(33, 2, 'Aligner NO: 3', '2020-01-01', '2021-06-19', '2020-01-02', 0, '2', '2021-03-13 04:08:01'),
(34, 2, 'Aligner NO: 4', '2020-01-01', '2021-07-03', '2020-01-02', 0, '2', '2021-03-13 04:08:01'),
(35, 2, 'Aligner NO: 5', '2020-01-01', '2021-07-17', '2020-01-02', 0, '2', '2021-03-13 04:08:01'),
(36, 2, 'Aligner No: 1', '2020-01-01', '2021-07-31', '2020-01-02', 0, '2', '2021-03-13 04:08:01'),
(37, 2, 'Aligner No: 2', '2020-01-01', '2021-08-14', '2020-01-02', 0, '2', '2021-03-13 04:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(5) NOT NULL,
  `token` varchar(500) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `user_id`, `token`, `timestamp`) VALUES
(3, 1, 'ePB5XedrRNu7IxgrRopd3w:APA91bGC-N1RkSrBg7B-wFDgPbI0Xt1WwNFUzbDQJIyMn2tS2UHlQ3zmXiH9sFr8XiVKx1kXUvRcr4rppE9OGwj4P76NgjXAYgZ5Ks8x1JqbAgySq3zdTV-q5b16_07Rv8UKSM_MhHH2', '2021-02-27 19:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(5) NOT NULL,
  `patient_id` int(5) NOT NULL,
  `plan_menu` varchar(500) NOT NULL,
  `steps` varchar(5) NOT NULL,
  `add_by` int(5) NOT NULL,
  `attachement` varchar(100) NOT NULL,
  `ipr` varchar(100) NOT NULL,
  `Retainer` varchar(100) NOT NULL,
  `case2` text NOT NULL,
  `Refeniment` varchar(100) NOT NULL,
  `Redesign` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `patient_id`, `plan_menu`, `steps`, `add_by`, `attachement`, `ipr`, `Retainer`, `case2`, `Refeniment`, `Redesign`, `timestamp`) VALUES
(1, 2, 'ss', '2', 2, '', '', '', '', '', '', '2021-03-08 00:18:06'),
(2, 4, 'Ahmed', '10', 2, 'Yes', 'No', 'Yes', 'a;sa;k;', '2', '3', '2021-03-08 00:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `code` varchar(5) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `by_doc` varchar(100) NOT NULL DEFAULT 'smart_smile',
  `active` int(1) NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `city`, `address`, `age`, `gender`, `password`, `code`, `mobile`, `email`, `role`, `by_doc`, `active`, `timestamp`) VALUES
(1, 'm', 'Giza', '88moheb', '88', 'male', '1', '+20', '1', 'conan87@hotmail.com', 'user', '', 1, '2021-01-26 18:20:53'),
(2, 'aaa', '', '56565 asas', '22', '-1', '12345678	', '', '111111112222', 'sgsg2sss.com', '', '', 0, '2021-02-20 13:35:49'),
(3, 'mohamed2', '', '', '', '', '12345678', '', '+2012214730', 'kzzz@dd.com', '', '', 0, '2021-02-20 13:13:56'),
(5, 'aaa', '', '56565 asas', '22', '-1', '12345678	', '', '1111111122222', 'sgsg@2sss.com', '', '', 0, '2021-02-20 13:36:02'),
(7, 'aaa', '', '56565 asas', '22', '0', '12345678	', '', '1111112222', 'sgsg@2sss.com', '', '', 0, '2021-02-20 13:50:03'),
(8, 'aaa', '', '56565 asas', '22', 'Male', '12345678	', '', '111112222', 'sgsg@2sss.com', '', '', 0, '2021-02-20 13:51:37'),
(9, 'ahmed', '', '565 jjk', '25', 'Female', '12345678', '', '+20122', 'hh@gg.com', '', '', 0, '2021-02-20 14:39:28'),
(10, 'ahmed', '', '565 jjk', '25', 'Female', '12345678', '', '+93122', 'hh@gg.com', '', '', 0, '2021-02-20 14:39:46'),
(13, 'k,n,n,n,n,,', '', 'klkklk', '22', 'Male', '123456', '', '+2011112255555', 'ss@ss.cok', '', 'smart_smile', 0, '2021-02-28 01:54:49'),
(14, 'khjkhkjk1', '', 'ssss', '22', 'Male', '123456', '', '+208789797979', 'aaa@ss.com', '', 'smart_smile', 0, '2021-02-28 01:57:47'),
(15, 'ajlja', 'Alexandria', 'sljsljls', '22', 'Male', '123456', '', '+203131315464', 'sss@aaa.cm', '', 'smart_smile', 0, '2021-02-28 11:48:58'),
(16, 'm2', '', '', '', '', '1', '', '1255', 'aa', '', 'smart_smile', 0, '2021-03-02 17:43:45'),
(17, 'm2', 'Cairo', 'sa', '11', 'male', '1', '+20', '1255666', 'aa', '', 'smart_smile', 0, '2021-03-02 17:44:38'),
(18, 'm2', 'Cairo', 'sa', '11', 'male', '1', '+20', '12556667', 'aa', 'user', 'smart_smile', 0, '2021-03-03 12:48:17'),
(19, 'sakl', 'Giza', 'ljl', '', '', '1234', '', '555', 'sjalkj', 'Moderator', 'smart_smile', 0, '2021-03-08 20:08:35'),
(20, 'sdlkjl', 'Cairo', 'lkjljl', '', '', '111', '', '4656', '64646', 'Customer S', 'smart_smile', 0, '2021-03-08 20:17:30'),
(26, 'lkklh', '', 'lkk', '', '', '$2y$10$u6IWveGKBKLhO0IZMCbPCeqv.LP7SskNslUgB7X.MQDYLypRlYSE.', '+20', '66546', 'jjkk', '', 'smart_smile', 1, '2021-03-09 20:55:25'),
(27, 'kjljlj', 'Cairo', 'ljlj', '', '', '$2y$10$1Gp.oF.yjlLPh2fd7XMrPur4Me.yt4OnzDLaCM5L6NpUeq9mee8ya', '+20', '888', 'jhkjh', '$2y$10$6iGkgTnh2k2SqcTSAZyrWe8XP1DUBK6Dn1kV2NYEQ72VNCzV2fBO6', 'smart_smile', 1, '2021-03-09 21:41:33'),
(28, 'hkjhk', 'Cairo', 'kjljl', '', '', '$2y$10$.O.9cZdZpzblQWmoRblf5e17bINaz7VNMKIN/DbZLr/D2q1Vvh//S', '+20', '1', 'lhll', '$2y$10$MvgE5LtLx4qscHW0Bz8yoeeaTsX73Vj21GcOKFGdtdFIryEQewGXG', 'smart_smile', 1, '2021-03-09 21:43:52'),
(29, 'khkh', 'Cairo', 'khkh', '', '', '$2y$10$HX4gaOuALInz9MYyCPJB2eOE/VWGluDNOU.nXJ8KWMWD3V6O4sFYG', '+20', '2', '1nk', '$2y$10$zsiczJyAsfzOrSpGP91qs.uiWFj5IdNJlB1QuKV5sbpVQhRyaJW4W', 'smart_smile', 1, '2021-03-12 04:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `videotable`
--

CREATE TABLE `videotable` (
  `id` int(11) NOT NULL,
  `pdffile` text NOT NULL,
  `name` text NOT NULL,
  `sender` int(5) NOT NULL,
  `receiver` int(5) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `videotable`
--

INSERT INTO `videotable` (`id`, `pdffile`, `name`, `sender`, `receiver`, `timestamp`) VALUES
(4, 'video/video604d00bac9266.mp4', 'aaa', 29, 1, '2021-03-13 20:13:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoi`
--
ALTER TABLE `appoi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_scan`
--
ALTER TABLE `book_scan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payement`
--
ALTER TABLE `payement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdftable`
--
ALTER TABLE `pdftable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videotable`
--
ALTER TABLE `videotable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoi`
--
ALTER TABLE `appoi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_scan`
--
ALTER TABLE `book_scan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payement`
--
ALTER TABLE `payement`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `videotable`
--
ALTER TABLE `videotable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
