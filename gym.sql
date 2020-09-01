-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2019 at 11:48 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `Area_id` int(11) NOT NULL,
  `Area_name` varchar(15) NOT NULL,
  `Area_pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`Area_id`, `Area_name`, `Area_pincode`) VALUES
(1, 'usmanpura', 380005),
(2, 'sola ', 380011),
(4, 'bhuvangdev', 380008),
(5, 'vasna', 380007),
(6, 'gota', 380012);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `B_id` int(11) NOT NULL,
  `P_id` int(11) NOT NULL,
  `C_id` int(11) NOT NULL,
  `Total_amount` int(5) NOT NULL,
  `Booking_date` date NOT NULL,
  `Booking_enddate` date NOT NULL,
  `booking_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`B_id`, `P_id`, `C_id`, `Total_amount`, `Booking_date`, `Booking_enddate`, `booking_status`) VALUES
(3, 3, 3, 13999, '2018-11-01', '2019-07-31', 1),
(4, 4, 4, 15999, '2018-10-01', '2018-09-30', 1),
(6, 3, 2, 10999, '2018-12-03', '2018-12-04', 1),
(7, 5, 4, 15999, '2018-12-24', '2018-12-26', 2),
(8, 4, 3, 7000, '2018-12-24', '2018-12-26', 2),
(19, 2, 1, 3234, '2019-02-04', '2019-02-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Con_id` int(11) NOT NULL,
  `Con_name` varchar(20) NOT NULL,
  `Con_no` varchar(13) NOT NULL,
  `Con_email` varchar(30) NOT NULL,
  `Con_msg` varchar(80) NOT NULL,
  `Con_title` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Con_id`, `Con_name`, `Con_no`, `Con_email`, `Con_msg`, `Con_title`) VALUES
(1, '\".$Conname.\"', '\".$Conno.\"', '\".$Conemail.\"', '\".$Conmsg.\"', '\".$Contitle.\"'),
(2, 'DSM', '8128612684', 'deepakvaleja264@gmail.com', 'ertfyuhikl;', 'lkl'),
(3, 'jhgf', '8128612684', 'deepakvaleja264@gmail.com', 'sdfhjkl;kjhgvvfghjkl..kjhg', 'fgg'),
(4, 'thakkarnagar', '8128612684', 'deepakvaleja264@gmail.com', 'fgbhjkl.', 'facilities');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_id` int(11) NOT NULL,
  `F_name` varchar(15) NOT NULL,
  `L_name` varchar(15) NOT NULL,
  `Address` varchar(120) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact_no` varchar(13) NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Area_id` int(11) NOT NULL,
  `Create_date` date NOT NULL,
  `is_Admin` int(11) NOT NULL,
  `otp` int(8) NOT NULL,
  `otpused` int(8) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_id`, `F_name`, `L_name`, `Address`, `Email`, `Contact_no`, `Gender`, `User_name`, `Password`, `Area_id`, `Create_date`, `is_Admin`, `otp`, `otpused`, `status`) VALUES
(1, 'Tarang', 'Rathod', '9/e saurabh society,near anand char rasta,naranpura.', 'tarangshah136@gmail.com', '+918160334554', 0, 'taru', 'asd', 1, '2019-01-01', 1, 0, 1, 1),
(2, 'Rishab', 'Patel', '6/c motipark society,near char rasta.', 'rishabpatel360@gmail.com', '+919067106453', 0, 'rishab@', 'tyu', 2, '2018-09-17', 0, 0, 0, 1),
(3, 'Pushkar', 'Shah', '9/d parshwanth society,near amul parlour.', 'pushkarshah67@gmail.com', '+918153882825', 0, 'pushu', 'pushikar', 4, '2018-09-02', 0, 0, 0, 0),
(4, 'Yash', 'Valeja', '10/deep society,near gulmohar park.  ', 'yashvaleja78@gmail.com', '+917866543988', 0, 'yashu', 'yashpatel', 5, '2018-10-29', 0, 0, 0, 0),
(5, 'Deepika', 'Panjwani', '7/a harekrishna tower,near azad sweets.', 'deepikapanjwani12@gmail.com', '+919173321278', 1, 'deepi', 'deepika', 1, '2019-01-17', 0, 0, 0, 0),
(6, 'hari', 'rana', 'b/5 akshar society,nr himatlal park,satellite.', 'ruchikshah11@gmail.com', '9876543210', 0, 'ruchik', 'ruchik', 2, '2015-01-07', 0, 781034, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `Fac_id` int(11) NOT NULL,
  `Fac_name` varchar(15) NOT NULL,
  `Fac_description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`Fac_id`, `Fac_name`, `Fac_description`) VALUES
(1, 'Trainer', 'provide personal trainer.'),
(3, 'Wi-fi', 'provide high speed internet.'),
(4, 'Music', 'It\'s provide new songs and album.'),
(5, 'dietchart', 'provide dietchar as per needed.'),
(6, '24*7', 'provide 24*7 services.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_id` int(11) NOT NULL,
  `C_id` int(11) NOT NULL,
  `F_description` varchar(150) NOT NULL,
  `Create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`F_id`, `C_id`, `F_description`, `Create_date`) VALUES
(1, 1, 'It\'s all steps during excerise are perfect and very benefited for life.', '2019-06-02'),
(2, 4, 'It equipment are very unique. ', '2018-12-17'),
(4, 3, 'It is a fully a/c,music.', '2019-03-05'),
(5, 5, 'It provide personal trainer with great experience.', '2019-07-17'),
(13, 1, '\".df.\"', '0000-00-00'),
(14, 3, 'dtyuiop', '2019-02-03'),
(15, 3, 'dtyuilokjhgfccvghjkh', '2019-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `G_id` int(11) NOT NULL,
  `G_name` varchar(250) NOT NULL,
  `G_description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`G_id`, `G_name`, `G_description`) VALUES
