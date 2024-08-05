-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honourballot`
--

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `AwardID` int(4) NOT NULL,
  `awardName` varchar(50) NOT NULL,
  `awardDes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`AwardID`, `awardName`, `awardDes`) VALUES
(1, 'Best Actor', 'The Best Actor award recognizes the outstanding performance of a male actor in a leading role. It celebrates their exceptional talent, dedication, and ability to bring characters to life on the screen');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `CID` int(4) NOT NULL,
  `cName` varchar(30) NOT NULL,
  `cDes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CID`, `cName`, `cDes`) VALUES
(1, 'Jackson Anthony', 'Best award winning actor');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faqID` int(4) NOT NULL,
  `faqq` varchar(150) NOT NULL,
  `faqans` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faqID`, `faqq`, `faqans`) VALUES
(2, 'Who do I contact with questions or concerns?', 'Who do I contact with questions or concerns?'),
(3, 'How does HonourBallot prevent others from viewing my voting choices?', 'HonourBallot automatically uses SSL security for all votes, with 256-bit encryption - the same used by major banks. This means the connection between your web browser and HonourBallot\'s server is completely secure when you open the ballot, make your choices, and submit your ballot, so no one is able'),
(4, 'Will my vote be anonymous?', 'The voter anonymity setting that was selected for your vote determines whether a voter\'s choices can be linked to a voter and, if so, who is able to access that information as part of the vote results. Depending on the setting that was selected, it may be possible to link a voter\'s choices to a vote'),
(5, 'Do I need an account to vote?', 'You don\'t need an HonourBallot account to vote! You can access the vote and your ballot using the voting credentials in the notice you received from your election administrator.'),
(6, 'What type of computer and software do I need to vote?', 'To use HonourBallot, you\'ll need:\r\n•	an active internet connection\r\n•	a current web browser (e.g., Chrome, Internet Explorer, Microsoft Edge, Firefox); be sure Javascript and cookies are enabled\r\nYou can use HonourBallot on a variety of devices, including:\r\n•	desktop computer\r\n•	laptop\r\n•	tablet\r\n•	'),
(8, 'To access the vote and your ballot: •	if you received an access link: o	Click on the access link, or copy and paste it into your browser o	enter addit', 'Your organization may be permitting non-electronic methods of voting, like paper ballots or voting over the phone. Please review the notice you received to see if it includes details about voting using non-electronic voting methods.\r\nYour administrator will also know if you can vote using non-electr'),
(9, 'Why isn\'t my access link working?', 'Your access link may not be working because:\r\n•	you\'ve incorrectly entered it into your browser:\r\no	confirm the access link has been entered correctly, with no additional or missing characters\r\n•	the vote you\'re trying to vote in isn\'t open:\r\no	check your notice to confirm the vote\'s dates and times'),
(10, 'Why am I receiving a 404 Error message?', '404 errors are usually due to a miscommunication between your web browser and our server. Try using one of the following options to solve the issue:\r\n•	refresh your browser page\r\n•	close down your browser and reopen it\r\n•	open a different browser (e.g., if you’re using Chrome, try using Internet Exp'),
(11, 'Why am I seeing a message that I already voted?', 'You could be seeing this message because:\r\n•	you\'re using an access link from a previous vote; this is more common if you\'re participating in a meeting with a series of votes:\r\no	confirm you\'re using a current access link\r\n•	the access link may have been shared with another voter who used it to vote');

-- --------------------------------------------------------

--
-- Table structure for table `nominator`
--

CREATE TABLE `nominator` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nominator`
--

INSERT INTO `nominator` (`id`, `name`, `nic`, `email`, `contactno`) VALUES
(1, 'Krishna Wanusha', '30012313899', 'krish@gmail.com', '0112474747'),
(3, 'Kamal Perera', '012313213', 'kamal@gmail.com', '0111231313'),
(4, 'Pasindu Jayakodi', '2003123456', 'pasi@gmail.com', '0112884989'),
(5, 'Alex Cart', '2001231384', 'alex@gmail.com', '0771213138'),
(6, 'M.A.Rachith Tharana', '200206402624', 'rachiththarana18473@gmail.com', '0777474167');

-- --------------------------------------------------------

--
-- Table structure for table `subsemail`
--

CREATE TABLE `subsemail` (
  `submailID` int(6) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subsemail`
