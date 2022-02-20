CREATE DATABASE  IF NOT EXISTS `flowers` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `flowers`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: flowers
-- ------------------------------------------------------
-- Server version	8.0.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `boquet_content`
--

DROP TABLE IF EXISTS `boquet_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `boquet_content` (
  `id` int NOT NULL AUTO_INCREMENT,
  `boquet` int NOT NULL,
  `flower` int DEFAULT NULL,
  `element` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_bq` (`boquet`),
  KEY `fk_fl` (`flower`),
  KEY `fk_el` (`element`),
  CONSTRAINT `fk_bq` FOREIGN KEY (`boquet`) REFERENCES `boquets` (`id`),
  CONSTRAINT `fk_el` FOREIGN KEY (`element`) REFERENCES `decor_elements` (`id`),
  CONSTRAINT `fk_fl` FOREIGN KEY (`flower`) REFERENCES `flowers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boquet_content`
--

LOCK TABLES `boquet_content` WRITE;
/*!40000 ALTER TABLE `boquet_content` DISABLE KEYS */;
INSERT INTO `boquet_content` VALUES (1,1,1,1),(2,1,2,2),(3,1,3,3),(4,1,NULL,4),(5,2,4,2),(6,2,3,3),(7,2,2,4),(8,3,6,2),(9,3,2,4),(10,3,7,1),(11,4,2,3),(12,4,5,4),(13,4,6,2),(14,4,NULL,1),(15,5,3,2),(16,5,2,1),(17,5,1,NULL),(18,5,5,NULL),(19,6,2,3),(20,6,3,2),(21,6,4,1),(22,6,5,4),(23,6,1,NULL);
/*!40000 ALTER TABLE `boquet_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boquets`
--

DROP TABLE IF EXISTS `boquets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `boquets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `isNew` tinyint(1) DEFAULT NULL,
  `isHit` tinyint(1) DEFAULT NULL,
  `lenght` varchar(10) DEFAULT NULL,
  `forWho` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boquets`
--

LOCK TABLES `boquets` WRITE;
/*!40000 ALTER TABLE `boquets` DISABLE KEYS */;
INSERT INTO `boquets` VALUES (1,'Букет Нежный',2000,'1.png',1,1,'35см','Девушке'),(2,'Букет Хороший',10000,'2.png',0,1,'30см',NULL),(3,'Букет Кайфовый',100500,'3.png',1,0,'40см','Маме'),(4,'Букет Праздничный',4200,'4.png',1,1,'50см','Бабушке'),(5,'Букет Необычный',980,'5.png',0,0,'45см','Сестре'),(6,'Букет Красивый',2190,'6.png',0,0,'50см',NULL),(10,'Тестовый',9999,'444-1000x1000.jpg',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `boquets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `decor_elements`
--

DROP TABLE IF EXISTS `decor_elements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `decor_elements` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `decor_elements`
--

LOCK TABLES `decor_elements` WRITE;
/*!40000 ALTER TABLE `decor_elements` DISABLE KEYS */;
INSERT INTO `decor_elements` VALUES (1,'Декоративная зелень'),(2,'Лента'),(3,'Вереск'),(4,'Крафт-упаковка');
/*!40000 ALTER TABLE `decor_elements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flowers`
--

DROP TABLE IF EXISTS `flowers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `flowers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flowers`
--

LOCK TABLES `flowers` WRITE;
/*!40000 ALTER TABLE `flowers` DISABLE KEYS */;
INSERT INTO `flowers` VALUES (1,'Голландские роза'),(2,'Хризантема'),(3,'Роза красная'),(4,'Ромашка'),(5,'Красный мак'),(6,'Орхидея'),(7,'Гвоздика');
/*!40000 ALTER TABLE `flowers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `getcart`
--

DROP TABLE IF EXISTS `getcart`;
/*!50001 DROP VIEW IF EXISTS `getcart`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `getcart` AS SELECT 
 1 AS `login`,
 1 AS `name`,
 1 AS `price`,
 1 AS `photo`,
 1 AS `count`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `getfavprods`
--

DROP TABLE IF EXISTS `getfavprods`;
/*!50001 DROP VIEW IF EXISTS `getfavprods`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `getfavprods` AS SELECT 
 1 AS `id`,
 1 AS `userId`,
 1 AS `name`,
 1 AS `price`,
 1 AS `photo`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `getorders`
--

DROP TABLE IF EXISTS `getorders`;
/*!50001 DROP VIEW IF EXISTS `getorders`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `getorders` AS SELECT 
 1 AS `id`,
 1 AS `name`,
 1 AS `phone`,
 1 AS `email`,
 1 AS `address`,
 1 AS `flat`,
 1 AS `date`,
 1 AS `startTime`,
 1 AS `endTime`,
 1 AS `isAnonym`,
 1 AS `recName`,
 1 AS `recPhone`,
 1 AS `payment`,
 1 AS `amount`,
 1 AS `userName`,
 1 AS `status`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `getproductcontent`
--

DROP TABLE IF EXISTS `getproductcontent`;
/*!50001 DROP VIEW IF EXISTS `getproductcontent`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `getproductcontent` AS SELECT 
 1 AS `id`,
 1 AS `flower`,
 1 AS `decor`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `newsletter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `client_name` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` VALUES (1,'test','test@test'),(2,'Дмитрий','dmitry@mail.ru'),(3,'ывпывпвыпывп','sdgsdgsdg@dsgsdgs');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `flat` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `startTime` varchar(10) DEFAULT NULL,
  `endTime` varchar(10) DEFAULT NULL,
  `isAnonym` varchar(3) DEFAULT NULL,
  `recName` varchar(30) DEFAULT NULL,
  `recPhone` varchar(20) DEFAULT NULL,
  `payment` varchar(30) DEFAULT NULL,
  `amount` int NOT NULL,
  `userId` int DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user` (`userId`),
  CONSTRAINT `fk_user` FOREIGN KEY (`userId`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (2,'Тестовый заказ1','+7 ( 923 ) 6896527','leseja1001@douwx.com','Каво','Непонел','2022-03-12','04:14','','Нет','','','По карте',33550,1,'Обработан'),(3,'sdgsdg','sdgsdgs','sdgsdg','sdgsdgddg','sdgsg','2022-02-23','','','Да','sdgsgsg','sdgsdgs','По карте',33550,1,'Обработан');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phone_queries`
--

DROP TABLE IF EXISTS `phone_queries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `phone_queries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `clientName` varchar(25) NOT NULL,
  `clientPhone` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phone_queries`
--

LOCK TABLES `phone_queries` WRITE;
/*!40000 ALTER TABLE `phone_queries` DISABLE KEYS */;
INSERT INTO `phone_queries` VALUES (1,'тнст','нварвр','2022-02-17','Обработан'),(2,'36346ы343впвпып','ывпывпывпып','2022-02-17','Не обработан');
/*!40000 ALTER TABLE `phone_queries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_cart`
--

DROP TABLE IF EXISTS `user_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `boquet` int NOT NULL,
  `count` int NOT NULL,
  `user` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cart_bq` (`boquet`),
  KEY `fk_cart_user` (`user`),
  CONSTRAINT `fk_cart_bq` FOREIGN KEY (`boquet`) REFERENCES `boquets` (`id`),
  CONSTRAINT `fk_cart_user` FOREIGN KEY (`user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_cart`
--

LOCK TABLES `user_cart` WRITE;
/*!40000 ALTER TABLE `user_cart` DISABLE KEYS */;
INSERT INTO `user_cart` VALUES (5,1,1,1),(6,3,1,1),(7,3,1,1),(8,3,1,1),(9,1,1,1);
/*!40000 ALTER TABLE `user_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_fav`
--

DROP TABLE IF EXISTS `user_fav`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_fav` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` int NOT NULL,
  `boquet` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_fav` (`user`),
  KEY `fk_bq_fav` (`boquet`),
  CONSTRAINT `fk_bq_fav` FOREIGN KEY (`boquet`) REFERENCES `boquets` (`id`),
  CONSTRAINT `fk_user_fav` FOREIGN KEY (`user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_fav`
--

LOCK TABLES `user_fav` WRITE;
/*!40000 ALTER TABLE `user_fav` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_fav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(50) NOT NULL,
  `access` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'customer','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','Покупатель',NULL),(2,'admin','8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918','Администратор','admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `getcart`
--

/*!50001 DROP VIEW IF EXISTS `getcart`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER */
/*!50001 VIEW `getcart` (`login`,`name`,`price`,`photo`,`count`) AS select `u`.`login` AS `login`,`b`.`name` AS `name`,(`b`.`price` * `uc`.`count`) AS `b.price * uc.count`,`b`.`photo` AS `photo`,`uc`.`count` AS `count` from ((`user_cart` `uc` join `boquets` `b` on((`uc`.`boquet` = `b`.`id`))) join `users` `u` on((`uc`.`user` = `u`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `getfavprods`
--

/*!50001 DROP VIEW IF EXISTS `getfavprods`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER */
/*!50001 VIEW `getfavprods` (`id`,`userId`,`name`,`price`,`photo`) AS select `b`.`id` AS `id`,`uf`.`user` AS `user`,`b`.`name` AS `name`,`b`.`price` AS `price`,`b`.`photo` AS `photo` from (`user_fav` `uf` join `boquets` `b` on((`uf`.`boquet` = `b`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `getorders`
--

/*!50001 DROP VIEW IF EXISTS `getorders`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER */
/*!50001 VIEW `getorders` (`id`,`name`,`phone`,`email`,`address`,`flat`,`date`,`startTime`,`endTime`,`isAnonym`,`recName`,`recPhone`,`payment`,`amount`,`userName`,`status`) AS select `o`.`id` AS `id`,`o`.`name` AS `name`,`o`.`phone` AS `phone`,`o`.`email` AS `email`,`o`.`address` AS `address`,`o`.`flat` AS `flat`,`o`.`date` AS `date`,`o`.`startTime` AS `startTime`,`o`.`endTime` AS `endTime`,`o`.`isAnonym` AS `isAnonym`,`o`.`recName` AS `recName`,`o`.`recPhone` AS `recPhone`,`o`.`payment` AS `payment`,`o`.`amount` AS `amount`,`u`.`name` AS `name`,`o`.`status` AS `status` from (`orders` `o` join `users` `u` on((`o`.`userId` = `u`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `getproductcontent`
--

/*!50001 DROP VIEW IF EXISTS `getproductcontent`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER */
/*!50001 VIEW `getproductcontent` (`id`,`flower`,`decor`) AS select `b`.`id` AS `id`,`f`.`name` AS `name`,`de`.`name` AS `name` from (((`boquet_content` `bc` join `boquets` `b` on((`bc`.`boquet` = `b`.`id`))) join `flowers` `f` on((`bc`.`flower` = `f`.`id`))) join `decor_elements` `de` on((`bc`.`element` = `de`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-21  0:01:24
