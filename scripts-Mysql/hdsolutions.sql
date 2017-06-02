CREATE DATABASE  IF NOT EXISTS `hdsolutions` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hdsolutions`;
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
-- Table structure for table `tbl_ciudades`
--

DROP TABLE IF EXISTS `tbl_ciudades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ciudades` (
  `dane` varchar(6) NOT NULL DEFAULT '' COMMENT 'Codigo de la ciudad',
  `Nombre` varchar(200) NOT NULL DEFAULT '' COMMENT 'Nombre de la ciudad',
  PRIMARY KEY (`dane`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ciudades`
--

LOCK TABLES `tbl_ciudades` WRITE;
/*!40000 ALTER TABLE `tbl_ciudades` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_ciudades` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tbl_libretadirecciones`
--

DROP TABLE IF EXISTS `tbl_libretadirecciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_libretadirecciones` (
  `IdContacto` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificacion contacto',
  `Nombre` varchar(200) NOT NULL DEFAULT '' COMMENT 'Nombre del contacto',
  `Apellidos` varchar(200) NOT NULL DEFAULT '' COMMENT 'apellidos',
  `Correo` varchar(200) NOT NULL DEFAULT '' COMMENT 'Correo electronico',
  `TelTrabajo` varchar(45) NOT NULL DEFAULT '' COMMENT 'Telefono del trabajo',
  `TelCasa` varchar(45) NOT NULL DEFAULT '' COMMENT 'Telefono de residencia',
  `Celular` varchar(45) NOT NULL DEFAULT '' COMMENT 'Telefono celular',
  `tpContacto` varchar(200) NOT NULL DEFAULT '' COMMENT 'Grupo al que pertenece',
  PRIMARY KEY (`IdContacto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_libretadirecciones`
--

LOCK TABLES `tbl_libretadirecciones` WRITE;
/*!40000 ALTER TABLE `tbl_libretadirecciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_libretadirecciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_proveedores`
--

DROP TABLE IF EXISTS `tbl_proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_proveedores` (
  `nit` varchar(20) NOT NULL DEFAULT '' COMMENT 'Numero de identificacion de la empresa',
  `Nombre` varchar(200) NOT NULL DEFAULT '' COMMENT 'Nombre del proveedor',
  `Direccion` varchar(200) NOT NULL DEFAULT '' COMMENT 'Direccion oficina ppal',
  `Telefono` varchar(20) NOT NULL DEFAULT '' COMMENT 'Telefono oficina ppal',
  `Contacto` varchar(200) NOT NULL DEFAULT '' COMMENT 'Nombre del contacto',
  `correo` varchar(45) NOT NULL DEFAULT '' COMMENT 'Correo electronico',
  PRIMARY KEY (`nit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_proveedores`
--

LOCK TABLES `tbl_proveedores` WRITE;
/*!40000 ALTER TABLE `tbl_proveedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_proyectos`
--

DROP TABLE IF EXISTS `tbl_proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_proyectos` (
  `Idproyecto` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Numero de proyecto',
  `Nombre` varchar(200) NOT NULL DEFAULT '' COMMENT 'Nombre del proyecto',
  `idCliente` varchar(100) NOT NULL DEFAULT '' COMMENT 'Identificacion del cliente',
  `idEmpleado` varchar(50) NOT NULL DEFAULT '' COMMENT 'Indentificacion de recurso asigando',
  `fchInicio` date NOT NULL DEFAULT '0000-00-00' COMMENT 'Fecha de Inicio',
  PRIMARY KEY (`Idproyecto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_proyectos`
--

LOCK TABLES `tbl_proyectos` WRITE;
/*!40000 ALTER TABLE `tbl_proyectos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuarios` (
  `LOGIN` varchar(50) NOT NULL DEFAULT '' COMMENT 'Cedula del usuario',
  `CLAVE` varchar(20) DEFAULT NULL COMMENT 'clave del usuario',
  `NOMBRE` varchar(200) DEFAULT NULL COMMENT 'Nombre del usuario',
  `ESTADO` tinyint(1) DEFAULT NULL COMMENT 'Estado del usuario Activo - Inactivo',
  `CORREO` varchar(200) DEFAULT NULL COMMENT 'Correo electronico',
  `FECHA` date DEFAULT NULL COMMENT 'Fecha registro',
  PRIMARY KEY (`LOGIN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES ('lcgomez','123','Luis Carlos Gomez',NULL,'lcgomez@gmail.com','2017-05-31'),('admin','123','administrador',NULL,'admin@empresa.com','2017-06-01'),('usuario1','456','usuario de prueba',NULL,'pruebas@hdsolutions.com','2017-06-01');
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-02  9:50:25
