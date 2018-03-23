# ************************************************************
# Sequel Pro SQL dump
# Versión 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.38)
# Base de datos: geometry
# Tiempo de Generación: 2018-03-23 10:53:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(3,'2014_10_12_000000_create_users_table',1),
	(4,'2014_10_12_100000_create_password_resets_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Volcado de tabla users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Mateo','matteoquintero@gmail.com','$2y$10$TfMwMt70iHE80NPQhAMXruZ6/U8xqD7aXrS6tRQKm6jhdexgmgNgC','lqkzq5b17b38j4KFbnsffFZ7BbxbEY9xGPo2GeVnt3bhxX8nzSThuYbRd2Ot','2018-03-23 05:22:10','2018-03-23 05:22:10');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla video
# ------------------------------------------------------------

DROP TABLE IF EXISTS `video`;

CREATE TABLE `video` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `idYoutube` varchar(200) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;

INSERT INTO `video` (`id`, `name`, `idYoutube`, `date`)
VALUES
	(1,'Exercitation ullamco','Al6Sr1KPVws','2018-03-22 00:17:24'),
	(2,'Excepteur sint','_akgbPNWBUY','2018-03-22 00:17:56'),
	(3,'Sunt in culpa','cm5DJpHH8so','2018-03-22 00:18:05'),
	(4,'Incididunt ut labore','6r7CJpXsals','2018-03-22 00:18:16'),
	(5,'Consectetur adipisicing','IQ2klm3ioE8','2018-03-22 00:18:27');

/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla view
# ------------------------------------------------------------

DROP TABLE IF EXISTS `view`;

CREATE TABLE `view` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idVisitor` int(11) DEFAULT NULL,
  `idVideo` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `view` WRITE;
/*!40000 ALTER TABLE `view` DISABLE KEYS */;

INSERT INTO `view` (`id`, `idVisitor`, `idVideo`, `date`)
VALUES
	(1,1,1,'2018-03-22 13:48:14'),
	(2,1,2,'2018-03-22 13:48:44'),
	(3,1,1,'2018-03-22 13:49:27'),
	(4,40,1,'2018-03-23 01:15:15'),
	(5,40,1,'2018-03-23 01:17:39'),
	(6,40,1,'2018-03-23 01:18:17'),
	(7,40,1,'2018-03-23 01:19:39'),
	(8,40,1,'2018-03-23 01:20:02'),
	(9,40,2,'2018-03-23 01:20:12'),
	(10,40,3,'2018-03-23 01:20:15'),
	(11,40,4,'2018-03-23 01:20:19'),
	(12,40,5,'2018-03-23 01:20:22'),
	(13,40,1,'2018-03-23 01:21:25'),
	(14,42,1,'2018-03-23 01:23:16'),
	(15,42,2,'2018-03-23 01:23:33'),
	(16,42,1,'2018-03-23 01:28:41'),
	(17,43,1,'2018-03-23 05:26:57'),
	(18,43,5,'2018-03-23 05:27:22');

/*!40000 ALTER TABLE `view` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla views
# ------------------------------------------------------------

DROP VIEW IF EXISTS `views`;

CREATE TABLE `views` (
   `idVisitor` INT(11) UNSIGNED NOT NULL DEFAULT '0',
   `nameVisitor` VARCHAR(200) NULL DEFAULT NULL,
   `lastnameVisitor` VARCHAR(200) NULL DEFAULT NULL,
   `idVideo` INT(11) UNSIGNED NOT NULL DEFAULT '0',
   `name` VARCHAR(200) NULL DEFAULT NULL,
   `idYoutube` VARCHAR(200) NULL DEFAULT NULL,
   `date` TIMESTAMP NULL DEFAULT NULL
) ENGINE=MyISAM;



# Volcado de tabla visitor
# ------------------------------------------------------------

DROP TABLE IF EXISTS `visitor`;

CREATE TABLE `visitor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `adress` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `visitor` WRITE;
/*!40000 ALTER TABLE `visitor` DISABLE KEYS */;

