-- MySQL dump 10.13  Distrib 5.5.27, for osx10.6 (i386)
--
-- Host: localhost    Database: casamento
-- ------------------------------------------------------
-- Server version	5.5.27

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(120) DEFAULT NULL,
  `comment` text,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presentes`
--

DROP TABLE IF EXISTS `presentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `thumb_url` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `comment` text,
  `name` varchar(200) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `checked` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presentes`
--

LOCK TABLES `presentes` WRITE;
/*!40000 ALTER TABLE `presentes` DISABLE KEYS */;
INSERT INTO `presentes` VALUES (1,'Toalha de Mesa PrÃ¡tica Firenze Branca 80x80cm - Mehndi','http://www.ricardoeletro.com.br/Produto/Cama-Mesa-Banho/Toalha-de-Mesa/Toalha-de-Mesa-Quadrada/Mehndi/Toalha-de-Mesa-Pratica-Firenze-Branca-80x80cm-Mehndi/2438-2453-2508-222348','http://images.maquinadevendas.com.br/produto/257787_1362266_20120806194628.jpg','http://images.maquinadevendas.com.br/60x60/produto/257787_1362266_20120806194628.jpg',29.90,'teste','Michael',NULL,0),(2,'Jogo Americano 4 Lugares Allegro Porquinho Guloso','http://www.ricardoeletro.com.br/Produto/Cama-Mesa-Banho/Jogo-Americano/Jogo-Americano-2-Lugares/Copa-e-Cia/Kit-2-pecas-Luna-Marron-Copa-Cia/2438-2455-2511-87332; http://www.ricardoeletro.com.br/Produto/Cama-Mesa-Banho/Jogo-Americano/Jogo-Americano-4-Lugar','http://images.maquinadevendas.com.br/produto/97821_171059_20110622092953.jpg','',17.90,'oi','FlÃ¡via',NULL,1);
/*!40000 ALTER TABLE `presentes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-09-04 13:19:26
