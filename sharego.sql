/*
SQLyog Ultimate v12.08 (64 bit)
MySQL - 5.7.11 : Database - sharego
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sharego` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `sharego`;

/*Table structure for table `share_tag` */

DROP TABLE IF EXISTS `share_tag`;

CREATE TABLE `share_tag` (
  `share_id` int(16) NOT NULL,
  `tag_id` int(16) NOT NULL,
  UNIQUE KEY `tag_id` (`tag_id`,`share_id`),
  KEY `share_id` (`share_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `share_tag` */

insert  into `share_tag`(`share_id`,`tag_id`) values (21,26),(21,27),(21,28),(115,29),(117,26),(117,27),(117,29),(118,30),(118,31),(119,30),(119,31),(120,30),(121,30),(122,32),(122,33);

/*Table structure for table `shares` */

DROP TABLE IF EXISTS `shares`;

CREATE TABLE `shares` (
  `id` int(16) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `tags` text NOT NULL,
  `user_id` int(16) unsigned NOT NULL,
  `user_name` varchar(64) DEFAULT NULL COMMENT '待',
  `last_user_name` varchar(64) DEFAULT NULL COMMENT '待',
  `content` longtext NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb4;

/*Data for the table `shares` */

insert  into `shares`(`id`,`title`,`tags`,`user_id`,`user_name`,`last_user_name`,`content`,`created_at`,`updated_at`,`valid`) values (21,'aaa','标签1|标签2|标签3',1,NULL,NULL,'aaa','2017-01-26 16:32:55','2017-01-26 16:32:55',1),(115,'123','标签1|标签2|标签4',1,NULL,NULL,'阿斯蒂芬','2017-01-26 18:27:42','2017-01-26 18:27:42',1),(116,'123','标签1|标签2|标签4',1,NULL,NULL,'阿斯蒂芬','2017-01-26 18:28:36','2017-01-26 18:28:36',1),(117,'123','标签1|标签2|标签4',1,NULL,NULL,'阿斯蒂芬','2017-01-26 18:31:09','2017-01-26 18:31:09',1),(118,'123','啊|窝',1,NULL,NULL,'阿斯蒂芬','2017-01-26 18:31:55','2017-01-26 18:31:55',1),(119,'123','啊|窝',1,NULL,NULL,'阿斯蒂芬','2017-01-26 18:32:06','2017-01-26 18:32:06',1),(120,'123','啊|啊',1,NULL,NULL,'阿斯蒂芬','2017-01-26 18:32:53','2017-01-26 18:32:53',1),(121,'123','啊',1,NULL,NULL,'阿斯蒂芬','2017-01-26 18:36:16','2017-01-26 18:36:16',1),(122,'d','a1|a2',17,NULL,NULL,'d','2017-07-07 08:33:34','2017-07-07 08:33:34',1);

/*Table structure for table `tags` */

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(16) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) NOT NULL,
  `description` tinytext,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `tag` (`tag`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tags` */

insert  into `tags`(`id`,`tag`,`description`,`created_at`,`updated_at`,`valid`) values (26,'标签1',NULL,'2017-01-26 16:32:55','2017-01-26 16:32:55',1),(27,'标签2',NULL,'2017-01-26 16:32:55','2017-01-26 16:32:55',1),(28,'标签3',NULL,'2017-01-26 16:32:55','2017-01-26 16:32:55',1),(29,'标签4',NULL,'2017-01-26 18:27:42','2017-01-26 18:27:42',1),(30,'啊',NULL,'2017-01-26 18:31:55','2017-01-26 18:31:55',1),(31,'窝',NULL,'2017-01-26 18:31:55','2017-01-26 18:31:55',1),(32,'a1',NULL,'2017-07-07 08:33:34','2017-07-07 08:33:34',1),(33,'a2',NULL,'2017-07-07 08:33:34','2017-07-07 08:33:34',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(16) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(64) NOT NULL COMMENT '用户名',
  `salt` varchar(6) NOT NULL COMMENT '盐',
  `password` varchar(64) NOT NULL DEFAULT '' COMMENT '密码散列',
  `valid` tinyint(1) NOT NULL DEFAULT '1',
  `privilege` varchar(128) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`salt`,`password`,`valid`,`privilege`,`created_at`,`updated_at`) values (1,'admin','','admin',1,NULL,'2017-01-19 14:54:45','2017-01-19 14:54:48'),(2,'xie','','xie',1,NULL,'2017-01-19 15:06:13','2017-01-19 15:06:13'),(4,'xiexie','8RO2o1','a7a53dc8f107e246e45294f649bef803',1,NULL,'2017-01-19 15:09:08','2017-01-19 15:09:08'),(6,'a1','PY4yTM','babbdee3f22289666228de09e50b1c1f',1,NULL,'2017-01-21 13:36:15','2017-01-21 13:36:15'),(7,'a2','pBKHm9','affd1f2bdad2680239dde671d2dcf0cb',1,NULL,'2017-01-21 13:42:35','2017-01-21 13:42:35'),(8,'a3','gvo8s4','9449edbbd02cc080835dd78a616a5b04',1,NULL,'2017-01-21 13:44:44','2017-01-21 13:44:44'),(9,'a4','OmJDEw','28fe17c5339c9bf00a5916ce2c9c2edc',1,NULL,'2017-01-21 13:45:12','2017-01-21 13:45:12'),(10,'testcreate_c','LaDtGn','2105958a38cbca4a4b2eab1377944d34',1,NULL,'2017-01-23 14:50:57','2017-01-23 14:50:57'),(11,'aaa','vL7yhm','4f6f38a3026b1fede482b13d8f511ead',1,NULL,'2017-01-26 14:26:29','2017-01-26 14:26:29'),(13,'aaaa','USzgR5','c35bdeaea670e7451ac3145bb879b67d',1,NULL,'2017-01-26 14:27:32','2017-01-26 14:27:32'),(15,'aaaaa','oFS_HJ','224dd0a68db07a0d7c25c91c90002bc4',1,NULL,'2017-01-26 14:28:58','2017-01-26 14:28:58'),(16,'eee','KMceFC','e7a25449b7e6b2211a512c6c3c3cdbcd',1,NULL,'2017-01-27 14:54:19','2017-01-27 14:54:19'),(17,'xiehaojie','4awUAk','579a1397508af8a767ef02589b0f236f',1,NULL,'2017-07-07 08:32:43','2017-07-07 08:32:43');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
