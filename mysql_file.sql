-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2019 at 09:17 AM
-- Server version: 10.0.38-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportstr_sportstrives`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_url` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `keyword` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `camp_reviews`
--

CREATE TABLE `camp_reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `rating` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_reviews`
--

INSERT INTO `camp_reviews` (`id`, `user_id`, `club_id`, `message`, `rating`, `created_at`, `updated_at`, `status`) VALUES
(1, 7, 17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis iusto dolorem porro sunt perferendis vero ducimus nobis cumque ipsum velit dicta eligendi, veniam ipsa expedita quaerat itaque beatae. Nesciunt, id.', 4, '2019-01-31 01:02:02', '2019-01-31 08:00:57', 1),
(2, 7, 17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis iusto dolorem porro sunt perferendis vero ducimus nobis cumque ipsum velit dicta eligendi, veniam ipsa expedita quaerat itaque beatae. Nesciunt, id.', 2, '2019-01-31 01:03:06', '2019-01-31 08:01:01', 1),
(3, 7, 17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis iusto dolorem porro sunt perferendis vero ducimus nobis cumque ipsum velit dicta eligendi, veniam ipsa expedita quaerat itaque beatae. Nesciunt, id.', 3, '2019-01-31 01:05:46', '2019-01-31 07:25:28', 1),
(4, 7, 17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis iusto dolorem porro sunt perferendis vero ducimus nobis cumque ipsum velit dicta eligendi, veniam ipsa expedita quaerat itaque beatae. Nesciunt, id.', 5, '2019-01-31 01:06:13', '2019-01-31 07:25:28', 1),
(5, 7, 17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis iusto dolorem porro sunt perferendis vero ducimus nobis cumque ipsum velit dicta eligendi, veniam ipsa expedita quaerat itaque beatae. Nesciunt, id.', 5, '2019-01-31 01:12:48', '2019-01-31 07:25:28', 1),
(6, 7, 17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis iusto dolorem porro sunt perferendis vero ducimus nobis cumque ipsum velit dicta eligendi, veniam ipsa expedita quaerat itaque beatae. Nesciunt, id.', 2, '2019-01-31 01:26:54', '2019-01-31 07:25:28', 1),
(7, 7, 17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis iusto dolorem porro sunt perferendis vero ducimus nobis cumque ipsum velit dicta eligendi, veniam ipsa expedita quaerat itaque beatae. Nesciunt, id.', 3, '2019-01-31 01:27:54', '2019-01-31 07:25:28', 1),
(8, 7, 17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis iusto dolorem porro sunt perferendis vero ducimus nobis cumque ipsum velit dicta eligendi, veniam ipsa expedita quaerat itaque beatae. Nesciunt, id.', 3, '2019-01-31 01:28:30', '2019-01-31 07:25:28', 1),
(9, 7, 17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis iusto dolorem porro sunt perferendis vero ducimus nobis cumque ipsum velit dicta eligendi, veniam ipsa expedita quaerat itaque beatae. Nesciunt, id.', 2, '2019-01-31 02:05:37', '2019-01-31 02:05:37', 1),
(10, 7, 17, 'sad asd asd asdasd', 3, '2019-01-31 02:07:41', '2019-01-31 02:07:41', 1),
(11, 7, 17, 'asd ad sad', 3, '2019-01-31 03:58:27', '2019-01-31 03:58:27', 1),
(12, 7, 17, 'asd asd asd asd asd', 3, '2019-01-31 03:58:50', '2019-01-31 03:58:50', 1),
(13, 7, 17, 'sad asd asd asd asd', 3.5, '2019-01-31 03:59:34', '2019-01-31 03:59:34', 1),
(14, 1, 1, 'great camp!!!', 3.5, '2019-03-08 08:27:13', '2019-03-08 08:27:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fdg@gmail.com', 1, '2019-02-21 08:58:25', '2019-02-21 08:58:25'),
(2, 'mcoderz87@gmail.com', 1, '2019-02-21 03:28:55', '2019-02-21 03:28:55'),
(4, 'test@example.com', 1, '2019-02-21 03:38:42', '2019-02-21 03:38:42'),
(5, 'example@test.com', 1, '2019-02-21 09:17:10', '2019-02-21 09:17:10'),
(6, 'devesh@mobilecoderz.com', 1, '2019-02-25 09:40:14', '2019-02-25 09:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `sport_clubs`
--

CREATE TABLE `sport_clubs` (
  `id` int(11) NOT NULL,
  `camp_name` varchar(191) DEFAULT NULL,
  `camp` int(11) NOT NULL DEFAULT '0',
  `clinic` int(11) NOT NULL DEFAULT '0',
  `tournament` int(11) NOT NULL DEFAULT '0',
  `is_sport` char(191) DEFAULT NULL,
  `age_group_primary` varchar(100) DEFAULT NULL,
  `age_group_secondary` varchar(25) DEFAULT NULL,
  `gender` char(191) DEFAULT NULL,
  `start_date` char(191) DEFAULT NULL,
  `end_date` char(191) DEFAULT NULL,
  `start_time_duration` char(191) DEFAULT NULL,
  `end_time_duration` char(191) DEFAULT NULL,
  `is_multiple_session` char(191) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `location` varchar(191) DEFAULT NULL,
  `description` text,
  `image_video` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sport_clubs`
--

INSERT INTO `sport_clubs` (`id`, `camp_name`, `camp`, `clinic`, `tournament`, `is_sport`, `age_group_primary`, `age_group_secondary`, `gender`, `start_date`, `end_date`, `start_time_duration`, `end_time_duration`, `is_multiple_session`, `price`, `location`, `description`, `image_video`, `status`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'camp', 1, 0, 0, 'yes', '8', '11', 'male', NULL, NULL, NULL, NULL, 'yes', '1221', 'sad asd asd asd asd', 'as dasd asd asd asd', 'game1.png', 1, '2019-01-21 10:23:06', '2019-02-05 09:04:07', 1),
(9, 'Male', 0, 0, 1, 'No', '8', '11', 'male', '22-01-2019', '23-01-2019', '123', '12312', 'Yes', '21312', 'adasd asd asd asd adsd', 'sad sad asd asd asd', 'game1.png', 1, '2019-01-22 01:51:55', '2019-02-20 14:19:55', 1),
(10, 'zomo', 1, 0, 0, 'No', '16', '18', 'male', '22-01-2019', '25-01-2019', '123', '12312', 'Yes', '21312', 'adsas asd asd', 'asd fasd as asd as', 'game1.png', 1, '2019-01-22 01:54:31', '2019-02-20 12:22:32', 1),
(11, 'zota', 0, 1, 1, 'Yes', '8', '11', NULL, '22-01-2019', '31-01-2019', '123', '12312', 'Yes', '213', 'adasd asd asd asd adsd', 'sda sa aa sad', 'game1.png', 1, '2019-01-22 01:58:05', '2019-02-20 13:16:47', 1),
(12, 'zilla', 0, 0, 0, 'Yes', '12', '15', NULL, '08-01-2019', '23-01-2019', '123', '12312', 'Yes', '21312', 'adasd asd asd asd adsd', 'asd ad a ad ad asd asd asdasdasda', 'game1.png', 1, '2019-01-22 02:00:44', '2019-02-20 13:16:14', 1),
(21, 'camp', 1, 0, 0, 'Calcio', '12', '15', 'male', '10-05-2019', '17-05-2019', '9:00', '12312', 'Yes', '21312', 'asda sd', 'as asd a', '16871782711557478512.jpg', 0, '2019-05-10 06:55:12', '2019-05-10 06:55:12', 1),
(22, 'camp', 1, 0, 0, 'Football,Basketball,Rugby,Waterpolo', '8', '11', 'male', '10-05-2019', '11-05-2019', '123', '10:00', 'Yes', '213', 'Chatswood NSW, Australia', 'asasdsa', '', 0, '2019-05-10 10:13:57', '2019-05-10 10:13:57', 17),
(23, 'vbdfghfh', 1, 0, 0, 'Football', '8', '11', 'male', '10-05-2019', '11-05-2019', '332', '12312', 'Yes', '21312', 'Five Dock NSW, Australia', 'sadasd', '', 0, '2019-05-10 10:19:00', '2019-05-10 10:19:00', 17),
(24, 'camp', 1, 0, 0, 'Football,Basketball,Rugby,Waterpolo', '8', '11', 'female', '10-05-2019', '11-05-2019', '123', '12312', 'Yes', '21312', 'Darling Point NSW, Australia', 'asd asd', '', 0, '2019-05-10 10:35:33', '2019-05-10 10:35:33', 17),
(25, 'camp', 1, 0, 0, 'Football', '8', '11', 'male', '10-05-2019', '11-05-2019', '9:00', '10:00', 'Yes', '21312', 'Darling Harbour, Sydney NSW, Australia', 's das dasd', '', 0, '2019-05-10 12:01:12', '2019-05-10 12:01:12', 17),
(26, 'camp', 1, 0, 0, 'Football', '8', '11', 'male', '10-05-2019', '11-05-2019', '9:00', '10:00', 'Yes', '21312', 'Darling Harbour, Sydney NSW, Australia', 's das dasd', '', 0, '2019-05-10 12:01:46', '2019-05-10 12:01:46', 17),
(27, 'camp', 1, 0, 0, 'Football', '8', '11', 'male', '10-05-2019', '11-05-2019', '9:00', '10:00', 'Yes', '21312', 'Darling Harbour, Sydney NSW, Australia', 's das dasd', '', 0, '2019-05-10 12:06:03', '2019-05-10 12:06:03', 17),
(28, 'camp', 1, 0, 0, 'Football', '8', '11', 'male', '10-05-2019', '11-05-2019', '9:00', '10:00', 'Yes', '21312', 'Darling Harbour, Sydney NSW, Australia', 's das dasd', '', 0, '2019-05-10 12:06:08', '2019-05-10 12:06:08', 17),
(29, 'camp', 1, 0, 0, 'Football', '8', '11', 'male', '10-05-2019', '11-05-2019', '9:00', '10:00', 'Yes', '21312', 'Darling Harbour, Sydney NSW, Australia', 's das dasd', '', 0, '2019-05-10 12:11:26', '2019-05-10 12:11:26', 17),
(30, 'camp', 1, 0, 0, 'Football', '8', '11', 'male', '10-05-2019', '11-05-2019', '9:00', '10:00', 'Yes', '21312', 'Darling Harbour, Sydney NSW, Australia', 's das dasd', '', 0, '2019-05-10 12:11:51', '2019-05-10 12:11:51', 17),
(31, 'camp', 1, 0, 0, 'Football', '8', '11', 'male', '10-05-2019', '11-05-2019', '9:00', '10:00', 'Yes', '21312', 'Darling Harbour, Sydney NSW, Australia', 's das dasd', '', 0, '2019-05-10 12:28:07', '2019-05-10 12:28:07', 17),
(32, 'camp', 1, 0, 0, 'Football', '8', '11', 'male', '23-05-2019', '24-05-2019', '123', '12312', 'Yes', '21312', 'Dschibuti', 'sad asdasd asd', '17532832561558620458.jpg', 0, '2019-05-23 12:07:38', '2019-05-23 12:07:38', 34),
(33, 'Testing', 1, 1, 1, 'Football,Basketball,Rugby,Waterpolo', '8', '11', 'male', '24-05-2019', '25-05-2019', '1:00:00', '2:00:00', 'Yes', '121', 'Noida, Uttar Pradesh, India', 'Tefysgd', '', 0, '2019-05-23 12:12:52', '2019-05-23 12:12:52', 1),
(34, 'camp', 1, 1, 1, 'Football', '12', '15', 'male', '24-05-2019', '25-05-2019', '123', '12312', 'No', '21312', 'supermarket', 'sa as das', '', 0, '2019-05-24 10:22:10', '2019-05-24 10:22:10', 34),
(35, 'camp', 1, 1, 1, 'Football', '12', '15', 'male', '24-05-2019', '25-05-2019', '123', '12312', 'No', '21312', 'supermarket', 'sa as das', '', 0, '2019-05-24 10:22:57', '2019-05-24 10:22:57', 34),
(36, 'double testing', 0, 1, 0, 'Football', '8', '11', 'male', '24-05-2019', '25-05-2019', '123', '12312', 'No', '21312', 'Japan', 'gfhfg fhg', '', 0, '2019-05-24 10:27:50', '2019-05-24 10:27:50', 34),
(37, 'hyy', 1, 0, 0, 'Rugby', '16', '18', 'female', '28-05-2019', '28-05-2019', '123', '12312', 'Yes', '21312', 'dry cleaners', 'gvsfd fds gdfgd fgdfg', '', 0, '2019-05-28 08:50:03', '2019-05-28 08:50:03', 34);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `phone_no` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL COMMENT '1 -> Admin  2->Athlete 3->Organizations',
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `login_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_social_id` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_social_id` varchar(245) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_social_id` varchar(245) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resetTokenExpireTime` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `postal_code`, `phone_no`, `email`, `email_verified_at`, `password`, `role`, `avatar`, `status`, `login_type`, `fb_social_id`, `g_social_id`, `insta_social_id`, `remember_token`, `reset_token`, `resetTokenExpireTime`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'user', 54454, '4564654564', 'admin@gmail.com', NULL, '$2y$10$gSHTwSAJy6TBdJ7mhak3le7deiTLcjWqKqLwXW4qZlV0w9d9UBDTW', 1, NULL, 1, 'normal', NULL, NULL, NULL, '9tj74i7ADrTQSDgSJVWPGZwhETNW84eck0fr3vCVc6cR82Tv5Fvhr3ZtaEbd', NULL, NULL, '2019-01-08 04:59:36', '2019-06-03 07:32:15'),
(2, 'FILA', 'user', 544544, '2343242344', 'pepsi@gmail.com', NULL, '$2y$10$91PdoSa9L7M0XEA8YGM1cO7mLC3i92osGCda/bJ5BWf7KLk41jCpa', 2, NULL, 1, 'normal', NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-09 02:06:34', '2019-02-19 13:09:28'),
(17, 'mobile', 'coderz', NULL, NULL, 'mcoderz87@gmail.com', NULL, '$2y$10$gSHTwSAJy6TBdJ7mhak3le7deiTLcjWqKqLwXW4qZlV0w9d9UBDTW', 3, 'https://lh4.googleusercontent.com/-bpb_iBhlRAA/AAAAAAAAAAI/AAAAAAAAAAA/AKxrwcbNikY061toA9yhYnKt6e2mQesI3g/mo/photo.jpg', 1, 'google', NULL, '113634257313770736427', NULL, 'vZynx089LVnW34xGp1Eysj9aVqisJT8x5ASLNLJuPHCfOZEMHtE02iVNaMwc', NULL, NULL, '2019-01-17 08:39:10', '2019-05-10 10:32:14'),
(29, 'instadeveloper3', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'https://instagram.fbtz1-4.fna.fbcdn.net/vp/da6306abba882f993a66bc161be229c2/5CDDD9F1/t51.2885-19/44884218_345707102882519_2446069589734326272_n.jpg?_nc_ht=instagram.fbtz1-4.fna.fbcdn.net', 0, 'instagram', NULL, NULL, '10451266068', NULL, NULL, NULL, '2019-02-11 06:58:17', '2019-02-19 12:47:08'),
(30, 'Pranay', 'Agrawal', NULL, NULL, 'email4pranay@gmail.com', NULL, NULL, 3, 'https://graph.facebook.com/v3.0/10205673301627439/picture?type=normal', 0, 'facebook', '10205673301627439', NULL, NULL, NULL, NULL, NULL, '2019-02-15 06:58:55', '2019-02-19 12:42:51'),
(31, 'Devesh', 'Chitkara', 201301, '8700308240', 'devesh@mobilecoderz.com', NULL, '$2y$10$REqYaDONTA/3h0a138gkJ.oeXZ9iwk.NFVotPPbSrUZ6TPkyhGgF.', 2, NULL, 1, 'normal', NULL, NULL, NULL, 'obUyd5qq2vkTHBEJ6zhm0m2PRIydFB4zEWNCNTTHLybuHIrPTsxUF0TgJYNG', NULL, NULL, '2019-03-13 06:10:24', '2019-03-13 07:11:29'),
(32, 'Ronaldo', 'Rewalodo', 544546, '4564654564', 'ronaldo@gmail.com', NULL, '$2y$10$D5nx78E98P27qGCvhkuUL.NnOuQFGVGQA8obGnFi9NSWkjD6pcv6K', 3, NULL, 1, 'normal', NULL, NULL, NULL, 'YziyHSJ2l2Ow5f6O2eAuKgH8Kd3kYKODuCtKP3ldXYs9YI4KgH6JsssfRngB', NULL, NULL, '2019-03-13 06:11:30', '2019-03-13 07:11:46'),
(33, 'Cristian', 'Pastorino', NULL, NULL, 'cristian.pastorino@gmail.com', NULL, NULL, 2, 'https://lh5.googleusercontent.com/-NLsEBDm7jI4/AAAAAAAAAAI/AAAAAAAAA4c/EbdIH8P5ebk/photo.jpg', 1, 'google', NULL, '101153531556748081415', NULL, NULL, '337475', '2019-05-22 10:42:06', '2019-05-06 04:14:00', '2019-05-22 10:42:06'),
(34, 'deepak', 'kumar', 544545, '1234567890', 'deepak@gmai.com', NULL, '$2y$10$gSHTwSAJy6TBdJ7mhak3le7deiTLcjWqKqLwXW4qZlV0w9d9UBDTW', 3, NULL, 1, 'normal', NULL, NULL, NULL, 'CbEbLLHmnjB2I6Y6cVz4dwpS67MXKQouDz70WybdR1Mb0gqgiWGD1eXJII4A', NULL, NULL, '2019-05-23 12:04:02', '2019-06-03 05:25:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camp_reviews`
--
ALTER TABLE `camp_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport_clubs`
--
ALTER TABLE `sport_clubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `camp_reviews`
--
ALTER TABLE `camp_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sport_clubs`
--
ALTER TABLE `sport_clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sport_clubs`
--
ALTER TABLE `sport_clubs`
  ADD CONSTRAINT `sport_clubs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
