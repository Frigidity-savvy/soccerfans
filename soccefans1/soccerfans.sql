-- MySQL dump 10.13  Distrib 5.7.21, for Win64 (x86_64)
--
-- Host: localhost    Database: soccerfans
-- ------------------------------------------------------
-- Server version	5.7.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `essay`
--

DROP TABLE IF EXISTS `essay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `essay` (
  `essay_id` int(8) NOT NULL,
  `essay_name` char(20) NOT NULL,
  `author_id` int(5) NOT NULL,
  PRIMARY KEY (`essay_id`),
  KEY `ess_author` (`author_id`),
  CONSTRAINT `ess_author` FOREIGN KEY (`author_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `essay`
--

LOCK TABLES `essay` WRITE;
/*!40000 ALTER TABLE `essay` DISABLE KEYS */;
INSERT INTO `essay` VALUES (20000,'Jack',10001),(20001,'Jack2',10001),(30000,'Jack4',10001);
/*!40000 ALTER TABLE `essay` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger tri_essayInsert after insert
on essay for each row
begin
declare c integer;
set c = (select count_essay from users where users.ID=new.author_id);
update users set count_essay = c + 1 where users.ID = new.author_id;
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player` (
  `p_id` char(10) NOT NULL,
  `p_name` char(10) NOT NULL,
  `p_team` char(10) NOT NULL,
  `salary` int(6) DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `p_name` (`p_name`),
  KEY `fk_player` (`p_team`),
  CONSTRAINT `fk_player` FOREIGN KEY (`p_team`) REFERENCES `team` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player`
--

LOCK TABLES `player` WRITE;
/*!40000 ALTER TABLE `player` DISABLE KEYS */;
INSERT INTO `player` VALUES ('001','Bale','Tottenham',90000);
/*!40000 ALTER TABLE `player` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `name` char(10) NOT NULL,
  `league` char(10) NOT NULL,
  `avg_increase_wage` int(6) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES ('Arsenal','England',50000),('Burnley','England',50000),('Chelsea','England',50000),('Everton','England',50000),('Leichester','England',50000),('Liverpool','England',50000),('ManCity','England',50000),('ManUnited','England',50000),('Newcastle','England',50000),('Tottenham','England',100000);
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `ID` int(5) NOT NULL,
  `Niki_name` char(20) NOT NULL,
  `AGE` int(3) NOT NULL,
  `like_team` char(10) NOT NULL,
  `like_player` char(10) NOT NULL,
  `count_essay` int(6) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_users` (`like_team`),
  KEY `fk_users1` (`like_player`),
  CONSTRAINT `fk_users` FOREIGN KEY (`like_team`) REFERENCES `team` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_users1` FOREIGN KEY (`like_player`) REFERENCES `player` (`p_name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (10001,'Shirley',19,'Chelsea','Bale',3);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `users_team`
--

DROP TABLE IF EXISTS `users_team`;
/*!50001 DROP VIEW IF EXISTS `users_team`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `users_team` AS SELECT 
 1 AS `ID`,
 1 AS `Niki_name`,
 1 AS `like_team`,
 1 AS `league`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `users_team`
--

/*!50001 DROP VIEW IF EXISTS `users_team`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `users_team` AS select `users`.`ID` AS `ID`,`users`.`Niki_name` AS `Niki_name`,`users`.`like_team` AS `like_team`,`team`.`league` AS `league` from (`users` join `team`) where (`users`.`like_team` = `team`.`name`) */;
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

-- Dump completed on 2018-05-25 16:42:37
