-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: blogingsystem
-- ------------------------------------------------------
-- Server version 	10.4.32-MariaDB
-- Date: Tue, 11 Feb 2025 15:28:47 +0530

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
-- Table structure for table `blogs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blogtitle` varchar(512) NOT NULL,
  `blogcategory` int(11) NOT NULL,
  `blogcontent` mediumtext NOT NULL,
  `blogimagepath` varchar(256) NOT NULL,
  `blogcomment` tinyint(4) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `blogs` VALUES (1,'Blog on Deepseek',1,'DeepSeek is revolutionizing the way we interact with information. As an AI-driven search engine, it goes beyond traditional keyword matching, leveraging advanced natural language processing to understand context and deliver highly relevant results. Whether you&#039;re researching complex topics or seeking quick answers, DeepSeek adapts to your needs, offering personalized, accurate, and efficient solutions. Its ability to learn and evolve ensures it stays ahead in the ever-changing digital landscape. DeepSeek isn’t just a tool; it’s a gateway to smarter, faster, and more intuitive information discovery. Dive into DeepSeek and experience the future of search today!','blogimages/06022025032637pm 40624 img4.jpg',1,0,'2025-02-04 09:44:00','2025-02-06 09:56:37'),(2,'Another Blog on Deepseek AI',1,'DeepSeek is revolutionizing the way we interact with information. As an AI-driven search engine, it goes beyond traditional keyword matching, leveraging advanced natural language processing to understand context and deliver highly relevant results. Whether you&#039;re researching complex topics or seeking quick answers, DeepSeek adapts to your needs, offering personalized, accurate, and efficient solutions. Its ability to learn and evolve ensures it stays ahead in the ever-changing digital landscape. DeepSeek isn’t just a tool; it’s a gateway to smarter, faster, and more intuitive information discovery. Dive into DeepSeek and experience the future of search today!','blogimages/06022025032706pm 26434 img1.jpg',1,1,'2025-02-04 09:45:34','2025-02-06 09:57:06'),(3,'Daily Food',3,'A vegetarian diet is a powerful way to stay healthy and energetic. Packed with essential nutrients, plant-based foods like fruits, vegetables, whole grains, nuts, and legumes provide fiber, vitamins, and antioxidants that boost immunity and improve digestion. Leafy greens, lentils, and dairy products offer protein and calcium for strong muscles and bones. Avoiding processed foods and focusing on fresh, organic produce helps maintain a balanced weight and lowers the risk of heart disease and diabetes. Hydration and mindful eating further enhance overall well-being. Embrace a vegetarian lifestyle for a healthier, more sustainable future!','blogimages/06022025032717pm 55884 img11.jpg',1,1,'2025-02-04 09:56:19','2025-02-06 09:57:17'),(4,'How to make butter nan at Home',2,'Ingredients (Makes 6-8 Naans)\r\n\r\n    2 cups all-purpose flour (maida)\r\n\r\n    1/2 tsp baking powder\r\n\r\n    1/4 tsp baking soda\r\n\r\n    1/2 tsp sugar\r\n\r\n    1/2 tsp salt\r\n\r\n    2 tbsp yogurt (plain, unsweetened)\r\n\r\n    2 tbsp milk (warm)\r\n\r\n    2 tbsp butter (melted) + extra for brushing\r\n\r\n    1/4 cup water (approx., for kneading)\r\n\r\n    1-2 tbsp nigella seeds (kalonji) or sesame seeds (optional, for topping)\r\n\r\nInstructions\r\n1. Prepare the Dough\r\n\r\n    In a large mixing bowl, combine the flour, baking powder, baking soda, sugar, and salt.\r\n\r\n    Add the yogurt, melted butter, and warm milk. Mix well.\r\n\r\n    Gradually add water and knead into a soft, smooth dough. The dough should be slightly sticky but manageable.\r\n\r\n    Cover the dough with a damp cloth and let it rest for 2 hours in a warm place.\r\n\r\n2. Shape the Naan\r\n\r\n    After the dough has rested, divide it into 6-8 equal-sized balls.\r\n\r\n    Roll each ball into an oval or round shape using a rolling pin. You can make it thick or thin, depending on your preference.\r\n\r\n    If desired, sprinkle nigella seeds or sesame seeds on top and gently press them into the dough.\r\n\r\n3. Cook the Naan\r\n\r\n    Heat a skillet or tawa over medium-high heat.\r\n\r\n    Place the rolled naan on the hot skillet. Cook for about 30 seconds until bubbles start to form.\r\n\r\n    Flip the naan and cook the other side for another 30 seconds.\r\n\r\n    For a charred effect, you can hold the naan directly over a flame using tongs for a few seconds until it puffs up and gets slight char marks.\r\n\r\n    Remove from heat and brush generously with melted butter.\r\n\r\n4. Serve\r\n\r\n    Serve hot with your favorite curry, dal, or dip.','blogimages/06022025032731pm 74619 img12.jpg',1,1,'2025-02-06 09:24:10','2025-02-06 09:57:31');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `blogs` with 4 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `category` VALUES (1,'Technical','Technical',1,'2025-01-30 09:59:46','2025-01-31 09:13:18'),(2,'Food','Food',1,'2025-01-30 09:59:56','2025-01-31 09:13:19'),(3,'Local Food','LocalFood',1,'2025-01-30 10:00:02','2025-01-31 09:26:56'),(4,'Sample Category','SampleCategory',1,'2025-01-31 09:06:47','2025-01-31 09:06:47'),(5,'Life Style','LifeStyle',1,'2025-02-04 09:26:06','2025-02-04 09:26:06');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `category` with 5 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `logs` VALUES (88,'2025-02-07 09:42:48','admin@project.com','Logs Deleted',1),(89,'2025-02-07 09:43:00','admin@project.com','Logout Successfully',1),(90,'2025-02-08 08:59:57','admin@project.com','Login Successfully',1),(91,'2025-02-08 09:10:56','admin@project.com','Logout Successfully',1),(92,'2025-02-08 09:16:21','admin@project.com','Login Successfully',1),(93,'2025-02-08 09:58:50','admin@project.com','Logout Successfully',1),(94,'2025-02-11 09:04:34','admin@project.com','Login Successfully',1),(95,'2025-02-11 09:34:36','admin@project.com','Login Successfully',1),(96,'2025-02-11 09:36:31','admin@project.com','Login Successfully',1),(97,'2025-02-11 09:40:54','admin@project.com','Bhavya Dava Member added in Team Section',1),(98,'2025-02-11 09:41:57','admin@project.com','Keyur Ramani Member added in Team Section',1),(99,'2025-02-11 09:50:07','admin@project.com','Bhavya Dava Member added in Team Section',1),(100,'2025-02-11 09:50:24','admin@project.com','Keyur Ramani Member added in Team Section',1),(101,'2025-02-11 09:52:39','admin@project.com','Prince Patel Member added in Team Section',1),(102,'2025-02-11 09:54:09','admin@project.com','Bhavya Dava Member added in Team Section',1),(103,'2025-02-11 09:55:44','admin@project.com','Bhavya Dava Member added in Team Section',1),(104,'2025-02-11 09:55:59','admin@project.com','Keyur Ramani Member added in Team Section',1),(105,'2025-02-11 09:56:16','admin@project.com','Prince Patel Member added in Team Section',1);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `logs` with 18 row(s)
