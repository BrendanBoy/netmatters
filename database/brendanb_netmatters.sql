-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2022 at 06:54 AM
-- Server version: 8.0.28
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brendanb_netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `Articles`
--

CREATE TABLE `Articles` (
  `id` int NOT NULL,
  `category_id` int NOT NULL DEFAULT '1',
  `service_id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `author_id` int NOT NULL DEFAULT '1',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Articles`
--

INSERT INTO `Articles` (`id`, `category_id`, `service_id`, `image`, `title`, `body`, `author_id`, `date`) VALUES
(1, 1, 2, '10-ways-to-22ch.jpg', '10 ways to help make your business more robus...', 'A robust business is one defined as being able to continue to be successful irrespective of the mark...', 2, '2021-10-05'),
(2, 1, 1, 'september-2021-notables-qhiw.jpg', 'September 2021 Notables', 'Every month we celebrate the most notable of employees here at Netmatters. Each department head is a...', 1, '2021-10-05'),
(3, 5, 1, 'telemarketing-sales-executive-HapA.jpg', 'Telemarketing Sales Executive', 'Salary Range £22,000 (basic) (£30,000 OTE) + Benefits Hours 40 hours per week, Monday - Friday Locat...', 3, '2021-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `Authors`
--

CREATE TABLE `Authors` (
  `author_id` int NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Authors`
--

INSERT INTO `Authors` (`author_id`, `author_name`, `author_image`) VALUES
(1, 'Netmatters Ltd', 'netmatters-ltd-VXAv.png'),
(2, 'James Gulliver', 'james-gulliver-rgmz.jpg'),
(3, 'Mark Reilly', 'mark-reilly-Q6d8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `category_id` int NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`category_id`, `category_name`) VALUES
(1, 'news'),
(2, 'case studies'),
(3, 'guides'),
(4, 'insights'),
(5, 'careers'),
(6, 'environmental');

-- --------------------------------------------------------

--
-- Table structure for table `Contact_Form`
--

CREATE TABLE `Contact_Form` (
  `message_id` int NOT NULL,
  `your_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Contact_Form`
--

INSERT INTO `Contact_Form` (`message_id`, `your_name`, `company_name`, `email`, `telephone`, `subject`, `message`) VALUES
(1, 'Brendan', '', 'brendan.boyle@netmatters-scs.com', '01733767078', 'Nothing', 'This is just a test :-)'),
(2, 'Martyn Horslen', 'PHP Testing Inc', 'martyn.horslen@netmatters-scs.com', '07000 000 000', 'Oi Brendan', 'I am testing your PHP. I think it&#39;s working.'),
(3, 'test', '', 'test@test.com', '07553692966', 'dsdfdsfd', 'sfdsfdsfd'),
(4, 'alert(&#39;hacked!&#39;)', '', 'test@test.com', '+447553692999', 'Info about your products', 'fddfgfdfgfdg'),
(5, 'dfddf', 'dffdfd', 'dfdf@j.fg', '+447553692967', 'fgfggf', 'fgfggffg'),
(6, 'dfddf', 'dffdfd', 'dfdf@j.fg', '+447553692967', 'fgfggf', 'fgfggffg'),
(7, 'Martyn Horslen', 'PHP Testing Inc', 'martyn.horslen@netmatters-scs.com', '07984245214', 'Testing for Brendan', 'This is a test message.'),
(8, 'Martyn', '', 'a@b.c', '0785 123 456', 'test', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE `Services` (
  `service_id` int NOT NULL,
  `service_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`service_id`, `service_name`) VALUES
(1, 'design'),
(2, 'support'),
(3, 'telecoms'),
(4, 'software'),
(5, 'marketing'),
(6, 'security');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Authors`
--
ALTER TABLE `Authors`
  ADD UNIQUE KEY `author_id` (`author_id`);

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD UNIQUE KEY `category_id` (`category_id`);

--
-- Indexes for table `Contact_Form`
--
ALTER TABLE `Contact_Form`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `Services`
--
ALTER TABLE `Services`
  ADD UNIQUE KEY `service_id` (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Contact_Form`
--
ALTER TABLE `Contact_Form`
  MODIFY `message_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
