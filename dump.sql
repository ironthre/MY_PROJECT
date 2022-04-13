-- MySQL dump 10.17  Distrib 10.3.23-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: my_project
-- ------------------------------------------------------
-- Server version	10.3.23-MariaDB-1

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
-- Table structure for table advertise
--

DROP TABLE IF EXISTS advertise;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE advertise (
  id serial NOT NULL,
  brand varchar(191)  NOT NULL,
  phone varchar(191)  NOT NULL,
  owner varchar(191)  NOT NULL,
  email varchar(191)  NOT NULL,
  expire date NOT NULL,
  image varchar(191)  NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
); ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table advertise
--

LOCK TABLES advertise WRITE;
/*!40000 ALTER TABLE advertise DISABLE KEYS */;
INSERT INTO advertise VALUES (8,'hgfwhgbgmai','qghfqgabf','qhjfg','qhas@gmail.com','2022-04-29','1649323970499.jpg','2022-04-07 06:32:50','2022-04-07 06:32:50');
/*!40000 ALTER TABLE advertise ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table cart
--

DROP TABLE IF EXISTS cart;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE cart (
  id serial NOT NULL,
  user_id varchar(191)  NOT NULL,
  prod_id varchar(191)  NOT NULL,
  prod_qty varchar(191)  DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
); ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table cart
--

LOCK TABLES cart WRITE;
/*!40000 ALTER TABLE cart DISABLE KEYS */;
/*!40000 ALTER TABLE cart ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table categories
--

DROP TABLE IF EXISTS categories;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE categories (
  id serial NOT NULL,
  name varchar(191)  NOT NULL,
  description varchar(99999)  NOT NULL,
  status smallint DEFAULT 0,
  image varchar(191)  NOT NULL DEFAULT '',
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
); ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table categories
--

LOCK TABLES categories WRITE;
/*!40000 ALTER TABLE categories DISABLE KEYS */;
INSERT INTO categories VALUES (12,'Mobile Phones','All top brands with affordable price',1,'1641712838.jpeg','2021-12-05 03:26:16','2022-01-09 04:20:38'),(14,'Televisions','Inch_32 Sumsung',1,'1642803478.png','2021-12-11 16:03:06','2022-01-21 19:17:58'),(15,'Textile & Decor','Home Decoration',1,'1641715304.jpeg','2021-12-11 16:04:53','2022-01-09 05:01:44'),(16,'Music System','Super Bass and Loud',1,'1641716414.png','2021-12-13 16:12:05','2022-01-09 05:20:14'),(17,'Hand Bags','Vipochi na mabegi ya kike',1,'1642880001.webp','2021-12-29 06:38:18','2022-01-22 16:33:21'),(18,'Sandals','Refrigerators & Coolers',1,'1643137897.png','2021-12-29 06:42:02','2022-01-25 16:11:37'),(19,'Kanga & Vitenge','Kanga & Vitenge',1,'1641715584.jfif','2021-12-29 06:46:28','2022-01-09 05:06:24'),(23,'Accessories','Accessories',1,'1647171336.jpg','2022-03-13 08:35:36','2022-03-13 08:35:36'),(24,'Refrigerators & Coolers','Refrigerators & Coolers',1,'1647172066.jpg','2022-03-13 08:47:46','2022-03-13 08:47:46');
/*!40000 ALTER TABLE categories ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table contacts
--

DROP TABLE IF EXISTS contacts;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE contacts (
  id serial NOT NULL,
  name varchar(191)  NOT NULL,
  phone varchar(191)  NOT NULL,
  message text  NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table contacts
--

LOCK TABLES contacts WRITE;
/*!40000 ALTER TABLE contacts DISABLE KEYS */;
INSERT INTO contacts VALUES (21,'User','07000000000','tel me about you','2022-03-10 16:03:19','2022-03-10 16:03:19'),(26,'Chuma','0743289196','hello','2022-04-01 16:54:07','2022-04-01 16:54:07'),(27,'Chuma','0743289196','hello','2022-04-01 16:56:48','2022-04-01 16:56:48');
/*!40000 ALTER TABLE contacts ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table failed_jobs
--

DROP TABLE IF EXISTS failed_jobs;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE failed_jobs (
  id serial NOT NULL,
  uuid varchar(191)  NOT NULL,
  connection text  NOT NULL,
  queue text  NOT NULL,
  payload text  NOT NULL,
  exception text  NOT NULL,
  failed_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(0)::TIMESTAMP WITHOUT TIME ZONE,
  PRIMARY KEY (id),
  UNIQUE(uuid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table failed_jobs
--

LOCK TABLES failed_jobs WRITE;
/*!40000 ALTER TABLE failed_jobs DISABLE KEYS */;
/*!40000 ALTER TABLE failed_jobs ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table images
--

DROP TABLE IF EXISTS images;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE images (
  id serial NOT NULL,
  url varchar(191)  NOT NULL,
  product_id bigint  NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table images
--

LOCK TABLES images WRITE;
/*!40000 ALTER TABLE images DISABLE KEYS */;
/*!40000 ALTER TABLE images ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table migrations
--

DROP TABLE IF EXISTS migrations;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE migrations (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  migration varchar(191)  NOT NULL,
  batch int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table migrations
--

LOCK TABLES migrations WRITE;
/*!40000 ALTER TABLE migrations DISABLE KEYS */;
INSERT INTO migrations VALUES (2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_12_02_210433_create_categories_table',2),(6,'2021_12_09_153257_create_products_table',3),(8,'2022_02_14_151041_create_cart_table',5),(9,'2022_02_16_043725_create_order_table',6),(10,'2022_02_16_050625_create_order_items_table',6),(12,'2022_02_17_212232_create_wishlist_item_table',8),(14,'2022_02_17_215048_create_chuma_table',9),(15,'2022_03_10_143517_create_contacts_table',9),(16,'2014_10_12_000000_create_users_table',10),(17,'2022_04_05_235311_create_table__advertise',11),(18,'2022_04_06_141828_create_advertise_table',12);
/*!40000 ALTER TABLE migrations ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table order
--

DROP TABLE IF EXISTS order;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE orders (
  id serial NOT NULL,
  user_id varchar(191)  NOT NULL,
  fname varchar(191)  NOT NULL,
  lname varchar(191)  NOT NULL,
  email varchar(191)  DEFAULT NULL,
  phone1 varchar(191)  NOT NULL,
  city varchar(191)  NOT NULL,
  address1 varchar(191)  NOT NULL,
  address2 varchar(191)  DEFAULT NULL,
  phone2 varchar(191)  DEFAULT NULL,
  total_price int NOT NULL,
  status smallint NOT NULL DEFAULT 0,
  message varchar(191)  DEFAULT NULL,
  cancel smallint NOT NULL DEFAULT 0,
  tracking_no varchar(191)  NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table order
--

LOCK TABLES order WRITE;
/*!40000 ALTER TABLE order DISABLE KEYS */;
INSERT INTO orders VALUES (1,'2','Sabra','mwana',NULL,'0709887008','Moro','kihonda',NULL,NULL,270000,0,NULL,0,'1690','2022-03-12 10:35:54','2022-03-12 10:35:54'),(2,'2','Sabra','mwana',NULL,'0709887008','Moro','kihonda',NULL,NULL,8000,0,NULL,0,'9056','2022-03-12 12:26:42','2022-03-12 12:26:42'),(3,'2','Sabra','mwana',NULL,'0709887008','Moro','kihonda',NULL,NULL,0,0,NULL,0,'5133','2022-03-12 12:27:39','2022-03-12 12:27:39'),(4,'2','Sabra','mwana',NULL,'0709887008','Moro','kihonda',NULL,NULL,540000,1,NULL,0,'20851509','2022-03-12 16:50:56','2022-03-12 16:52:55'),(5,'2','Sabra','mwana',NULL,'0709887008','Moro','kihonda',NULL,NULL,8000,0,NULL,0,'75401972','2022-03-12 17:47:10','2022-03-12 17:47:10'),(6,'2','Sabra','mwana',NULL,'0709887008','Moro','kihonda',NULL,NULL,470000,0,NULL,0,'89502593','2022-03-12 17:49:24','2022-03-12 17:49:24'),(7,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'8967543210',600000,0,NULL,0,'85839832','2022-04-04 10:44:35','2022-04-04 10:44:35'),(8,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'563895637374',870000,0,NULL,0,'55037339','2022-04-04 13:50:45','2022-04-04 13:50:45'),(9,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'56343586336',23500,0,NULL,0,'33729762','2022-04-04 13:56:51','2022-04-04 13:56:51'),(10,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'325473269736',1450000,0,NULL,0,'89786870','2022-04-04 14:02:13','2022-04-04 14:02:13'),(11,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'54685587667',297000,0,NULL,0,'60834442','2022-04-04 14:10:33','2022-04-04 14:10:33'),(12,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'75836534857',12000,0,NULL,0,'80531189','2022-04-04 14:12:22','2022-04-04 14:12:22'),(13,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'57983573457',22000,0,NULL,0,'26900371','2022-04-04 14:15:24','2022-04-04 14:15:24'),(14,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'823333560347',5000,0,NULL,0,'57761970','2022-04-04 14:19:36','2022-04-04 14:19:36'),(15,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'784623534756',24000,0,NULL,0,'30082691','2022-04-04 15:19:04','2022-04-04 15:19:04'),(16,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'7854875087',350000,0,NULL,0,'31147514','2022-04-04 20:02:12','2022-04-04 20:02:12'),(17,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'7854875087',350000,0,NULL,0,'35095375','2022-04-04 20:02:21','2022-04-04 20:02:21'),(18,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'7854875087',350000,0,NULL,0,'60215255','2022-04-04 20:02:53','2022-04-04 20:02:53'),(19,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'7854875087',350000,0,NULL,0,'12832766','2022-04-04 20:03:01','2022-04-04 20:03:01'),(20,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'7854875087',350000,0,NULL,0,'10342432','2022-04-04 20:03:41','2022-04-04 20:03:41'),(21,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'45687656976',110000,0,NULL,0,'20484689','2022-04-04 20:05:08','2022-04-04 20:05:08'),(22,'1','gehfwkj','hhhhn',NULL,'9087563487','irujgihu','bhjje',NULL,'45687656976',110000,0,NULL,0,'26029373','2022-04-04 20:10:40','2022-04-04 20:10:40');
/*!40000 ALTER TABLE order ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table order_items
--

DROP TABLE IF EXISTS order_items;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE order_items (
  id serial NOT NULL,
  order_id varchar(191)  NOT NULL,
  prod_id varchar(191)  NOT NULL,
  qty varchar(191)  NOT NULL,
  price varchar(191)  NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table order_items
--

LOCK TABLES order_items WRITE;
/*!40000 ALTER TABLE order_items DISABLE KEYS */;
INSERT INTO order_items VALUES (1,'1','3','1','270000','2022-03-12 10:35:54','2022-03-12 10:35:54'),(2,'2','4','1','8000','2022-03-12 12:26:42','2022-03-12 12:26:42'),(3,'4','3','2','540000','2022-03-12 16:50:56','2022-03-12 16:50:56'),(4,'5','4','1','8000','2022-03-12 17:47:10','2022-03-12 17:47:10'),(5,'6','2','1','470000','2022-03-12 17:49:24','2022-03-12 17:49:24'),(6,'7','13','1','600000','2022-04-04 10:44:36','2022-04-04 10:44:36'),(7,'8','3','1','270000','2022-04-04 13:50:45','2022-04-04 13:50:45'),(8,'8','13','1','600000','2022-04-04 13:50:45','2022-04-04 13:50:45'),(9,'9','44','1','23500','2022-04-04 13:56:52','2022-04-04 13:56:52'),(10,'10','12','1','1450000','2022-04-04 14:02:15','2022-04-04 14:02:15'),(11,'11','1','1','297000','2022-04-04 14:10:33','2022-04-04 14:10:33'),(12,'12','66','1','12000','2022-04-04 14:12:23','2022-04-04 14:12:23'),(13,'13','40','1','22000','2022-04-04 14:15:25','2022-04-04 14:15:25'),(14,'14','16','1','5000','2022-04-04 14:19:37','2022-04-04 14:19:37'),(15,'15','62','1','12000','2022-04-04 15:19:04','2022-04-04 15:19:04'),(16,'15','66','1','12000','2022-04-04 15:19:04','2022-04-04 15:19:04'),(17,'18','45','1','350000','2022-04-04 20:02:53','2022-04-04 20:02:53'),(18,'19','45','1','350000','2022-04-04 20:03:01','2022-04-04 20:03:01'),(19,'20','45','1','350000','2022-04-04 20:03:42','2022-04-04 20:03:42'),(20,'21','43','1','110000','2022-04-04 20:05:08','2022-04-04 20:05:08'),(21,'22','43','1','110000','2022-04-04 20:10:40','2022-04-04 20:10:40');
/*!40000 ALTER TABLE order_items ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table password_resets
--

DROP TABLE IF EXISTS password_resets;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE password_resets (
  email varchar(191)  NOT NULL,
  token varchar(191)  NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  KEY password_resets_email_index (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table password_resets
--

LOCK TABLES password_resets WRITE;
/*!40000 ALTER TABLE password_resets DISABLE KEYS */;
/*!40000 ALTER TABLE password_resets ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table personal_access_tokens
--

DROP TABLE IF EXISTS personal_access_tokens;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE personal_access_tokens (
  id serial NOT NULL,
  tokenable_type varchar(191)  NOT NULL,
  tokenable_id bigint unsigned NOT NULL,
  name varchar(191)  NOT NULL,
  token varchar(64)  NOT NULL,
  abilities text  DEFAULT NULL,
  last_used_at timestamp NULL DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY personal_access_tokens_token_unique (token),
  KEY personal_access_tokens_tokenable_type_tokenable_id_index (tokenable_type,tokenable_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table personal_access_tokens
--

LOCK TABLES personal_access_tokens WRITE;
/*!40000 ALTER TABLE personal_access_tokens DISABLE KEYS */;
/*!40000 ALTER TABLE personal_access_tokens ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table products
--

DROP TABLE IF EXISTS products;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE products (
  id serial NOT NULL,
  cate_id bigint DEFAULT NULL,
  name varchar(191)  NOT NULL,
  small_description text  DEFAULT NULL,
  description text  DEFAULT NULL,
  org_price varchar(191)  NOT NULL,
  selling_price varchar(191)  NOT NULL,
  rate varchar(191)  NOT NULL,
  image varchar(191)  NOT NULL,
  images varchar(191)  DEFAULT NULL,
  qty varchar(191)  NOT NULL,
  status smallint NOT NULL,
  trending smallint NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table products
--

LOCK TABLES products WRITE;
/*!40000 ALTER TABLE products DISABLE KEYS */;
INSERT INTO products VALUES (1,12,'Infinix Hot 11 Play','Size 6.82\" Rear Camera 13MP, Selfie 8MP','Dual Simcard, 64GB 4GB, Android 11, 600 mAh, Fingerprint (Rear-Mounte), Size 6.82\" Rear Camera 13MP, Selfie 8MP','366000','297000','4.0','1647019864793.jpg','','9',1,1,'2022-03-11 14:31:04','2022-04-04 14:10:33'),(2,12,'Samsung M32','64GB 4GB 6000 mAh 64MP','64GB 4GB 6000 mAh 64MP Support 4G Dual SIM OS Android 11 Mediatek Fingerprint Side-mounted','500000','470000','4.5','1647020226404.jpg',NULL,'2',1,1,'2022-03-11 14:37:06','2022-03-12 17:49:24'),
(3,12,'Iphone S6+','Iphone S6+','Iphone S6+','300000','270000','4.0','1647079678660.jpg',',1647079678894.jpg,1647079678956.jpg','6',1,1,'2022-03-12 07:07:58','2022-04-04 13:50:45'),(4,17,'Pochi','Unaweka vitu muhimu na vinaenea','Unaweka vitu muhimu na vinaenea','10000','8000','4.0','1647079918520.jpg',',1647079918317.jpg,1647079918319.jpg,1647079918200.jpg','48',1,1,'2022-03-12 07:11:58','2022-03-12 17:47:11'),
(5,12,'Umdig Power 3','6150mAh Monster Battery 48MP 16MP 6.53\"  Android 10','6150mAh Monster Battery\r\nFast 18W Charge & 10W Reverse Charge\r\n48MP Ultra Wide Macro Quad Camera\r\n16MP AI Selfie Camera2 + 1 Card Slots\r\nDual SIM + Dedicated Micro-SD Slot\r\nGlobal LTE Bands\r\nDual 4G VoLTE','450000','400000','4.5','1647159824825.jpg',NULL,'3',1,1,'2022-03-13 05:23:44','2022-03-13 05:23:44'),
(6,14,'Samsung 32 TV','LED 32 Full HD','LED 32 Full HD HDMI 3, USB 2, 1 AV INPUT','500000','480000','4','164716069760.jpg',NULL,'20',1,1,'2022-03-13 05:38:17','2022-03-13 05:38:17'),(7,14,'Samsung 75','Android TV 4K','LED 55 Full HD HDMI 3, USB 2, 1 AV INPUT\"','1000000','950000','4.5','1647160858977.jpg',NULL,'4',1,1,'2022-03-13 05:40:58','2022-03-13 05:40:58'),
(9,16,'Aborder BT 304','Bluetooth, USB, Memory Card, Remote','Bluetooth, USB, Memory Card, Remote\r\n2 Min Speaker','90000','80000','4','1647161107667.jpg',NULL,'100',1,1,'2022-03-13 05:45:07','2022-03-13 05:45:07'),(10,16,'Aborder BT 666','Bluetooth USB flash drive remote control','Bluetooth USB flash drive remote control','150000','120000','4.5','1647161203677.jpg',NULL,'5',1,1,'2022-03-13 05:46:43','2022-03-13 05:46:43'),
(11,16,'Sundar Subwoofer','Bluetooth USB flash drive remote control','USB Memory card Ports Inputs and Output ports','120000','80000','4.5','1647161334641.jpg',NULL,'20',1,1,'2022-03-13 05:48:54','2022-03-13 05:48:54'),(12,14,'TCL iPQ ANDROID TV','UHD 4K Active HDMI Cable','Inch 55 Free Bracket youtube, netflix, showmax android tv, 2 years warranty','1600000','1450000','4.5','1647161515127.jpg',NULL,'2',1,1,'2022-03-13 05:51:55','2022-04-04 14:02:15'),
(13,14,'Hisense TV','Smart 4K HDMI USB AV Ports','Brand Hisense 32 Certified UHD, Netflix','700000','600000','4','1647161694234.jpg',NULL,'2',1,1,'2022-03-13 05:54:54','2022-04-04 13:50:45'),(14,18,'Slippers black','Size 35-39\"','Fill comfortable trending model\"','10000','8000','4.5','1647161910860.jpg',NULL,'50',0,0,'2022-03-13 05:58:30','2022-03-13 06:06:13'),(15,18,'Slipper Collection','Size  38\"','Fill comfortable trending model\"','10000','8000','4.5','1647162089486.jpg',NULL,'30',1,1,'2022-03-13 06:01:29','2022-03-13 06:06:44'),
(16,18,'Slipper color','Size  35\"','Fill comfortable trending model\"','10000','5000','4.5','1647162146354.jpg',NULL,'32',1,0,'2022-03-13 06:02:26','2022-04-04 14:19:38'),(17,18,'Slipper white','Size 42\"','Fill comfortable trending model\"','7000','5000','4.5','1647162219894.jpg',NULL,'20',1,0,'2022-03-13 06:03:39','2022-03-13 06:07:26'),(18,18,'Sandals Green','Size 40','Fill comfortable trending model','12000','8000','4','1647163524644.jpg',NULL,'32',1,0,'2022-03-13 06:25:24','2022-03-13 06:25:24'),(19,19,'kitenge Uraafiki','Pande 3','Unaweza Kujifunga na kushona','35000','30000','4','1647164179674.jpg',NULL,'32',1,1,'2022-03-13 06:36:20','2022-03-13 06:36:20'),
(20,19,'kitenge duanas','Pande 3','Unaweza kujifunga na kushona','30000','28000','4.5','1647164319157.jpg',NULL,'98',1,1,'2022-03-13 06:38:39','2022-03-13 06:38:39'),(21,19,'kitenge','Pande 3','Unaweza kujifunga na kushona','35000','30000','4.5','1647164389888.jpg',NULL,'32',0,0,'2022-03-13 06:39:49','2022-03-13 06:39:49'),(22,19,'kitenge ur','Pande 3','Unaweza kujifunga na kushona','32000','30000','3.5','1647164480450.jpg',',1647164480352.jpg,1647164480652.jpg,1647164480553.jpg','122',1,1,'2022-03-13 06:41:20','2022-03-13 06:41:20'),(23,19,'kitenge 23','pande 2','Unaweza kujifunga na kushona','30000','28000','4','1647164547181.jpg',NULL,'23',1,1,'2022-03-13 06:42:27','2022-03-13 06:42:27'),
(24,19,'kanga','pande 2','Unaweza kujifunga na kushona','34000','32000','4','1647164603598.jpg',NULL,'43',1,1,'2022-03-13 06:43:23','2022-03-13 06:43:23'),(25,19,'kange urafiki','pande 2','Unaweza kujifunga na kushona','40000','37000','3.5','1647164718318.jpg',NULL,'32',1,0,'2022-03-13 06:45:18','2022-03-13 06:45:18'),(27,17,'Kinainai Gucc','Gucc','classic bag','20000','18000','4.5','164716532690.jpg',',1647165326742.jpg','23',1,1,'2022-03-13 06:55:26','2022-03-13 06:55:26'),(28,17,'Casual Bag','lv','classic bag','17000','15000','4.5','164716544541.jpg',',1647165445219.jpg','12',1,0,'2022-03-13 06:57:25','2022-03-13 06:57:25'),(31,17,'Gucc c bag','Gucc cross bag','Gucc cross bag','21000','20000','4.5','1647165559727.jpg',',1647165559455.jpg,1647165559536.jpg','13',1,0,'2022-03-13 06:59:19','2022-03-13 06:59:19'),
(35,17,'Gucc C bag','Gucc','Casual look, Office','19000','18500','4.5','1647167632291.jpg',NULL,'231',1,1,'2022-03-13 07:33:52','2022-03-13 07:33:52'),(36,17,'Red handbag','Red Gucc','Match with any color','29000','25000','4.5','1647167889500.jpg',NULL,'324',1,1,'2022-03-13 07:38:09','2022-03-13 07:38:09'),(37,17,'Gray Gucc','Classic','Match with any color','20000','18000','4.5','1647167958879.jpg',NULL,'23',1,0,'2022-03-13 07:39:18','2022-03-13 07:39:18'),(38,17,'black bag lv','lv new look','Match with any color','23000','22000','4.5','1647168075553.jpg',',164716807565.jpg','23',1,0,'2022-03-13 07:41:15','2022-03-13 07:41:15'),(39,17,'Crazy Handbag','Crazy Handbag','Match with any color','24000','22000','4.5','1647168171326.jpg',NULL,'31',1,0,'2022-03-13 07:42:51','2022-03-13 07:42:51'),
(40,17,'Offica bag','Classic','Crazy Handbag','27000','22000','4','1647168239517.webp',NULL,'652',1,0,'2022-03-13 07:43:59','2022-04-04 14:15:25'),(41,17,'black gucc','Gucc','Crazy Handbag','24000','23000','4.5','1647168327744.jpg',NULL,'12',1,0,'2022-03-13 07:45:27','2022-03-13 07:45:27'),(42,15,'Carpet Manyoya','Size 6x6','Hazichuji rangi','150000','130000','4','1647168775608.jpg',NULL,'4',1,0,'2022-03-13 07:52:55','2022-03-13 07:52:55'),(43,15,'Red Carpet','Size 6x6','Crazy Handbag','120000','110000','4.5','1647168884100.jpg',NULL,'30',1,0,'2022-03-13 07:54:44','2022-04-04 20:10:40'),(44,16,'Mini Speaker','USB drive Memory Card Bluetooth','USB drive Memory Card Bluetooth','25000','23500','4.5','1647169112613.jpg',NULL,'2',1,0,'2022-03-13 07:58:32','2022-04-04 13:56:52'),(45,12,'Samsung J5','Brand New','Ram 4 ROM 32 13MP 5MP','380000','350000','3.5','164716924315.png',',1647169243756.png,1647169243621.png,1647169243980.png','-1',1,0,'2022-03-13 08:00:43','2022-04-04 20:03:42'),(46,12,'Oppo A12','4GB 64GB','13MP 5MP Android OS 7','250000','230000','3.5','1647169440256.jpg',',1647169440216.jpeg','5',1,0,'2022-03-13 08:04:00','2022-03-13 08:04:00'),(47,12,'Vivo Power','3GB 32GB','USB drive Memory Card Bluetooth','340000','310000','4','1647169533214.jpeg',NULL,'3',1,0,'2022-03-13 08:05:33','2022-03-13 08:05:33'),(48,12,'Samsung Note 10','Clean Version 8GB 128GB','Type-C Port 48MP wide Camera','850000','820000','4.5','16471697685.jpeg',NULL,'21',1,0,'2022-03-13 08:09:28','2022-03-13 08:09:28'),(49,12,'Samsung S20','5G Mobile Phone','Type-C USB port 64MP 6500mAh Monster Battery','1500000','1450000','4.5','16471698903.png',NULL,'2',1,0,'2022-03-13 08:11:30','2022-03-13 08:11:30'),(50,12,'iPhone 13','4GB 128GB','4GB 128GB Type-C USB port 64MP 6500mAh Monster Battery','2000000','1800000','4.5','1647170024952.jpg',NULL,'4',1,0,'2022-03-13 08:13:44','2022-03-13 08:13:44'),(51,12,'Samsung A55','Clean','4GB 128GB Type-C USB port 64MP 6500mAh Monster Battery','750000','700000','4.5','1647170256681.jpg',NULL,'12',1,0,'2022-03-13 08:17:36','2022-03-13 08:17:36'),(52,12,'Samsung S8','helio\"','4GB 128GB Type-C USB port 64MP 6500mAh Monster Battery\"','420000','400000','4.5','1647170340287.jpg',NULL,'12',1,0,'2022-03-13 08:19:00','2022-03-13 08:20:02'),(53,24,'Hisense Frege','Fast Cooling, Energy saving','Simple and affordable','750000','700000','4.5','1647176978128.jpg',NULL,'12',1,1,'2022-03-13 10:09:38','2022-03-13 10:09:38'),(54,24,'Hisense Min Frege','Fast Cooling, Energy saving','Refrigerators & Coolers','650000','625000','4.5','164717707274.jpg',',1647177072509.jpg,1647177072376.jpg','12',1,0,'2022-03-13 10:11:12','2022-03-13 10:11:12'),(55,24,'Hisense single','Fast Cooling, Energy saving','Refrigerators & Coolers','500000','490000','4.5','1647177153794.jpg',NULL,'54',1,0,'2022-03-13 10:12:33','2022-03-13 10:12:33'),(56,24,'Hisense Fre','Fast Cooling, Energy saving','Refrigerators & Coolers','1650000','1600000','4.5','1647177232278.jpg',NULL,'21',1,0,'2022-03-13 10:13:52','2022-03-13 10:13:52'),(57,24,'Samsung Frege','Fast Cooling, Energy saving','Refrigerators & Coolers','900000','875000','4.5','1647177311684.png',NULL,'1',1,0,'2022-03-13 10:15:11','2022-03-13 10:15:11'),(58,24,'Frege Two Doors','Fast Cooling, Energy saving','Refrigerators & Coolers','233000','230000','4.5','1647177363349.png',NULL,'21',1,0,'2022-03-13 10:16:03','2022-03-13 10:16:03'),(59,24,'Min Frege','Fast Cooling, Energy saving','Refrigerators & Coolers','600000','590000','3.5','1647177437741.jpg',NULL,'3',1,0,'2022-03-13 10:17:17','2022-03-13 10:17:17'),(60,23,'Samsung USB Flash','32 GB','Long life','20000','16000','4.5','1647177898436.jpg',NULL,'21',1,0,'2022-03-13 10:24:58','2022-03-13 10:24:58'),
(61,23,'Screen protector','Protect your phone screen','Protect your phone screen','5000','5000','4.5','1647177987795.jpg',NULL,'32',1,0,'2022-03-13 10:26:27','2022-03-13 10:26:27'),(62,23,'Silver Watch','Count your time','Count your time','13000','12000','4.5','1647178118159.jpg',NULL,'20',1,0,'2022-03-13 10:28:38','2022-04-04 15:19:04'),(63,23,'USB Type-C',NULL,NULL,'7000','6500','4.5','1647178278254.jpg',NULL,'2',1,1,'2022-03-13 10:31:18','2022-03-13 10:31:18'),(64,23,'Smart Watch',NULL,NULL,'23000','20000','4.5','1647178345725.jpg',NULL,'2',1,0,'2022-03-13 10:32:25','2022-03-13 10:32:25'),(65,23,'HD Screen Protector',NULL,NULL,'10000','10000','4.5','164717840298.jpg',NULL,'1',1,0,'2022-03-13 10:33:22','2022-03-13 10:33:22'),(66,23,'iPhone Charger','Fast Charger',NULL,'15000','12000','4.5','1647178461711.jpg',NULL,'21',1,0,'2022-03-13 10:34:21','2022-04-04 15:19:05'),(67,23,'Type-C Charger',NULL,NULL,'13000','12000','4.5','1647178510933.jpg',NULL,'21',1,0,'2022-03-13 10:35:10','2022-03-13 10:35:10'),(68,23,'Stereo Buds',NULL,NULL,'30000','28000','4.5','1647178570714.jpg',NULL,'40',1,0,'2022-03-13 10:36:10','2022-03-13 10:36:10'),(69,23,'Earphones',NULL,NULL,'5000','45000','4.5','1647178638674.jpg',NULL,'21',1,0,'2022-03-13 10:37:18','2022-03-13 10:37:18'),(70,23,'Wireless Earphone',NULL,NULL,'15000','15000','4.5','1647178692909.jpg',NULL,'1221',1,0,'2022-03-13 10:38:12','2022-03-13 10:38:12'),(71,23,'Nokia USB',NULL,NULL,'10000','10000','4.5','1647178745860.jpg',NULL,'21',1,0,'2022-03-13 10:39:05','2022-03-13 10:39:05'),(72,19,'Kitenge Org',NULL,NULL,'30000','28000','4.5','164717883263.jpg',NULL,'21',1,0,'2022-03-13 10:40:32','2022-03-13 10:40:32');
/*!40000 ALTER TABLE products ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table users
--

DROP TABLE IF EXISTS users;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE users (
  id serial NOT NULL,
  name varchar(191)  NOT NULL,
  email varchar(191)  NOT NULL,
  email_verified_at timestamp NULL DEFAULT NULL,
  password varchar(191)  NOT NULL,
  fnam varchar(191)  DEFAULT NULL,
  lname varchar(191)  DEFAULT NULL,
  phone1 varchar(191)  DEFAULT NULL,
  phone2 varchar(191)  DEFAULT NULL,
  fname varchar(191)  DEFAULT NULL,
  address1 varchar(191)  DEFAULT NULL,
  address2 varchar(191)  DEFAULT NULL,
  role_as smallint NOT NULL DEFAULT 0,
  remember_token varchar(100)  DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE(email)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table users
--

LOCK TABLES users WRITE;
/*!40000 ALTER TABLE users DISABLE KEYS */;
INSERT INTO users VALUES (1,'Chuma','hamyychuma.iron26@gmail.com',NULL,'$2y$10$OoEQgEaEMK/dgrNZ.0QhWu3aZJHlqOC52JZGxF1K4pus4Ay6ZdQt2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,'2022-04-05 11:32:46','2022-04-05 11:32:46'),(2,'Ramadhani','rama@gmail.com',NULL,'$2y$10$lIRcYekJtfJL1oEAytfNx.QNTZt4HzAGJDPMm7HzyziTWtqVilE86','Ramadhani','Kaboka',NULL,NULL,NULL,'Barabara ya 6',NULL,1,NULL,'2022-04-05 18:23:21','2022-04-07 18:33:55');
/*!40000 ALTER TABLE users ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table wishlist_item
--

DROP TABLE IF EXISTS wishlist_item;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE wishlist_item (
  id serial NOT NULL,
  user_id varchar(191)  NOT NULL,
  prod_id varchar(191)  NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table wishlist_item
--

LOCK TABLES wishlist_item WRITE;
/*!40000 ALTER TABLE wishlist_item DISABLE KEYS */;
/*!40000 ALTER TABLE wishlist_item ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-13  9:07:19
