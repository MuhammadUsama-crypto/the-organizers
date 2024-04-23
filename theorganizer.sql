-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 09:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theorganizers`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(15, 'swat'),
(16, 'kaghan'),
(17, 'kaghan');

-- --------------------------------------------------------

--
-- Table structure for table `destintion`
--

CREATE TABLE `destintion` (
  `id` int(11) NOT NULL,
  `dest` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destintion`
--

INSERT INTO `destintion` (`id`, `dest`) VALUES
(10, 'oman'),
(11, 'kalam'),
(12, 'malam jabba'),
(13, 'Kala pani');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `hotelName` varchar(255) NOT NULL,
  `city` varchar(120) NOT NULL,
  `featureImg` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `map` varchar(1200) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `price` varchar(11) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotelName`, `city`, `featureImg`, `images`, `map`, `destination`, `price`, `description`) VALUES
(27, 'Honeymood hotel', 'Swat', 'hotel4.jpg', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d878609.3299863981!2d71.885269678125!3d30.66022220000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b7c422da0787%3A0x79c49eb51c9e7a53!2sHilton%20Hotel!5e0!3m2!1sen!2s!4v1705315495859!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'bahrain', '35000', '<p>zamara mina lram</p>'),
(28, 'hotel hilton', 'swat', 'hotel2.jpg', 'hotel4.jpg,hotel3.jpg,hotel2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.953662290249!2d74.33382498156887!3d31.552886279027526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904c8606da7e9%3A0xd70a28b88f7720d7!2sPearl%20Continental%20Hotel%2CLahore!5e0!3m2!1sen!2s!4v1705407052880!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'kalam', '30,000', '<p>mmoye moyee</p>'),
(31, 'hotel hilton', 'islamabad', 'hotel3.jpg', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d878609.3299863981!2d71.885269678125!3d30.66022220000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b7c422da0787%3A0x79c49eb51c9e7a53!2sHilton%20Hotel!5e0!3m2!1sen!2s!4v1705315495859!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', '400000', '<h1><span style=\"font-size: 10pt;\"><strong><span data-preserver-spaces=\"true\">Kumrat Valley Tour Packages- Camping Tours in Pakistan&nbsp;</span></strong></span></h1>\r\n<p><span style=\"font-size: 8pt;\">Experience the best of Kumrat Valley as you traverse lush green meadows and climb breathtaking peaks! Our Kumrat Valley Tour Packages take you through some of Pakistan&rsquo;s most beautiful landscapes. You&rsquo;ll traverse crystal-clear rivers, visit small hilltop villages, and enjoy spectacular mountain views. We provide all supreme services such as camping gear, food, and perfect accompanying.</span></p>'),
(32, 'Naran Hotel', 'Narann', 'pexels-tyler-lastovich-808465.jpg', 'pexels-pixabay-210243.jpg,pexels-tyler-lastovich-808465.jpg,pexels-sagui-andrea-618833.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26176.988035073737!2d73.63401174837396!3d34.90335000848317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e751e0bc7c4883%3A0x75317955703e1213!2sNaran%2C%20Mansehra%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1710514881257!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', '3500', '<p>Naran Kaghan is famous as a tourist destination, owing to its pleasant weather during peak season. Every year thousands of tourists rush to explore the valley. It is also the gateway to Gilgit Hunza in Summers by Babusar Pass. Naran Bazaar is very crowded in the summers with hotels and restaurants offering their services. In 2020, the government expects that 5 million tourists will explore the valley.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `hotelcategory`
--

CREATE TABLE `hotelcategory` (
  `id` int(11) NOT NULL,
  `hcategory` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotelcategory`
--

INSERT INTO `hotelcategory` (`id`, `hcategory`) VALUES
(7, 'DEluxee'),
(8, 'normal'),
(9, 'honeymoon'),
(10, 'deluxee');

-- --------------------------------------------------------

--
-- Table structure for table `hotelorder`
--

