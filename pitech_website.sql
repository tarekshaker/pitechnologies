-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 04:12 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pitech_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `logo`, `description`, `active`) VALUES
(1, 'Vision', 'vision.png', '<p>\r\n	It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content</p>\r\n', 'yes'),
(2, 'Mission', 'mission.png', '<p>\r\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `description`, `title`, `logo`, `image`, `active`) VALUES
(1, '<p>\r\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 'Web developer', 'connectdevelop', '7bf1e-psd1.png', 'yes'),
(2, '<p>\r\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', 'Android Developer', 'android ', '94fa5-7bf1e-psd1.png', 'yes'),
(3, '<p>\r\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', 'IOS Developer', 'apple ', '92191-94fa5-7bf1e-psd1.png', 'yes'),
(4, '<p>\r\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', '.Net Developer', 'windows', '9c441-92191-94fa5-7bf1e-psd1.png', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `author`, `title`, `image`, `start_date`, `end_date`, `description`, `active`) VALUES
(1, 'Tarek', 'first', 'bfb5c-hogwarts.jpg', '2018-07-04', '2018-07-31', '<p>\r\n	It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 'yes'),
(2, 'Marzouk', 'test second news', '36934-shutterstock_718884757.jpg', '2018-07-04', '2018-07-27', '<p>\r\n	test</p>\r\n', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `our_contacts`
--

CREATE TABLE `our_contacts` (
  `id` int(11) NOT NULL,
  `active` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `our_contacts`
--

INSERT INTO `our_contacts` (`id`, `active`, `facebook`, `email`, `twitter`, `linkedin`, `google`, `phone`, `address`, `youtube`) VALUES
(2, 'yes', 'https://www.facebook.com', 'pitech@gf.vgfc', 'https://twitter.com/login?lang=ar', 'https://www.linkedin.com/uas/login', 'https://www.google.com', '+20 11162552536', '35 Elhekma st. 8th District Sheikh Zayed, Giza.', 'https://www.youtube.com/?gl=EG');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `active` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title`, `image`, `description`, `active`) VALUES
(0, 'SurfaceArt', '4f8fc-surfaceart.jpg', '<p>\r\n	It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content&nbsp;</p>\r\n', 'yes'),
(2, 'Inteluxe', '23a8e-inteluxe.jpg', '<p>\r\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `active` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `description`, `active`) VALUES
(23, 'Aman Tool', '3b9ac-aman.jpg', '<p>\r\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', 'yes'),
(25, 'Aman Tool', '56c63-3b9ac-aman.jpg', '<p>\r\n	sdasdasdadas</p>\r\n', 'yes'),
(26, 'dsadadssad', 'ece2a-c14bf-iconnect.jpg', '<p>\r\n	dsadas</p>\r\n', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `logo`, `description`, `active`) VALUES
(5, 'SOFTWARE TOOLING', '074cb-partners.jpg', 'code', '<p>\r\n	It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>\r\n', 'yes'),
(6, 'WEB PORTAL & MOBILE', 'cb482-partners2.jpg', 'laptop', '<p>\r\n	It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>\r\n', 'yes'),
(7, 'BUSINESS INTELLIGENCE', '88e63-psd1.png', 'bar-chart', '<p>\r\n	It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>\r\n', 'yes'),
(8, 'SOCIAL MEDIA OPTIMIZATION', '3cb2d-services.jpg', 'bullhorn', '<p>\r\n	It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>\r\n', 'yes'),
(9, 'OUTSOURCING SERVICES', 'a17f1-products.jpg', 'cubes', '<p>\r\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', 'yes'),
(10, 'ENTERPRICE SOLUTIONS', 'dd61c-psd1.png', 'space-shuttle', '<p>\r\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n', 'yes'),
(11, 'New Service', '1a194-a17f1-products.jpg', 'laptop', '<div class=\"form-input-box\" id=\"description_input_box\">\r\n	<div class=\"readonly_label\" id=\"field-description\">\r\n		<p>\r\n			It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>\r\n	</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `heading`, `text`, `active`) VALUES
(1, '2eecb-mobile-phone.jpg', 'heading 1', '<p>\r\n	<span style=\"font-family:verdana,geneva,sans-serif;\"><span style=\"font-size:36px;\">WE <strong>BUILD</strong> A</span></span></p>\r\n<p>\r\n	<span style=\"font-family:verdana,geneva,sans-serif;\"><span style=\"font-size:36px;\"><strong>SOFTWARE</strong></span></span></p>\r\n<p>\r\n	<span style=\"font-family:verdana,geneva,sans-serif;\"><span style=\"font-size:36px;\">THAT WILL BUILD</span></span></p>\r\n<p>\r\n	<span style=\"font-family:verdana,geneva,sans-serif;\"><span style=\"font-size:36px;\">YOUR <strong>BUSINESS</strong></span></span></p>\r\n', 'yes'),
(2, '13ec3-ministry-of-transportation.jpg', '', '<p>\r\n	<span style=\"font-size:36px;\"><span style=\"font-family:tahoma,geneva,sans-serif;\">Lorem <strong>ipsum</strong></span></span></p>\r\n<p>\r\n	<span style=\"font-size:36px;\"><span style=\"font-family:tahoma,geneva,sans-serif;\">dolor sit amet,</span></span></p>\r\n<p>\r\n	<span style=\"font-size:36px;\"><span style=\"font-family:tahoma,geneva,sans-serif;\"><strong>consectetur</strong></span></span></p>\r\n<p>\r\n	<span style=\"font-size:36px;\"><span style=\"font-family:tahoma,geneva,sans-serif;\">adipiscing elit</span></span></p>\r\n', 'yes'),
(3, 'be4db-iti-staff.jpg', '', '<p>\r\n	<span style=\"font-size:36px;\"><span style=\"font-family:tahoma,geneva,sans-serif;\">sed <strong>do</strong> <strong>eiusmod</strong></span></span></p>\r\n<p>\r\n	<span style=\"font-size:36px;\"><span style=\"font-family:tahoma,geneva,sans-serif;\"><strong>tempor</strong> incididunt</span></span></p>\r\n<p>\r\n	<span style=\"font-size:36px;\"><span style=\"font-family:tahoma,geneva,sans-serif;\">ut labore et dolore</span></span></p>\r\n<p>\r\n	<span style=\"font-size:36px;\"><span style=\"font-family:tahoma,geneva,sans-serif;\"><strong>magna aliqua</strong>&nbsp;Ut</span></span></p>\r\n', 'yes'),
(4, '5223a-saudi-red-.jpg', '', '<p>\r\n	test test</p>\r\n', 'yes'),
(5, '059cc-sharity.jpg', '', '<p>\r\n	Shrity</p>\r\n', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `is_active` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`user_id`, `username`, `password`, `email`, `full_name`, `telephone`, `is_active`) VALUES
(1, 'Edge', '202cb962ac59075b964b07152d234b70', 'Edge@pi.com', 'Adam Copeland', '505111', 'yes'),
(5, 'John Morrison', '71c868c448b8bb33031f52069d7e6e2a', 'Johnny_Nitro@pi.com', 'John Hennigan', '505666', 'yes'),
(6, 'Goldberg', '8c60b80719a642b451972e0257424fef', 'Bill_Goldberg@pi.com', 'William Scott Goldberg', '505999', 'yes'),
(7, 'omnia', '81dc9bdb52d04dc20036dbd8313ed055', 'o@gdfg.hj', 'omnia ahmed', '656354', 'yes'),
(8, 'shady', '634c21f7dc1612ed1d84be6a95f70b8c', 'shady@pi.com', 'shady ibrahim', '01007057584', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_contacts`
--

CREATE TABLE `visitor_contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `recieved_a_reply` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `visitor_contacts`
--

INSERT INTO `visitor_contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `recieved_a_reply`) VALUES
(1, 'CM Punk', 'theStraightEdge@pi.com', '505111', '', 'this is a long long long message, it says jhfgiuhfgu9eghfjhfgijhfgvdiojhgerfg', ''),
(2, 'Ahmed Tolba', 'A_Hani@pi.com', '01123456789', '', 'Just saying hi ;)', 'yes'),
(3, 'omnia', 'o@yahoo.com', '6565', '', 'hgfhgf', 'yes'),
(4, 'test', 'test@hdgkdh.vigf', '5646465465', '', '654654654654', 'yes'),
(5, 'test', 'test@hdgkdh.vigf', '5646465465', '', '654654654654', 'yes'),
(6, 'shady', 'shady.fci2009@gmail.com', '4864654646', '', 'dkfhsdkfjhsdkgjs', 'yes'),
(7, 'shady', 'shady.fci2009@gmail.com', '4864654646', '', 'dkfhsdkfjhsdkgjs', 'yes'),
(8, 'shady', 'shady.fci2009@gmail.com', '4864654646', '', 'dkfhsdkfjhsdkgjs', 'yes'),
(9, 'test', 'test@hdgkdh.vigf', 'test', '', 'dkjghsdkjghsl', 'yes'),
(10, 'test', 'test@hdgkdh.vigf', 'test', '', 'dkjghsdkjghsl', 'yes'),
(11, 'djskghdskjghk', 'fsdgfdsf@hsdfghdskl.cc', '546654646', '', 'dsjkghsldkghskdgh', 'yes'),
(12, 'djskghdskjghk', 'fsdgfdsf@hsdfghdskl.cc', '546654646', '', 'dsjkghsldkghskdgh', 'yes'),
(22, 'Tarek', 't.shaker@pitechnologies.net', '123', 'dsad', 'dsaa', 'yes'),
(23, 'Tarek', 't.shaker@pitechnologies.net', '123', 'dsad', 'dsaa', 'yes'),
(24, 'Tarek', 't.sh@ss.com', '2313', 'sdad', 'sdada', 'yes'),
(25, 'Tasd', 't.shaker@pitechnologies.net', '2312', 'sdaas', 'dsadasd', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_contacts`
--
ALTER TABLE `our_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `visitor_contacts`
--
ALTER TABLE `visitor_contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_contacts`
--
ALTER TABLE `our_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visitor_contacts`
--
ALTER TABLE `visitor_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
