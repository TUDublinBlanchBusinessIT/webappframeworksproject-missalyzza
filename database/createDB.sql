-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.6.13 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for nailsalon
DROP DATABASE IF EXISTS `nailsalon`;
CREATE DATABASE IF NOT EXISTS `nailsalon` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `nailsalon`;

-- Dumping structure for table nailsalon.booking
DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `bookingdate` date DEFAULT NULL,
  `bookingtime` time DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  `fee` decimal(18,3) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productid` (`productid`),
  CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

-- Dumping data for table nailsalon.booking: ~36 rows (approximately)
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` (`id`, `firstname`, `surname`, `bookingdate`, `bookingtime`, `productid`, `fee`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Anna', 'Smith', '2019-05-17', '10:00:00', 1, 15.000, NULL, NULL, NULL),
	(2, 'Jennifer', 'Stone', '2019-05-25', '14:00:00', 3, 25.000, NULL, NULL, NULL),
	(3, 'Sam', 'Andrews', '2019-06-10', '10:00:00', 1, 15.000, NULL, NULL, NULL),
	(4, 'Beth', 'Drew', '2019-06-01', '12:00:00', 5, 35.000, NULL, NULL, NULL),
	(5, 'Alyzza', 'Rodriguez', '2020-05-01', '02:05:34', NULL, NULL, '2020-05-01 14:54:34', '2020-05-01 14:54:34', NULL),
	(6, 'Mickey', 'Mouse', '2020-05-12', '12:00:00', NULL, NULL, '2020-05-01 15:00:04', '2020-05-01 15:00:04', NULL),
	(29, 'Alyzza', 'Rodriguez', '2020-06-15', '16:00:00', NULL, NULL, '2020-05-01 15:23:02', '2020-05-01 15:23:02', NULL),
	(30, 'Sam', 'Brown', '2020-05-22', '16:00:00', NULL, NULL, '2020-05-01 15:26:59', '2020-05-01 15:26:59', NULL),
	(31, 'Sam', 'Brown', '2020-05-22', '16:00:00', NULL, NULL, '2020-05-01 15:27:18', '2020-05-01 15:27:18', NULL),
	(32, 'Sam', 'Brown', '2020-05-22', '16:00:00', NULL, NULL, '2020-05-01 15:28:38', '2020-05-01 15:28:38', NULL),
	(33, 'Sam', 'Brown', '2020-05-22', '16:00:00', NULL, NULL, '2020-05-01 15:30:03', '2020-05-01 15:30:03', NULL),
	(34, 'Sam', 'Brown', '2020-05-22', '16:00:00', NULL, NULL, '2020-05-01 15:30:32', '2020-05-01 15:30:32', NULL),
	(35, 'Sam', 'Brown', '2020-05-22', '16:00:00', NULL, NULL, '2020-05-01 15:31:32', '2020-05-01 15:31:32', NULL),
	(36, 'Sam', 'Brown', '2020-05-22', '16:00:00', NULL, NULL, '2020-05-01 15:31:49', '2020-05-01 15:31:49', NULL),
	(37, 'Sam', 'Brown', '2020-05-22', '16:00:00', NULL, NULL, '2020-05-01 15:33:46', '2020-05-01 15:33:46', NULL),
	(38, 'Sam', 'Brown', '2020-05-22', '16:00:00', NULL, NULL, '2020-05-01 15:34:34', '2020-05-01 15:34:34', NULL),
	(39, 'Alyzza', 'Rodriguez', '2020-06-13', '13:00:00', NULL, NULL, '2020-05-01 16:16:16', '2020-05-01 16:16:16', NULL),
	(40, 'Mickey', 'Matthew', '2020-07-12', '13:00:00', NULL, NULL, '2020-05-01 19:31:43', '2020-05-01 19:31:43', NULL),
	(41, 'Mickey', 'Matthew', '2020-07-12', '13:00:00', NULL, NULL, '2020-05-01 19:34:01', '2020-05-01 19:34:01', NULL),
	(42, 'Mickey', 'Matthew', '2020-07-12', '13:00:00', NULL, NULL, '2020-05-01 19:35:27', '2020-05-01 19:35:27', NULL),
	(43, 'Mickey', 'Matthew', '2020-07-12', '13:00:00', NULL, NULL, '2020-05-01 19:36:28', '2020-05-01 19:36:28', NULL),
	(44, 'Mickey', 'Matthew', '2020-07-12', '13:00:00', NULL, NULL, '2020-05-01 19:37:01', '2020-05-01 19:37:01', NULL),
	(45, 'Eva', 'Mendez', '2020-06-12', '12:00:00', NULL, NULL, '2020-05-01 19:37:35', '2020-05-01 19:37:35', NULL),
	(46, 'Sam', 'Brown', '2020-07-12', '15:30:00', 3, NULL, '2020-05-01 19:39:31', '2020-05-01 19:39:31', NULL),
	(47, 'Anna', 'Fe', '2020-05-20', '17:00:00', 4, NULL, '2020-05-01 19:41:52', '2020-05-01 19:41:52', NULL),
	(48, 'Anna', 'Fe', '2020-05-20', '17:00:00', 4, NULL, '2020-05-01 19:43:02', '2020-05-01 19:43:02', NULL),
	(49, 'Anna', 'Fe', '2020-05-20', '17:00:00', 4, NULL, '2020-05-01 19:47:25', '2020-05-01 19:47:25', NULL),
	(50, 'Grace', 'Deen', '2020-05-28', '11:00:00', 1, NULL, '2020-05-01 19:48:31', '2020-05-01 19:48:31', NULL),
	(51, 'Alyzza', 'Rodriguez', '2020-08-25', '10:00:00', 2, NULL, '2020-05-01 22:22:25', '2020-05-01 22:22:25', NULL),
	(52, 'Anna', 'Brown', '2020-05-30', '13:00:00', 2, NULL, '2020-05-02 20:02:43', '2020-05-02 20:02:43', NULL),
	(53, 'Alyzza', 'Rodriguez', '2020-05-28', '09:00:00', 2, NULL, '2020-05-02 20:09:31', '2020-05-02 20:09:31', NULL),
	(54, 'Sam', 'Matthew', '2020-05-31', '11:00:00', 6, NULL, '2020-05-02 20:12:08', '2020-05-02 20:12:08', NULL),
	(55, 'Sam', 'Matthew', '2020-05-31', '11:00:00', 6, NULL, '2020-05-02 20:12:25', '2020-05-02 20:12:25', NULL),
	(56, 'Sam', 'Matthew', '2020-05-31', '11:00:00', 6, NULL, '2020-05-02 20:12:52', '2020-05-02 20:12:52', NULL),
	(57, 'Sam', 'Matthew', '2020-05-31', '11:00:00', 6, NULL, '2020-05-02 20:13:32', '2020-05-02 20:13:32', NULL),
	(58, 'Sam', 'Matthew', '2020-05-31', '11:00:00', 6, NULL, '2020-05-02 20:14:34', '2020-05-02 20:14:34', NULL),
	(59, 'Anna', 'Rodriguez', '2020-05-21', '12:00:00', 1, NULL, '2020-05-02 20:19:00', '2020-05-02 20:19:00', NULL),
	(60, 'Heidee', 'Rodiguez', '2020-05-20', '12:00:00', 2, NULL, '2020-05-03 14:08:41', '2020-05-03 14:08:41', NULL),
	(61, 'Alyzza', 'Rodriguez', '2020-05-29', '12:00:00', 3, NULL, '2020-05-03 14:15:06', '2020-05-03 14:15:06', NULL),
	(62, 'Alyzza', 'Rodriguez', '2020-05-30', '11:00:00', 2, NULL, '2020-05-03 14:29:25', '2020-05-03 14:29:25', NULL),
	(63, 'Alyzza', 'Rodriguez', '2020-05-30', '12:00:00', 3, NULL, '2020-05-05 13:23:15', '2020-05-05 13:23:15', NULL);
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;

-- Dumping structure for table nailsalon.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nailsalon.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table nailsalon.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nailsalon.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table nailsalon.orderdetails
DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) DEFAULT NULL,
  `bookingid` int(11) DEFAULT NULL,
  `total` decimal(18,3) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productid` (`productid`),
  KEY `bookingid` (`bookingid`),
  CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
  CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`bookingid`) REFERENCES `booking` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table nailsalon.orderdetails: ~14 rows (approximately)
/*!40000 ALTER TABLE `orderdetails` DISABLE KEYS */;
INSERT INTO `orderdetails` (`id`, `productid`, `bookingid`, `total`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 1, 15.000, NULL, NULL, NULL),
	(2, 3, 2, 25.000, NULL, NULL, NULL),
	(3, 1, 3, 15.000, NULL, NULL, NULL),
	(4, 5, 4, 35.000, NULL, NULL, NULL),
	(5, 2, 45, NULL, '2020-05-01 19:37:35', '2020-05-01 19:37:35', NULL),
	(6, 3, 46, NULL, '2020-05-01 19:39:31', '2020-05-01 19:39:31', NULL),
	(7, 4, 49, NULL, '2020-05-01 19:47:25', '2020-05-01 19:47:25', NULL),
	(8, 1, 50, NULL, '2020-05-01 19:48:31', '2020-05-01 19:48:31', NULL),
	(9, 2, 51, NULL, '2020-05-01 22:22:25', '2020-05-01 22:22:25', NULL),
	(10, 2, 52, NULL, '2020-05-02 20:02:43', '2020-05-02 20:02:43', NULL),
	(11, 2, 53, NULL, '2020-05-02 20:09:31', '2020-05-02 20:09:31', NULL),
	(12, 6, 58, NULL, '2020-05-02 20:14:34', '2020-05-02 20:14:34', NULL),
	(13, 1, 59, NULL, '2020-05-02 20:19:00', '2020-05-02 20:19:00', NULL),
	(14, 2, 60, NULL, '2020-05-03 14:08:41', '2020-05-03 14:08:41', NULL),
	(15, 3, 61, NULL, '2020-05-03 14:15:06', '2020-05-03 14:15:06', NULL),
	(16, 2, 62, NULL, '2020-05-03 14:29:25', '2020-05-03 14:29:25', NULL),
	(17, 3, 63, NULL, '2020-05-05 13:23:15', '2020-05-05 13:23:15', NULL);
/*!40000 ALTER TABLE `orderdetails` ENABLE KEYS */;

-- Dumping structure for table nailsalon.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nailsalon.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table nailsalon.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `price` decimal(18,3) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table nailsalon.product: ~6 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `name`, `price`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Manicure', 15.000, 'manicure.jpg', NULL, NULL, NULL),
	(2, 'Pedicure', 15.000, 'pedicure.jpeg', NULL, NULL, NULL),
	(3, 'Manicure and Pedicure', 25.000, 'mani&pedi.jpg', NULL, NULL, NULL),
	(4, 'Hand Spa', 20.000, 'handspa.jpg', NULL, NULL, NULL),
	(5, 'Foot Spa', 25.000, 'footspa.jpg', NULL, NULL, NULL),
	(6, 'Hand and Foot Spa', 35.000, 'hand&footspa.jpg', NULL, NULL, NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table nailsalon.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nailsalon.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Alyzza Rodriguez', 'alyzzarodriguez@gmail.com', NULL, '$2y$10$oaYEWZWF9hU1mogfcIMRQO6zC7jXefOsrOBcVduEH2NVVX6ffOPRe', NULL, '2020-05-01 19:56:45', '2020-05-01 19:56:45'),
	(2, 'Sam Brown', 'sam.brown@gmail.com', NULL, '$2y$10$5eKjxqdofxYoLdZQTr4My.xR1Zzxd9DC8rV7KiUnJWK0Dnv2itUAq', NULL, '2020-05-01 20:35:46', '2020-05-01 20:35:46');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