--

INSERT INTO `subsemail` (`submailID`, `email`) VALUES
(1, 'rachcha@gmail.com'),
(2, 'rachcha@gmail.com'),
(4, 'rachcha53332@gmail.com'),
(5, 'rachcha53332@gmail.com'),
(6, 'rachcha53332@gmail.com'),
(7, 'rachcha53332@gmail.com'),
(8, 'rachcha@gmail.com'),
(9, 'rachcha@gmail.com'),
(10, 'rachcha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userquestion`
--

CREATE TABLE `userquestion` (
  `qID` int(4) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `question` varchar(150) NOT NULL,
  `answer` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userquestion`
--

INSERT INTO `userquestion` (`qID`, `userName`, `question`, `answer`) VALUES
(9, 'Rachith53332', 'How to see results', 'Go to to vote now page'),
(10, 'Rachith53332', 'Can I vote physically', 'Yet to Answer'),
(11, 'Rachith53332', 'Can I see current vote result?', 'Yet to Answer');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `voteID` int(6) NOT NULL,
  `awardName` varchar(50) NOT NULL,
  `candidateName` varchar(50) NOT NULL,
  `datetime` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`voteID`, `awardName`, `candidateName`, `datetime`) VALUES
(1, 'ba', 'Dharshan Dharmaraj', '2023-06-10 20:42:33.000000'),
(3, 'ba', 'Jackson Anthony', '2023-06-10 20:47:54.000000'),
(4, 'ba', 'Jayalath Manorathna', '2023-06-10 20:48:23.000000'),
(5, 'ba', 'Mahendra Perera', '2023-06-10 20:48:35.000000'),
(6, 'bas', 'Pooja Umashankar', '2023-06-10 20:49:04.000000'),
(7, 'bas', 'Shalani Tharaka', '2023-06-10 20:49:19.000000'),
(8, 'bas', 'Ureni Noshika', '2023-06-10 20:49:27.000000'),
(9, 'bas', 'Vinu Siriwardhana', '2023-06-10 20:49:38.000000'),
(10, 'bfd', 'Chandram Rutnam', '2023-06-10 20:50:17.000000'),
(11, 'bfd', 'Prasanna Jayakody', '2023-06-10 20:50:28.000000'),
(12, 'bfd', 'Prasannajith Abeysooriya', '2023-06-10 20:50:42.000000'),
(13, 'bfd', 'Somarathna Dissanayake', '2023-06-10 20:50:50.000000'),
(14, 'bfm', 'Victor Rathnayake', '2023-06-10 20:55:42.000000'),
(15, 'bfm', 'Victor Rathnayake', '2023-06-10 20:55:45.000000'),
(16, 'bfm', 'W.D.Amaradeva', '2023-06-10 20:55:58.000000'),
(17, 'bfm', 'Manoj peiris', '2023-06-10 20:56:09.000000'),
(18, 'bsa', 'Hemal Ranasinghe', '2023-06-10 21:13:56.000000'),
(19, 'bsa', 'Ranjan Ramanayake', '2023-06-10 21:14:05.000000'),
(20, 'bsa', 'Raveen Kavishka', '2023-06-10 21:14:32.000000'),
(21, 'bsa', 'Roshan Ranawana', '2023-06-10 21:14:41.000000'),
(22, 'bsas', 'Shanudrie Priyasad', '2023-06-10 21:15:29.000000'),
(23, 'bsas', 'Dinithi Walgamage', '2023-06-10 21:15:45.000000'),
(24, 'bsas', 'Kavihari Haputhanthri', '2023-06-10 21:15:56.000000'),
(25, 'bsas', 'Anarkali Akarsha', '2023-06-10 21:16:12.000000'),
(27, 'ba', 'Dharshan Dharmaraj', '2023-06-10 20:42:33.000000'),
(28, 'ba', 'Dharshan Dharmaraj', '2023-06-10 20:42:33.000000'),
(29, 'ba', 'Dharshan Dharmaraj', '2023-06-10 20:42:33.000000'),
(30, 'ba', 'Jackson Anthony', '2023-06-10 20:47:54.000000'),
(31, 'ba', 'Mahendra Perera', '2023-06-10 20:48:35.000000'),
(32, 'ba', 'Jackson Anthony', '2023-06-10 20:47:54.000000'),
(33, 'ba', 'Jayalath Manorathna', '2023-06-10 20:48:23.000000'),
(34, 'ba', 'Mahendra Perera', '2023-06-10 20:48:35.000000'),
(35, 'bas', 'Pooja Umashankar', '2023-06-10 20:49:04.000000'),
(36, 'bas', 'Pooja Umashankar', '2023-06-10 20:49:04.000000'),
(37, 'bas', 'Ureni Noshika', '2023-06-10 20:49:27.000000'),
(38, 'bas', 'Shalani Tharaka', '2023-06-10 20:49:19.000000'),
(39, 'ba', 'Jackson Anthony', '2023-06-10 20:47:54.000000'),
(40, 'bfd', 'Prasannajith Abeysooriya', '2023-06-10 20:50:42.000000'),
(41, 'bfd', 'Prasannajith Abeysooriya', '2023-06-10 20:50:42.000000'),
(42, 'bfd', 'Prasannajith Abeysooriya', '2023-06-10 20:50:42.000000'),
(43, 'bfd', 'Prasannajith Abeysooriya', '2023-06-10 20:50:42.000000'),
(44, 'bfd', 'Chandram Rutnam', '2023-06-10 20:50:17.000000'),
(45, 'bfm', 'Victor Rathnayake', '2023-06-10 20:55:45.000000'),
(46, 'bsa', 'Hemal Ranasinghe', '2023-06-10 21:13:56.000000'),
(47, 'bsa', 'Hemal Ranasinghe', '2023-06-10 21:13:56.000000'),
(48, 'bfm', 'Rohana Beddage', '2023-06-10 23:36:07.000000'),
(49, 'bfm', 'Rohana Beddage', '2023-06-10 23:36:21.000000'),
(50, 'bsa', 'Ranjan Ramanayake', '2023-06-10 23:36:35.000000'),
(51, 'bsas', 'Kavihari Haputhanthri', '2023-06-10 23:37:01.000000'),
(52, 'bsas', 'Kavihari Haputhanthri', '2023-06-10 21:15:56.000000'),
(53, 'bsas', 'Kavihari Haputhanthri', '2023-06-10 21:15:56.000000'),
(54, 'bsas', 'Kavihari Haputhanthri', '2023-06-10 21:15:56.000000'),
(55, 'bsas', 'Anarkali Akarsha', '2023-06-10 21:16:12.000000');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `userId` int(4) NOT NULL,
  `userName` varchar(25) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`userId`, `userName`, `fullName`, `nic`, `email`, `password`) VALUES
(3, 'Rachith53332', 'Rachith Tharana', '200206402624', 'rachiththarana18473@gmail.com', 'Rachcha@53332');

-- --------------------------------------------------------

--
-- Table structure for table `voter_image`
--

CREATE TABLE `voter_image` (
  `userId` int(6) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voter_image`
--

INSERT INTO `voter_image` (`userId`, `image`) VALUES
(1, 0x526163686974682e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`AwardID`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faqID`);

--
-- Indexes for table `nominator`
--
ALTER TABLE `nominator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsemail`
--
ALTER TABLE `subsemail`
  ADD PRIMARY KEY (`submailID`);

--
-- Indexes for table `userquestion`
--
ALTER TABLE `userquestion`
  ADD PRIMARY KEY (`qID`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`voteID`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `voter_image`
--
ALTER TABLE `voter_image`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
  MODIFY `AwardID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `CID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faqID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nominator`
--
ALTER TABLE `nominator`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subsemail`
--
ALTER TABLE `subsemail`
  MODIFY `submailID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userquestion`
--
ALTER TABLE `userquestion`
  MODIFY `qID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `voteID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `userId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
