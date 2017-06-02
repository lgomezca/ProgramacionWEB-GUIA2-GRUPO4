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
-- Table structure for table `tbl_empleados`
--

DROP TABLE IF EXISTS `tbl_empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_empleados` (
  `cedula` varchar(50) NOT NULL DEFAULT '' COMMENT 'Identificacion del empleado',
  `nombre` varchar(200) DEFAULT NULL COMMENT 'Nombre del empleado',
  `cargo` varchar(200) DEFAULT NULL COMMENT 'Cargo del empleado',
  `area` varchar(200) DEFAULT NULL COMMENT 'Area a la que corresponde el empleado',
  `fchIngreso` date DEFAULT NULL COMMENT 'Fecha de ingreso a la compañia',
  `Telefono` varchar(20) DEFAULT NULL COMMENT 'Telefono del empleado',
  `Direccion` varchar(200) DEFAULT NULL COMMENT 'Direccion de residencia',
  `tbl_usuarios_LOGIN` varchar(50) NOT NULL,
  PRIMARY KEY (`cedula`,`tbl_usuarios_LOGIN`),
  KEY `fk_tbl_empleados_tbl_usuarios1_idx` (`tbl_usuarios_LOGIN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_empleados`
--

LOCK TABLES `tbl_empleados` WRITE;
/*!40000 ALTER TABLE `tbl_empleados` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_empleados` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-02  9:37:42
