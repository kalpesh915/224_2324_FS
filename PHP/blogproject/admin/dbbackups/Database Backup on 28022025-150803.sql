-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: blogingsystem
-- ------------------------------------------------------
-- Server version 	10.4.32-MariaDB
-- Date: Fri, 28 Feb 2025 15:08:03 +0530

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
INSERT INTO `adminusers` VALUES (1,'Nisarg','Kapupara','hetmanani177@gmail.com','$2y$10$sHZrAEwteiU8o2xo02D9COAHK/T4edryvZ6Q9RHUDBYI.4y6t66LW','2025-01-22 09:23:00','2025-02-27 09:56:52');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `blogs` VALUES (1,'Blog on Deepseek',1,'DeepSeek is revolutionizing the way we interact with information. As an AI-driven search engine, it goes beyond traditional keyword matching, leveraging advanced natural language processing to understand context and deliver highly relevant results. Whether you&#039;re researching complex topics or seeking quick answers, DeepSeek adapts to your needs, offering personalized, accurate, and efficient solutions. Its ability to learn and evolve ensures it stays ahead in the ever-changing digital landscape. DeepSeek isn’t just a tool; it’s a gateway to smarter, faster, and more intuitive information discovery. Dive into DeepSeek and experience the future of search today!','blogimages/06022025032637pm 40624 img4.jpg',0,1,'2025-02-04 09:44:00','2025-02-18 09:55:56'),(2,'Another Blog on Deepseek AI',1,'DeepSeek is revolutionizing the way we interact with information. As an AI-driven search engine, it goes beyond traditional keyword matching, leveraging advanced natural language processing to understand context and deliver highly relevant results. Whether you&#039;re researching complex topics or seeking quick answers, DeepSeek adapts to your needs, offering personalized, accurate, and efficient solutions. Its ability to learn and evolve ensures it stays ahead in the ever-changing digital landscape. DeepSeek isn’t just a tool; it’s a gateway to smarter, faster, and more intuitive information discovery. Dive into DeepSeek and experience the future of search today!','blogimages/06022025032706pm 26434 img1.jpg',1,1,'2025-02-04 09:45:34','2025-02-06 09:57:06'),(3,'Daily Food',3,'A vegetarian diet is a powerful way to stay healthy and energetic. Packed with essential nutrients, plant-based foods like fruits, vegetables, whole grains, nuts, and legumes provide fiber, vitamins, and antioxidants that boost immunity and improve digestion. Leafy greens, lentils, and dairy products offer protein and calcium for strong muscles and bones. Avoiding processed foods and focusing on fresh, organic produce helps maintain a balanced weight and lowers the risk of heart disease and diabetes. Hydration and mindful eating further enhance overall well-being. Embrace a vegetarian lifestyle for a healthier, more sustainable future!','blogimages/06022025032717pm 55884 img11.jpg',1,1,'2025-02-04 09:56:19','2025-02-06 09:57:17'),(4,'How to make butter nan at Home',2,'Ingredients (Makes 6-8 Naans)\r\n\r\n    2 cups all-purpose flour (maida)\r\n\r\n    1/2 tsp baking powder\r\n\r\n    1/4 tsp baking soda\r\n\r\n    1/2 tsp sugar\r\n\r\n    1/2 tsp salt\r\n\r\n    2 tbsp yogurt (plain, unsweetened)\r\n\r\n    2 tbsp milk (warm)\r\n\r\n    2 tbsp butter (melted) + extra for brushing\r\n\r\n    1/4 cup water (approx., for kneading)\r\n\r\n    1-2 tbsp nigella seeds (kalonji) or sesame seeds (optional, for topping)\r\n\r\nInstructions\r\n1. Prepare the Dough\r\n\r\n    In a large mixing bowl, combine the flour, baking powder, baking soda, sugar, and salt.\r\n\r\n    Add the yogurt, melted butter, and warm milk. Mix well.\r\n\r\n    Gradually add water and knead into a soft, smooth dough. The dough should be slightly sticky but manageable.\r\n\r\n    Cover the dough with a damp cloth and let it rest for 2 hours in a warm place.\r\n\r\n2. Shape the Naan\r\n\r\n    After the dough has rested, divide it into 6-8 equal-sized balls.\r\n\r\n    Roll each ball into an oval or round shape using a rolling pin. You can make it thick or thin, depending on your preference.\r\n\r\n    If desired, sprinkle nigella seeds or sesame seeds on top and gently press them into the dough.\r\n\r\n3. Cook the Naan\r\n\r\n    Heat a skillet or tawa over medium-high heat.\r\n\r\n    Place the rolled naan on the hot skillet. Cook for about 30 seconds until bubbles start to form.\r\n\r\n    Flip the naan and cook the other side for another 30 seconds.\r\n\r\n    For a charred effect, you can hold the naan directly over a flame using tongs for a few seconds until it puffs up and gets slight char marks.\r\n\r\n    Remove from heat and brush generously with melted butter.\r\n\r\n4. Serve\r\n\r\n    Serve hot with your favorite curry, dal, or dip.','blogimages/06022025032731pm 74619 img12.jpg',1,1,'2025-02-06 09:24:10','2025-02-06 09:57:31'),(5,'ChatGPT',1,'What is ChatGPT?\r\n\r\nChatGPT is an AI-powered chatbot that uses natural language processing (NLP) to understand and generate human-like text. Built on OpenAI’s powerful GPT (Generative Pre-trained Transformer) model, it can engage in meaningful conversations, answer questions, assist with tasks, and even generate creative content like stories, poems, and code.\r\n\r\nHow Does ChatGPT Work?\r\n\r\nChatGPT works by analyzing vast amounts of text data to predict and generate relevant responses. It understands context, grammar, and intent, allowing users to interact with it as if they were speaking to a human. The AI continuously learns from interactions to improve its accuracy and effectiveness.','blogimages/19022025025754pm 30423 img2.jpg',1,1,'2025-02-19 09:27:54','2025-02-19 09:27:54');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `blogs` with 5 row(s)
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
-- Table structure for table `comments`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `userid` varchar(128) NOT NULL,
  `blogid` int(11) NOT NULL,
  `commenttext` varchar(2048) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `adminstatus` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `comments` VALUES (1,'2025-02-21 09:47:27','het@gmail.com',4,'Sample Comemnt',1,0),(2,'2025-02-21 09:48:37','het@gmail.com',4,'Another Comment',1,2),(3,'2025-02-21 09:49:35','bhavya@gmail.com',4,'Another Comment',1,2),(4,'2025-02-21 09:49:57','het@gmail.com',4,'Another Comment',1,0),(5,'2025-02-21 09:49:59','het@gmail.com',4,'Another Comment',1,1),(6,'2025-02-21 09:50:08','het@gmail.com',4,'Another Comment',0,0),(7,'2025-02-21 09:51:48','het@gmail.com',4,'Another Comment',1,0),(8,'2025-02-21 09:51:51','het@gmail.com',4,'Another Comment',1,0),(9,'2025-02-21 09:52:38','het@gmail.com',4,'Another Comment',0,0),(10,'2025-02-21 09:56:58','het@gmail.com',4,'Another Comment',1,1),(11,'2025-02-21 09:57:23','het@gmail.com',4,'Another Comment',0,0),(12,'2025-02-21 09:57:31','het@gmail.com',4,'Another Comment',0,0),(13,'2025-02-21 09:57:36','het@gmail.com',4,'Another Comment',0,0),(14,'2025-02-21 09:58:01','het@gmail.com',4,'Another Comment',0,1),(15,'2025-02-21 09:58:31','het@gmail.com',4,'Another Comment',0,0),(16,'2025-02-21 10:00:06','het@gmail.com',4,'Another Comment',1,0),(17,'2025-02-21 10:00:24','het@gmail.com',4,'Another Comment',0,1),(18,'2025-02-21 10:00:56','het@gmail.com',4,'Another Comment',0,0),(19,'2025-02-21 10:01:13','het@gmail.com',4,'Another Comment',0,0),(20,'2025-02-21 10:01:45','het@gmail.com',4,'Another Comment',0,0),(21,'2025-02-21 10:02:05','het@gmail.com',4,'This is another comment',0,0),(22,'2025-02-21 10:04:01','het@gmail.com',4,'This is another comment',0,0),(23,'2025-02-21 10:04:30','het@gmail.com',4,'This is another comment',0,0),(24,'2025-02-21 10:04:48','het@gmail.com',4,'This is another comment',0,0),(25,'2025-02-22 09:22:29','het@gmail.com',4,'again testing comment code',0,1),(26,'2025-02-22 09:23:02','het@gmail.com',4,'again testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing commentagain testing comment',1,1),(27,'2025-02-22 09:47:30','het@gmail.com',4,'again testing comment code',0,0),(28,'2025-02-24 09:30:34','het@gmail.com',4,'Another testing comment on this blog',0,0),(29,'2025-02-24 09:47:20','het@gmail.com',4,'Another testing comment on this blog',0,0);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `comments` with 29 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `faq` VALUES (4,'Another Question 1','Sample Answer of FAQ Answer Sample Answer of FAQ Answer Sample Answer of FAQ Answer Sample Answer of FAQ Answer Sample Answer of FAQ Answer',1,'2025-01-29 09:08:50','2025-02-14 09:13:02'),(5,'Sample FAQ Question','Answe nswer Answe nswer Answe nswer Answe nswer Answe nswer Answe nswer Answe nswer',1,'2025-01-29 09:08:59','2025-01-29 09:23:20'),(6,'Sample FAQ','this is sample faq for testing purpose.this is sample faq for testing purpose.this is sample faq for testing purpose.this is sample faq for testing purpose.this is sample faq for testing purpose.this is sample faq for testing purpose.this is sample faq for testing purpose.this is sample faq for testing purpose.this is sample faq for testing purpose.this is sample faq for testing purpose.this is sample faq for testing purpose.this is sample faq for testing purpose.this is sample faq for testing purpose.this is sample faq for testing purpose.',1,'2025-02-14 09:11:24','2025-02-14 09:13:03');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `faq` with 3 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `logs` VALUES (139,'2025-02-26 04:59:45','hetmanani177@gmail.com','Logs Deleted',1),(140,'2025-02-26 04:59:48','hetmanani177@gmail.com','Logout Successfully',1),(141,'2025-02-27 09:16:38','hetmanani177@gmail.com','Login Successfully',1),(142,'2025-02-27 09:22:16','hetmanani177@gmail.com','Logout Successfully',1),(143,'2025-02-27 09:22:33','hetmanani177@gmail.com','Password reset otp 629304 Generated and Send to Your Registered Email Address',1),(144,'2025-02-27 09:24:10','hetmanani177@gmail.com','Login Successfully',1),(145,'2025-02-27 09:24:56','hetmanani177@gmail.com','Logout Successfully',1),(146,'2025-02-27 09:25:36','hetmanani177@gmail.com','Password reset otp 170199 Generated and Send to Your Registered Email Address',1),(147,'2025-02-27 09:55:45','hetmanani177@gmail.com','Password Reset Successfully ',1),(148,'2025-02-27 09:56:22','hetmanani177@gmail.com','Password reset otp 487007 Generated and Send to Your Registered Email Address',1),(149,'2025-02-27 09:56:52','hetmanani177@gmail.com','Password Reset Successfully ',1),(150,'2025-02-27 09:57:05','hetmanani177@gmail.com','Login Successfully',1),(151,'2025-02-27 10:01:10','hetmanani177@gmail.com','Logout Successfully',1),(152,'2025-02-27 10:01:25','hetmanani177@gmail.com','Password reset otp 693533 Generated and Send to Your Registered Email Address',1),(153,'2025-02-28 09:06:47','hetmanani177@gmail.com','Login Successfully',1);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `logs` with 15 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `messages` VALUES (11,'2025-02-14 09:55:30','hello@gmail.com','sample','sample message',1,'2025-02-14 09:55:30','2025-02-19 10:12:42');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `messages` with 1 row(s)
