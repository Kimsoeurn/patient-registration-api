/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.31 : Database - pca_share
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `provinces` */

DROP TABLE IF EXISTS `provinces`;

CREATE TABLE `provinces` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) unsigned DEFAULT NULL COMMENT 'referrence code to the original province code',
  `label` varchar(50) DEFAULT NULL,
  `prefix` int(11) unsigned DEFAULT NULL COMMENT '1:Khet, 2:Reach theany',
  `name_kh` varchar(250) NOT NULL,
  `name_en` varchar(250) DEFAULT NULL,
  `start_date` date NOT NULL COMMENT 'when health facility start',
  `end_date` date DEFAULT NULL COMMENT 'when health facility end',
  `created_at` datetime NOT NULL,
  `created_by` int(11) unsigned NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) unsigned DEFAULT NULL,
  `record_status_id` int(11) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`),
  KEY `updated_by` (`updated_by`),
  KEY `record_status_id` (`record_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

/*Data for the table `provinces` */

insert  into `provinces`(`id`,`ref_id`,`label`,`prefix`,`name_kh`,`name_en`,`start_date`,`end_date`,`created_at`,`created_by`,`updated_at`,`updated_by`,`record_status_id`) values 
(1,NULL,'1',0,'បន្ទាយមានជ័យ','Banteay Meanchey','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(2,NULL,'2',0,'បាត់ដំបង','Battambang','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(3,NULL,'3',0,'កំពង់ចាម','Kampong Cham','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(4,NULL,'4',0,'កំពង់ឆ្នាំង','Kampong Chhnang','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(5,NULL,'5',0,'កំពង់ស្ពឺ','Kampong Speu','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(6,NULL,'6',0,'កំពង់ធំ','Kampong Thom','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(7,NULL,'7',0,'កំពត','Kampot','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(8,NULL,'8',0,'កណ្ដាល','Kandal','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(9,NULL,'9',0,'កោះកុង','Koh Kong','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(10,NULL,'10',0,'ក្រចេះ','Kracheh','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(11,NULL,'11',0,'មណ្ឌលគិរី','Mondul Kiri','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(12,NULL,'12',0,'ភ្នំពេញ','Phnom Penh','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(13,NULL,'13',0,'ព្រះវិហារ','Preah Vihear','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(14,NULL,'14',0,'ព្រៃវែង','Prey Veng','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(15,NULL,'15',0,'ពោធិ៍សាត់','Pursat','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(16,NULL,'16',0,'រតនគិរី','Ratanak Kiri','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(17,NULL,'17',0,'សៀមរាប','Siem Reap','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(18,NULL,'18',0,'ព្រះសីហនុ','Preah Sihanouk','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(19,NULL,'19',0,'ស្ទឹងត្រែង','Stung Treng','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(20,NULL,'20',0,'ស្វាយរៀង','Svay Rieng','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(21,NULL,'21',0,'តាកែវ','Takeo','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(22,NULL,'22',0,'ឧត្តរមានជ័យ','Otdar Meanchey','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(23,NULL,'23',0,'កែប','Kep','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(24,NULL,'24',0,'ប៉ៃលិន','Pailin','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(25,NULL,'26',0,'មន្ទីរពេទ្យជាតិ','National Hospital','2000-01-01',NULL,'0000-00-00 00:00:00',1,NULL,NULL,1),
(26,NULL,'25',0,'ត្បូងឃ្មុំ','Tbong Khmum','2014-07-28',NULL,'2015-05-04 00:00:00',1,NULL,NULL,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
