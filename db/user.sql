/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.4.16-MariaDB : Database - user
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`user` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `user`;

/*Table structure for table `plantedtreerecord` */

DROP TABLE IF EXISTS `plantedtreerecord`;

CREATE TABLE `plantedtreerecord` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectName` varchar(50) DEFAULT NULL,
  `Province` varchar(50) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `PurchasedTrees` int(11) DEFAULT NULL,
  `PlantedTrees` int(11) DEFAULT NULL,
  `AreaCovered` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `plantedtreerecord` */

insert  into `plantedtreerecord`(`id`,`ProjectName`,`Province`,`District`,`City`,`PurchasedTrees`,`PlantedTrees`,`AreaCovered`) values (1,'Lahore','Punjab','Khushab','Juaharabad',15233,12000,12356),(2,'Lahore','Punjab','Khushab','Juaharabad',15233,12000,12356),(3,'Lahore','Punjab','Khushab','Juaharabad',15233,12000,12356),(4,'Lahore','Punjab','Khushab','Juaharabad',15233,12000,12356),(5,'Lahore','Punjab','Khushab','dsad',15233,12000,12356),(6,'Lahore','Punjab','Khushab','dsad',15233,12000,12356);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('male','female') CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL DEFAULT 'general',
  `status` enum('active','pending','deleted','') NOT NULL DEFAULT 'pending',
  `authtoken` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`first_name`,`last_name`,`email`,`password`,`gender`,`mobile`,`designation`,`image`,`type`,`status`,`authtoken`) values (8,'abid','asa','admin@admin.com','202cb962ac59075b964b07152d234b70','male','','','','Administrator','active','73f66749989c7b09389894f1b27daa7364e1b8d34f425d19e1ee2ea7236d3028'),(9,'abid','dada','admin1@admin.com','202cb962ac59075b964b07152d234b70','male','','','','general','active','73f66749989c7b09389894f1b27daa73ece4f77e9124248102753e00a51a28fa'),(10,'abid','asa','admin@abc.com','81dc9bdb52d04dc20036dbd8313ed055','male','','','','general','pending','73f66749989c7b09389894f1b27daa73a18a8a67d31d075cb5d386ca8a304d50'),(11,'abid','asa','admin@abc1.com','202cb962ac59075b964b07152d234b70','male','','','','general','pending','73f66749989c7b09389894f1b27daa73ff96f21e8e33d1ed695ee68e62f35b0b');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