CREATE TABLE `hotelorder` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `email` varchar(28) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `departureDate` date NOT NULL,
  `arrivalDate` date NOT NULL,
  `noOfTicket` varchar(30) NOT NULL,
  `male` varchar(11) NOT NULL,
  `female` varchar(14) NOT NULL,
  `child` varchar(14) NOT NULL,
  `message` varchar(200) NOT NULL,
  `totalprice` varchar(29) NOT NULL,
  `type` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotelorder`
--

INSERT INTO `hotelorder` (`id`, `fname`, `cnic`, `email`, `phone`, `departureDate`, `arrivalDate`, `noOfTicket`, `male`, `female`, `child`, `message`, `totalprice`, `type`) VALUES
(75, 'asad', '4220181556633', 'admin@gmail.com', '03251916216', '2024-03-13', '2024-03-14', '1', '1', '1', '1', 'JK;NCS', '10000.00', 'DEluxee'),
(76, 'asad', '4220181556633', 'admin@gmail.com', '03251916216', '2024-03-13', '2024-03-14', '1', '1', '1', '1', 'JK;NCS', '10000.00', 'DEluxee');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `Hotel` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `services`, `image`, `price`, `Hotel`) VALUES
(22, 'DEluxee', 'breakfast,dinner,internal cooling,bornfire', 'pexels-jean-van-der-meulen-1457842.jpg', '10000', '32');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `tname` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `tname`, `position`, `image`) VALUES
(4, 'Ali ameen gandapur', 'KPK CM', 'download.jpg'),
(5, 'Imran ahmed khan niazi', 'PM', 'images.jpg'),
(6, 'Zartaj gul', 'MNA', 'download (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `para` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `para`, `image`, `cname`, `position`) VALUES
(3, 'Love you hogya shera', 'WhatsApp Image 2024-01-24 at 9.58.49 PM.jpeg', 'uzair', 'shera'),
(4, 'kbkj .ln;b', 'WhatsApp Image 2024-01-24 at 9.58.49 PM.jpeg', 'uzair', 'KPK CM'),
(5, 'k.bj.kn\r\nl[vjh', 'WhatsApp Image 2024-01-24 at 10.00.46 PM.jpeg', 'uzair', 'kabeera'),
(6, 'dfasjfasfds', 'pexels-pixabay-210243.jpg', 'uzair', 'PM');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `tourname` varchar(30) NOT NULL,
  `city` varchar(28) NOT NULL,
  `price` varchar(30) NOT NULL,
  `images` varchar(1000) NOT NULL,
  `featureImg` varchar(29) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `days` varchar(11) NOT NULL,
  `person` varchar(11) NOT NULL,
  `departureDate` varchar(29) NOT NULL,
  `arrivalDate` varchar(29) NOT NULL,
  `age` varchar(11) NOT NULL,
  `pickupPoint` varchar(29) NOT NULL,
  `language` varchar(29) NOT NULL,
  `departureLocation` varchar(29) NOT NULL,
  `room` varchar(29) NOT NULL,
  `departureTime` time DEFAULT NULL,
  `arrivalTime` time DEFAULT NULL,
  `services` varchar(1000) NOT NULL,
  `map` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `tourname`, `city`, `price`, `images`, `featureImg`, `description`, `days`, `person`, `departureDate`, `arrivalDate`, `age`, `pickupPoint`, `language`, `departureLocation`, `room`, `departureTime`, `arrivalTime`, `services`, `map`) VALUES
(15, '4 days kaghan tour', 'islamabad', '35000', '1-5.jpg', '7-5.jpg', '', '4 days', '4 days', '2024-02-13', '2024-02-13', '8 years', 'D ground', 'Urdu, English', 'Kohinoor Faisalabad', 'yes', '19:23:00', '19:25:00', 'breakfast,dinner,Modesty', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d878609.3299863981!2d71.885269678125!3d30.66022220000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b7c422da0787%3A0x79c49eb51c9e7a53!2sHilton%20Hotel!5e0!3m2!1sen!2s!4v17053154'),
(16, '5 days', 'Swat', '40000', '7-5.jpg,5-5.jpg,4-5.jpg,3-5.jpg,2-5.jpg,1-5.jpg', '1-5.jpg', '<p>;nc;cn;klnsvndkln</p>', '5 days 5 ni', '5 days 5 ni', '2024-03-08', '2024-03-09', '9', '2', 'Urdu, persian english', 'D ground,people colony', '4 person sharing', '21:21:00', '23:19:00', 'breakfast,dinner', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.953662290249!2d74.33382498156887!3d31.552886279027526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904c8606da7e9%3A0xd70a28b88f7720d7!2sPearl%20Continental%20Hotel%2CLahore!5'),
(17, '5 days hunza', 'kaghan', '35000', 'pexels-jean-van-der-meulen-1457842.jpg,pexels-pixabay-210243.jpg,pexels-tyler-lastovich-808465.jpg,pexels-sagui-andrea-618833.jpg', 'pexels-pixabay-210243.jpg', '<p>If you had limited time and less budget and want to explore Hunza? then the only option is a road trip of 5 days to Hunza. We are purposing this 5 days Hunza Tour with almost every famous attraction to visit. 5 days Hunza tour increases travel duration but save your time and money. In 2024, we are hoping that this package will be the most selling tour plan of Hunza Valley.</p>\r\n<p><strong>List of places to visit during 5 days Hunza tour.&nbsp;</strong></p>\r\n<ul>\r\n<li>3M Junction</li>\r\n<li>Gilgit City</li>\r\n<li>Rakaposhi View Point</li>\r\n<li>Karimabad</li>\r\n<li>Altit Fort and Baltit Fort</li>\r\n<li>Nagar</li>\r\n<li>Hussaini Suspension Bridge</li>\r\n<li>Attabad Lake</li>\r\n<li>Passu Cones</li>\r\n<li>Khunjerab Pass</li>\r\n</ul>\r\n<p>Itinerary of&nbsp;<strong>5 Days Trip to Hunza&nbsp;</strong></p>\r\n<p>&ndash; Transport- Toyota Corolla</p>', '5 days', '27', '2024-03-15', '2024-03-21', '8', 'Kohinoor Faisalabad', 'Urdu, English', 'Kohinoor Faisalabad', '4', '21:12:00', '08:13:00', 'breakfast,dinner,accommodatio', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.953662290249!2d74.33382498156887!3d31.552886279027526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904c8606da7e9%3A0xd70a28b88f7720d7!2sPearl%20Continental%20Hotel%2CLahore!5');

-- --------------------------------------------------------

--
-- Table structure for table `tourorder`
--

CREATE TABLE `tourorder` (
  `id` int(11) NOT NULL,
  `totalperson` varchar(11) NOT NULL,
  `male` varchar(11) NOT NULL,
  `female` varchar(11) NOT NULL,
  `child` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `country` varchar(29) NOT NULL,
  `province` varchar(18) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `totalprice` varchar(256) NOT NULL,
  `cnic` varchar(28) NOT NULL,
  `tourname` varchar(28) NOT NULL,
  `departureDate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourorder`
--

INSERT INTO `tourorder` (`id`, `totalperson`, `male`, `female`, `child`, `email`, `phone`, `country`, `province`, `city`, `address`, `fname`, `lname`, `totalprice`, `cnic`, `tourname`, `departureDate`) VALUES
(57, '2', '1', '1', '', 'ruhad541@gmail.com', '03251916216', 'pakistan', 'punjab', 'flat', 'dv K:j bvkj ', 'dawood', 'butt', '70000.00', '4220181556633', '5 days hunza', '2024-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'theorganizers@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destintion`
--
ALTER TABLE `destintion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelcategory`
--
ALTER TABLE `hotelcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelorder`
--
ALTER TABLE `hotelorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourorder`
--
ALTER TABLE `tourorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `destintion`
--
ALTER TABLE `destintion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hotelcategory`
--
ALTER TABLE `hotelcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hotelorder`
--
ALTER TABLE `hotelorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tourorder`
--
ALTER TABLE `tourorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
