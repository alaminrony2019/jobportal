-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2019 at 06:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyjobs`
--

CREATE TABLE `applyjobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applyjobs`
--

INSERT INTO `applyjobs` (`id`, `job_id`, `user_id`, `employer_id`, `created_at`, `updated_at`) VALUES
(10, 7, 1, 5, '2019-07-27 17:56:37', '2019-07-27 17:56:37'),
(11, 6, 1, 5, '2019-07-27 17:56:41', '2019-07-27 17:56:41'),
(12, 3, 1, 5, '2019-07-27 17:56:48', '2019-07-27 17:56:48'),
(13, 2, 2, 5, '2019-07-27 17:57:33', '2019-07-27 17:57:33'),
(14, 1, 2, 5, '2019-07-27 17:57:36', '2019-07-27 17:57:36'),
(15, 2, 1, 5, '2019-07-27 17:59:42', '2019-07-27 17:59:42'),
(16, 7, 1, 5, '2019-07-27 17:59:48', '2019-07-27 17:59:48'),
(17, 8, 1, 5, '2019-07-27 18:25:20', '2019-07-27 18:25:20'),
(18, 8, 1, 5, '2019-07-27 18:25:58', '2019-07-27 18:25:58'),
(19, 8, 1, 5, '2019-07-27 18:30:06', '2019-07-27 18:30:06'),
(20, 7, 1, 5, '2019-07-27 18:55:59', '2019-07-27 18:55:59'),
(21, 6, 1, 5, '2019-07-27 18:56:10', '2019-07-27 18:56:10'),
(22, 8, 1, 5, '2019-07-27 18:56:58', '2019-07-27 18:56:58'),
(23, 7, 1, 5, '2019-07-27 18:57:30', '2019-07-27 18:57:30'),
(24, 8, 1, 5, '2019-07-27 18:58:42', '2019-07-27 18:58:42'),
(25, 6, 1, 5, '2019-07-27 19:01:03', '2019-07-27 19:01:03'),
(26, 7, 2, 5, '2019-07-27 19:03:39', '2019-07-27 19:03:39'),
(27, 8, 2, 5, '2019-07-27 19:07:35', '2019-07-27 19:07:35'),
(28, 8, 2, 5, '2019-07-27 19:07:41', '2019-07-27 19:07:41'),
(29, 8, 2, 5, '2019-07-27 19:26:48', '2019-07-27 19:26:48'),
(30, 8, 2, 5, '2019-07-27 19:31:58', '2019-07-27 19:31:58'),
(31, 8, 2, 5, '2019-07-27 19:49:21', '2019-07-27 19:49:21'),
(32, 8, 2, 5, '2019-07-27 19:50:11', '2019-07-27 19:50:11'),
(33, 7, 2, 5, '2019-07-27 19:50:50', '2019-07-27 19:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `first_name`, `last_name`, `business_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'salam', 'rakha', 'Namespace IT', 'alaminrony49@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, '2019-07-27 03:28:46', '2019-07-27 03:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `employer_id`, `title`, `salary`, `location`, `country`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 5, 'PHP Laravel Developer Mid Livel', '5000-1000', 'Dhaka', 'Bangladesh', 'Job Responsibilities\r\n4 years Bachelor with Honors/Masters in relevant field. Should have minimum 03 (Three) First Class/Division or GPA 4.00 out of 5.00 in SSC & HSC and GPA 3.00 out of 4.00 in Honors/Masters or GPA 4.00 out of 5.00 in SSC/ HSC and GPA 3.00 out of 4.00 in Honors & Masters.\r\nEmployment Status\r\nFull-time\r\nEducational Requirements\r\nBachelor in Engineering (BEngg) in cse\r\n4 years Bachelor with Honors/Masters in relevant field. Should have minimum 03 (Three) First Class/Division or GPA 4.00 out of 5.00 in SSC & HSC and GPA 3.00 out of 4.00 in Honors/Masters or GPA 4.00 out of 5.00 in SSC/ HSC and GPA 3.00 out of 4.00 in Honors & Masters.\r\nJob Location\r\nDhaka\r\nSalary\r\nNegotiable\r\nCompensation & Other Benefits\r\nExcellent remuneration package will be given for the deserving candidates.\r\nRead Before Apply\r\n*Photograph must be enclosed with the resume.\r\nApply Procedure\r\n01: 93, Kazi Nazrul Islam Avenue, Kawran bazar, Dhaka-1215. 02: Holding No-13, Road No-17, Banani, Dhaka-1213. 03: 24, Mirpur Road (opposite side of Dhaka College), Dhaka-1205. 04. 111/2, Kawla Jame Mosjid Road, Dakhsin Khan, Dhaka Collect application form by paying TK 200/- or download from www.nub.ac.bd. Downloaded form should be submitted with a pay order (address to Northern University Bangladesh) of the same amount. Application form duly filled in should reach Registrar`s Office at Sher Tower, Holding No-13, Road No-17, Banani, Dhaka-1213 by August 05, 2019 along with CV, copies of certificates, transcripts, National ID card, two names of referees & two copies of PP size photographs. The authority reserves the right to reject/cancel any application or make changes in the terms and conditions as deemed necessary.\r\nApplication Deadline : August 5, 2019\r\nCompany Information Northern University Bangladesh (NUB Trust.) Address : Sher Tower, Holding No-13, Road No-17, Banani, Dhaka-1213 Web : Business : Education', NULL, '2019-07-27 05:05:27', '2019-07-27 05:05:27'),
(2, 5, 'Mid Level Laravel+WordPress Developer', '15000-20000', 'Chittagong', 'USA', 'Expertise, Requirements and Job Responsibility:\r\n1 year experience (not more than 2 companies or at least you don\'t have early switching tendency) and OK with the offered salary.\r\nExpert(mid level) in php framework Laravel (Must)**\r\nExpert(mid level) in developing  WordPress plugin(Optional but you will get 2 months to learn plugin development)\r\nYou know how to write basic css code\r\nYou know how to write basic html\r\nYou know how to use jquery, modify jquery plugin, if you can make jquery plugin then it\'s a plus\r\nIf you have expertise in any modern js library like vue js, react js then it\'s a plus\r\nYou can not do freelance or do any other professional work that conflicts with our business\r\nYou may need to work on any kind of web based projects based on php or wordpress or any thing new. If you are fast learner then it should not be problem, you will be given time to grab new tech\r\nReady to work on any ongoing or new projects just after join\r\nYou like to come office in time :)\r\nYou know git\r\nYou know how to design relational database.\r\nIf you know big data or nosql database like mongodb then it\'s a plus\r\nA good human inside you who likes to think using logic and science\r\nYou like math, you like to learn new technology\r\nYou are professional\r\nYou like to help your teammates\r\nYou regularly study new things\r\nYou support no other country but Bangladesh in cricket.\r\nYou know task automation- example: gulp, grunt at least\r\nYou can work following project requirement\r\nYou like to admit your mistake and learn from mistake\r\nOffice time: 9am-6pm(Office can change at it\'s own decision )\r\nWeekend: Regular Sat, Sun (at this moment fri-sat and office can change it any time)\r\nLocation: Apartment 6H, Dilara Tower Tower, 77 Bir Uttam CR Dutta Road, Dhaka 1205, Bangladesh (Near Hatirpool Eastern plaza), life button 5(both lift)\r\nOther benefits: Free lunch, tea\r\nBonus: Two festival bonus, half of salary(based on your first month salary of January or the first month you join) in each festival. There \'can be\' special bonus for finishing any project in time and properly(Project bonus). Salary is given within 5th-10th work days of any month.\r\nIncrement: Two times a year based on your performance (Total 5k BDT maximum per year). The more you show your performance, help company to grow, company will take care you more. We want long term relation and dedicated team mate who is professional as well as passionate.\r\nIf your living place is long time distance from our office you have to shift to some nearer place which will be OK for your mental and physical health for daily travel for office.\r\nPlease send your resume  to info@codeboxr.com  with exact subject(please don\'t add extra word to email subject as we filter email using subject)\r\nMid Level Laravel+WordPress Developer, July-Aug - 2019(#laravel, #wordpress)\r\nwithout quote, wrong email subject means email will not be read. For any query please send with same subject or ask here in reply if it\'s possible to ask in public.\r\nYou can write anything in your resume that help us to understand you well.  We suggest, you put your github repos or such code repo if any, links for wordpress plugins . Please write briefly in email about yourself, skill, education and experience. Send your updated resume in pdf format, put only important things.\r\nIf you have anything to suggest us please email us with same subject.\r\nWho should not apply:\r\nyou started to learn php\r\nyou started to learn wordpress or laravel\r\nyou don\'t know anything about css\r\nyou don\'t know anything about js\r\nyou don\'t need money but you want to learn\r\nyou just started your career\r\nyou need this job for short period\r\nPS. For any typo please excuse us and thank you for your patience for reading the copy line by line.', NULL, '2019-07-27 05:08:16', '2019-07-27 05:08:16'),
(3, 5, 'Terms & Condition', '15000-20000', 'Khulna', 'Bangladesh', 'Expertise, Requirements and Job Responsibility:\r\n1 year experience (not more than 2 companies or at least you don\'t have early switching tendency) and OK with the offered salary.\r\nExpert(mid level) in php framework Laravel (Must)**\r\nExpert(mid level) in developing  WordPress plugin(Optional but you will get 2 months to learn plugin development)\r\nYou know how to write basic css code\r\nYou know how to write basic html\r\nYou know how to use jquery, modify jquery plugin, if you can make jquery plugin then it\'s a plus\r\nIf you have expertise in any modern js library like vue js, react js then it\'s a plus\r\nYou can not do freelance or do any other professional work that conflicts with our business\r\nYou may need to work on any kind of web based projects based on php or wordpress or any thing new. If you are fast learner then it should not be problem, you will be given time to grab new tech\r\nReady to work on any ongoing or new projects just after join\r\nYou like to come office in time :)\r\nYou know git\r\nYou know how to design relational database.\r\nIf you know big data or nosql database like mongodb then it\'s a plus\r\nA good human inside you who likes to think using logic and science\r\nYou like math, you like to learn new technology\r\nYou are professional\r\nYou like to help your teammates\r\nYou regularly study new things\r\nYou support no other country but Bangladesh in cricket.\r\nYou know task automation- example: gulp, grunt at least\r\nYou can work following project requirement\r\nYou like to admit your mistake and learn from mistake\r\nOffice time: 9am-6pm(Office can change at it\'s own decision )\r\nWeekend: Regular Sat, Sun (at this moment fri-sat and office can change it any time)\r\nLocation: Apartment 6H, Dilara Tower Tower, 77 Bir Uttam CR Dutta Road, Dhaka 1205, Bangladesh (Near Hatirpool Eastern plaza), life button 5(both lift)\r\nOther benefits: Free lunch, tea\r\nBonus: Two festival bonus, half of salary(based on your first month salary of January or the first month you join) in each festival. There \'can be\' special bonus for finishing any project in time and properly(Project bonus). Salary is given within 5th-10th work days of any month.\r\nIncrement: Two times a year based on your performance (Total 5k BDT maximum per year). The more you show your performance, help company to grow, company will take care you more. We want long term relation and dedicated team mate who is professional as well as passionate.\r\nIf your living place is long time distance from our office you have to shift to some nearer place which will be OK for your mental and physical health for daily travel for office.\r\nPlease send your resume  to info@codeboxr.com  with exact subject(please don\'t add extra word to email subject as we filter email using subject)\r\nMid Level Laravel+WordPress Developer, July-Aug - 2019(#laravel, #wordpress)\r\nwithout quote, wrong email subject means email will not be read. For any query please send with same subject or ask here in reply if it\'s possible to ask in public.\r\nYou can write anything in your resume that help us to understand you well.  We suggest, you put your github repos or such code repo if any, links for wordpress plugins . Please write briefly in email about yourself, skill, education and experience. Send your updated resume in pdf format, put only important things.\r\nIf you have anything to suggest us please email us with same subject.\r\nWho should not apply:\r\nyou started to learn php\r\nyou started to learn wordpress or laravel\r\nyou don\'t know anything about css\r\nyou don\'t know anything about js\r\nyou don\'t need money but you want to learn\r\nyou just started your career\r\nyou need this job for short period\r\nPS. For any typo please excuse us and thank you for your patience for reading the copy line by line.', NULL, '2019-07-27 05:09:41', '2019-07-27 05:09:41'),
(4, 5, 'Laravel developer testing 1', '15000-20000', 'Dhaka', 'Bangladesh', 'Job Responsibilities\r\n4 years Bachelor with Honors/Masters in relevant field. Should have minimum 03 (Three) First Class/Division or GPA 4.00 out of 5.00 in SSC & HSC and GPA 3.00 out of 4.00 in Honors/Masters or GPA 4.00 out of 5.00 in SSC/ HSC and GPA 3.00 out of 4.00 in Honors & Masters.\r\nEmployment Status\r\nFull-time\r\nEducational Requirements\r\nBachelor in Engineering (BEngg) in cse\r\n4 years Bachelor with Honors/Masters in relevant field. Should have minimum 03 (Three) First Class/Division or GPA 4.00 out of 5.00 in SSC & HSC and GPA 3.00 out of 4.00 in Honors/Masters or GPA 4.00 out of 5.00 in SSC/ HSC and GPA 3.00 out of 4.00 in Honors & Masters.\r\nJob Location\r\nDhaka\r\nSalary\r\nNegotiable\r\nCompensation & Other Benefits\r\nExcellent remuneration package will be given for the deserving candidates.\r\nRead Before Apply\r\n*Photograph must be enclosed with the resume.\r\nApply Procedure\r\n01: 93, Kazi Nazrul Islam Avenue, Kawran bazar, Dhaka-1215. 02: Holding No-13, Road No-17, Banani, Dhaka-1213. 03: 24, Mirpur Road (opposite side of Dhaka College), Dhaka-1205. 04. 111/2, Kawla Jame Mosjid Road, Dakhsin Khan, Dhaka Collect application form by paying TK 200/- or download from www.nub.ac.bd. Downloaded form should be submitted with a pay order (address to Northern University Bangladesh) of the same amount. Application form duly filled in should reach Registrar`s Office at Sher Tower, Holding No-13, Road No-17, Banani, Dhaka-1213 by August 05, 2019 along with CV, copies of certificates, transcripts, National ID card, two names of referees & two copies of PP size photographs. The authority reserves the right to reject/cancel any application or make changes in the terms and conditions as deemed necessary.\r\nApplication Deadline : August 5, 2019\r\nCompany Information Northern University Bangladesh (NUB Trust.) Address : Sher Tower, Holding No-13, Road No-17, Banani, Dhaka-1213 Web : Business : Education', NULL, '2019-07-27 07:20:12', '2019-07-27 07:20:12'),
(5, 5, 'Laravel developer testing 2', '20000-25000', 'Dhaka', 'Bangladesh', 'Job Responsibilities\r\n4 years Bachelor with Honors/Masters in relevant field. Should have minimum 03 (Three) First Class/Division or GPA 4.00 out of 5.00 in SSC & HSC and GPA 3.00 out of 4.00 in Honors/Masters or GPA 4.00 out of 5.00 in SSC/ HSC and GPA 3.00 out of 4.00 in Honors & Masters.\r\nEmployment Status\r\nFull-time\r\nEducational Requirements\r\nBachelor in Engineering (BEngg) in cse\r\n4 years Bachelor with Honors/Masters in relevant field. Should have minimum 03 (Three) First Class/Division or GPA 4.00 out of 5.00 in SSC & HSC and GPA 3.00 out of 4.00 in Honors/Masters or GPA 4.00 out of 5.00 in SSC/ HSC and GPA 3.00 out of 4.00 in Honors & Masters.\r\nJob Location\r\nDhaka\r\nSalary\r\nNegotiable\r\nCompensation & Other Benefits\r\nExcellent remuneration package will be given for the deserving candidates.\r\nRead Before Apply\r\n*Photograph must be enclosed with the resume.\r\nApply Procedure\r\n01: 93, Kazi Nazrul Islam Avenue, Kawran bazar, Dhaka-1215. 02: Holding No-13, Road No-17, Banani, Dhaka-1213. 03: 24, Mirpur Road (opposite side of Dhaka College), Dhaka-1205. 04. 111/2, Kawla Jame Mosjid Road, Dakhsin Khan, Dhaka Collect application form by paying TK 200/- or download from www.nub.ac.bd. Downloaded form should be submitted with a pay order (address to Northern University Bangladesh) of the same amount. Application form duly filled in should reach Registrar`s Office at Sher Tower, Holding No-13, Road No-17, Banani, Dhaka-1213 by August 05, 2019 along with CV, copies of certificates, transcripts, National ID card, two names of referees & two copies of PP size photographs. The authority reserves the right to reject/cancel any application or make changes in the terms and conditions as deemed necessary.\r\nApplication Deadline : August 5, 2019\r\nCompany Information Northern University Bangladesh (NUB Trust.) Address : Sher Tower, Holding No-13, Road No-17, Banani, Dhaka-1213 Web : Business : Education', NULL, '2019-07-27 07:20:27', '2019-07-27 07:20:27'),
(6, 5, 'Laravel developer testing 3', '20000-25000', 'Khulna', 'USA', 'Job Responsibilities\r\n4 years Bachelor with Honors/Masters in relevant field. Should have minimum 03 (Three) First Class/Division or GPA 4.00 out of 5.00 in SSC & HSC and GPA 3.00 out of 4.00 in Honors/Masters or GPA 4.00 out of 5.00 in SSC/ HSC and GPA 3.00 out of 4.00 in Honors & Masters.\r\nEmployment Status\r\nFull-time\r\nEducational Requirements\r\nBachelor in Engineering (BEngg) in cse\r\n4 years Bachelor with Honors/Masters in relevant field. Should have minimum 03 (Three) First Class/Division or GPA 4.00 out of 5.00 in SSC & HSC and GPA 3.00 out of 4.00 in Honors/Masters or GPA 4.00 out of 5.00 in SSC/ HSC and GPA 3.00 out of 4.00 in Honors & Masters.\r\nJob Location\r\nDhaka\r\nSalary\r\nNegotiable\r\nCompensation & Other Benefits\r\nExcellent remuneration package will be given for the deserving candidates.\r\nRead Before Apply\r\n*Photograph must be enclosed with the resume.\r\nApply Procedure\r\n01: 93, Kazi Nazrul Islam Avenue, Kawran bazar, Dhaka-1215. 02: Holding No-13, Road No-17, Banani, Dhaka-1213. 03: 24, Mirpur Road (opposite side of Dhaka College), Dhaka-1205. 04. 111/2, Kawla Jame Mosjid Road, Dakhsin Khan, Dhaka Collect application form by paying TK 200/- or download from www.nub.ac.bd. Downloaded form should be submitted with a pay order (address to Northern University Bangladesh) of the same amount. Application form duly filled in should reach Registrar`s Office at Sher Tower, Holding No-13, Road No-17, Banani, Dhaka-1213 by August 05, 2019 along with CV, copies of certificates, transcripts, National ID card, two names of referees & two copies of PP size photographs. The authority reserves the right to reject/cancel any application or make changes in the terms and conditions as deemed necessary.\r\nApplication Deadline : August 5, 2019\r\nCompany Information Northern University Bangladesh (NUB Trust.) Address : Sher Tower, Holding No-13, Road No-17, Banani, Dhaka-1213 Web : Business : Education', NULL, '2019-07-27 07:20:42', '2019-07-27 07:20:42'),
(7, 5, 'Laravel developer testing 4', '15000-20000', 'Khulna', 'Pakistan', 'Job Responsibilities\r\n4 years Bachelor with Honors/Masters in relevant field. Should have minimum 03 (Three) First Class/Division or GPA 4.00 out of 5.00 in SSC & HSC and GPA 3.00 out of 4.00 in Honors/Masters or GPA 4.00 out of 5.00 in SSC/ HSC and GPA 3.00 out of 4.00 in Honors & Masters.\r\nEmployment Status\r\nFull-time\r\nEducational Requirements\r\nBachelor in Engineering (BEngg) in cse\r\n4 years Bachelor with Honors/Masters in relevant field. Should have minimum 03 (Three) First Class/Division or GPA 4.00 out of 5.00 in SSC & HSC and GPA 3.00 out of 4.00 in Honors/Masters or GPA 4.00 out of 5.00 in SSC/ HSC and GPA 3.00 out of 4.00 in Honors & Masters.\r\nJob Location\r\nDhaka\r\nSalary\r\nNegotiable\r\nCompensation & Other Benefits\r\nExcellent remuneration package will be given for the deserving candidates.\r\nRead Before Apply\r\n*Photograph must be enclosed with the resume.\r\nApply Procedure\r\n01: 93, Kazi Nazrul Islam Avenue, Kawran bazar, Dhaka-1215. 02: Holding No-13, Road No-17, Banani, Dhaka-1213. 03: 24, Mirpur Road (opposite side of Dhaka College), Dhaka-1205. 04. 111/2, Kawla Jame Mosjid Road, Dakhsin Khan, Dhaka Collect application form by paying TK 200/- or download from www.nub.ac.bd. Downloaded form should be submitted with a pay order (address to Northern University Bangladesh) of the same amount. Application form duly filled in should reach Registrar`s Office at Sher Tower, Holding No-13, Road No-17, Banani, Dhaka-1213 by August 05, 2019 along with CV, copies of certificates, transcripts, National ID card, two names of referees & two copies of PP size photographs. The authority reserves the right to reject/cancel any application or make changes in the terms and conditions as deemed necessary.\r\nApplication Deadline : August 5, 2019\r\nCompany Information Northern University Bangladesh (NUB Trust.) Address : Sher Tower, Holding No-13, Road No-17, Banani, Dhaka-1213 Web : Business : Education', NULL, '2019-07-27 07:22:04', '2019-07-27 07:22:04'),
(8, 5, 'Laravel developer testing 5', '15000-20000', 'Dhaka', 'USA', 'Job Responsibilities\r\n4 years Bachelor with Honors/Masters in relevant field. Should have minimum 03 (Three) First Class/Division or GPA 4.00 out of 5.00 in SSC & HSC and GPA 3.00 out of 4.00 in Honors/Masters or GPA 4.00 out of 5.00 in SSC/ HSC and GPA 3.00 out of 4.00 in Honors & Masters.\r\nEmployment Status\r\nFull-time\r\nEducational Requirements\r\nBachelor in Engineering (BEngg) in cse\r\n4 years Bachelor with Honors/Masters in relevant field. Should have minimum 03 (Three) First Class/Division or GPA 4.00 out of 5.00 in SSC & HSC and GPA 3.00 out of 4.00 in Honors/Masters or GPA 4.00 out of 5.00 in SSC/ HSC and GPA 3.00 out of 4.00 in Honors & Masters.\r\nJob Location\r\nDhaka\r\nSalary\r\nNegotiable\r\nCompensation & Other Benefits\r\nExcellent remuneration package will be given for the deserving candidates.\r\nRead Before Apply\r\n*Photograph must be enclosed with the resume.\r\nApply Procedure\r\n01: 93, Kazi Nazrul Islam Avenue, Kawran bazar, Dhaka-1215. 02: Holding No-13, Road No-17, Banani, Dhaka-1213. 03: 24, Mirpur Road (opposite side of Dhaka College), Dhaka-1205. 04. 111/2, Kawla Jame Mosjid Road, Dakhsin Khan, Dhaka Collect application form by paying TK 200/- or download from www.nub.ac.bd. Downloaded form should be submitted with a pay order (address to Northern University Bangladesh) of the same amount. Application form duly filled in should reach Registrar`s Office at Sher Tower, Holding No-13, Road No-17, Banani, Dhaka-1213 by August 05, 2019 along with CV, copies of certificates, transcripts, National ID card, two names of referees & two copies of PP size photographs. The authority reserves the right to reject/cancel any application or make changes in the terms and conditions as deemed necessary.\r\nApplication Deadline : August 5, 2019\r\nCompany Information Northern University Bangladesh (NUB Trust.) Address : Sher Tower, Holding No-13, Road No-17, Banani, Dhaka-1213 Web : Business : Education', NULL, '2019-07-27 07:22:19', '2019-07-27 07:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_25_155109_create_employers_table', 1),
(4, '2019_07_26_193552_create_skills_table', 1),
(5, '2019_07_27_102655_create_jobs_table', 2),
(6, '2019_07_27_161640_create_applyjobs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lavel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `skills`, `lavel`, `created_at`, `updated_at`) VALUES
(1, 1, 'HTML', '80%', '2019-07-26 15:08:05', '2019-07-26 15:08:05'),
(2, 1, 'CSS', '70%', '2019-07-26 15:14:46', '2019-07-26 15:14:46'),
(3, 1, 'Java Script', '60%', '2019-07-26 15:15:40', '2019-07-26 15:15:40'),
(4, 1, 'PHP', '80%', '2019-07-26 15:18:46', '2019-07-26 15:18:46'),
(5, 2, 'HTML', '90%', '2019-07-26 15:20:18', '2019-07-26 15:20:18'),
(6, 2, 'PHP', '70%', '2019-07-26 15:20:28', '2019-07-26 15:20:28'),
(7, 1, 'Laravel', '70%', '2019-07-26 16:41:05', '2019-07-26 16:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `profile_pic`, `resume`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alamin', 'Rony', 'alaminrony100@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '16177910_1177823392335234_6048049990772765187_o.jpg', '', 'Laravel Developer', NULL, '2019-07-26 14:47:17', '2019-07-27 18:55:51'),
(2, 'salam', 'Rony', 'salam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '16177910_1177823392335234_6048049990772765187_o.jpg', '', 'Laravel Developer', NULL, '2019-07-26 15:19:49', '2019-07-27 19:46:01'),
(3, 'new', 'newww', 'admin@blog.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, NULL, '2019-07-27 19:51:42', '2019-07-27 19:51:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyjobs`
--
ALTER TABLE `applyjobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applyjobs_job_id_foreign` (`job_id`),
  ADD KEY `applyjobs_user_id_foreign` (`user_id`),
  ADD KEY `applyjobs_employer_id_foreign` (`employer_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employers_email_unique` (`email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_employer_id_foreign` (`employer_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyjobs`
--
ALTER TABLE `applyjobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applyjobs`
--
ALTER TABLE `applyjobs`
  ADD CONSTRAINT `applyjobs_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`),
  ADD CONSTRAINT `applyjobs_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `applyjobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