--

--
-- Table structure for table `otpentry`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `otpentry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `otp` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `expire_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otpentry`
--

LOCK TABLES `otpentry` WRITE;
/*!40000 ALTER TABLE `otpentry` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `otpentry` VALUES (7,'hetmanani177@gmail.com','693533','2025-02-27 10:01:25','2025-02-27 10:21:25',0),(10,'bhavydava@gmail.com','802090','2025-02-28 09:30:53','2025-02-28 09:50:53',0);
/*!40000 ALTER TABLE `otpentry` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `otpentry` with 2 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `services` VALUES (1,'Car Rental System','We Provide Car on Rent','car-front',1,'2025-01-29 09:55:58','2025-01-30 09:30:45'),(4,'Another Service','Sample Service','activity',1,'2025-01-31 09:06:15','2025-01-31 09:06:15'),(5,'Samle Service','Demo texthere','person',1,'2025-02-14 09:44:00','2025-02-14 09:44:22');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `services` with 3 row(s)
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
-- Table structure for table `slider`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slidertitle` varchar(64) NOT NULL,
  `description` varchar(256) NOT NULL,
  `photopath` varchar(1024) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `slider` VALUES (2,'Sample1','Demo Slider1 Demo Slider1 Demo Slider1 Demo Slider1 Demo Slider1 Demo Slider1 Demo Slider1 Demo Slider1','sliderimages/12022025034403pm 99110 img2.jpg',1,'2025-02-12 10:02:48','2025-02-17 09:30:25'),(4,'Another  Slider','Another SliderA   nother Slider Another Slider','sliderimages/12022025034538pm 47410 img10.jpg',1,'2025-02-12 10:15:22','2025-02-12 10:15:38');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `slider` with 2 row(s)
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
  `otptime` int(11) NOT NULL,
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
INSERT INTO `smtpconfig` VALUES (1,'mail.prajapatispirit.org','developers@prajapatispirit.org','123@IantRajkot','ssl',465,20,'2025-01-25 09:08:19','2025-02-27 10:00:36');
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
INSERT INTO `socialmedia` VALUES (1,'https://www.facebook.com','https://www.instagram.com','https://www.linkedin.com1','https://www.youtube.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.whatsapp.com?phone=9898989898','https://www.demourl.com','2025-01-28 09:24:02','2025-02-14 09:23:57');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `team` VALUES (7,'Bhavya Dava','Manager','https://www.demourl.com','https://www.demourl.com','https://www.demourl.com','https://www.linkedin.com','teamimages/11022025032544pm 55910 Bhavya Dava img1.jpg',1,'2025-02-11 09:55:44','2025-02-14 09:36:11'),(8,'KEYUR RAMANI','GENERAL MANAGER','https://www.twitter.com','https://www.instagram.com','https://www.facebook.com','https://www.linkedin.com1','teamimages/12022025031935pm 69394 KEYUR RAMANI img2.jpg',1,'2025-02-11 09:55:59','2025-02-14 09:36:10'),(9,'Prince Patel','Manager','https://www.demourl.com','https://www.demourl.com','https://www.demourl.com','https://www.linkedin.com','teamimages/11022025032616pm 51474 Prince Patel img12.jpg',1,'2025-02-11 09:56:16','2025-02-11 09:56:16'),(10,'Bhavin Thakor','Manager','https://www.demourl.com','https://www.demourl.com','https://www.demourl.com','https://www.linkedin.com','teamimages/14022025030528pm 55975 Bhavin Thakor img11.jpg',1,'2025-02-14 09:35:28','2025-02-14 09:35:45');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `team` with 4 row(s)
--

