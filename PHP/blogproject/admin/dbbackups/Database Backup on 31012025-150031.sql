-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: blogingsystem
-- ------------------------------------------------------
-- Server version 	10.4.32-MariaDB
-- Date: Fri, 31 Jan 2025 15:00:31 +0530

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adminusers`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminusers`
--

LOCK TABLES `adminusers` WRITE;
/*!40000 ALTER TABLE `adminusers` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `adminusers` VALUES (1,'Nisarg','Kapupara','admin@project.com','$2y$10$lyyaVTlVlzdV8x/h9pHALegb/LpAL/VLl/xrxUJ3ceSeu5FkZc9R6','2025-01-22 09:23:00','2025-01-25 09:58:59');
/*!40000 ALTER TABLE `adminusers` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `adminusers` with 1 row(s)
--

--
-- Table structure for table `category`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(64) NOT NULL,
  `categoryclass` varchar(64) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `category` VALUES (1,'Technical','Technical',1,'2025-01-30 09:59:46','2025-01-31 09:13:18'),(2,'Food','Food',1,'2025-01-30 09:59:56','2025-01-31 09:13:19'),(3,'Local Food','LocalFood',1,'2025-01-30 10:00:02','2025-01-31 09:26:56'),(4,'Sample Category','SampleCategory',1,'2025-01-31 09:06:47','2025-01-31 09:06:47');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `category` with 4 row(s)
--

--
-- Table structure for table `contact`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contactperson` varchar(64) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `emailaddress` varchar(128) NOT NULL,
  `address` varchar(512) NOT NULL,
  `googlemap` varchar(2048) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `contact` VALUES (1,'Bhavya Dava','9999988888','bhavyadava@gmail.com','Morbi road','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27369.69748697452!2d70.806185562937!3d22.8106060019116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959f32ae3501851%3A0x5a89ef8973db50a3!2sKamdhenu%20fun%20resort!5e1!3m2!1sen!2sin!4v1737972464189!5m2!1sen!2sin','2025-01-27 09:41:54','2025-01-27 10:08:20');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `contact` with 1 row(s)
--

--
-- Table structure for table `faq`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(256) NOT NULL,
  `answer` varchar(2096) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `faq` VALUES (4,'Another Question 1','Sample Answer of FAQ Answer Sample Answer of FAQ Answer Sample Answer of FAQ Answer Sample Answer of FAQ Answer Sample Answer of FAQ Answer',1,'2025-01-29 09:08:50','2025-01-29 09:22:10'),(5,'Sample FAQ Question','Answe nswer Answe nswer Answe nswer Answe nswer Answe nswer Answe nswer Answe nswer',1,'2025-01-29 09:08:59','2025-01-29 09:23:20');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `faq` with 2 row(s)
--

--
-- Table structure for table `logs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(64) NOT NULL,
  `logmessage` varchar(1024) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `logs` VALUES (56,'2025-01-29 10:00:32','admin@project.com','Logs Deleted',1),(57,'2025-01-29 10:02:41','admin@project.com','Logout Successfully',1),(58,'2025-01-30 09:10:51','admin@project.com','Login Successfully',1),(59,'2025-01-30 09:13:02','admin@project.com','New Sample Service Service Added in Database',1),(60,'2025-01-30 09:59:46','admin@project.com','Technical Category Added in Database',1),(61,'2025-01-30 09:59:56','admin@project.com','Food Category Added in Database',1),(62,'2025-01-30 10:00:02','admin@project.com','Local Food Category Added in Database',1),(63,'2025-01-31 09:05:45','admin@project.com','Login Successfully',1),(64,'2025-01-31 09:06:15','admin@project.com','Another Service Service Added in Database',1),(65,'2025-01-31 09:06:48','admin@project.com','Sample Category Category Added in Database',1),(66,'2025-01-31 09:25:13','admin@project.com','Local Food Category Updated in Database',1),(67,'2025-01-31 09:25:19','admin@project.com','Local Food Rajkot Category Updated in Database',1),(68,'2025-01-31 09:26:45','admin@project.com','Local Food Rajkot Category Updated in Database',1),(69,'2025-01-31 09:26:56','admin@project.com','Local Food Category Updated in Database',1);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `logs` with 14 row(s)
--

--
-- Table structure for table `seo`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `metakeyword` varchar(1024) NOT NULL,
  `metadescription` varchar(4096) NOT NULL,
  `tagid` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seo`
--

LOCK TABLES `seo` WRITE;
/*!40000 ALTER TABLE `seo` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `seo` VALUES (1,'Web Development, Web Design, Front end, Back End, Full Stack, Database, React, Laravale, MySql, Mobile App','we are providing huge range of full stack web development courses App Also','G-89988777632','2025-01-30 09:33:36','2025-01-30 09:43:46');
/*!40000 ALTER TABLE `seo` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `seo` with 1 row(s)
--

--
-- Table structure for table `services`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicetitle` varchar(128) NOT NULL,
  `servicedesc` varchar(1048) NOT NULL,
  `serviceicon` varchar(64) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `services` VALUES (1,'Car Rental System','We Provide Car on Rent','car-front',1,'2025-01-29 09:55:58','2025-01-30 09:30:45'),(4,'Another Service','Sample Service','activity',1,'2025-01-31 09:06:15','2025-01-31 09:06:15');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `services` with 2 row(s)
--

--
-- Table structure for table `settings`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` tinyint(4) NOT NULL DEFAULT 1,
  `googletranslate` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `settings` VALUES (1,1,1,'2025-01-27 09:19:01','2025-01-27 09:19:01');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `settings` with 1 row(s)
--

--
-- Table structure for table `smtpconfig`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smtpconfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `smtphostname` varchar(64) NOT NULL,
  `smtpusername` varchar(128) NOT NULL,
  `smtppassword` varchar(128) NOT NULL,
  `smtpsecure` varchar(32) NOT NULL,
  `smtpport` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smtpconfig`
--

LOCK TABLES `smtpconfig` WRITE;
/*!40000 ALTER TABLE `smtpconfig` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `smtpconfig` VALUES (1,'mail.google.com','info@yourserver.com','1234554321','SSH',990,'2025-01-25 09:08:19','2025-01-25 09:30:02');
/*!40000 ALTER TABLE `smtpconfig` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `smtpconfig` with 1 row(s)
--

--
-- Table structure for table `socialmedia`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL,
  `linkedin` varchar(256) NOT NULL,
  `youtube` varchar(256) NOT NULL,
  `snapchat` varchar(256) NOT NULL,
  `telegram` varchar(256) NOT NULL,
  `whatsapp` varchar(256) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socialmedia`
--

LOCK TABLES `socialmedia` WRITE;
/*!40000 ALTER TABLE `socialmedia` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `socialmedia` VALUES (1,'https://www.facebook.com','','https://www.linkedin.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.whatsapp.com?phone=9898989898','','2025-01-28 09:24:02','2025-01-28 09:38:15');
/*!40000 ALTER TABLE `socialmedia` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `socialmedia` with 1 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Fri, 31 Jan 2025 15:00:32 +0530