--

--
-- Table structure for table `messages`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `messagedate` timestamp NOT NULL DEFAULT current_timestamp(),
  `senderemail` varchar(128) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `content` varchar(1024) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `messages` VALUES (5,'2025-02-07 09:37:26','demo','demo','demo',1,'2025-02-07 09:37:26','2025-02-07 09:40:48');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `messages` with 1 row(s)
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

--
-- Table structure for table `team`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `designation` varchar(128) NOT NULL,
  `teamtwitter` varchar(128) NOT NULL,
  `teaminstagram` varchar(128) NOT NULL,
  `teamfacebook` varchar(128) NOT NULL,
  `teamlinkedin` varchar(128) NOT NULL,
  `photopath` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `team` VALUES (7,'Bhavya Dava','Manager','https://www.demourl.com','https://www.demourl.com','https://www.demourl.com','https://www.linkedin.com','teamimages/11022025032544pm 55910 Bhavya Dava img1.jpg',1,'2025-02-11 09:55:44','2025-02-11 09:55:44'),(8,'Keyur Ramani','General Manager','https://www.demourl.com','https://www.demourl.com','https://www.facebook.com','https://www.linkedin.com','teamimages/11022025032559pm 82482 Keyur Ramani img11.jpg',1,'2025-02-11 09:55:59','2025-02-11 09:55:59'),(9,'Prince Patel','Manager','https://www.demourl.com','https://www.demourl.com','https://www.demourl.com','https://www.linkedin.com','teamimages/11022025032616pm 51474 Prince Patel img12.jpg',1,'2025-02-11 09:56:16','2025-02-11 09:56:16');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `team` with 3 row(s)
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

-- Dump completed on: Tue, 11 Feb 2025 15:28:47 +0530
