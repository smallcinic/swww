-- MySQL dump 10.13  Distrib 5.5.59, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: admin_sngine
-- ------------------------------------------------------
-- Server version	5.5.59-0ubuntu0.14.04.1

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
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ads` (
  `ads_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `place` varchar(32) NOT NULL,
  `code` text NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads`
--

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `affiliates_payments`
--

DROP TABLE IF EXISTS `affiliates_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `affiliates_payments` (
  `payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `email` varchar(64) NOT NULL,
  `amount` varchar(32) NOT NULL,
  `method` varchar(64) NOT NULL,
  `time` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `affiliates_payments`
--

LOCK TABLES `affiliates_payments` WRITE;
/*!40000 ALTER TABLE `affiliates_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `affiliates_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcements` (
  `announcement_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(32) NOT NULL,
  `code` text NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  PRIMARY KEY (`announcement_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcements`
--

LOCK TABLES `announcements` WRITE;
/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcements_users`
--

DROP TABLE IF EXISTS `announcements_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcements_users` (
  `announcement_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `announcement_id_user_id` (`announcement_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcements_users`
--

LOCK TABLES `announcements_users` WRITE;
/*!40000 ALTER TABLE `announcements_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcements_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banned_ips`
--

DROP TABLE IF EXISTS `banned_ips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banned_ips` (
  `ip_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(64) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`ip_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banned_ips`
--

LOCK TABLES `banned_ips` WRITE;
/*!40000 ALTER TABLE `banned_ips` DISABLE KEYS */;
/*!40000 ALTER TABLE `banned_ips` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conversations`
--

DROP TABLE IF EXISTS `conversations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conversations` (
  `conversation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `last_message_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`conversation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conversations`
--

LOCK TABLES `conversations` WRITE;
/*!40000 ALTER TABLE `conversations` DISABLE KEYS */;
INSERT INTO `conversations` VALUES (1,19),(2,4),(3,5),(4,36);
/*!40000 ALTER TABLE `conversations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conversations_messages`
--

DROP TABLE IF EXISTS `conversations_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conversations_messages` (
  `message_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `conversation_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `message` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conversations_messages`
--

LOCK TABLES `conversations_messages` WRITE;
/*!40000 ALTER TABLE `conversations_messages` DISABLE KEYS */;
INSERT INTO `conversations_messages` VALUES (1,1,1,'test\\','','2017-12-28 12:47:47'),(2,1,1,'vfrhejw','','2017-12-28 12:48:13'),(3,2,3,'Что за хуйня','','2017-12-30 00:35:53'),(4,2,3,'Все плохо','','2017-12-30 00:36:05'),(5,3,3,'Жопа','','2017-12-30 00:39:30'),(6,1,2,'[eq','','2018-02-24 12:47:24'),(7,1,2,'хуй я сказал!','','2018-02-24 12:47:36'),(8,1,2,'Я сказал - хуууй!','','2018-02-24 12:48:55'),(9,1,2,'test','','2018-04-15 20:16:11'),(10,1,2,'test','','2018-04-15 20:16:38'),(11,1,2,'ororo','','2018-04-15 20:17:06'),(12,1,1,'Test','','2018-04-15 20:17:26'),(13,1,2,'test','','2018-04-15 20:17:39'),(14,1,1,'Test','','2018-04-15 21:12:38'),(15,1,1,'Qqq','','2018-04-15 21:13:52'),(16,1,1,'Qqq','','2018-04-15 21:14:10'),(17,1,2,'qqq','','2018-04-15 21:14:39'),(18,1,2,'test','','2018-04-15 21:15:41'),(19,1,1,'Test','','2018-04-15 21:17:13'),(20,4,4,'hi','','2018-04-15 21:20:02'),(21,4,1,'Hello','','2018-04-15 21:20:24'),(22,4,4,'iufcreoi','','2018-04-15 21:20:36'),(23,4,4,'jrfb erhf e','','2018-04-15 21:20:42'),(24,4,4,'  efu eufvh uef efn','','2018-04-15 21:20:47'),(25,4,4,'ghf tfiuy oy','','2018-04-15 21:21:08'),(26,4,4,'nbcjhvv uyho nuho \n','','2018-04-15 21:21:20'),(27,4,4,'vfiuyf','','2018-04-15 21:21:53'),(28,4,4,'uy rfyf uyf i','','2018-04-15 21:22:00'),(29,4,4,'iulg oyu g\\','','2018-04-15 21:22:06'),(30,4,4,';.;ub ihj j','','2018-04-15 21:22:10'),(31,4,4,'jhhvjhv','','2018-04-15 21:23:02'),(32,4,4,'hvipyvuh j ih \\n j  j','','2018-04-15 21:23:08'),(33,4,4,'hbvojhvojhv','','2018-04-15 21:23:15'),(34,4,4,'jhviugv','','2018-04-15 21:23:23'),(35,4,4,'hg ifu gfyt vvuytg u','','2018-04-15 21:23:28'),(36,4,4,'ukyf ituf iuyfi uy\\','','2018-04-15 21:24:18');
/*!40000 ALTER TABLE `conversations_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conversations_users`
--

DROP TABLE IF EXISTS `conversations_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conversations_users` (
  `conversation_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `seen` enum('0','1') NOT NULL DEFAULT '0',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  UNIQUE KEY `conversation_id_user_id` (`conversation_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conversations_users`
--

LOCK TABLES `conversations_users` WRITE;
/*!40000 ALTER TABLE `conversations_users` DISABLE KEYS */;
INSERT INTO `conversations_users` VALUES (1,1,'0','1'),(1,2,'1','0'),(2,3,'1','0'),(2,1,'1','0'),(3,3,'1','1'),(3,2,'1','0'),(4,4,'1','0'),(4,1,'1','0');
/*!40000 ALTER TABLE `conversations_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custom_fields`
--

DROP TABLE IF EXISTS `custom_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `custom_fields` (
  `field_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(32) NOT NULL,
  `select_options` text NOT NULL,
  `label` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `place` varchar(32) NOT NULL,
  `length` int(10) NOT NULL DEFAULT '32',
  `mandatory` enum('0','1') NOT NULL DEFAULT '0',
  `in_registration` enum('0','1') NOT NULL DEFAULT '0',
  `in_profile` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`field_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custom_fields`
--

LOCK TABLES `custom_fields` WRITE;
/*!40000 ALTER TABLE `custom_fields` DISABLE KEYS */;
INSERT INTO `custom_fields` VALUES (1,'selectbox','test1\r\ntest2\r\ntest3','test','test','other',4,'0','0','0');
/*!40000 ALTER TABLE `custom_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db_net`
--

DROP TABLE IF EXISTS `db_net`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_net` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `protect_id` int(11) NOT NULL,
  `available` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id` (`id`),
  KEY `name_2` (`name`),
  KEY `id_2` (`id`),
  KEY `available` (`available`),
  KEY `name_3` (`name`),
  KEY `available_2` (`available`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_net`
--

LOCK TABLES `db_net` WRITE;
/*!40000 ALTER TABLE `db_net` DISABLE KEYS */;
INSERT INTO `db_net` VALUES (16,'Мастерская сеть для тестов',1,3,1),(18,'Загрузы и сюжеты',1,0,1),(19,'Имплантаты',1,0,0),(20,'RFID',1,0,0);
/*!40000 ALTER TABLE `db_net` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db_permission`
--

DROP TABLE IF EXISTS `db_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `server_id` int(11) NOT NULL,
  `access` enum('r','w','f','') NOT NULL DEFAULT 'r',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_permission`
--

LOCK TABLES `db_permission` WRITE;
/*!40000 ALTER TABLE `db_permission` DISABLE KEYS */;
INSERT INTO `db_permission` VALUES (1,1,7,'w'),(3,1,8,'r');
/*!40000 ALTER TABLE `db_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db_protect`
--

DROP TABLE IF EXISTS `db_protect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_protect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `firewall_id` int(11) NOT NULL,
  `antivirus_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_protect`
--

LOCK TABLES `db_protect` WRITE;
/*!40000 ALTER TABLE `db_protect` DISABLE KEYS */;
INSERT INTO `db_protect` VALUES (1,1,1,1,'1'),(2,1,1,1,'2'),(3,1,1,1,'3');
/*!40000 ALTER TABLE `db_protect` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db_record`
--

DROP TABLE IF EXISTS `db_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `server_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `text` text NOT NULL,
  `available` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_record`
--

LOCK TABLES `db_record` WRITE;
/*!40000 ALTER TABLE `db_record` DISABLE KEYS */;
INSERT INTO `db_record` VALUES (5,6,'Брелок 1','Брелок 1. Тестовый брелок для проверки работы прототипа железяки. Так надо.',1),(6,7,'тестовый имплантат для cinic','тестовый имплантат для cinic. Эта запись есть в игротехническом сервере для игрока и содержит описание имплантата. Она привязана к самой сущности имплантата.\r\nПри его установке запись переносится на сервер имплантатов игрока. При этом сущность &quot;имплантат&quot; из другой модели привязывается к игроку в боёвке.\r\nПри снятии запись переносится на сервер снятых имплантатов.\r\nПри уничтожении запись помечается как недоступная.\r\nИнвентарь не нужен - у кого RFID с привязкой к имплантату - тот и папа.\r\n\r\nКстати, эта запись лежит на сервере, к кторорому у cinic доступ на редактирование, но не на удаление. И оно работает!',1),(18,6,'Тестовая запись','Просто тестовая запись',1),(20,8,'Тест: addtest','Оборудование протестировано',1);
/*!40000 ALTER TABLE `db_record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db_server`
--

DROP TABLE IF EXISTS `db_server`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_server` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `net_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `protect_id` int(11) NOT NULL,
  `available` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_server`
--

LOCK TABLES `db_server` WRITE;
/*!40000 ALTER TABLE `db_server` DISABLE KEYS */;
INSERT INTO `db_server` VALUES (6,'RFID',20,1,2,1),(7,'Импланты',19,2,0,1),(8,'RFID1',20,2,0,1);
/*!40000 ALTER TABLE `db_server` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emojis`
--

DROP TABLE IF EXISTS `emojis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emojis` (
  `emoji_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pattern` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  PRIMARY KEY (`emoji_id`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emojis`
--

LOCK TABLES `emojis` WRITE;
/*!40000 ALTER TABLE `emojis` DISABLE KEYS */;
INSERT INTO `emojis` VALUES (1,':)','smile'),(2,'(&lt;','joy'),(3,':D','smiley'),(4,':(','worried'),(5,':relaxed:','relaxed'),(6,':P','stuck-out-tongue'),(7,':O','open-mouth'),(8,':/','confused'),(9,';)','wink'),(10,';(','sob'),(11,'B|','sunglasses'),(12,':disappointed:','disappointed'),(13,':yum:','yum'),(14,'^_^','grin'),(15,':no_mouth:','no-mouth'),(16,'*_*','heart-eyes'),(17,'*)','kissing-heart'),(18,'O:)','innocent'),(19,':angry:','angry'),(20,':rage:','rage'),(21,':smirk:','smirk'),(22,':flushed:','flushed'),(23,':satisfied:','satisfied'),(24,':relieved:','relieved'),(25,':sleeping:','sleeping'),(26,':stuck_out_tongue:','stuck-out-tongue'),(27,':stuck_out_tongue_closed_eyes:','stuck-out-tongue-closed-eyes'),(28,':frowning:','frowning'),(29,':anguished:','anguished'),(30,':open_mouth:','open-mouth'),(31,':grimacing:','grimacing'),(32,':hushed:','hushed'),(33,':expressionless:','expressionless'),(34,':unamused:','unamused'),(35,':sweat_smile:','sweat-smile'),(36,':sweat:','sweat'),(37,':confounded:','confounded'),(38,':weary:','weary'),(39,':pensive:','pensive'),(40,':fearful:','fearful'),(41,':cold_sweat:','cold-sweat'),(42,':persevere:','persevere'),(43,':cry:','cry'),(44,':astonished:','astonished'),(45,':scream:','scream'),(46,':mask:','mask'),(47,':tired_face:','tired-face'),(48,':triumph:','triumph'),(49,':dizzy_face:','dizzy-face'),(50,':imp:','imp'),(51,':smiling_imp:','smiling-imp'),(52,':neutral_face:','neutral-face'),(53,':alien:','alien'),(54,':yellow_heart:','yellow-heart'),(55,':blue_heart:','blue-heart'),(56,':blue_heart:','blue-heart'),(57,':heart:','heart'),(58,':green_heart:','green-heart'),(59,':broken_heart:','broken-heart'),(60,':heartbeat:','heartbeat'),(61,':heartpulse:','heartpulse'),(62,':two_hearts:','two-hearts'),(63,':revolving_hearts:','revolving-hearts'),(64,':cupid:','cupid'),(65,':sparkling_heart:','sparkling-heart'),(66,':sparkles:','sparkles'),(67,':star:','star'),(68,':star2:','star2'),(69,':dizzy:','dizzy'),(70,':boom:','boom'),(71,':exclamation:','exclamation'),(72,':anger:','anger'),(73,':question:','question'),(74,':grey_exclamation:','grey-exclamation'),(75,':grey_question:','grey-question'),(76,':zzz:','zzz'),(77,':dash:','dash'),(78,':sweat_drops:','sweat-drops'),(79,':notes:','notes'),(80,':musical_note:','musical-note'),(81,':fire:','fire'),(82,':poop:','poop'),(83,':thumbsup:','thumbsup'),(84,':thumbsdown:','thumbsdown'),(85,':ok_hand:','ok-hand'),(86,':punch:','punch'),(87,':fist:','fist'),(88,':v:','v'),(89,':wave:','wave'),(90,':hand:','hand'),(91,':raised_hand:','raised-hand'),(92,':open_hands:','open-hands'),(93,':point_up:','point-up'),(94,':point_down:','point-down'),(95,':point_left:','point-left'),(96,':point_right:','point-right'),(97,':raised_hands:','raised-hands'),(98,':pray:','pray'),(99,':clap:','clap'),(100,':muscle:','muscle'),(101,':runner:','runner'),(102,':couple:','couple'),(103,':family:','family'),(104,':two_men_holding_hands:','two-men-holding-hands'),(105,':two_women_holding_hands:','two-women-holding-hands'),(106,':dancer:','dancer'),(107,':dancers:','dancers'),(108,':ok_woman:','ok-woman'),(109,':no_good:','no-good'),(110,':information_desk_person:','information-desk-person'),(111,':bride_with_veil:','bride-with-veil'),(112,':couplekiss:','couplekiss'),(113,':couple_with_heart:','couple-with-heart'),(114,':nail_care:','nail-care'),(115,':boy:','boy'),(116,':girl:','girl'),(117,':woman:','woman'),(118,':man:','man'),(119,':baby:','baby'),(120,':older_woman:','older-woman'),(121,':older_man:','older-man'),(122,':cop:','cop'),(123,':angel:','angel'),(124,':princess:','princess'),(125,':smiley_cat:','smiley-cat'),(126,':smile_cat:','smile-cat'),(127,':heart_eyes_cat:','heart-eyes-cat'),(128,':kissing_cat:','kissing-cat'),(129,':smirk_cat:','smirk-cat'),(130,':scream_cat:','scream-cat'),(131,':crying_cat_face:','crying-cat-face'),(132,':joy_cat:','joy-cat'),(133,':pouting_cat:','pouting-cat'),(134,':japanese_ogre:','japanese-ogre'),(135,':see_no_evil:','see-no-evil'),(136,':hear_no_evil:','hear-no-evil'),(137,':speak_no_evil:','speak-no-evil'),(138,':guardsman:','guardsman'),(139,':skull:','skull'),(140,':feet:','feet'),(141,':lips:','lips'),(142,':kiss:','kiss'),(143,':droplet:','droplet'),(144,':ear:','ear'),(145,':eyes:','eyes'),(146,':nose:','nose'),(147,':tongue:','tongue'),(148,':love_letter:','love-letter'),(149,':speech_balloon:','speech-balloon'),(150,':thought_balloon:','thought-balloon'),(151,':sunny:','sunny');
/*!40000 ALTER TABLE `emojis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `event_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_privacy` enum('secret','closed','public') DEFAULT 'public',
  `event_admin` int(10) unsigned NOT NULL,
  `event_category` int(10) unsigned NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_location` varchar(255) DEFAULT NULL,
  `event_description` text NOT NULL,
  `event_start_date` datetime NOT NULL,
  `event_end_date` datetime NOT NULL,
  `event_cover` varchar(255) DEFAULT NULL,
  `event_cover_id` int(10) unsigned DEFAULT NULL,
  `event_album_covers` int(10) DEFAULT NULL,
  `event_album_timeline` int(10) DEFAULT NULL,
  `event_pinned_post` int(10) DEFAULT NULL,
  `event_invited` int(10) unsigned NOT NULL DEFAULT '0',
  `event_interested` int(10) unsigned NOT NULL DEFAULT '0',
  `event_going` int(10) unsigned NOT NULL DEFAULT '0',
  `event_date` datetime NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events_categories`
--

DROP TABLE IF EXISTS `events_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events_categories` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events_categories`
--

LOCK TABLES `events_categories` WRITE;
/*!40000 ALTER TABLE `events_categories` DISABLE KEYS */;
INSERT INTO `events_categories` VALUES (1,'Art'),(2,'Causes'),(3,'Crafts'),(4,'Dance'),(5,'Drinks'),(6,'Film'),(7,'Fitness'),(8,'Food'),(9,'Games'),(10,'Gardening'),(11,'Health'),(12,'Home'),(13,'Literature'),(14,'Music'),(15,'Networking'),(16,'Other'),(17,'Party'),(18,'Religion'),(19,'Shopping'),(20,'Sports'),(21,'Theater'),(22,'Wellness');
/*!40000 ALTER TABLE `events_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events_members`
--

DROP TABLE IF EXISTS `events_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events_members` (
  `event_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `is_invited` enum('0','1') DEFAULT '0',
  `is_interested` enum('0','1') DEFAULT '0',
  `is_going` enum('0','1') DEFAULT '0',
  UNIQUE KEY `group_id_user_id` (`event_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events_members`
--

LOCK TABLES `events_members` WRITE;
/*!40000 ALTER TABLE `events_members` DISABLE KEYS */;
/*!40000 ALTER TABLE `events_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `followings`
--

DROP TABLE IF EXISTS `followings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `followings` (
  `user_id` int(10) unsigned NOT NULL,
  `following_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `user_id_following_id` (`user_id`,`following_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `followings`
--

LOCK TABLES `followings` WRITE;
/*!40000 ALTER TABLE `followings` DISABLE KEYS */;
INSERT INTO `followings` VALUES (1,2),(1,4),(2,1),(3,4),(4,1),(4,2);
/*!40000 ALTER TABLE `followings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friends` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_one_id` int(10) unsigned NOT NULL,
  `user_two_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_one_id_user_two_id` (`user_one_id`,`user_two_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friends`
--

LOCK TABLES `friends` WRITE;
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;
INSERT INTO `friends` VALUES (3,1,2,1),(2,3,4,0),(5,4,1,1),(6,4,2,0);
/*!40000 ALTER TABLE `friends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game_players`
--

DROP TABLE IF EXISTS `game_players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `game_players` (
  `game_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `game_id_user_id` (`game_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game_players`
--

LOCK TABLES `game_players` WRITE;
/*!40000 ALTER TABLE `game_players` DISABLE KEYS */;
INSERT INTO `game_players` VALUES (1,1),(2,1);
/*!40000 ALTER TABLE `game_players` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `game_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `source` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (1,'hack','hack','hack.hplus.su',''),(2,'http://sngine.hplus.su/articles','http://sngine.hplus.su/articles','http://sngine.hplus.su/articles','');
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_privacy` enum('secret','closed','public') DEFAULT 'public',
  `group_admin` int(10) unsigned NOT NULL,
  `group_name` varchar(64) NOT NULL,
  `group_title` varchar(255) NOT NULL,
  `group_description` text NOT NULL,
  `group_picture` varchar(255) DEFAULT NULL,
  `group_picture_id` int(10) unsigned DEFAULT NULL,
  `group_cover` varchar(255) DEFAULT NULL,
  `group_cover_id` int(10) unsigned DEFAULT NULL,
  `group_album_pictures` int(10) DEFAULT NULL,
  `group_album_covers` int(10) DEFAULT NULL,
  `group_album_timeline` int(10) DEFAULT NULL,
  `group_pinned_post` int(10) DEFAULT NULL,
  `group_members` int(10) unsigned NOT NULL DEFAULT '0',
  `group_date` datetime NOT NULL,
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `username` (`group_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'public',1,'dewqdwedqw','dewqdwedqw','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-12-27 17:15:41');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups_members`
--

DROP TABLE IF EXISTS `groups_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups_members` (
  `group_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `approved` enum('0','1') NOT NULL DEFAULT '0',
  UNIQUE KEY `group_id_user_id` (`group_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups_members`
--

LOCK TABLES `groups_members` WRITE;
/*!40000 ALTER TABLE `groups_members` DISABLE KEYS */;
INSERT INTO `groups_members` VALUES (1,1,'1');
/*!40000 ALTER TABLE `groups_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hack_console`
--

DROP TABLE IF EXISTS `hack_console`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hack_console` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(10000) NOT NULL,
  `uid` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1159 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hack_console`
--

LOCK TABLES `hack_console` WRITE;
/*!40000 ALTER TABLE `hack_console` DISABLE KEYS */;
/*!40000 ALTER TABLE `hack_console` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hack_ice`
--

DROP TABLE IF EXISTS `hack_ice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hack_ice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(32) NOT NULL,
  `user_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` int(1) NOT NULL,
  `url` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hack_ice`
--

LOCK TABLES `hack_ice` WRITE;
/*!40000 ALTER TABLE `hack_ice` DISABLE KEYS */;
INSERT INTO `hack_ice` VALUES (1,'11111',1,1,'name',0,'url');
/*!40000 ALTER TABLE `hack_ice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hack_icebreaker`
--

DROP TABLE IF EXISTS `hack_icebreaker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hack_icebreaker` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(32) NOT NULL,
  `nums` varchar(200) NOT NULL,
  `op` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hack_icebreaker`
--

LOCK TABLES `hack_icebreaker` WRITE;
/*!40000 ALTER TABLE `hack_icebreaker` DISABLE KEYS */;
INSERT INTO `hack_icebreaker` VALUES (1,'dbd10','100 370 50 20','- - -  + + +',1,1),(2,'920d1','352 437 126 36 54 162 726 418 2 24 765 34 257','- - - - - - + + + + + +',1,1);
/*!40000 ALTER TABLE `hack_icebreaker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hack_progress`
--

DROP TABLE IF EXISTS `hack_progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hack_progress` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(32) NOT NULL,
  `ice_id` int(11) NOT NULL,
  `icebreaker_id` int(11) NOT NULL,
  `curent` int(11) NOT NULL,
  `nums` varchar(200) NOT NULL,
  `op` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hack_progress`
--

LOCK TABLES `hack_progress` WRITE;
/*!40000 ALTER TABLE `hack_progress` DISABLE KEYS */;
/*!40000 ALTER TABLE `hack_progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `market_categories`
--

DROP TABLE IF EXISTS `market_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `market_categories` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `market_categories`
--

LOCK TABLES `market_categories` WRITE;
/*!40000 ALTER TABLE `market_categories` DISABLE KEYS */;
INSERT INTO `market_categories` VALUES (1,'Apparel &amp; Accessories'),(2,'Autos &amp; Vehicles'),(3,'Baby &amp; Children&#039;s Products'),(4,'Beauty Products &amp; Services'),(5,'Computers &amp; Peripherals'),(6,'Consumer Electronics'),(7,'Dating Services'),(8,'Financial Services'),(9,'Gifts &amp; Occasions'),(10,'Home &amp; Garden'),(11,'Other');
/*!40000 ALTER TABLE `market_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'permission id',
  `name` varchar(64) NOT NULL COMMENT 'permission group name',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model`
--

LOCK TABLES `model` WRITE;
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
INSERT INTO `model` VALUES (0,'new'),(15,'Database'),(16,'research'),(17,'tech'),(19,'medic'),(20,'Hacking'),(21,'self'),(22,'Root');
/*!40000 ALTER TABLE `model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_map`
--

DROP TABLE IF EXISTS `model_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_map` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `model_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_2` (`user_id`,`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_map`
--

LOCK TABLES `model_map` WRITE;
/*!40000 ALTER TABLE `model_map` DISABLE KEYS */;
INSERT INTO `model_map` VALUES (25,1,15),(26,1,16),(27,1,17),(29,1,19),(30,1,20),(31,1,21),(32,1,22),(35,4,15),(34,4,16);
/*!40000 ALTER TABLE `model_map` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `models_device`
--

DROP TABLE IF EXISTS `models_device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `models_device` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `server_id` int(11) NOT NULL,
  `backup` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `models_device`
--

LOCK TABLES `models_device` WRITE;
/*!40000 ALTER TABLE `models_device` DISABLE KEYS */;
INSERT INTO `models_device` VALUES (0,'addtest',8,NULL);
/*!40000 ALTER TABLE `models_device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `models_research`
--

DROP TABLE IF EXISTS `models_research`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `models_research` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `rec1` int(11) NOT NULL,
  `rec2` int(11) NOT NULL,
  `rec3` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `models_research`
--

LOCK TABLES `models_research` WRITE;
/*!40000 ALTER TABLE `models_research` DISABLE KEYS */;
INSERT INTO `models_research` VALUES (1,'testadd',5,6,18),(2,'testedit',6,6,20);
/*!40000 ALTER TABLE `models_research` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `models_rfid`
--

DROP TABLE IF EXISTS `models_rfid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `models_rfid` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `rfid` varchar(100) NOT NULL,
  `model_id` int(11) NOT NULL,
  `record_id` int(11) NOT NULL,
  `manual_edit` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `models_rfid`
--

LOCK TABLES `models_rfid` WRITE;
/*!40000 ALTER TABLE `models_rfid` DISABLE KEYS */;
INSERT INTO `models_rfid` VALUES (7,'1039485010',16,18,1);
/*!40000 ALTER TABLE `models_rfid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `notification_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `to_user_id` int(10) unsigned NOT NULL,
  `from_user_id` int(10) unsigned NOT NULL,
  `action` varchar(32) NOT NULL,
  `node_type` varchar(32) NOT NULL,
  `node_url` varchar(255) NOT NULL,
  `notify_id` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `seen` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`notification_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (1,1,3,'friend_add','','Jopa','','2017-12-30 00:29:29','1'),(2,1,3,'follow','','','','2017-12-30 00:29:29','1'),(3,4,3,'friend_add','','Jopa','','2017-12-30 00:29:34','1'),(4,4,3,'follow','','','','2017-12-30 00:29:34','1'),(5,3,1,'friend_accept','','cinic','','2018-01-24 18:25:51','0'),(7,2,1,'friend_add','','cinic','','2018-02-26 19:06:50','0'),(8,2,1,'follow','','','','2018-02-26 19:06:50','0'),(9,3,1,'friend_add','','cinic','','2018-03-05 16:29:50','0'),(11,3,1,'like','post','7','','2018-03-05 17:41:16','0'),(14,1,2,'friend_accept','','test','','2018-04-15 21:13:22','1'),(13,3,1,'like','post','8','','2018-03-05 19:18:39','0'),(15,1,2,'follow','','','','2018-04-15 21:13:22','1'),(16,1,4,'friend_add','','Ttt','','2018-04-15 21:19:30','1'),(17,1,4,'follow','','','','2018-04-15 21:19:30','1'),(18,2,4,'friend_add','','Ttt','','2018-04-15 21:19:32','0'),(19,2,4,'follow','','','','2018-04-15 21:19:32','0'),(20,4,1,'friend_accept','','cinic','','2018-04-15 21:19:37','1'),(21,4,1,'follow','','','','2018-04-15 21:19:37','1');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `package_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(32) NOT NULL,
  `period_num` int(10) unsigned NOT NULL,
  `period` varchar(32) NOT NULL,
  `color` varchar(32) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `boost_posts_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `boost_posts` int(10) unsigned NOT NULL,
  `boost_pages_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `boost_pages` int(10) unsigned NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages_payments`
--

DROP TABLE IF EXISTS `packages_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages_payments` (
  `payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `payment_date` datetime NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_price` varchar(32) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages_payments`
--

LOCK TABLES `packages_payments` WRITE;
/*!40000 ALTER TABLE `packages_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `packages_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `page_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_admin` int(10) unsigned NOT NULL,
  `page_category` int(10) unsigned NOT NULL,
  `page_name` varchar(64) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_description` text NOT NULL,
  `page_picture` varchar(255) DEFAULT NULL,
  `page_picture_id` int(10) unsigned DEFAULT NULL,
  `page_cover` varchar(255) DEFAULT NULL,
  `page_cover_id` int(10) unsigned DEFAULT NULL,
  `page_album_pictures` int(10) unsigned DEFAULT NULL,
  `page_album_covers` int(10) unsigned DEFAULT NULL,
  `page_album_timeline` int(10) unsigned DEFAULT NULL,
  `page_pinned_post` int(10) unsigned DEFAULT NULL,
  `page_verified` enum('0','1') NOT NULL DEFAULT '0',
  `page_boosted` enum('0','1') NOT NULL DEFAULT '0',
  `page_likes` int(10) unsigned NOT NULL DEFAULT '0',
  `page_date` datetime NOT NULL,
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `username` (`page_name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,1,1,'tgrtgert','tgrtgert','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0',1,'2017-12-27 17:05:41'),(2,1,1,'ololosh','ololosh','test',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0',1,'2018-02-02 17:42:40');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages_categories`
--

DROP TABLE IF EXISTS `pages_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages_categories` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages_categories`
--

LOCK TABLES `pages_categories` WRITE;
/*!40000 ALTER TABLE `pages_categories` DISABLE KEYS */;
INSERT INTO `pages_categories` VALUES (1,'Service'),(2,'Musician/Band'),(3,'Brand or Product'),(4,'Company, Organization or Institution'),(5,'Artist, Public figure'),(6,'Entertainment'),(7,'Cause or Community');
/*!40000 ALTER TABLE `pages_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages_invites`
--

DROP TABLE IF EXISTS `pages_invites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages_invites` (
  `page_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `from_user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `page_id_user_id_from_user_id` (`page_id`,`user_id`,`from_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages_invites`
--

LOCK TABLES `pages_invites` WRITE;
/*!40000 ALTER TABLE `pages_invites` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages_invites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages_likes`
--

DROP TABLE IF EXISTS `pages_likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages_likes` (
  `page_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `page_id_user_id` (`page_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages_likes`
--

LOCK TABLES `pages_likes` WRITE;
/*!40000 ALTER TABLE `pages_likes` DISABLE KEYS */;
INSERT INTO `pages_likes` VALUES (1,1),(2,1);
/*!40000 ALTER TABLE `pages_likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` enum('user','page') NOT NULL,
  `in_group` enum('0','1') NOT NULL DEFAULT '0',
  `group_id` int(10) unsigned DEFAULT NULL,
  `in_event` enum('0','1') NOT NULL DEFAULT '0',
  `event_id` int(10) unsigned DEFAULT NULL,
  `in_wall` enum('0','1') NOT NULL DEFAULT '0',
  `wall_id` int(10) unsigned DEFAULT NULL,
  `post_type` varchar(32) NOT NULL,
  `origin_id` int(10) unsigned DEFAULT NULL,
  `time` datetime NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `privacy` varchar(32) NOT NULL,
  `text` longtext,
  `feeling_action` varchar(32) DEFAULT NULL,
  `feeling_value` varchar(255) DEFAULT NULL,
  `boosted` enum('0','1') NOT NULL DEFAULT '0',
  `likes` int(10) unsigned NOT NULL DEFAULT '0',
  `comments` int(10) unsigned NOT NULL DEFAULT '0',
  `shares` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'user','0',NULL,'0',NULL,'0',NULL,'article',NULL,'2017-12-26 19:30:15',NULL,'public',NULL,NULL,NULL,'0',0,0,0),(3,2,'user','0',NULL,'0',NULL,'0',NULL,'article',NULL,'2017-12-27 15:03:15',NULL,'public',NULL,NULL,NULL,'0',0,0,0),(22,1,'user','0',NULL,'0',NULL,'0',NULL,'profile_picture',NULL,'2018-03-05 20:10:22',NULL,'me',NULL,NULL,NULL,'0',0,0,0),(5,1,'page','0',0,'0',0,'0',0,'',NULL,'2017-12-27 17:06:35','','public','vtgrertgre','','','0',1,0,1),(7,3,'user','0',NULL,'0',NULL,'0',NULL,'profile_picture',NULL,'2017-12-30 00:28:35',NULL,'public',NULL,NULL,NULL,'0',1,0,0),(8,3,'user','0',0,'0',0,'0',0,'',NULL,'2017-12-30 00:31:04','','public','Что тут вообще происходит? :cold_sweat: ','Looking For','Глубокий поиск смысла','0',1,0,0),(9,3,'user','0',0,'0',0,'0',0,'',NULL,'2017-12-30 00:31:42','','public','Уруру','','','0',0,0,0),(10,1,'user','0',NULL,'0',NULL,'0',NULL,'article',NULL,'2018-02-02 17:43:31',NULL,'public',NULL,NULL,NULL,'0',0,0,0),(11,2,'page','0',0,'0',0,'0',0,'video',NULL,'2018-02-02 17:44:16','','public','','','','0',0,0,0),(21,1,'user','0',NULL,'0',NULL,'0',NULL,'profile_picture',NULL,'2018-03-05 20:10:18',NULL,'public',NULL,NULL,NULL,'0',0,0,0),(12,1,'user','0',0,'0',0,'0',0,'photos',NULL,'2018-03-05 17:09:18','','public','','','','0',0,0,0),(13,1,'user','0',0,'0',0,'0',0,'photos',NULL,'2018-03-05 17:11:31','','public','','','','0',1,0,0),(14,1,'user','0',0,'0',0,'0',0,'photos',NULL,'2018-03-05 17:12:08','','public','','','','0',0,0,0),(15,1,'user','0',0,'0',0,'0',0,'album',NULL,'2018-03-05 17:12:34','','public','','','','0',0,0,0),(16,1,'user','0',0,'0',0,'0',NULL,'album',NULL,'2018-03-05 17:12:59','','friends','',NULL,NULL,'0',1,0,0),(20,1,'user','0',NULL,'0',NULL,'0',NULL,'profile_cover',NULL,'2018-03-05 20:09:40',NULL,'public',NULL,NULL,NULL,'0',0,0,0),(17,1,'page','0',0,'0',0,'0',0,'',NULL,'2018-03-05 19:47:59','','public','111','','','0',0,0,0),(18,1,'page','0',0,'0',0,'0',0,'album',NULL,'2018-03-05 19:48:22','','public','','','','0',0,0,0),(25,1,'user','0',NULL,'0',NULL,'0',NULL,'profile_cover',NULL,'2018-03-05 20:11:45',NULL,'me',NULL,NULL,NULL,'0',0,0,0),(26,1,'user','0',0,'0',0,'0',0,'photos',NULL,'2018-04-15 20:06:57','','public','','','','0',0,0,0);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_articles`
--

DROP TABLE IF EXISTS `posts_articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_articles` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `cover` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `tags` text NOT NULL,
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_articles`
--

LOCK TABLES `posts_articles` WRITE;
/*!40000 ALTER TABLE `posts_articles` DISABLE KEYS */;
INSERT INTO `posts_articles` VALUES (1,1,'','Добавляем permissions в админку','&lt;p&gt;В данном случае на примере добавления permissions - прав пользователей для доступа к другим моделькам.&lt;/p&gt;\r\n&lt;p&gt;0) Создаём таблицу в базе:&lt;/p&gt;\r\n&lt;pre style=&quot;padding-left: 60px;&quot;&gt;CREATE TABLE permissions (&lt;br /&gt; permission_id int(10) NOT NULL AUTO_INCREMENT COMMENT &#039;permission id&#039;,&lt;br /&gt; permission_name varchar(64) NOT NULL COMMENT &#039;permission group name&#039;,&lt;br /&gt;PRIMARY KEY (permission_id)&lt;br /&gt;) ENGINE=InnoDB DEFAULT CHARSET=utf8;&lt;/pre&gt;\r\n&lt;p&gt;1) Добавить раздел в admin.php. Не забываем про всякие edit - для них тоже нужны ссылки. В нашем случае у нас будут базовый раздел со списком, страница добавления и страница редактирования.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;padding-left: 60px;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;padding-left: 60px;&quot;&gt;case &#039;permissions&#039;:&lt;br /&gt; // get content&lt;br /&gt; switch ($_GET[&#039;sub_view&#039;]) {&lt;br /&gt; case &#039;&#039;:&lt;br /&gt; // page header&lt;br /&gt; page_header(__(&quot;Admin&quot;).&quot; &amp;amp;rsaquo; &quot;.__(&quot;Permissions&quot;));&lt;/p&gt;\r\n&lt;p style=&quot;padding-left: 60px;&quot;&gt;// get data&lt;br /&gt; $get_rows = $db-&amp;gt;query(&quot;SELECT * FROM permissions&quot;) or _error(SQL_ERROR);&lt;br /&gt; if($get_rows-&amp;gt;num_rows &amp;gt; 0) {&lt;br /&gt; while($row = $get_rows-&amp;gt;fetch_assoc()) {&lt;br /&gt; $rows[] = $row;&lt;br /&gt; }&lt;br /&gt; }&lt;/p&gt;\r\n&lt;p style=&quot;padding-left: 60px;&quot;&gt;// assign variables&lt;br /&gt; $smarty-&amp;gt;assign(&#039;rows&#039;, $rows);&lt;br /&gt; break;&lt;/p&gt;\r\n&lt;p style=&quot;padding-left: 60px;&quot;&gt;case &#039;edit_permission&#039;:&lt;br /&gt; if(!isset($_GET[&#039;id&#039;]) || !is_numeric($_GET[&#039;id&#039;])) {&lt;br /&gt; _error(404);&lt;br /&gt; }&lt;/p&gt;\r\n&lt;p style=&quot;padding-left: 60px;&quot;&gt;// get data&lt;br /&gt; $get_data = $db-&amp;gt;query(sprintf(&quot;SELECT * FROM permissions WHERE permission_id = %s&quot;, secure($_GET[&#039;id&#039;], &#039;int&#039;) )) or _error(SQL_ERROR);&lt;br /&gt; if($get_data-&amp;gt;num_rows == 0) {&lt;br /&gt; _error(404);&lt;br /&gt; }&lt;br /&gt; $data = $get_data-&amp;gt;fetch_assoc();&lt;/p&gt;\r\n&lt;p style=&quot;padding-left: 60px;&quot;&gt;// assign variables&lt;br /&gt; $smarty-&amp;gt;assign(&#039;data&#039;, $data);&lt;/p&gt;\r\n&lt;p style=&quot;padding-left: 60px;&quot;&gt;// page header&lt;br /&gt; page_header(__(&quot;Admin&quot;).&quot; &amp;amp;rsaquo; &quot;.__(&quot;Permissions&quot;).&quot; &amp;amp;rsaquo; &quot;.$data[&#039;permission_name&#039;]);&lt;br /&gt; break;&lt;/p&gt;\r\n&lt;p style=&quot;padding-left: 60px;&quot;&gt;case &#039;add_permission&#039;:&lt;br /&gt; // page header&lt;br /&gt; page_header(__(&quot;Admin&quot;).&quot; &amp;amp;rsaquo; &quot;.__(&quot;Permissions&quot;).&quot; &amp;amp;rsaquo; &quot;.__(&quot;Add New&quot;));&lt;br /&gt; break;&lt;/p&gt;\r\n&lt;p style=&quot;padding-left: 60px;&quot;&gt;default:&lt;br /&gt; _error(404);&lt;br /&gt; break;&lt;br /&gt; }&lt;br /&gt; break;&lt;/p&gt;\r\n&lt;p&gt;2) Добавляем в меню - правим content/themes/default/templates/admin.tpl :&lt;/p&gt;\r\n&lt;p style=&quot;padding-left: 60px;&quot;&gt;&amp;lt;li {if $view == &quot;permissions&quot;}class=&quot;active&quot;{/if}&amp;gt;&lt;br /&gt; &amp;lt;a href=&quot;{$system[&#039;system_url&#039;]}/admincp/permissions&quot; class=&quot;no-border&quot;&amp;gt;&lt;br /&gt; &amp;lt;i class=&quot;fa fa-desktop fa-fw fa-lg pr10&quot;&amp;gt;&amp;lt;/i&amp;gt;{__(&quot;Permissions&quot;)}&lt;br /&gt; &amp;lt;span class=&quot;fa arrow&quot;&amp;gt;&amp;lt;/span&amp;gt;&lt;br /&gt; &amp;lt;/a&amp;gt;&lt;br /&gt; &amp;lt;ul&amp;gt;&lt;br /&gt; &amp;lt;li {if $view == &quot;permissions&quot; &amp;amp;&amp;amp; $sub_view == &quot;&quot;}class=&quot;active&quot;{/if}&amp;gt;&lt;br /&gt; &amp;lt;a href=&quot;{$system[&#039;system_url&#039;]}/admincp/permissions&quot;&amp;gt;&lt;br /&gt; &amp;lt;i class=&quot;fa fa-caret-right fa-fw pr10&quot;&amp;gt;&amp;lt;/i&amp;gt;{__(&quot;List Permissions&quot;)}&lt;br /&gt; &amp;lt;/a&amp;gt;&lt;br /&gt; &amp;lt;/li&amp;gt;&lt;br /&gt; &amp;lt;li {if $view == &quot;permissions&quot; &amp;amp;&amp;amp; $sub_view == &quot;add&quot;}class=&quot;active&quot;{/if}&amp;gt;&lt;br /&gt; &amp;lt;a href=&quot;{$system[&#039;system_url&#039;]}/admincp/permissions/add_permission&quot;&amp;gt;&lt;br /&gt; &amp;lt;i class=&quot;fa fa-caret-right fa-fw pr10&quot;&amp;gt;&amp;lt;/i&amp;gt;{__(&quot;Add New Permissions&quot;)}&lt;br /&gt; &amp;lt;/a&amp;gt;&lt;br /&gt; &amp;lt;/li&amp;gt;&lt;br /&gt; &amp;lt;/ul&amp;gt;&lt;br /&gt; &amp;lt;/li&amp;gt;&lt;/p&gt;\r\n&lt;p&gt;3) создаём шаблон страницы админки в теме - у нас это будет content/themes/default/templates/admin.permissions.tpl и правим как нам надо.&lt;/p&gt;\r\n&lt;p&gt;4) создаём скрипт ./includes/ajax/admin/permissions.php - на него в шаблоне&amp;nbsp;admin.permissions.tpl ведут все запросы.&lt;/p&gt;\r\n&lt;p&gt;5) для кнопки удаления из&amp;nbsp;admin.permissions.tpl не забываем добавить условие в includes/ajax/admin/delete.php:&lt;/p&gt;\r\n&lt;pre style=&quot;padding-left: 60px;&quot;&gt; case &#039;permissions&#039;:&lt;br /&gt; $db-&amp;gt;query(sprintf(&quot;DELETE FROM permissions WHERE permission_id = %s&quot;, secure($_POST[&#039;id&#039;], &#039;int&#039;) )) or _error(SQL_ERROR_THROWEN);&lt;br /&gt; break;&lt;/pre&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;На этом всё - раздел добавлен и мы можем добавлять, удалять и переименовывать группы прав. Основное всё, конечно, запихнуто в шаблон и php скрипт.&lt;/p&gt;','',58),(2,2,'','vkfhjvgjeh','&lt;p&gt;cvrfevsretfvg&lt;/p&gt;','',23),(3,3,'','tests fhjgfchewv','&lt;p&gt;test&lt;/p&gt;','',54),(4,4,'','page blog','&lt;p&gt;vhgfbkjhe&lt;/p&gt;','',8),(5,10,'photos/2018/02/sngine_fce2e944f73889d8d91c7e42153582fb.jpg','test page blog','&lt;p&gt;subj&lt;/p&gt;','',41),(6,19,'','11111','&lt;p&gt;111111111&lt;/p&gt;','',1);
/*!40000 ALTER TABLE `posts_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_audios`
--

DROP TABLE IF EXISTS `posts_audios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_audios` (
  `audio_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`audio_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_audios`
--

LOCK TABLES `posts_audios` WRITE;
/*!40000 ALTER TABLE `posts_audios` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts_audios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_comments`
--

DROP TABLE IF EXISTS `posts_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_comments` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `node_id` int(10) unsigned NOT NULL,
  `node_type` enum('post','photo','comment') NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` enum('user','page') NOT NULL,
  `text` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `time` datetime NOT NULL,
  `likes` int(10) unsigned NOT NULL DEFAULT '0',
  `replies` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_comments`
--

LOCK TABLES `posts_comments` WRITE;
/*!40000 ALTER TABLE `posts_comments` DISABLE KEYS */;
INSERT INTO `posts_comments` VALUES (1,2,'post',1,'user','111111','','2018-03-05 19:21:44',1,0);
/*!40000 ALTER TABLE `posts_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_comments_likes`
--

DROP TABLE IF EXISTS `posts_comments_likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_comments_likes` (
  `comment_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `comment_id_user_id` (`comment_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_comments_likes`
--

LOCK TABLES `posts_comments_likes` WRITE;
/*!40000 ALTER TABLE `posts_comments_likes` DISABLE KEYS */;
INSERT INTO `posts_comments_likes` VALUES (1,1);
/*!40000 ALTER TABLE `posts_comments_likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_files`
--

DROP TABLE IF EXISTS `posts_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_files` (
  `file_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_files`
--

LOCK TABLES `posts_files` WRITE;
/*!40000 ALTER TABLE `posts_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_hidden`
--

DROP TABLE IF EXISTS `posts_hidden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_hidden` (
  `post_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `post_id_user_id` (`post_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_hidden`
--

LOCK TABLES `posts_hidden` WRITE;
/*!40000 ALTER TABLE `posts_hidden` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts_hidden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_likes`
--

DROP TABLE IF EXISTS `posts_likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_likes` (
  `post_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `post_id_user_id` (`post_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_likes`
--

LOCK TABLES `posts_likes` WRITE;
/*!40000 ALTER TABLE `posts_likes` DISABLE KEYS */;
INSERT INTO `posts_likes` VALUES (2,1),(2,2),(3,1),(5,1),(6,1),(6,2),(7,1),(8,1),(13,1),(16,1);
/*!40000 ALTER TABLE `posts_likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_links`
--

DROP TABLE IF EXISTS `posts_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_links` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `source_url` tinytext NOT NULL,
  `source_host` varchar(255) NOT NULL,
  `source_title` varchar(255) NOT NULL,
  `source_text` text NOT NULL,
  `source_thumbnail` varchar(255) NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_links`
--

LOCK TABLES `posts_links` WRITE;
/*!40000 ALTER TABLE `posts_links` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_media`
--

DROP TABLE IF EXISTS `posts_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_media` (
  `media_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `source_url` text NOT NULL,
  `source_provider` varchar(255) NOT NULL,
  `source_type` varchar(255) NOT NULL,
  `source_title` varchar(255) DEFAULT NULL,
  `source_text` text,
  `source_html` text,
  PRIMARY KEY (`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_media`
--

LOCK TABLES `posts_media` WRITE;
/*!40000 ALTER TABLE `posts_media` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_photos`
--

DROP TABLE IF EXISTS `posts_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_photos` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `album_id` int(10) unsigned DEFAULT NULL,
  `source` varchar(255) NOT NULL,
  `likes` int(10) unsigned NOT NULL DEFAULT '0',
  `comments` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_photos`
--

LOCK TABLES `posts_photos` WRITE;
/*!40000 ALTER TABLE `posts_photos` DISABLE KEYS */;
INSERT INTO `posts_photos` VALUES (1,7,1,'photos/2017/12/sngine_24cc98018fce97dd448951c361d59c70.jpg',0,0),(2,12,2,'photos/2018/03/sngine_a04dba48da1987cf578334ca046770b0.png',1,0),(3,12,2,'photos/2018/03/sngine_df53f29c2b89e4e4d2c6b68a2e439697.png',0,0),(4,13,2,'photos/2018/03/sngine_3182cc796eb7c98737454fee9182fcc4.jpg',0,0),(5,13,2,'photos/2018/03/sngine_cb33b844d8a4c3e9db3e5a14261f577a.jpg',1,0),(6,14,2,'photos/2018/03/sngine_f6fff79258d09ba9aa2e06472f314d5f.jpg',0,0),(7,14,2,'photos/2018/03/sngine_e3c17bbfd527c71752992577d12600ca.jpg',0,0),(8,14,2,'photos/2018/03/sngine_d643036a5359e18c7a5498929a5b7bb0.jpg',0,0),(9,15,3,'photos/2018/03/sngine_6c7ca02ced998f5bc35752bf24c5d056.jpg',0,0),(10,16,3,'photos/2018/03/sngine_91f52255707779320e94c305b62cbdd8.gif',0,0),(11,18,4,'photos/2018/03/sngine_7bf3a51c840791bacd8a829e37d91792.gif',0,0),(18,26,2,'photos/2018/04/sngine_d4970f267648f083f07284d67c629f77.jpg',0,0),(14,22,6,'photos/2018/03/sngine_ee42ca6af2a8fe97cde541c680803947.gif',0,0),(17,25,5,'photos/2018/03/sngine_ab277a7930373d851950f698dd762549.jpg',0,0);
/*!40000 ALTER TABLE `posts_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_photos_albums`
--

DROP TABLE IF EXISTS `posts_photos_albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_photos_albums` (
  `album_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` enum('user','page') NOT NULL,
  `in_group` enum('0','1') NOT NULL DEFAULT '0',
  `group_id` int(10) unsigned DEFAULT NULL,
  `in_event` enum('0','1') NOT NULL DEFAULT '0',
  `event_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `privacy` enum('me','friends','public','custom') NOT NULL DEFAULT 'public',
  PRIMARY KEY (`album_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_photos_albums`
--

LOCK TABLES `posts_photos_albums` WRITE;
/*!40000 ALTER TABLE `posts_photos_albums` DISABLE KEYS */;
INSERT INTO `posts_photos_albums` VALUES (1,3,'user','0',NULL,'0',NULL,'Profile Pictures','public'),(2,1,'user','0',NULL,'0',NULL,'Timeline Photos','public'),(3,1,'user','0',0,'0',0,'111','public'),(4,1,'page','0',0,'0',0,'11111','public'),(5,1,'user','0',NULL,'0',NULL,'Cover Photos','public'),(6,1,'user','0',NULL,'0',NULL,'Profile Pictures','public');
/*!40000 ALTER TABLE `posts_photos_albums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_photos_likes`
--

DROP TABLE IF EXISTS `posts_photos_likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_photos_likes` (
  `photo_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `user_id_photo_id` (`user_id`,`photo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_photos_likes`
--

LOCK TABLES `posts_photos_likes` WRITE;
/*!40000 ALTER TABLE `posts_photos_likes` DISABLE KEYS */;
INSERT INTO `posts_photos_likes` VALUES (2,1),(5,1);
/*!40000 ALTER TABLE `posts_photos_likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_polls`
--

DROP TABLE IF EXISTS `posts_polls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_polls` (
  `poll_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `votes` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`poll_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_polls`
--

LOCK TABLES `posts_polls` WRITE;
/*!40000 ALTER TABLE `posts_polls` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts_polls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_polls_options`
--

DROP TABLE IF EXISTS `posts_polls_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_polls_options` (
  `option_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poll_id` int(10) unsigned NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`option_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_polls_options`
--

LOCK TABLES `posts_polls_options` WRITE;
/*!40000 ALTER TABLE `posts_polls_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts_polls_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_products`
--

DROP TABLE IF EXISTS `posts_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_products` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(32) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `location` varchar(255) NOT NULL,
  `available` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_products`
--

LOCK TABLES `posts_products` WRITE;
/*!40000 ALTER TABLE `posts_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_saved`
--

DROP TABLE IF EXISTS `posts_saved`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_saved` (
  `post_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `time` datetime NOT NULL,
  UNIQUE KEY `post_id_user_id` (`post_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_saved`
--

LOCK TABLES `posts_saved` WRITE;
/*!40000 ALTER TABLE `posts_saved` DISABLE KEYS */;
INSERT INTO `posts_saved` VALUES (5,1,'2018-02-26 19:08:33');
/*!40000 ALTER TABLE `posts_saved` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_videos`
--

DROP TABLE IF EXISTS `posts_videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_videos` (
  `video_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_videos`
--

LOCK TABLES `posts_videos` WRITE;
/*!40000 ALTER TABLE `posts_videos` DISABLE KEYS */;
INSERT INTO `posts_videos` VALUES (1,11,'videos/2018/02/sngine_7af0eeb2a97c895a8d7c90fc1c6920e9.mp4');
/*!40000 ALTER TABLE `posts_videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports` (
  `report_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `node_id` int(10) unsigned NOT NULL,
  `node_type` varchar(32) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports`
--

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `static_pages`
--

DROP TABLE IF EXISTS `static_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `static_pages` (
  `page_id` int(10) NOT NULL AUTO_INCREMENT,
  `page_url` varchar(64) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_text` text NOT NULL,
  `in_footer` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `page_url` (`page_url`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `static_pages`
--

LOCK TABLES `static_pages` WRITE;
/*!40000 ALTER TABLE `static_pages` DISABLE KEYS */;
INSERT INTO `static_pages` VALUES (1,'about','About','&lt;p&gt;\r\n                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n            &lt;/p&gt;\r\n            &lt;h3 class=&quot;text-info&quot;&gt;\r\n                Big Title\r\n            &lt;/h3&gt;\r\n            &lt;p&gt;\r\n                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n            &lt;/p&gt;\r\n            &lt;h3 class=&quot;text-info&quot;&gt;\r\n                Big Title\r\n            &lt;/h3&gt;\r\n            &lt;p&gt;\r\n               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n            &lt;/p&gt;','0'),(2,'terms','Terms','&lt;p&gt;\r\n    &lt;strong&gt;\r\n        We run this website and permits its use according to the following terms and conditions:\r\n    &lt;/strong&gt;\r\n&lt;/p&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    Basic Terms:\r\n&lt;/h3&gt;\r\n&lt;ol&gt;\r\n    &lt;li&gt;Using this website implies your acceptance of these conditions. If you do not fully accept them, your entry to this site will be considered unauthorized and you will have to stop using it immediately&lt;/li&gt;\r\n    &lt;li&gt;You must be 13 years or older to use this site.&lt;/li&gt;\r\n    &lt;li&gt;You are responsible for any activity that occurs under your screen name.&lt;/li&gt;\r\n    &lt;li&gt;You are responsible for keeping your account secure.&lt;/li&gt;\r\n    &lt;li&gt;You must not abuse, harass, threaten or intimidate other Sngine users.&lt;/li&gt;\r\n    &lt;li&gt;You are solely responsible for your conduct and any data, text, information, screen names, graphics, photos, profiles, audio and video clips, links (&quot;Content&quot;) that you submit, post, and display on the Sngine service.&lt;/li&gt;\r\n    &lt;li&gt;You must not modify, adapt or hack Sngine or modify another website so as to falsely imply that it is associated with Sngine&lt;/li&gt;\r\n    &lt;li&gt;You must not create or submit unwanted email to any Sngine members (&quot;Spam&quot;).&lt;/li&gt;\r\n    &lt;li&gt;You must not transmit any worms or viruses or any code of a destructive nature.&lt;/li&gt;\r\n    &lt;li&gt;You must not, in the use of Sngine, violate any laws in your jurisdiction (including but not limited to copyright laws).&lt;/li&gt;\r\n&lt;/ol&gt;\r\n&lt;p&gt;\r\n    Violation of any of these agreements will result in the termination of your Sngine account. While Sngine prohibits such conduct and content on its site, you understand and agree that Sngine cannot be responsible for the Content posted on its web site and you nonetheless may be exposed to such materials and that you use the Sngine service at your own risk.\r\n&lt;/p&gt;\r\n\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    General Conditions:\r\n&lt;/h3&gt;\r\n&lt;ol&gt;\r\n    &lt;li&gt;We reserve the right to modify or terminate the Sngine service for any reason, without notice at any time.&lt;/li&gt;\r\n    &lt;li&gt;We reserve the right to alter these Terms of Use at any time. If the alterations constitute a material change to the Terms of Use, we will notify you via internet mail according to the preference expressed on your account. What constitutes a &quot;material change&quot; will be determined at our sole discretion, in good faith and using common sense and reasonable judgement.&lt;/li&gt;\r\n    &lt;li&gt;We reserve the right to refuse service to anyone for any reason at any time.&lt;/li&gt;\r\n    &lt;li&gt;We may, but have no obligation to, remove Content and accounts containing Content that we determine in our sole discretion are unlawful, offensive, threatening, libelous, defamatory, obscene or otherwise objectionable or violates any party&#039;s intellectual property or these Terms of Use.&lt;/li&gt;\r\n    &lt;li&gt;Sngine service makes it possible to post images and text hosted on Sngine to outside websites. This use is accepted (and even encouraged!). However, pages on other websites which display data hosted on Sngine must provide a link back to Sngine.&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    Copyright (What&#039;s Yours is Yours):\r\n&lt;/h3&gt;\r\n&lt;ol&gt;\r\n    &lt;li&gt;We claim no intellectual property rights over the material you provide to the Sngine service. Your profile and materials uploaded remain yours. You can remove your profile at any time by deleting your account. This will also remove any text and images you have stored in the system.&lt;/li&gt;\r\n    &lt;li&gt;We encourage users to contribute their creations to the public domain or consider progressive licensing terms.&lt;/li&gt;\r\n&lt;/ol&gt;\r\n&lt;small&gt;\r\n    &lt;i&gt;Last updated on: Jan 29, 2016&lt;/i&gt;\r\n&lt;/small&gt;','0'),(3,'privacy','Privacy','&lt;p&gt;\r\n    We recognize that your privacy is very important and take it seriously. This Privacy Policy describes Sngine&#039;s policies and procedures on the collection, use and disclosure of your information when you use the Sngine Service. We will not use or share your information with anyone except as described in this Privacy Policy.\r\n&lt;/p&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    Information Collection and Use\r\n&lt;/h3&gt;\r\n&lt;p&gt;\r\n    We uses information we collect to analyze how the Service is used, diagnose service or technical problems, maintain security, personalize content, remember information to help you efficiently access your account, monitor aggregate metrics such as total number of visitors, traffic, and demographic patterns, and track User Content and users as necessary to comply with the Digital Millennium Copyright Act and other applicable laws.\r\n&lt;/p&gt;\r\n&lt;h4 class=&quot;text-danger&quot;&gt;\r\n    User-Provided Information:\r\n&lt;/h5&gt;\r\n&lt;p&gt;\r\n    You provide us information about yourself, such as your name and e-mail address, if you register for a member account with the Service. Your name and other information you choose to add to your profile will be available for public viewing on the Service. We may use your email address to send you Service-related notices. You can control receipt of certain Service-related messages on your Settings page. We may also use your contact information to send you marketing messages. If you do not want to receive such messages, you may opt out by following the instructions in the message. If you correspond with us by email, we may retain the content of your email messages, your email address and our responses.\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n    You also provide us information in User Content you post to the Service. Your posts and other contributions on the Service, and metadata about them (such as when you posted them), are publicly viewable on the Service, along with your name (unless the Service permits you to post anonymously). This information may be searched by search engines and be republished elsewhere on the Web in accordance with our Terms of Service.\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n    If you choose to use our invitation service to invite a friend to the Service, we will ask you for that person&#039;s email address and automatically send an email invitation. We stores this information to send this email, to register your friend if your invitation is accepted, and to track the success of our invitation service.\r\n&lt;/p&gt;\r\n&lt;h4 class=&quot;text-danger&quot;&gt;\r\n    Cookies:\r\n&lt;/h5&gt;\r\n&lt;p&gt;\r\n    When you visit the Service, we may send one or more &quot;cookies&quot; - small data files - to your computer to uniquely identify your browser and let Sngine help you log in faster and enhance your navigation through the site. A cookie may convey anonymous information about how you browse the Service to us, but does not collect personal information about you. A persistent cookie remains on your computer after you close your browser so that it can be used by your browser on subsequent visits to the Service. Persistent cookies can be removed by following your web browser&#039;s directions. A session cookie is temporary and disappears after you close your browser. You can reset your web browser to refuse all cookies or to indicate when a cookie is being sent. However, some features of the Service may not function properly if the ability to accept cookies is disabled.\r\n&lt;/p&gt;\r\n&lt;h4 class=&quot;text-danger&quot;&gt;\r\n    Log Files:\r\n&lt;/h5&gt;\r\n&lt;p&gt;\r\n    Log file information is automatically reported by your browser each time you access a web page. When you use the Service, our servers automatically record certain information that your web browser sends whenever you visit any website. These server logs may include information such as your web request, Internet Protocol (&quot;IP&quot;) address, browser type, referring / exit pages and URLs, number of clicks, domain names, landing pages, pages viewed, and other such information.\r\n&lt;/p&gt;\r\n&lt;h4 class=&quot;text-danger&quot;&gt;\r\n    Third Party Services:\r\n&lt;/h5&gt;\r\n&lt;p&gt;\r\n    We may use Google Analytics or Mixpanel to help understand use of the Service. Google Analytics and Mixpanel collect the information sent by your browser as part of a web page request, including cookies and your IP address. Google Analytics and Mixpanel also receive this information and their use of it is governed by their Privacy Policies.\r\n&lt;/p&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    How We Share Your Information\r\n&lt;/h3&gt;\r\n&lt;h4 class=&quot;text-danger&quot;&gt;\r\n    Personally Identifiable Information:\r\n&lt;/h5&gt;\r\n&lt;p&gt;\r\n    We may share your personally identifiable information with third parties for the purpose of providing the Service to you. If we do this, such third parties&#039; use of your information will be bound by this Privacy Policy. We may store personal information in locations outside the direct control of Sngine (for instance, on servers or databases co-located with hosting providers).\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n    We may share or disclose your information with your consent, such as if you choose to sign on to the Service through a third-party service. We cannot control third parties&#039; use of your information.\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n    Sngine may disclose your personal information if required to do so by law or subpoena or if we believe that it is reasonably necessary to comply with a law, regulation or legal request; to protect the safety of any person; to address fraud, security or technical issues; or to protect Sngine&#039;s rights or property.\r\n&lt;/p&gt;\r\n&lt;h4 class=&quot;text-danger&quot;&gt;\r\n    Non-Personally Identifiable Information:\r\n&lt;/h5&gt;\r\n&lt;p&gt;\r\n    We may share non-personally identifiable information (such as anonymous usage data, referring/exit pages and URLs, platform types, number of clicks, etc.) with interested third parties to help them understand the usage patterns for certain Sngine services.\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n    Sngine may allow third-party ad servers or ad networks to serve advertisements on the Service. These third-party ad servers or ad networks use technology to send, directly to your browser, the advertisements and links that appear on Sngine. They automatically receive your IP address when this happens. They may also use other technologies (such as cookies, JavaScript, or web beacons) to measure the effectiveness of their advertisements and to personalize the advertising content. Sngine does not provide any personally identifiable information to these third-party ad servers or ad networks without your consent. However, please note that if an advertiser asks Sngine to show an advertisement to a certain audience and you respond to that advertisement, the advertiser or ad server may conclude that you fit the description of the audience they are trying to reach. The Sngine Privacy Policy does not apply to, and we cannot control the activities of, third-party advertisers. Please consult the respective privacy policies of such advertisers for more information.\r\n&lt;/p&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    How We Protect Your Information\r\n&lt;/h3&gt;\r\n&lt;p&gt;\r\n    We uses commercially reasonable physical, managerial, and technical safeguards to preserve the integrity and security of your personal information. We cannot, however, ensure or warrant the security of any information you transmit to Sngine or guarantee that your information on the Service may not be accessed, disclosed, altered, or destroyed by breach of any of our physical, technical, or managerial safeguards.\r\n&lt;/p&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    Your Choices About Your Information\r\n&lt;/h3&gt;\r\n&lt;p&gt;\r\n    You may, of course, decline to submit personally identifiable information through the Service, in which case Sngine may not be able to provide certain services to you. You may update or correct your account information and email preferences at any time by logging in to your account.\r\n&lt;/p&gt;\r\n\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    Links to Other Web Sites\r\n&lt;/h3&gt;\r\n&lt;p&gt;\r\n    We are not responsible for the practices employed by websites linked to or from the Service, nor the information or content contained therein. Please remember that when you use a link to go from the Service to another website, our Privacy Policy is no longer in effect. Your browsing and interaction on any other website, including those that have a link on our website, is subject to that website&#039;s own rules and policies.\r\n&lt;/p&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    Changes to Our Privacy Policy\r\n&lt;/h3&gt;\r\n&lt;p&gt;\r\n    If we change our privacy policies and procedures, we will post those changes on this page to keep you aware of what information we collect, how we use it and under what circumstances we may disclose it. Changes to this Privacy Policy are effective when they are posted on this page.\r\n&lt;/p&gt;\r\n&lt;small&gt;\r\n    &lt;i&gt;Last updated on: Jan 29, 2016&lt;/i&gt;\r\n&lt;/small&gt;','0');
/*!40000 ALTER TABLE `static_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stickers`
--

DROP TABLE IF EXISTS `stickers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stickers` (
  `sticker_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`sticker_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stickers`
--

LOCK TABLES `stickers` WRITE;
/*!40000 ALTER TABLE `stickers` DISABLE KEYS */;
INSERT INTO `stickers` VALUES (1,'stickers/1.png'),(2,'stickers/2.png'),(3,'stickers/3.png'),(4,'stickers/4.png'),(5,'stickers/5.png'),(6,'stickers/6.png'),(7,'stickers/7.png'),(8,'stickers/8.png'),(9,'stickers/9.png'),(10,'stickers/10.png'),(11,'stickers/11.png'),(12,'stickers/12.png'),(13,'stickers/13.png'),(14,'stickers/14.png'),(15,'stickers/15.png'),(16,'stickers/16.png'),(17,'stickers/17.png'),(18,'stickers/18.png');
/*!40000 ALTER TABLE `stickers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stories`
--

DROP TABLE IF EXISTS `stories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stories` (
  `story_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `text` longtext,
  `time` datetime NOT NULL,
  PRIMARY KEY (`story_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stories`
--

LOCK TABLES `stories` WRITE;
/*!40000 ALTER TABLE `stories` DISABLE KEYS */;
/*!40000 ALTER TABLE `stories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stories_media`
--

DROP TABLE IF EXISTS `stories_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stories_media` (
  `media_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `story_id` int(10) unsigned NOT NULL,
  `source` varchar(255) NOT NULL,
  `is_photo` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stories_media`
--

LOCK TABLES `stories_media` WRITE;
/*!40000 ALTER TABLE `stories_media` DISABLE KEYS */;
/*!40000 ALTER TABLE `stories_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_languages`
--

DROP TABLE IF EXISTS `system_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system_languages` (
  `language_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `flag_icon` varchar(32) NOT NULL,
  `dir` enum('LTR','RTL') NOT NULL,
  `default` enum('0','1') NOT NULL,
  `enabled` enum('0','1') NOT NULL,
  PRIMARY KEY (`language_id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system_languages`
--

LOCK TABLES `system_languages` WRITE;
/*!40000 ALTER TABLE `system_languages` DISABLE KEYS */;
INSERT INTO `system_languages` VALUES (1,'en_us','English','us','LTR','0','1'),(10,'ru_ru','Russian','ru','LTR','1','1');
/*!40000 ALTER TABLE `system_languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_options`
--

DROP TABLE IF EXISTS `system_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system_options` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_public` enum('0','1') NOT NULL DEFAULT '1',
  `system_live` enum('0','1') NOT NULL DEFAULT '1',
  `system_message` text NOT NULL,
  `system_title` varchar(255) NOT NULL DEFAULT 'Sngine',
  `system_description` text NOT NULL,
  `system_keywords` text NOT NULL,
  `system_email` varchar(255) DEFAULT NULL,
  `contact_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `directory_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `pages_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `groups_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `events_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `blogs_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `market_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `games_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `daytime_msg_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `verification_requests` enum('0','1') NOT NULL DEFAULT '1',
  `profile_notification_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `stories_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `wall_posts_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `social_share_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `smart_yt_player` enum('0','1') NOT NULL DEFAULT '1',
  `geolocation_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `geolocation_key` varchar(255) DEFAULT NULL,
  `default_privacy` enum('public','friends','me') NOT NULL DEFAULT 'friends',
  `registration_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `registration_type` enum('free','paid') NOT NULL DEFAULT 'free',
  `packages_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `activation_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `activation_type` enum('email','sms') NOT NULL DEFAULT 'email',
  `age_restriction` enum('0','1') NOT NULL DEFAULT '0',
  `minimum_age` tinyint(1) unsigned DEFAULT NULL,
  `getting_started` enum('0','1') NOT NULL DEFAULT '1',
  `delete_accounts_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `max_accounts` int(10) unsigned NOT NULL DEFAULT '0',
  `social_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `facebook_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `facebook_appid` varchar(255) DEFAULT NULL,
  `facebook_secret` varchar(255) DEFAULT NULL,
  `twitter_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `twitter_appid` varchar(255) DEFAULT NULL,
  `twitter_secret` varchar(255) DEFAULT NULL,
  `google_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `google_appid` varchar(255) DEFAULT NULL,
  `google_secret` varchar(255) DEFAULT NULL,
  `instagram_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `instagram_appid` varchar(255) DEFAULT NULL,
  `instagram_secret` varchar(255) DEFAULT NULL,
  `linkedin_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `linkedin_appid` varchar(255) DEFAULT NULL,
  `linkedin_secret` varchar(255) DEFAULT NULL,
  `vkontakte_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `vkontakte_appid` varchar(255) DEFAULT NULL,
  `vkontakte_secret` varchar(255) DEFAULT NULL,
  `email_smtp_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `email_smtp_authentication` enum('0','1') NOT NULL DEFAULT '1',
  `email_smtp_ssl` enum('0','1') NOT NULL DEFAULT '0',
  `email_smtp_server` varchar(255) DEFAULT NULL,
  `email_smtp_port` varchar(255) DEFAULT NULL,
  `email_smtp_username` varchar(255) DEFAULT NULL,
  `email_smtp_password` varchar(255) DEFAULT NULL,
  `email_smtp_setfrom` varchar(255) DEFAULT NULL,
  `email_notifications` enum('0','1') NOT NULL DEFAULT '1',
  `email_post_likes` enum('0','1') NOT NULL DEFAULT '1',
  `email_post_comments` enum('0','1') NOT NULL DEFAULT '1',
  `email_post_shares` enum('0','1') NOT NULL DEFAULT '1',
  `email_wall_posts` enum('0','1') NOT NULL DEFAULT '1',
  `email_mentions` enum('0','1') NOT NULL DEFAULT '1',
  `email_profile_visits` enum('0','1') NOT NULL DEFAULT '1',
  `email_friend_requests` enum('0','1') NOT NULL DEFAULT '1',
  `twilio_sid` varchar(255) DEFAULT NULL,
  `twilio_token` varchar(255) DEFAULT NULL,
  `twilio_phone` varchar(255) DEFAULT NULL,
  `system_phone` varchar(255) DEFAULT NULL,
  `chat_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `chat_status_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `s3_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `s3_bucket` varchar(255) DEFAULT NULL,
  `s3_region` varchar(255) DEFAULT NULL,
  `s3_key` varchar(255) DEFAULT NULL,
  `s3_secret` varchar(255) DEFAULT NULL,
  `uploads_directory` varchar(255) NOT NULL DEFAULT 'content/uploads',
  `uploads_prefix` varchar(255) DEFAULT 'sngine',
  `max_avatar_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `max_cover_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `photos_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `max_photo_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `videos_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `max_video_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `video_extensions` text NOT NULL,
  `audio_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `max_audio_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `audio_extensions` text NOT NULL,
  `file_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `max_file_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `file_extensions` text NOT NULL,
  `censored_words_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `censored_words` text NOT NULL,
  `reCAPTCHA_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `reCAPTCHA_site_key` varchar(255) DEFAULT NULL,
  `reCAPTCHA_secret_key` varchar(255) DEFAULT NULL,
  `session_hash` varchar(255) NOT NULL,
  `paypal_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `paypal_mode` enum('live','sandbox') NOT NULL DEFAULT 'sandbox',
  `paypal_id` varchar(255) DEFAULT NULL,
  `paypal_secret` varchar(255) DEFAULT NULL,
  `creditcard_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `alipay_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `bitcoin_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `stripe_mode` enum('live','test') NOT NULL DEFAULT 'test',
  `stripe_test_secret` varchar(255) DEFAULT NULL,
  `stripe_test_publishable` varchar(255) DEFAULT NULL,
  `stripe_live_secret` varchar(255) DEFAULT NULL,
  `stripe_live_publishable` varchar(255) DEFAULT NULL,
  `system_currency` varchar(64) DEFAULT 'USD',
  `data_heartbeat` int(10) unsigned NOT NULL DEFAULT '5',
  `chat_heartbeat` int(10) unsigned NOT NULL DEFAULT '5',
  `offline_time` int(10) unsigned NOT NULL DEFAULT '10',
  `min_results` int(10) unsigned NOT NULL DEFAULT '5',
  `max_results` int(10) unsigned NOT NULL DEFAULT '10',
  `min_results_even` int(10) unsigned NOT NULL DEFAULT '6',
  `max_results_even` int(10) unsigned NOT NULL DEFAULT '12',
  `analytics_code` text NOT NULL,
  `system_logo` varchar(255) DEFAULT NULL,
  `system_wallpaper_default` enum('0','1') NOT NULL DEFAULT '1',
  `system_wallpaper` varchar(255) DEFAULT NULL,
  `system_random_profiles` enum('0','1') NOT NULL DEFAULT '1',
  `system_favicon_default` enum('0','1') NOT NULL DEFAULT '1',
  `system_favicon` varchar(255) DEFAULT NULL,
  `system_ogimage_default` enum('0','1') NOT NULL DEFAULT '1',
  `system_ogimage` varchar(255) DEFAULT NULL,
  `css_customized` enum('0','1') NOT NULL DEFAULT '0',
  `css_background` varchar(32) DEFAULT NULL,
  `css_link_color` varchar(32) DEFAULT NULL,
  `css_header` varchar(32) DEFAULT NULL,
  `css_header_search` varchar(32) DEFAULT NULL,
  `css_header_search_color` varchar(32) DEFAULT NULL,
  `css_btn_primary` varchar(32) DEFAULT NULL,
  `css_menu_background` varchar(32) DEFAULT NULL,
  `css_custome_css` text NOT NULL,
  `affiliates_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `affiliate_type` enum('registration','packages') NOT NULL DEFAULT 'registration',
  `affiliate_payment_method` enum('paypal','skrill','both') NOT NULL DEFAULT 'both',
  `affiliates_min_withdrawal` int(10) unsigned NOT NULL DEFAULT '50',
  `affiliates_per_user` varchar(32) NOT NULL DEFAULT '0.1',
  `models_enabled` enum('0','1','','') NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system_options`
--

LOCK TABLES `system_options` WRITE;
/*!40000 ALTER TABLE `system_options` DISABLE KEYS */;
INSERT INTO `system_options` VALUES (1,'1','1','','H+ [Babylon project]','','','cinic@hplus.su','0','0','0','1','0','1','0','1','0','0','0','0','1','0','0','0','','public','1','free','0','1','email','0',13,'1','1',0,'0','0',NULL,NULL,'0',NULL,NULL,'0',NULL,NULL,'0',NULL,NULL,'0',NULL,NULL,'0',NULL,NULL,'0','0','0',NULL,NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,'1','1','0',NULL,NULL,NULL,NULL,'content/uploads','sngine',5120,5120,'1',5120,'1',5120,'mp4, mov','1',512000,'mp3, wav','1',5120,'txt, zip','1','pussy,fuck,shit,asshole,dick,tits,boobs','0',NULL,NULL,'3jUZqgEP2-2Vm37-4ijMB-2Rlie-2XK67-3a32cb6806e4','0','sandbox','','','0','0','0','test',NULL,NULL,NULL,NULL,'USD',5,5,10,5,10,6,12,'','','0','','0','0','','0','','0','#444d46','#97e0b0','','','','','','','0','registration','both',50,'0.10','1');
/*!40000 ALTER TABLE `system_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_themes`
--

DROP TABLE IF EXISTS `system_themes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system_themes` (
  `theme_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `default` enum('0','1') NOT NULL,
  PRIMARY KEY (`theme_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system_themes`
--

LOCK TABLES `system_themes` WRITE;
/*!40000 ALTER TABLE `system_themes` DISABLE KEYS */;
INSERT INTO `system_themes` VALUES (1,'default','1');
/*!40000 ALTER TABLE `system_themes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group` tinyint(10) unsigned NOT NULL DEFAULT '3',
  `user_name` varchar(64) NOT NULL,
  `user_email` varchar(64) NOT NULL,
  `user_phone` varchar(64) DEFAULT NULL,
  `user_password` varchar(64) NOT NULL,
  `user_activated` enum('0','1') NOT NULL DEFAULT '0',
  `user_activation_key` varchar(64) DEFAULT NULL,
  `user_reseted` enum('0','1') NOT NULL DEFAULT '0',
  `user_reset_key` varchar(64) DEFAULT NULL,
  `user_subscribed` enum('0','1') NOT NULL DEFAULT '0',
  `user_package` int(10) unsigned DEFAULT NULL,
  `user_subscription_date` datetime DEFAULT NULL,
  `user_boosted_posts` int(10) unsigned NOT NULL DEFAULT '0',
  `user_boosted_pages` int(10) unsigned NOT NULL DEFAULT '0',
  `user_started` enum('0','1') NOT NULL DEFAULT '0',
  `user_verified` enum('0','1') NOT NULL DEFAULT '0',
  `user_banned` enum('0','1') NOT NULL DEFAULT '0',
  `user_live_requests_counter` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_requests_lastid` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_messages_counter` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_messages_lastid` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_notifications_counter` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_notifications_lastid` int(10) unsigned NOT NULL DEFAULT '0',
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) DEFAULT NULL,
  `user_gender` enum('male','female') NOT NULL,
  `user_picture` varchar(255) DEFAULT NULL,
  `user_picture_id` int(10) unsigned DEFAULT NULL,
  `user_cover` varchar(255) DEFAULT NULL,
  `user_cover_id` int(10) unsigned DEFAULT NULL,
  `user_album_pictures` int(10) unsigned DEFAULT NULL,
  `user_album_covers` int(10) unsigned DEFAULT NULL,
  `user_album_timeline` int(10) unsigned DEFAULT NULL,
  `user_pinned_post` int(10) unsigned DEFAULT NULL,
  `user_registered` datetime DEFAULT NULL,
  `user_last_login` datetime DEFAULT NULL,
  `user_birthdate` date DEFAULT NULL,
  `user_relationship` varchar(255) DEFAULT NULL,
  `user_biography` text,
  `user_website` varchar(255) DEFAULT NULL,
  `user_work_title` varchar(255) DEFAULT NULL,
  `user_work_place` varchar(255) DEFAULT NULL,
  `user_current_city` varchar(255) DEFAULT NULL,
  `user_hometown` varchar(255) DEFAULT NULL,
  `user_edu_major` varchar(255) DEFAULT NULL,
  `user_edu_school` varchar(255) DEFAULT NULL,
  `user_edu_class` varchar(255) DEFAULT NULL,
  `user_social_facebook` varchar(255) DEFAULT NULL,
  `user_social_twitter` varchar(255) DEFAULT NULL,
  `user_social_google` varchar(255) DEFAULT NULL,
  `user_social_youtube` varchar(255) DEFAULT NULL,
  `user_social_instagram` varchar(255) DEFAULT NULL,
  `user_social_linkedin` varchar(255) DEFAULT NULL,
  `user_social_vkontakte` varchar(255) DEFAULT NULL,
  `user_chat_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `user_privacy_wall` enum('me','friends','public') NOT NULL DEFAULT 'friends',
  `user_privacy_birthdate` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_relationship` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_basic` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_work` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_location` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_education` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_other` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_friends` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_photos` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_pages` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_groups` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_events` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `email_post_likes` enum('0','1') NOT NULL DEFAULT '1',
  `email_post_comments` enum('0','1') NOT NULL DEFAULT '1',
  `email_post_shares` enum('0','1') NOT NULL DEFAULT '1',
  `email_wall_posts` enum('0','1') NOT NULL DEFAULT '1',
  `email_mentions` enum('0','1') NOT NULL DEFAULT '1',
  `email_profile_visits` enum('0','1') NOT NULL DEFAULT '1',
  `email_friend_requests` enum('0','1') NOT NULL DEFAULT '1',
  `facebook_connected` enum('0','1') NOT NULL DEFAULT '0',
  `facebook_id` varchar(255) DEFAULT NULL,
  `twitter_connected` enum('0','1') NOT NULL DEFAULT '0',
  `twitter_id` varchar(255) DEFAULT NULL,
  `google_connected` enum('0','1') NOT NULL DEFAULT '0',
  `google_id` varchar(255) DEFAULT NULL,
  `instagram_connected` enum('0','1') NOT NULL DEFAULT '0',
  `instagram_id` varchar(255) DEFAULT NULL,
  `linkedin_connected` enum('0','1') NOT NULL DEFAULT '0',
  `linkedin_id` varchar(255) DEFAULT NULL,
  `vkontakte_connected` enum('0','1') NOT NULL DEFAULT '0',
  `vkontakte_id` varchar(255) DEFAULT NULL,
  `user_referrer_id` int(10) DEFAULT NULL,
  `user_affiliate_balance` varchar(64) NOT NULL DEFAULT '0',
  `notifications_sound` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `facebook_id` (`facebook_id`),
  UNIQUE KEY `twitter_id` (`twitter_id`),
  UNIQUE KEY `google_id` (`google_id`),
  UNIQUE KEY `linkedin_id` (`linkedin_id`),
  UNIQUE KEY `vkontakte_id` (`vkontakte_id`),
  UNIQUE KEY `instagram_id` (`instagram_id`),
  UNIQUE KEY `user_phone` (`user_phone`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'cinic','cinic@hplus.su',NULL,'$2y$10$GpUnREGAcGYU/7IXkmRKluTiTKfUevDmPd.GLNwHqBDuYytfoxsO.','1',NULL,'0',NULL,'0',NULL,NULL,0,0,'1','1','0',0,0,0,36,0,0,'cinic',NULL,'male','photos/2018/03/sngine_ee42ca6af2a8fe97cde541c680803947.gif',14,'photos/2018/03/sngine_ab277a7930373d851950f698dd762549.jpg',17,6,5,2,NULL,'2017-12-20 16:19:24','2018-04-17 12:19:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','friends','public','public','public','public','public','public','public','public','public','public','public','public','1','1','1','1','1','1','1','0',NULL,'0',NULL,'0',NULL,'0',NULL,'0',NULL,'0',NULL,NULL,'0','1'),(2,1,'test','test@hplus.su',NULL,'$2y$10$jYV7hmn2AJZr8q60YpUlwOa73c0I2a7F4K1FSLdt4iX/fvaTjlWsW','1','6bab3a2f35e155d8b48daeba33298f62','0',NULL,'0',NULL,NULL,0,0,'1','1','0',1,0,0,18,4,0,'Test','Test','male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-12-27 15:02:24','2018-04-15 21:18:02',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','friends','public','public','public','public','public','public','public','public','public','public','public','public','1','1','1','1','1','1','1','0',NULL,'0',NULL,'0',NULL,'0',NULL,'0',NULL,'0',NULL,NULL,'0','1'),(3,3,'Jopa','lyth@mailinator.com',NULL,'$2y$10$.A36AiUg0rfGqt7jyTKIL.0Dq2T6pc92oav4f8lGOsdafBy0O5CL6','1','2cdc298cc542ac70fd620a2f0bd0dd87','0',NULL,'0',NULL,NULL,0,0,'1','0','0',0,0,0,5,3,0,'Strega','Lyth','female','photos/2017/12/sngine_24cc98018fce97dd448951c361d59c70.jpg',1,NULL,NULL,1,NULL,NULL,NULL,'2017-12-30 00:09:39','2018-01-02 15:08:29',NULL,NULL,NULL,NULL,'Смерть','Жопа','Spb','1983','Сатана','Пизданога','Ногапизда',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','friends','public','public','public','public','public','public','public','public','public','public','public','public','1','1','1','1','1','1','1','0',NULL,'0',NULL,'0',NULL,'0',NULL,'0',NULL,'0',NULL,NULL,'0','1'),(4,3,'Ttt','ttttttt@mailinator.com',NULL,'$2y$10$gPHpKpETgs61SJUw5o5LFekuQIM2YI7dFxsTkJJSea9tlH7DrRMG2','1','f1921411d05d4a69959ef94bb5b8554f','0',NULL,'0',NULL,NULL,0,0,'1','0','0',0,0,1,36,0,0,'Tester','Tester','male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-12-30 00:13:21','2018-04-15 21:44:00',NULL,NULL,NULL,NULL,'Christmas Tree','Main Square','Maputu','Maputu','Very high','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','friends','public','public','public','public','public','public','public','public','public','public','public','public','1','1','1','1','1','1','1','0',NULL,'0',NULL,'0',NULL,'0',NULL,'0',NULL,'0',NULL,NULL,'0','1'),(5,3,'Alex','levius@rambler.ru',NULL,'$2y$10$JRLadu4X/NxdxReKydlM/ut5wDhTI2nljQUgDkTSP5.MNHCslIp86','0','824f0312c23200a32fa3c7c94cbf5a37','0',NULL,'0',NULL,NULL,0,0,'1','0','0',0,0,0,0,0,0,'Alex','Road','male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05 19:46:30','2018-04-18 00:56:56',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','friends','public','public','public','public','public','public','public','public','public','public','public','public','1','1','1','1','1','1','1','0',NULL,'0',NULL,'0',NULL,'0',NULL,'0',NULL,'0',NULL,NULL,'0','1'),(6,3,'ololosh','5e5beaa0b582cb930b16',NULL,'$2y$10$Xs//wVCsoGv/feMecJCOle96X.vOIotEtJu1D76ZmkUAFDAXcUIS6','1',NULL,'0',NULL,'0',NULL,NULL,0,0,'0','1','0',0,0,0,0,0,0,'',NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-04-15 21:50:04',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','friends','public','public','public','public','public','public','public','public','public','public','public','public','1','1','1','1','1','1','1','0',NULL,'0',NULL,'0',NULL,'0',NULL,'0',NULL,'0',NULL,NULL,'0','1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_blocks`
--

DROP TABLE IF EXISTS `users_blocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_blocks` (
  `user_id` int(10) unsigned NOT NULL,
  `blocked_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `user_id_blocked_id` (`user_id`,`blocked_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_blocks`
--

LOCK TABLES `users_blocks` WRITE;
/*!40000 ALTER TABLE `users_blocks` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_blocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_custom_fields`
--

DROP TABLE IF EXISTS `users_custom_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_custom_fields` (
  `user_id` int(10) unsigned NOT NULL,
  `field_id` int(10) unsigned NOT NULL,
  `value` text NOT NULL,
  UNIQUE KEY `user_id_field_id` (`user_id`,`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_custom_fields`
--

LOCK TABLES `users_custom_fields` WRITE;
/*!40000 ALTER TABLE `users_custom_fields` DISABLE KEYS */;
INSERT INTO `users_custom_fields` VALUES (1,1,'2');
/*!40000 ALTER TABLE `users_custom_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_online`
--

DROP TABLE IF EXISTS `users_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_online` (
  `user_id` int(10) unsigned NOT NULL,
  `last_seen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `UserID` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_online`
--

LOCK TABLES `users_online` WRITE;
/*!40000 ALTER TABLE `users_online` DISABLE KEYS */;
INSERT INTO `users_online` VALUES (1,'2018-04-20 04:54:38');
/*!40000 ALTER TABLE `users_online` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_polls_options`
--

DROP TABLE IF EXISTS `users_polls_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_polls_options` (
  `user_id` int(10) unsigned NOT NULL,
  `poll_id` int(10) unsigned NOT NULL,
  `option_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `user_id_poll_id` (`user_id`,`poll_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_polls_options`
--

LOCK TABLES `users_polls_options` WRITE;
/*!40000 ALTER TABLE `users_polls_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_polls_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_searches`
--

DROP TABLE IF EXISTS `users_searches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_searches` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `node_id` int(10) unsigned NOT NULL,
  `node_type` varchar(32) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  UNIQUE KEY `node_id_node_type` (`node_id`,`node_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_searches`
--

LOCK TABLES `users_searches` WRITE;
/*!40000 ALTER TABLE `users_searches` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_searches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_sessions`
--

DROP TABLE IF EXISTS `users_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_sessions` (
  `session_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `session_token` varchar(64) NOT NULL,
  `session_date` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_browser` varchar(64) NOT NULL,
  `user_os` varchar(64) NOT NULL,
  `user_ip` varchar(64) NOT NULL,
  PRIMARY KEY (`session_id`),
  UNIQUE KEY `session_token` (`session_token`),
  KEY `user_ip` (`user_ip`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_sessions`
--

LOCK TABLES `users_sessions` WRITE;
/*!40000 ALTER TABLE `users_sessions` DISABLE KEYS */;
INSERT INTO `users_sessions` VALUES (1,'c74f32d68df124c0663fd28bf63ad271','2017-12-20 16:28:50',1,'Chrome','Windows 10','192.168.1.20'),(3,'bccd877f99683f04bea1963d124bdee7','2017-12-27 13:01:52',1,'Chrome','Windows 10','192.168.1.20'),(4,'2b90176f29b99cb34acc0bbec8029c86','2017-12-27 15:02:24',2,'Chrome','Windows 10','192.168.1.20'),(5,'6296dd159b0a24faadd4e9b2c8e2753c','2017-12-28 12:49:01',1,'Handheld Browser','Android','192.168.1.20'),(6,'8dceee0a46ba29d1b9a02a25a7a53dc3','2017-12-30 00:09:39',3,'Handheld Browser','Android','192.168.1.20'),(7,'ffa404637ccc769d2940cb919bfa9a71','2017-12-30 00:13:21',4,'Handheld Browser','Android','192.168.1.20'),(8,'5bdfa278b8760c478b5c4e93b12d2e9b','2017-12-30 00:15:00',4,'Handheld Browser','Android','192.168.1.20'),(9,'f2f8548f704f854115e37524c390cb17','2017-12-30 00:26:09',3,'Handheld Browser','Android','192.168.1.20'),(12,'d31eea785cc47853dd341604bab4f476','2018-02-22 18:55:27',1,'Chrome','Windows 10','192.168.1.20'),(11,'b6fabed116cee41d77ce652faba7016f','2018-02-03 18:29:39',1,'Chrome','Windows 7','192.168.1.20'),(13,'e0a7d9c2ad90f65cfb611470d2d0125f','2018-02-24 12:33:18',1,'Chrome','Windows 7','192.168.1.20'),(14,'e69aa9a96e817d2e67223ca8d29fce48','2018-02-24 12:44:41',2,'Chrome','Windows 7','192.168.1.20'),(15,'19ab3dc058ec15c7b27c5d370e555779','2018-02-26 13:43:34',1,'Chrome','Windows 10','192.168.1.20'),(16,'82c8ec9a4189f039c11c6f929a41723e','2018-03-05 19:46:30',5,'Chrome','Windows 7','192.168.1.20'),(17,'bd0502c6482359063b5602d0fa760516','2018-03-16 14:40:58',1,'Chrome','Windows 10','192.168.1.20'),(19,'0be5b4a884cb1e787772013a420852a7','2018-04-02 20:56:19',2,'Chrome','Windows 7','192.168.1.20'),(20,'2d61f7e57baf81550d80f00970b4efd4','2018-04-04 16:18:03',1,'Chrome','Windows 10','192.168.1.20'),(21,'70296c128193a886e2534b26cf637d4e','2018-04-14 18:19:46',1,'Handheld Browser','Android','192.168.1.20'),(22,'c031fe7644abda1fae640198cb2a0ba5','2018-04-15 20:06:01',1,'Handheld Browser','Android','192.168.1.20'),(23,'41a1218d83c64150c59dafc8fac6cd5b','2018-04-15 20:15:13',1,'Handheld Browser','Android','192.168.1.20'),(26,'95f700d94dde2d9c60b02fcbfd4d4ef1','2018-04-15 21:43:56',1,'Chrome','Windows 7','192.168.1.20');
/*!40000 ALTER TABLE `users_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verification_requests`
--

DROP TABLE IF EXISTS `verification_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verification_requests` (
  `request_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `node_id` int(10) unsigned NOT NULL,
  `node_type` varchar(32) NOT NULL,
  `time` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`request_id`),
  UNIQUE KEY `node_id_node_type` (`node_id`,`node_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verification_requests`
--

LOCK TABLES `verification_requests` WRITE;
/*!40000 ALTER TABLE `verification_requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `verification_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgets`
--

DROP TABLE IF EXISTS `widgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `widgets` (
  `widget_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `place` varchar(32) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`widget_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgets`
--

LOCK TABLES `widgets` WRITE;
/*!40000 ALTER TABLE `widgets` DISABLE KEYS */;
/*!40000 ALTER TABLE `widgets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-20  4:54:40
