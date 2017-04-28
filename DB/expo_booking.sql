CREATE DATABASE  IF NOT EXISTS `expo_booking` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `expo_booking`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: expo_booking
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(45) DEFAULT NULL,
  `company_admin_name` varchar(200) DEFAULT NULL,
  `company_email` varchar(200) DEFAULT NULL,
  `company_phone` varchar(45) DEFAULT NULL,
  `company_description` varchar(200) DEFAULT NULL,
  `logo_url` varchar(200) DEFAULT NULL,
  `doc_url` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'Company 1',NULL,'company1@gmail.com','+254707463571','First awesome company!','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 17:23:08','2017-04-27 22:35:38'),(2,'Company 2',NULL,'company2@gmail.com','+254707463572','Second awesome company!','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 17:23:08','2017-04-27 22:35:38'),(3,'Karsan company','Richard Richard','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:15:02','2017-04-27 22:35:38'),(4,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:15:21','2017-04-27 22:35:38'),(5,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:19:16','2017-04-27 22:35:38'),(6,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:19:37','2017-04-27 22:35:38'),(7,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:26:32','2017-04-27 22:35:38'),(8,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:29:07','2017-04-27 22:35:38'),(9,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:29:26','2017-04-27 22:35:38'),(10,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:30:27','2017-04-27 22:35:38'),(11,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:30:44','2017-04-27 22:35:38'),(12,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:30:55','2017-04-27 22:35:38'),(13,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:31:25','2017-04-27 22:35:38'),(14,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:31:50','2017-04-27 22:35:38'),(15,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:32:11','2017-04-27 22:35:38'),(16,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:35:09','2017-04-27 22:35:38'),(17,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_112.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services2.docx','2017-04-27 22:35:38','2017-04-27 22:35:38'),(18,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_113.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services3.docx','2017-04-27 22:36:16','2017-04-27 22:36:17'),(19,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_114.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services4.docx','2017-04-27 22:36:26','2017-04-27 22:36:26'),(20,'Karsan company','Richard Karsan','karsanrichard@gmail.com','707463571','Halafu sasa','http://localhost/expo_booking/uploads/logos/IMAG0232_1_115.jpg','http://localhost/expo_booking/uploads/logos/Maisha_Meds_Contract_for_Provision_of_Consultancy_Services5.docx','2017-04-27 22:42:12','2017-04-27 22:42:12'),(21,'Third Test','Admin Istrator','thirdtest@gmail.com','+254717171717','Sample upload\r\n','http://localhost/expo_booking/uploads/logos/659971.jpg','http://localhost/expo_booking/uploads/logos/NDA.doc','2017-04-27 22:44:53','2017-04-27 22:44:53'),(22,'Karsan company 2','Richard Karsan','karsanrichard@gmail.com','707463571','qwerty','http://localhost/expo_booking/uploads/logos/4468.jpg','http://localhost/expo_booking/uploads/logos/NDA1.doc','2017-04-27 22:54:46','2017-04-27 22:54:46'),(23,'Karsan company 2','Richard Karsan','karsanrichard@gmail.com','707463571','qwerty','http://localhost/expo_booking/uploads/logos/44681.jpg','http://localhost/expo_booking/uploads/logos/NDA2.doc','2017-04-27 22:55:17','2017-04-27 22:55:17');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(200) DEFAULT NULL,
  `event_description` varchar(200) DEFAULT NULL,
  `event_date` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (1,'Event 1','This is a test event','2017-05-02','2017-04-27 07:04:22','2017-04-27 07:04:22'),(2,'Event 2','This is a second test event','2017-05-10','2017-04-27 07:04:22','2017-04-27 07:04:22');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_booking`
--

DROP TABLE IF EXISTS `event_booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_booking` (
  `event_booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `stand_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`event_booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_booking`
--

LOCK TABLES `event_booking` WRITE;
/*!40000 ALTER TABLE `event_booking` DISABLE KEYS */;
INSERT INTO `event_booking` VALUES (1,1,1,1,'2017-04-27 17:26:22','2017-04-27 17:26:22'),(2,1,20,2,'2017-04-27 22:42:12','2017-04-27 22:42:12'),(3,1,21,3,'2017-04-27 22:44:53','2017-04-27 22:44:53'),(4,2,22,8,'2017-04-27 22:54:46','2017-04-27 22:54:46'),(5,2,23,8,'2017-04-27 22:55:17','2017-04-27 22:55:17');
/*!40000 ALTER TABLE `event_booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` varchar(45) DEFAULT NULL,
  `longitude` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'41.8919300','12.5113300','Italy',1,'2017-04-27 07:05:30','2017-04-27 07:05:30'),(2,'40.689686','21.454325','Greece',2,'2017-04-27 07:05:30','2017-04-27 07:05:30');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stand`
--

DROP TABLE IF EXISTS `stand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stand` (
  `stand_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `stand_number` int(11) DEFAULT NULL,
  `stand_image_url` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `booking_status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`stand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stand`
--

LOCK TABLES `stand` WRITE;
/*!40000 ALTER TABLE `stand` DISABLE KEYS */;
INSERT INTO `stand` VALUES (1,1,1,'http://localhost/expo_booking/uploads/stands/stand_1.jpg',1000,2,'2017-04-27 08:10:33','2017-04-27 20:20:00'),(2,1,2,'http://localhost/expo_booking/uploads/stands/stand_2.jpg',2000,2,'2017-04-27 08:10:33','2017-04-27 22:42:13'),(3,1,3,'http://localhost/expo_booking/uploads/stands/stand_3.jpg',3000,2,'2017-04-27 08:10:33','2017-04-27 22:44:53'),(4,1,4,'http://localhost/expo_booking/uploads/stands/stand_4.jpg',4000,1,'2017-04-27 08:10:33','2017-04-27 20:20:01'),(5,1,5,'http://localhost/expo_booking/uploads/stands/stand_5.jpg',5000,1,'2017-04-27 08:10:33','2017-04-27 20:20:01'),(6,1,6,'http://localhost/expo_booking/uploads/stands/stand_6.jpg',6000,1,'2017-04-27 08:10:33','2017-04-27 20:20:01'),(7,2,1,'http://localhost/expo_booking/uploads/stands/stand_1.jpg',1000,1,'2017-04-27 08:10:33','2017-04-27 22:54:11'),(8,2,2,'http://localhost/expo_booking/uploads/stands/stand_2.jpg',2000,2,'2017-04-27 08:10:33','2017-04-27 22:54:46'),(9,2,3,'http://localhost/expo_booking/uploads/stands/stand_3.jpg',3000,1,'2017-04-27 08:10:33','2017-04-27 22:54:11'),(10,2,4,'http://localhost/expo_booking/uploads/stands/stand_4.jpg',4000,1,'2017-04-27 08:10:33','2017-04-27 20:20:01'),(11,2,5,'http://localhost/expo_booking/uploads/stands/stand_5.jpg',5000,1,'2017-04-27 08:10:33','2017-04-27 20:20:01'),(12,2,6,'http://localhost/expo_booking/uploads/stands/stand_6.jpg',6000,1,'2017-04-27 08:10:33','2017-04-27 20:20:01');
/*!40000 ALTER TABLE `stand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'expo_booking'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-28  3:51:10