--
-- Table structure for table `users`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photopath` varchar(1024) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `users` VALUES (2,'Bhavya Dava','bhavydava@gmail.com','$2y$10$KOxg8SmCLnZwtqmCWkzFQeBNbVTILQokFaHKK0mF7G5cGj6yLbYHG','9900990099','male','userimages/27688 15022025102628am bhavya@gmail.com img2.jpg',1,'2025-02-15 09:26:28','2025-02-28 09:36:46'),(3,'Het Manani','hetmanani177@gmail.com','$2y$10$GWstcnuWxkohvWHsgNoeru0oNDZcI1ZyXSdPjFlZXyfxF.qMtS.Bi','9900990099','male','userimages/57556 15022025102733am het@gmail.com img10.jpg',1,'2025-02-15 09:27:33','2025-02-28 09:30:29'),(4,'Bhvin Thakor','bhavin@gmail.com','$2y$10$skhydMUusEoKlJufIx6Sce9Y7lJURUzzgKr9P5j1TlevacIaqB1JK','9900990099','male','userimages/81221 15022025104059am bhavin@gmail.com img10.jpg',1,'2025-02-15 09:40:59','2025-02-15 09:40:59');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `users` with 3 row(s)
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

-- Dump completed on: Fri, 28 Feb 2025 15:08:03 +0530
