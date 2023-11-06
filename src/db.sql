DROP TABLE IF EXISTS `retailers`;
CREATE TABLE `retailers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(127) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `retailers` (`id`, `name`) VALUES
(1,	'A'),
(2,	'B');

DROP TABLE IF EXISTS `working_hours`;
CREATE TABLE `working_hours` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `retailer_id` int unsigned NOT NULL,
  `day` varchar(4) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `is_dayoff` tinyint unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `working_hours` (`id`, `retailer_id`, `day`, `from`, `to`, `is_dayoff`) VALUES
(1,	1,	'Mon',	'08:00:00',	'16:00:00',	0),
(2,	2,	'Mon',	'08:00:00',	'16:00:00',	0),
(3,	1,	'Tus',	'08:00:00',	'16:00:00',	0),
(4,	1,	'Wed',	'08:00:00',	'16:00:00',	0),
(5,	1,	'Thu',	'08:00:00',	'16:00:00',	0),
(6,	1,	'Fri',	'08:00:00',	'16:00:00',	0),
(7,	1,	'Sat',	'00:00:00',	'00:00:00',	1),
(8,	1,	'Sun',	'00:00:00',	'00:00:00',	1),
(9,	2,	'Tus',	'08:00:00',	'16:00:00',	0),
(10,	2,	'Wed',	'08:00:00',	'16:00:00',	0),
(11,	2,	'Thu',	'08:00:00',	'16:00:00',	0),
(12,	2,	'Fri',	'08:00:00',	'16:00:00',	0),
(13,	2,	'Sat',	'00:00:00',	'00:00:00',	1),
(14,	2,	'Sun',	'00:00:00',	'00:00:00',	1);