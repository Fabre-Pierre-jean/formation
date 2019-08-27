-- MariaDB dump 10.17  Distrib 10.4.6-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: pokemon_tp
-- ------------------------------------------------------
-- Server version	10.4.6-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `attack`
--

DROP TABLE IF EXISTS `attack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attack` (
  `attack_id` int(11) NOT NULL AUTO_INCREMENT,
  `attack_name` varchar(79) NOT NULL,
  `damages` smallint(6) DEFAULT NULL,
  `attack_accuracy` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`attack_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attack`
--

LOCK TABLES `attack` WRITE;
/*!40000 ALTER TABLE `attack` DISABLE KEYS */;
INSERT INTO `attack` VALUES (2,'karate-chop',25,100),(3,'double-slap',10,85),(4,'comet-punch',15,85),(5,'mega-punch',20,85),(6,'pay-day',20,100),(7,'fire-punch',15,100),(8,'ice-punch',15,100),(9,'thunder-punch',15,100),(10,'scratch',35,100),(11,'vice-grip',30,100),(12,'guillotine',5,30),(13,'razor-wind',10,100),(14,'swords-dance',20,30),(15,'cut',30,95);
/*!40000 ALTER TABLE `attack` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `join_attack_pokemon`
--

DROP TABLE IF EXISTS `join_attack_pokemon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `join_attack_pokemon` (
  `fk_attack_id` int(11) DEFAULT NULL,
  `fk_pok_id` int(11) DEFAULT NULL,
  KEY `fk_attack_id` (`fk_attack_id`),
  KEY `fk_pok_id` (`fk_pok_id`),
  CONSTRAINT `join_attack_pokemon_ibfk_1` FOREIGN KEY (`fk_attack_id`) REFERENCES `attack` (`attack_id`),
  CONSTRAINT `join_attack_pokemon_ibfk_2` FOREIGN KEY (`fk_pok_id`) REFERENCES `pokemon` (`pok_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `join_attack_pokemon`
--

LOCK TABLES `join_attack_pokemon` WRITE;
/*!40000 ALTER TABLE `join_attack_pokemon` DISABLE KEYS */;
INSERT INTO `join_attack_pokemon` VALUES (2,1),(3,1),(2,2),(3,2),(4,2),(2,3),(3,3),(4,3),(5,3),(5,4),(6,4),(5,5),(6,5),(7,5),(5,6),(6,6),(7,6),(8,6),(8,7),(9,7),(8,8),(9,8),(9,8),(8,9),(9,9),(9,9),(10,9),(11,10),(12,10),(11,11),(12,11),(13,11),(13,12),(12,12),(13,12),(14,12),(15,13),(14,13),(12,14),(13,14),(15,14),(12,15),(13,15),(15,15),(2,15),(10,16),(4,16),(10,17),(4,17),(5,17),(10,18),(4,18),(5,18),(6,18),(8,19),(6,19),(8,20),(6,20),(9,20),(8,21),(6,21),(9,21),(12,21),(8,22),(6,22),(14,22),(8,23),(6,23),(14,23),(12,23);
/*!40000 ALTER TABLE `join_attack_pokemon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `join_users_pokemon`
--

DROP TABLE IF EXISTS `join_users_pokemon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `join_users_pokemon` (
  `fk_id_user` int(11) DEFAULT NULL,
  `fk_pok_id` int(11) DEFAULT NULL,
  KEY `fk_id_user` (`fk_id_user`),
  KEY `fk_pok_id` (`fk_pok_id`),
  CONSTRAINT `join_users_pokemon_ibfk_1` FOREIGN KEY (`fk_id_user`) REFERENCES `users` (`id`),
  CONSTRAINT `join_users_pokemon_ibfk_2` FOREIGN KEY (`fk_pok_id`) REFERENCES `pokemon` (`pok_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `join_users_pokemon`
--

LOCK TABLES `join_users_pokemon` WRITE;
/*!40000 ALTER TABLE `join_users_pokemon` DISABLE KEYS */;
/*!40000 ALTER TABLE `join_users_pokemon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pokemon`
--

DROP TABLE IF EXISTS `pokemon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pokemon` (
  `pok_id` int(11) NOT NULL AUTO_INCREMENT,
  `pok_name` varchar(79) NOT NULL,
  `pok_xp` int(11) DEFAULT NULL,
  `evolution` int(11) DEFAULT NULL,
  `urlimage` varchar(2083) DEFAULT NULL,
  `vie_base` int(11) NOT NULL,
  PRIMARY KEY (`pok_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pokemon`
--

LOCK TABLES `pokemon` WRITE;
/*!40000 ALTER TABLE `pokemon` DISABLE KEYS */;
INSERT INTO `pokemon` VALUES (1,'axew',0,2,'https://cdn-gulli.jnsmedia.fr/var/jeunesse/storage/images/canalj/la-tele/dessins-animes/pokemon/personnages/pokemons-saisons-14-16/coupenotte/24008295-4-fre-FR/Coupenotte_image_player_432_324.jpg',100),(2,'fraxure',0,3,'https://www.pokepedia.fr/images/thumb/7/7d/Incisache-NB.png/250px-Incisache-NB.png',125),(3,'haxorus',0,NULL,'https://www.pokepedia.fr/images/thumb/0/03/Tranchodon-NB.png/250px-Tranchodon-NB.png',150),(4,'piplup',0,5,'https://raw.githubusercontent.com/iNoSec2/pokemon/dev/images/pokemons/2tiplouf_front.gif',100),(5,'prinplup',0,6,'https://raw.githubusercontent.com/iNoSec2/pokemon/dev/images/pokemons/3mastouffe_front.gif',125),(6,'empoleon',0,NULL,'https://raw.githubusercontent.com/iNoSec2/pokemon/dev/images/pokemons/3ponchien_front.gif',150),(7,'lillipup',0,8,'https://raw.githubusercontent.com/iNoSec2/pokemon/dev/images/pokemons/3ponchiot_front.gif',100),(8,'herdier',0,9,NULL,125),(9,'stoutland',0,NULL,NULL,150),(10,'sandile',0,11,NULL,100),(11,'krokorok',0,12,NULL,125),(12,'krookodile',0,NULL,NULL,150),(13,'shinx',0,14,NULL,100),(14,'luxio',0,15,NULL,125),(15,'luxray',0,NULL,NULL,150),(16,'tepig',0,17,NULL,100),(17,'pignite',0,18,NULL,125),(18,'emboar',0,NULL,NULL,150),(19,'cranidos',0,20,NULL,100),(20,'rampardos',0,NULL,NULL,125),(21,'turtwig',0,22,NULL,100),(22,'grotle',0,23,NULL,125),(23,'torterra',0,NULL,NULL,150);
/*!40000 ALTER TABLE `pokemon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-29 10:32:09
