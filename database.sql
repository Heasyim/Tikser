-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: tikser
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `artis`
--

DROP TABLE IF EXISTS `artis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artis` (
  `noartis` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`noartis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artis`
--

LOCK TABLES `artis` WRITE;
/*!40000 ALTER TABLE `artis` DISABLE KEYS */;
INSERT INTO `artis` VALUES (21134,'Coldplay','Assets\\coldplay.png'),(21135,'Radwimps','Assets\\radwimps.png'),(21136,'The Weeknd','Assets\\the-weekend.png');
/*!40000 ALTER TABLE `artis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenistiket`
--

DROP TABLE IF EXISTS `jenistiket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenistiket` (
  `category` varchar(255) NOT NULL,
  `hargaTiket` int(20) NOT NULL,
  `tiketTersedia` varchar(255) NOT NULL,
  `denahLokasi` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  PRIMARY KEY (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenistiket`
--

LOCK TABLES `jenistiket` WRITE;
/*!40000 ALTER TABLE `jenistiket` DISABLE KEYS */;
INSERT INTO `jenistiket` VALUES ('Ascendant',10000000,'5','Assets\\cat\\3.png','Assets\\background\\3.png'),('Bronze',3000000,'15','Assets\\cat\\8.png','Assets\\background\\8.png'),('Diamond',9000000,'3','Assets\\cat\\4.png','Assets\\background\\4.png'),('Gold',7000000,'18','Assets\\cat\\6.png','Assets\\background\\6.png'),('Immortal',10500000,'2','Assets\\cat\\2.png','Assets\\background\\2.png'),('Iron',1000000,'25','Assets\\cat\\9.png','Assets\\background\\9.png'),('Platinum',8000000,'5','Assets\\cat\\5.png','Assets\\background\\5.png'),('Radiant',11000000,'2','Assets\\cat\\1.png','Assets\\background\\1.png'),('Silver',5000000,'12','Assets\\cat\\7.png','Assets\\background\\7.png');
/*!40000 ALTER TABLE `jenistiket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komentar` (
  `nama` varchar(255) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `komentar`
--

LOCK TABLES `komentar` WRITE;
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
INSERT INTO `komentar` VALUES ('Freya Jaya','123123','2023-06-13');
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `konser`
--

DROP TABLE IF EXISTS `konser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `konser` (
  `nokonser` varchar(255) NOT NULL,
  `noartis` int(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`nokonser`),
  KEY `noartis` (`noartis`),
  CONSTRAINT `konser_ibfk_1` FOREIGN KEY (`noartis`) REFERENCES `artis` (`noartis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `konser`
--

LOCK TABLES `konser` WRITE;
/*!40000 ALTER TABLE `konser` DISABLE KEYS */;
INSERT INTO `konser` VALUES ('1001',21134,'Gelora Bung Karno, Jakarta Pusat','15 November 2023','Assets\\Coldplay-Konser.png'),('2002',21135,'Basket Hall GBK, Jakarta Pusat','30 July 2023','Assets\\Radwimps-Konser.png'),('3003',21136,'Tenis Indoor GBK, Jakarta Pusat','17 December 2023','Assets\\The Weeknd-Konser.png');
/*!40000 ALTER TABLE `konser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembayaran`
--

DROP TABLE IF EXISTS `pembayaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembayaran` (
  `notiket` varchar(255) NOT NULL,
  `idUser` int(255) NOT NULL,
  `jumlahtiket` int(10) NOT NULL,
  `hargatotal` int(255) NOT NULL,
  PRIMARY KEY (`notiket`),
  KEY `idpembeli` (`idUser`),
  CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`notiket`) REFERENCES `tiket` (`notiket`),
  CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembayaran`
--

LOCK TABLES `pembayaran` WRITE;
/*!40000 ALTER TABLE `pembayaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembayaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `idUser` int(10) NOT NULL,
  `foto` varchar(255) NOT NULL,
  KEY `idUser` (`idUser`),
  CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (2147483647,'Assets\\Profile\\Profile1.jpg');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `select_tiket`
--

DROP TABLE IF EXISTS `select_tiket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `select_tiket` (
  `category` varchar(255) NOT NULL,
  `jumlahTiket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `select_tiket`
--

LOCK TABLES `select_tiket` WRITE;
/*!40000 ALTER TABLE `select_tiket` DISABLE KEYS */;
/*!40000 ALTER TABLE `select_tiket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiket`
--

DROP TABLE IF EXISTS `tiket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tiket` (
  `notiket` varchar(255) NOT NULL,
  `nokonser` varchar(255) NOT NULL,
  `noartis` int(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `hargatiket` int(255) NOT NULL,
  PRIMARY KEY (`notiket`),
  KEY `test` (`noartis`),
  KEY `nokonser` (`nokonser`),
  KEY `category` (`category`),
  CONSTRAINT `test` FOREIGN KEY (`noartis`) REFERENCES `artis` (`noartis`),
  CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`nokonser`) REFERENCES `konser` (`nokonser`),
  CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`category`) REFERENCES `jenistiket` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiket`
--

LOCK TABLES `tiket` WRITE;
/*!40000 ALTER TABLE `tiket` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `idUser` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (852750994,'Helmi Hasyim','123@123','$2y$10$zLzCUwxX.aPiLRNn0CgDLOXt/Vp6pUodtgZQWDv5lqpnaQda0rqEm'),(1303015211,'rafly purnama','raflypurnama@gmail.com','$2y$10$E2yqSB9kzli53yEHJOHhDO3F47CSSUWsaNOFKdnAHENKdY00qANsy'),(2147483647,'Freya Jaya','freya@gmail.com','$2y$10$1z2bRAPGSWh1JR2d7VrGE.f8cJX2AuE.KGUWV7QvNJ2jKxVLXQOU6');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-13 21:09:11
