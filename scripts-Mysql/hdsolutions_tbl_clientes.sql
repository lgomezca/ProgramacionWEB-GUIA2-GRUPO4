-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: hdsolutions
-- ------------------------------------------------------
-- Server version	5.7.13-log

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
-- Table structure for table `tbl_clientes`
--

DROP TABLE IF EXISTS `tbl_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_clientes` (
  `IDCLIENTE` varchar(100) NOT NULL,
  `NOMBRE` varchar(200) DEFAULT NULL,
  `DIRECCION` varchar(200) DEFAULT NULL,
  `CIUDAD` varchar(6) DEFAULT NULL,
  `TELEFONO` varchar(20) DEFAULT NULL,
  `CORREO` varchar(200) DEFAULT NULL,
  `COMENTARIOS` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IDCLIENTE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_clientes`
--

LOCK TABLES `tbl_clientes` WRITE;
/*!40000 ALTER TABLE `tbl_clientes` DISABLE KEYS */;
INSERT INTO `tbl_clientes` VALUES ('2222222','Luis Carlos gomez',NULL,NULL,'3202617678','lcgomez@gmail.com','aaaaaaaaaaaaaaaaaaaaaaa '),('2355666','pedro perez',NULL,NULL,'3145696333','pperez@gmail.com','                       pruenas'),('123125555','Ana Marin',NULL,NULL,'45655222','amarin@gmail.com','Interesada en atencion de soporte         '),('12312123','juan diaz',NULL,NULL,'45688888','jdiaz@oxxo.com','Interesado en conocer las soluciones en recaudos              '),('69966666','Sara Corrales',NULL,NULL,'1256369666','scorrales@fenalco.com','Interesada en capacitaciones                       '),('79552522','Sebastian Galindo',NULL,NULL,'458966666','sgalindo@dff.com','Agradezco envio de informacion                       ');
/*!40000 ALTER TABLE `tbl_clientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-02  9:37:41
