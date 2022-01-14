CREATE DATABASE  IF NOT EXISTS `rvt` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `rvt`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: rvt
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (5,'Ellis','Philipeau','Devbug','ephilipeau0@gov.uk','09075591068','33 Ridge Oak Place','2022-01-14 11:44:36','2022-01-14 11:44:36'),(6,'Carine','Parcell','Gabvine','cparcell1@1688.com','09765758597','30154 Basil Road','2022-01-14 11:45:14','2022-01-14 11:45:14'),(7,'Terrijo','Prestland','Realbridge','tprestland2@archive.org','03758439928','54 Mitchell Court','2022-01-14 11:45:40','2022-01-14 11:45:40'),(8,'Cathee','Glenfield','Kaymbo','cglenfield3@npr.org','09168126902','06 Valley Edge Alley','2022-01-14 11:46:16','2022-01-14 11:46:16'),(9,'Joanna','Shergold','Gigashots','jshergold4@youtube.com','09417731401','9 Hanover Court','2022-01-14 11:46:48','2022-01-14 11:46:48'),(10,'Loria','Kinney','Kanoodle','lkinney5@cpanel.net','09356096751','02 Orin Street','2022-01-14 11:47:14','2022-01-14 11:47:14'),(11,'Gillian','Vasiliu','Devify','gvasiliu6@furl.net','09443644576','922 Cherokee Way','2022-01-14 11:47:36','2022-01-14 14:25:47'),(12,'Jo','Shepton','Thoughtbeat','jshepton7@moonfruit.com','09256699892','9 Ramsey Avenue','2022-01-14 11:48:01','2022-01-14 14:26:25'),(13,'Agneta','Ivashkov','Oozz','aivashkov8@latimes.com','09459211740','16 Wayridge Terrace','2022-01-14 11:48:37','2022-01-14 11:48:37'),(14,'Say','Archbell','Gigashots','sarchbell9@jigsy.com','09021449876','7294 Sloan Avenue','2022-01-14 11:49:18','2022-01-14 11:49:18'),(15,'Lin','Niess','Blogtags','lniessa@free.fr','09928587146','366 Haas Place','2022-01-14 11:49:46','2022-01-14 11:49:46'),(16,'Sylvan','Boteman','Rhyzio','sbotemanb@51.la','09232887078','5 Raven Alley','2022-01-14 11:50:16','2022-01-14 11:50:16'),(17,'Sisile','Bendix','Minyx','sbendixc@dyndns.org','09622189904','56059 Northport Crossing','2022-01-14 11:50:44','2022-01-14 14:26:36'),(18,'Katrinka','Hartshorn','Rhynoodle','khartshornd@w3.org','09389695708','9 Village Green Crossing','2022-01-14 11:51:10','2022-01-14 11:51:10'),(19,'Dinnie','Cooley','Devcast','dcooleye@php.net','09076919306','14 Banding Pass','2022-01-14 11:51:34','2022-01-14 14:25:59'),(20,'Myron','Marlon','Cogidoo','mmarlonf@eepurl.com','09487853135','0 Hovde Point','2022-01-14 11:52:01','2022-01-14 11:52:01'),(21,'Ilyssa','Lawles','Linktype','ilawlesg@webs.com','09165621419','512 Carey Court','2022-01-14 11:52:24','2022-01-14 11:52:24'),(22,'Clementina','Sey','Bluezoom','cseyh@pen.io','09181039150','1 Chinook Road','2022-01-14 11:52:49','2022-01-14 11:52:49'),(23,'Jessey','Heal','Kamba','jheali@cafepress.com','09702282009','0007 Muir Road','2022-01-14 11:53:12','2022-01-14 14:26:12'),(24,'Angelica','Iggulden','Kanoodle','aigguldenj@youtu.be','09753334425','71809 Warbler Alley','2022-01-14 11:53:48','2022-01-14 11:53:48'),(25,'Seline','Scrange','Jabbercube','sscrangek@mediafire.com','09773418103','3077 Dapin Lane','2022-01-14 11:54:13','2022-01-14 11:54:13'),(26,'Cornell','Joffe','Skinix','cjoffel@twitpic.com','09405665731','9735 Porter Way','2022-01-14 11:54:37','2022-01-14 11:54:37'),(27,'Harriett','Weeden','Youspan','hweedenm@prnewswire.com','09074935458','2 Washington Avenue','2022-01-14 11:55:01','2022-01-14 11:55:01'),(28,'Rey','Sanches','Topicstorm','rsanchesn@icio.us','09751696666','921 Jenifer Drive','2022-01-14 11:55:28','2022-01-14 11:55:28'),(29,'Lissi','Pagon','Voomm','lpagono@ihg.com','09444482608','43 Morning Point','2022-01-14 11:55:55','2022-01-14 11:55:55');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_description` varchar(5000) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `srp` float NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`),
  KEY `supplier_id_idx` (`supplier_id`),
  CONSTRAINT `supplier_id` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (12,'DOCUCENTRE S2110','Office Printer / Scanner / Copier',8,'Part No: TL200661 \r\n\"A3 Mono MFD Copy-Print-Colour Scan\r\n\"\r\n21ppm, Network\r\nDADF Capacity 110 sheets\r\nStandard tray one 250 sheets with bypass tray 100 sheets\r\n','18',38995,'61e0f504e601a4.04387988.jpg','2022-01-14 11:59:00','2022-01-14 11:59:00'),(13,'DOCUCENTRE S2320','Office Printer / Scanner / Copier',8,'Part No: TL200620\r\n\"A3 Mono MFD Copy-Print-Colour Scan\r\n\"\r\n23ppm, Network\r\nDADF Capacity 110 sheets\r\nStandard tray one 250 sheets with bypass tray 100 sheet\r\n','20',52880,'61e0f5621ceb83.80175182.png','2022-01-14 12:00:34','2022-01-14 12:00:34'),(14,'ApeosPort 2560 (MONILITH 2)','Office Printer / Scanner / Copier',8,'Part No: TC101493\r\nA3 Mono MFD Copy-Print\r\n25ppm Memory :4GB  1200x1200dpi\r\n25cpm Memory :4GB  1200x1200dpi\r\nPCL6 / PCL5e, HBPL\r\n','15',95500,'61e0f5ae67e4d9.31046130.png','2022-01-14 12:01:50','2022-01-14 12:01:50'),(15,'ApeosPort-V 2060','Office Printer / Scanner / Copier',8,'Part No: TC101471\r\nA3 Color MFD Copy-Print-Scan\r\n25 cpm Memory :4GB  1200x1200dpi\r\nStandard Tray 500 sheets, Bypass 96 sheets\r\nPCL6 / PCL5e, HBPL\r\n','15',129000,'61e0f62a5d1cc6.97321876.png','2022-01-14 12:03:54','2022-01-14 12:03:54'),(17,'VERSANTÂ® 180 PRESSES','Graphic Arts Printer',8,'â€¢ Itâ€™s a compactâ€”but powerfulâ€”production press printing at 80 ppm.\r\nâ€¢ Wide media latitude, with the ability to print on stocks and specialty media from 52â€“350 gsm.\r\nâ€¢ Automated registration and image quality controls create error-free output and tolerances to within one millimeter.','12',850000,'61e0f836483796.97568284.jpg','2022-01-14 12:12:38','2022-01-14 12:12:38'),(18,'XeroxÂ® PhaserÂ® 7800','Graphic Arts Printer',8,'â€¢ EA Toner. Our EA Toner with low-melt technology achieves minimum fusing temperature at 68 degrees F (20 degrees C) less than conventional toner for even more energy savings.\r\nâ€¢ Reduced paper consumption. Save paper and money when you print multipage documents with automatic two-sided output.','10',455000,'61e0f8b6266fb5.00485843.png','2022-01-14 12:14:46','2022-01-14 12:14:46'),(19,'DocuCentre-V C5585','Office Printer / Scanner / Copier',8,'10.4 inch, colour touch screen features simple icons driven by flick, drag and tap operation promoting similar and consistent operability when using a smart phone/tablet device. The DocuCentre-V C5585 prints colour jobs as fast as 50 ppm. Print more for longer with a total paper capacity of up to 5,260 sheets. Multiple finishing options, from basic to advanced, gives you the flexibility your workload requires. Superior print quality with high resolution of 2400 x 2400 dpi, unmatched colour clarity, enhanced gloss modes and exclusive Fuji Xerox EA-Eco toner.','12',649999,'61e0f9763fd524.79913375.jpg','2022-01-14 12:17:58','2022-01-14 12:17:58'),(20,'EPSON SC-T3270','Large Format Printer',11,'Designed with the engineering profession in mind,the Epson SureColor SC-T7270 series ensures that you are empowered to print what you think with stunning quality and precision. Available in dual-roll and multifunction configurations,the SureColor SC-T7270 series is designed to maximize productivity.\r\n\r\n44-inch Large Format Printer\r\nDurable and vibrant printouts with Epson all-pigment UltraChrome XD Ink\r\nOutstanding speeds of up to 2 A1 prints per minute\r\nAvailable in single-roll, dual-roll and multi-function configurations','8',260000,'61e0fb4380f7c6.92672934.png','2022-01-14 12:25:39','2022-01-14 12:25:39'),(21,'iR-1643i','Office Printer / Scanner / Copier',9,'Monochrome Multifunctional Device (Print, Copy,Scan) A4 	\r\n43 pages per minute	\r\n13 secs	\r\n4 secs or less	\r\n6.3 secs ( platen ) / 6.4 secs ( ADF )	\r\n1GB	\r\nUSB 1	\r\n600 x 600 dpi copy resolution	\r\nUp to 999 copies	\r\n 25 â€“ 400% (1% increment)	\r\nID Card Copy and Department ID* Management	\r\nUFR II, PCL6, PCL5	\r\n 600 x 600dpi 	\r\n 600 x 600dpi 	\r\nCasette 1 : A4, B5, A5, A5R, A6 	\r\nMulti Purpose Tray : A4, B5, A5, A5R, A6, Index Card, Envelopes ( No.10(COM 10), Monarch, ISO-C5, DL	\r\nCassette 1 :  650 sheets (80gsm)  	\r\nMulti Purpose Tray : 100 sheets (80gsm)	\r\nCassette  : 60 â€“ 120gsm  /    Multi Purpose Tray  :  60 â€“ 199gsm	\r\nWindows 10 / 8.1 / 8 / 7 / Vista / XP, Windows Server 2003 / Server 2003 R2 / Server 2008, Mac OS X 10.6.X or later	\r\nApproximately 1420W or less	\r\n	\r\nCANON T06 Toner 	\r\n','11',47000,'61e0fbf69df795.58234853.png','2022-01-14 12:28:38','2022-01-14 12:28:38'),(22,'IR 2006N (A3)','Office Printer / Scanner / Copier',9,'Monochrome Multifunctional Device (Print, Copy,Scan)	\r\n20 pages per minute (A4) / 10 pages per minute (A3)	\r\n13 secs	\r\n4.3 secs	\r\n7.4 secs	\r\n512MB	\r\nUSB 1	\r\n600 x 600 dpi copy resolution	\r\nUp to 999 copies	\r\n 25 â€“ 400% (1% increment)	\r\nID Card Copy and Department ID* Management	\r\nUFRII LT (Standard)	\r\n 600 x 600dpi 	\r\n BW - 600 x 600dpi,  CL -  300 x 300dpi 	\r\nCasette 1 : A3, B4, A4R, A4, B5, B5R, A5R, India-LGL, FOOLSCAP	\r\nMulti Purpose Tray : A3, B4, A4R, A4, B5, B5R, A5, A5R, India-LGL, FOOLSCAP, Envelope (COM 10, Monarch, ISO-C5, DL)	\r\nCassette 1 :  250 sheets (80gsm)  	\r\nMulti Purpose Tray : 80 sheets (80gsm)	\r\nCassette  : 64 â€“ 90gsm  /    Multi Purpose Tray  :  64 â€“ 128gsm	\r\nWindows 10 / 8.1 / 8 / 7 / Vista / XP, Windows Server 2003 / Server 2003 R2 / Server 2008, Mac OS X 10.6.X or later	\r\nSleep :  2.0w or Less/ Max: 1.5kWh or less	\r\n	\r\n	\r\nNPG 59 Toner (10,200 A4 6%)	\r\nToner 59 Drum ( 61,700 A4 6%)	\r\n','16',77000,'61e0fc333d60f7.77376974.jpg','2022-01-14 12:29:39','2022-01-14 12:29:39'),(23,'HPICE461A~D000','Office Printer / Scanner / Copier',10,'- up to 30 ppm letter/A4, first page out in as fast as 8 secs from Ready mode, letter\r\n- HP ProRes 1200, HP FastRes 1200\r\n- 16MB RAM, 266MHz Processor\r\n- up to 25,000 pages month duty cycle ; recommended monthly page volume 500 to 2500\r\n- 50-sheet multi-purpose tray, 250 sheet input tray\r\n- Hi-speed USB 2.0 port, IEEE 1284-B compliant parallel port\r\n- uses CE505A (2,300 pages) or CE505X (6,500 pages) toner \r\n','18',13490,'61e0fc7d8d1b89.43024161.jpg','2022-01-14 12:30:53','2022-01-14 12:30:53'),(24,'HPIC5F93A~D000','Office Printer / Scanner / Copier',10,'- Number of users: 3 to 10\r\n- up to 38 ppm, (letter)  First page out in less than 6 secs from Ready mode\r\n- up to 1200 x 1200 dpi, HP FastRes 1200\r\n- 128MB RAM; 1200 MHZ processor\r\n- 80,000 pages per month duty cycle, reco monthly volume of 750 to 4,000 pages\r\n- Connectivity, standard1 Hi-Speed USB 2.0; 1 Host USB; 1 Gigabit Ethernet 10/100/1000T network\r\n- 250 sheet input tray, 150 sheet output bin\r\n- Full Speed USB 2.0 interface; Windows and Mac compatible \r\n- uses CF226A/X toner \r\n','24',14990,'61e0fcb43f4314.94579913.jpg','2022-01-14 12:31:48','2022-01-14 12:31:48'),(25,'EBA 2331','Shredder',8,'eba2331c(shredder-cross cut)\r\nshred type : 4mmx40mm cross cut (cross)\r\nfeed size : 310mm\r\nSheet Capacity: 21-27\r\nDimension : hxwxd in mm: 930x538x470\r\nweight: 50kgs','12',137000,'61e0fd005cb384.86440533.jpg','2022-01-14 12:33:04','2022-01-14 12:33:04'),(26,'UniBinder 120','Binding Machine',11,'â€¢ dimensions: 490 x 335 x 345 mm\r\nâ€¢ 1 binding compartment (binds 1-120 sheets)\r\nâ€¢ 1 manual crimping compartment\r\nâ€¢ 1 cooling compartment\r\nâ€¢ weight: 8 kg\r\nâ€¢ 220-240 V~50 Hz\r\nâ€¢ 175 W\r\nâ€¢ CE certified','20',23000,'61e0fd4deddf65.27999826.jpg','2022-01-14 12:34:21','2022-01-14 12:34:21');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `register` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `roles` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `access` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES (3,'Erika','Admin','Sales Manager','09495707243','admin@gmail.com','$2y$10$iPMJlNtlCVvCvJmTPEUdD.azapXrUXFrgR9lRtEeR9DC/Ne5HRfti','Admin','2022-01-04 15:33:21','2022-01-05 15:45:14'),(4,'Romnick','Test','Sales Representative','09111111111','test@gmail.com','$2y$10$F1aWQ7aMWHR/juWNDEdktuXlgFC9Ua7gLLdKfKmFB1CrFVYIMThSi','User','2022-01-04 17:30:57','2022-01-05 17:42:21'),(5,'Rod','Sample','Sales Representative','09222222222','sample@gmail.com','$2y$10$ZjYdD5/bunP/oB7jGi8F2uWxunld/AcZqf/9OAtbLu4ZOlOzy7Cre','User','2022-01-05 17:43:34','2022-01-05 17:43:34'),(6,'test2','dd','Sales Representative','09111111111','test21@gmail.com','$2y$10$mBJS6.pSEXtpnAlsk2/iv.07Yrfw18qOWs3q8IlmpzShWDcqojiEG','User','2022-01-14 16:20:01','2022-01-14 16:20:01');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(2000) NOT NULL,
  `customerid` int(11) NOT NULL,
  `shipping_add` varchar(2000) NOT NULL,
  `payment_terms` varchar(2000) NOT NULL,
  `invoice_date` date NOT NULL,
  `due_date` date NOT NULL,
  `productid` int(11) NOT NULL,
  `qty` varchar(2000) NOT NULL,
  `pre_total` decimal(10,0) NOT NULL,
  `notes` varchar(2000) NOT NULL,
  `discount_percentage` decimal(10,0) NOT NULL,
  `discount_amount` decimal(10,0) NOT NULL,
  `sub_total` decimal(10,0) NOT NULL,
  `vat_amount` decimal(10,0) NOT NULL,
  `total_amount` decimal(10,0) NOT NULL,
  `status` varchar(45) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sales_id`),
  KEY `customer_id_idx` (`customerid`),
  KEY `product_id_idx` (`productid`),
  CONSTRAINT `customerid` FOREIGN KEY (`customerid`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `productid` FOREIGN KEY (`productid`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` VALUES (1,'0001',5,'33 Ridge Oak Place','Installment - 24 Months','2022-01-14','2024-01-14',18,'1',455000,'Office',30,136500,318500,38220,356720,'Unpaid','2022-01-14 12:36:31','2022-01-14 12:36:31'),(2,'0002',6,'30154 Basil Road','Cash on Delivery / Outright','2022-01-02','2022-01-02',23,'2',26980,'Home use',0,0,26980,3238,30218,'Paid','2022-01-14 12:37:44','2022-01-14 12:37:44'),(3,'0003',15,'366 Haas Place','Installment - 6 Months','2022-01-23','2022-08-23',20,'2',520000,'office',30,156000,364000,43680,407680,'Unpaid','2022-01-14 12:39:02','2022-01-14 12:39:02'),(4,'0004',19,'14 Banding Pass','Installment - 12 Months','2022-01-10','2023-01-10',13,'5',264400,'office',30,79320,185080,22210,207290,'Unpaid','2022-01-14 12:40:10','2022-01-14 13:49:22'),(5,'0005',20,'0 Hovde Point','Cash on Delivery / Outright','2022-01-05','2022-01-05',24,'6',89940,'cod',0,0,89940,10793,100733,'Paid','2022-01-14 12:41:32','2022-01-14 12:41:32'),(6,'0006',16,'5 Raven Alley','Cash on Delivery / Outright','2021-12-15','2021-12-15',21,'2',94000,'cash',10,9400,84600,10152,94752,'Paid','2022-01-14 12:42:16','2022-01-14 12:42:16');
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` VALUES (8,'Fuji Xerox','shm-fbph-fxponline@fujifilm.com','0288785200','25th Floor, SM Aura Tower, 26th St. Cor. McKinley Parkway, Taguig, 1630 Metro Manila','2022-01-06 21:25:49','2022-01-06 21:25:49'),(9,'Canon','customer_care@canon.com.ph','63288849000','7th Floor & Ground Floor, Commerce and Industry Plaza,  Campus Avenue corner Park Avenue,  McKinley Hill, Brgy. Pinagsama Taguig City','2022-01-06 21:31:32','2022-01-06 21:31:32'),(10,'HP Printers','wychua@ics.com.ph','6328885900','37th Floor (Valero Side), Robinsons Summit Center Bldg., 6783 Ayala Avenue, Makati City','2022-01-06 21:37:19','2022-01-06 21:37:19'),(11,'Epson','customercare@epc.epson.com.ph','0284419030','Pasig, Metro Manila ','2022-01-14 12:23:00','2022-01-14 12:23:00');
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-14 18:23:43