INSERT INTO `visitor` (`id`, `name`, `lastname`, `company`, `email`, `position`, `adress`, `city`, `phone`, `date`)
VALUES
	(1,'Mateo','Quintero','Rappi','matteoquintero@gmail.com','Mensajero','KRR19#4434','Bogota','3193888291','2018-03-22 03:24:31'),
	(32,'Sandy','Hernandez','DirectTV','vivip_17@hotmail.com','Ventas','KRR19#4434','Manizales','3124568790','2018-03-23 01:03:16'),
	(34,'Luis','Gonzales','Rappi','luis@hotmail.com','Ventas','KRR2#48 78','Bogota','3120980900','2018-03-23 01:04:07'),
	(36,'Andres','Gonzales','DirectTV','andres@hotmail.com','Director','CLL78 #44 56','Bogota','3124568790','2018-03-23 01:05:29'),
	(38,'Fedeirco','Gonzales','Rappi','federico@hotmail.com','Mensajero','Avenida cr #09 78','Bogota','3134523424','2018-03-23 01:06:23'),
	(40,'Fernando','Gonzales','DirectTV','fernando@gmail.com','Ventas','KRR 78 #3 12','Bogota','3112345790','2018-03-23 01:08:05'),
	(42,'Luisa','Gonzales','Casa Luker','luisa@gmail.com','Director','CLL44 #09 87','Bogota','3121238790','2018-03-23 01:23:16'),
	(43,'Juan','Quintero','Midori','juan@hmail.com','Mensajero','Crr56#45a90','Manizales','312456789','2018-03-23 05:26:57');

/*!40000 ALTER TABLE `visitor` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla visitors
# ------------------------------------------------------------

DROP VIEW IF EXISTS `visitors`;

CREATE TABLE `visitors` (
   `idVisitor` INT(11) UNSIGNED NOT NULL DEFAULT '0',
   `name` VARCHAR(200) NULL DEFAULT NULL,
   `lastname` VARCHAR(200) NULL DEFAULT NULL,
   `company` VARCHAR(200) NULL DEFAULT NULL,
   `email` VARCHAR(200) NULL DEFAULT NULL,
   `position` VARCHAR(200) NULL DEFAULT NULL,
   `adress` VARCHAR(200) NULL DEFAULT NULL,
   `city` VARCHAR(200) NULL DEFAULT NULL,
   `phone` VARCHAR(200) NULL DEFAULT NULL,
   `date` TIMESTAMP NULL DEFAULT NULL,
   `times` BIGINT(21) NOT NULL DEFAULT '0'
) ENGINE=MyISAM;





# Replace placeholder table for views with correct view syntax
# ------------------------------------------------------------

DROP TABLE `views`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `views`
AS SELECT
   `visitor`.`id` AS `idVisitor`,
   `visitor`.`name` AS `nameVisitor`,
   `visitor`.`lastname` AS `lastnameVisitor`,
   `video`.`id` AS `idVideo`,
   `video`.`name` AS `name`,
   `video`.`idYoutube` AS `idYoutube`,
   `view`.`date` AS `date`
FROM ((`visitor` join `view` on((`view`.`idVisitor` = `visitor`.`id`))) join `video` on((`video`.`id` = `view`.`idVideo`))) order by `video`.`id`;


# Replace placeholder table for visitors with correct view syntax
# ------------------------------------------------------------

DROP TABLE `visitors`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `visitors`
AS SELECT
   `visitor`.`id` AS `idVisitor`,
   `visitor`.`name` AS `name`,
   `visitor`.`lastname` AS `lastname`,
   `visitor`.`company` AS `company`,
   `visitor`.`email` AS `email`,
   `visitor`.`position` AS `position`,
   `visitor`.`adress` AS `adress`,
   `visitor`.`city` AS `city`,
   `visitor`.`phone` AS `phone`,
   `visitor`.`date` AS `date`,count(`video`.`id`) AS `times`
FROM ((`visitor` join `view` on((`view`.`idVisitor` = `visitor`.`id`))) join `video` on((`video`.`id` = `view`.`idVideo`))) group by `visitor`.`id`;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