(14, 'download.jpg', 'It is the interior of gym.'),
(15, 'download (8).jpg', 'It is the image of instruments.'),
(16, 'download (3).jpg', 'It is the image of excerise room.'),
(17, 'download (2).jpg', 'It is the image of uplifting.');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `N_id` int(11) NOT NULL,
  `C_id` int(11) NOT NULL,
  `N_title` varchar(15) NOT NULL,
  `N_description` varchar(150) NOT NULL,
  `N_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`N_id`, `C_id`, `N_title`, `N_description`, `N_date`) VALUES
(1, 5, 'about time', 'your work out time is in morning from 8-10am.', '2019-01-09'),
(2, 3, 'about schedule', 'tomorrow we wil make you worm up. ', '2018-12-06'),
(3, 1, 'about time', 'tomorrow we have fix your time in evening from 7-9pm.', '2018-10-12'),
(5, 4, 'about payment', 'your payment is sucessfully done.', '2018-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `P_id` int(11) NOT NULL,
  `P_name` varchar(15) NOT NULL,
  `P_description` varchar(350) NOT NULL,
  `Fac_id` int(11) NOT NULL,
  `P_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`P_id`, `P_name`, `P_description`, `Fac_id`, `P_price`) VALUES
(1, '3 month', 'Dropping excess weight is good. Dropping weight and picking up muscle is better. This three-month fat-loss workout is designed to transform you from fat to fit in 90 days.', 5, 5999),
(2, '6 month', 'Get 6 Months Package. We will introduce you to all our gym equipment with Free 1-on-1 Personal Training to make sure your exercising correctly and using everything to your full potential.', 3, 11999),
(3, '9 month', 'The idea behind each workout is to take the targeted muscle to absolute failure by moving in a slow (6-10 second) manner, without locking out/taking the load off the muscle. You then record the weight and the time under load (TUL). Next time you trai', 1, 17999),
(4, '12 month', 'That is exactly what gyms are counting on this January. Fitness centers thrive on selling 12-month package at the start of the year to people who will give up on their exercise goals after a few months.\r\nBy targeting casual exercisers with nice facilities, putting too much wear and tear on equipment.', 4, 23999),
(5, 'Special Package', 'People want to be members of a gym that is open during the hours they can visit. You don’t have to be open 24/7, but consider extending your hours to be available on weekends and for several evening hours. ', 6, 24500);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `T_id` int(11) NOT NULL,
  `T_name` varchar(30) NOT NULL,
  `T_profilepic` varchar(200) NOT NULL,
  `T_email` varchar(30) NOT NULL,
  `T_contact` varchar(13) NOT NULL,
  `T_gender` tinyint(1) NOT NULL,
  `T_specialization` varchar(100) NOT NULL,
  `T_experience` varchar(250) NOT NULL,
  `T_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`T_id`, `T_name`, `T_profilepic`, `T_email`, `T_contact`, `T_gender`, `T_specialization`, `T_experience`, `T_description`) VALUES
(1, 'Rakesh Rathod', '6.jpg', 'rakeshrathod67@gmail.com', '+91787878700', 0, 'Group and Personal Training Specialization.', '3 years', 'The ideal candidate should be a great communicator with the ability to effectively describe complicated ideas to different audiences.'),
(2, 'Suresh Chaudhary', '8.jpg', 'sureshchaudhary123@gmail.com', '+919688712365', 0, 'Body and Muscle Building Specialization.', '5 years', 'You must be highly organized, proficient in time management, and possess excellent public speaking skills and maintain the ability to work and motivate others.'),
(3, 'Charlie D\'souza', '12.jpg', 'charliedsouza012@gmail.com', '+9187874536', 0, 'Weight Loss Specialization.', '4 years', 'An ability to motivate others in an encouraging and uplifting way towards improving their overall fitness and health with new and different methods.'),
(5, 'Dwayne Johnson', '18.jpg', 'dwaynejohnson123@gmail.com', '+919797464611', 0, 'Performance Enhancement Specialization.', '6 years ', 'Develop monitoring systems to ensure that all employees are performing job responsibilities according to training.An ability to motivate others in an encouraging and uplifting ways.'),
(6, 'Drashti Arora', '5.jpg', 'drashtiarora34@gmail.com', '+917654321987', 1, 'Yoga and Women Fitness Specialization.', '9 years', 'Prepare hard copy training materials such as module summaries, videos, and presentations.An ability to motivate others in an encouraging and uplifting.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`Area_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`B_id`),
  ADD KEY `C_id` (`C_id`),
  ADD KEY `P_id` (`P_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Con_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_id`),
  ADD KEY `Area_id` (`Area_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`Fac_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_id`),
  ADD KEY `C_id` (`C_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`G_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`N_id`),
  ADD KEY `C_id` (`C_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`P_id`),
  ADD KEY `Fac_id` (`Fac_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`T_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `Area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `B_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `Fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `G_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `N_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`C_id`) REFERENCES `customer` (`C_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`P_id`) REFERENCES `package` (`P_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`Area_id`) REFERENCES `area` (`Area_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`C_id`) REFERENCES `customer` (`C_id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`C_id`) REFERENCES `customer` (`C_id`);

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`Fac_id`) REFERENCES `facilities` (`Fac_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
