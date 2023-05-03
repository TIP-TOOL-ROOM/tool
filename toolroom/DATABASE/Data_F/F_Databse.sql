create database Data_F;

use Data_F;

CREATE TABLE `FACULTY` (
  `id_num` int(30) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `age` int(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY  (`id_num`)
);