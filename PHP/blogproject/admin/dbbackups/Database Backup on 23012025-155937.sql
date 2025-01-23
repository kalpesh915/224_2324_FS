-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: blogingsystem
-- ------------------------------------------------------
-- Server version 	10.4.32-MariaDB
-- Date: Thu, 23 Jan 2025 15:59:37 +0530

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
INSERT INTO `adminusers` VALUES (1,'Bhavin','Thakar','admin@project.com','$2y$10$lyyaVTlVlzdV8x/h9pHALegb/LpAL/VLl/xrxUJ3ceSeu5FkZc9R6','2025-01-22 09:23:00','2025-01-23 10:00:29');
/*!40000 ALTER TABLE `adminusers` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `adminusers` with 1 row(s)
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `logs` VALUES (1,'2025-01-22 09:35:05','admin@project.com','Invalid Attempt of Login'),(2,'2025-01-22 09:35:10','admin@project.com','Login Successfully'),(3,'2025-01-22 09:35:20','admin@project.com','Invalid Attempt of Login'),(4,'2025-01-22 09:43:22','admin@project.com','Invalid Attempt of Login'),(5,'2025-01-22 09:44:26','admin@project.com','Invalid Attempt of Login'),(6,'2025-01-22 09:44:46','admin@project.com','Invalid Attempt of Login'),(7,'2025-01-22 09:44:55','admin@project.com','Login Successfully'),(8,'2025-01-22 09:45:24','admin@project.com','Login Successfully'),(9,'2025-01-22 09:45:33','admin@project.com','Invalid Attempt of Login'),(10,'2025-01-22 09:45:37','admin@project.com','Login Successfully'),(11,'2025-01-22 09:53:52','admin@project.com','Login Successfully'),(12,'2025-01-22 09:53:57','admin@project.com','Logout Successfully'),(13,'2025-01-22 09:55:39','admin@project.com','Login Successfully'),(14,'2025-01-22 10:06:42','admin@project.com','Logout Successfully'),(15,'2025-01-23 09:24:52','admin@project.com','Login Successfully'),(16,'2025-01-23 09:42:31','admin@project.com','Invalid Attempt of Password Change'),(17,'2025-01-23 09:46:18','admin@project.com','Profile Password Updated'),(18,'2025-01-23 09:46:32','admin@project.com','Logout Successfully'),(19,'2025-01-23 09:46:37','admin@project.com','Invalid Attempt of Login'),(20,'2025-01-23 09:46:44','admin@project.com','Login Successfully'),(21,'2025-01-23 09:46:57','admin@project.com','Profile Password Updated'),(22,'2025-01-23 10:00:05','admin@project.com','Profile Updated to Admin User'),(23,'2025-01-23 10:00:11','admin@project.com','Profile Updated to Bhavya Dava'),(24,'2025-01-23 10:00:29','admin@project.com','Profile Updated to Bhavin Thakar');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `logs` with 24 row(s)
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

-- Dump completed on: Thu, 23 Jan 2025 15:59:37 +0530
