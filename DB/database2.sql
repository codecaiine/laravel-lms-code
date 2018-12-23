-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for eduafricwebappbeta
CREATE DATABASE IF NOT EXISTS `eduafricwebappbeta` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `eduafricwebappbeta`;

-- Dumping structure for table eduafricwebappbeta.completions
CREATE TABLE IF NOT EXISTS `completions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `completion_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completion_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.completion_course
CREATE TABLE IF NOT EXISTS `completion_course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `completion_id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.completion_lesson
CREATE TABLE IF NOT EXISTS `completion_lesson` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `completion_id` int(10) unsigned NOT NULL,
  `lesson_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.completion_section
CREATE TABLE IF NOT EXISTS `completion_section` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `completion_id` int(10) unsigned NOT NULL,
  `section_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.completion_test
CREATE TABLE IF NOT EXISTS `completion_test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `completion_id` int(10) unsigned NOT NULL,
  `test_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_description` longtext COLLATE utf8mb4_unicode_ci,
  `course_outline` longtext COLLATE utf8mb4_unicode_ci,
  `mime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_covername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coursecover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_points` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructor_id` int(11) DEFAULT NULL,
  `course_sector` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.course_facilitator
CREATE TABLE IF NOT EXISTS `course_facilitator` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(10) unsigned NOT NULL,
  `facilitator_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.course_lesson
CREATE TABLE IF NOT EXISTS `course_lesson` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.enrollments
CREATE TABLE IF NOT EXISTS `enrollments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.facilitators
CREATE TABLE IF NOT EXISTS `facilitators` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_bio` text COLLATE utf8mb4_unicode_ci,
  `f_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facilitator_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mime_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_picname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `facilitators_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.facilitator_password_resets
CREATE TABLE IF NOT EXISTS `facilitator_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `facilitator_password_resets_email_index` (`email`),
  KEY `facilitator_password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.instructors
CREATE TABLE IF NOT EXISTS `instructors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `i_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_about` longtext COLLATE utf8mb4_unicode_ci,
  `i_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructor_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mime_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_picname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `instructors_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.instructor_password_resets
CREATE TABLE IF NOT EXISTS `instructor_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `instructor_password_resets_email_index` (`email`),
  KEY `instructor_password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.lessons
CREATE TABLE IF NOT EXISTS `lessons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lesson_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson_content` longtext COLLATE utf8mb4_unicode_ci,
  `course_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `lesson_info` text COLLATE utf8mb4_unicode_ci,
  `videomime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_videoname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lessonvideo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdfmime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_pdfname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lessonpdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slidemime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_slidename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lessonslide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docxmime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_docxname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lessondocx` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.sections
CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_objective` text COLLATE utf8mb4_unicode_ci,
  `course_id` int(11) DEFAULT NULL,
  `section_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.tests
CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `q_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `q_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `q_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `q_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `q_five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sector` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_association` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table eduafricwebappbeta.views
CREATE TABLE IF NOT EXISTS `views` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
