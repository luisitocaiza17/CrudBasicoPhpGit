/* Create Database and Table */
create database crud_db;

use crud_db;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `email` varchar(100),
  `mobile` varchar(15),
  PRIMARY KEY  (`id`)
);

CREATE USER root2@"%" IDENTIFIED WITH mysql_native_password BY 'root';

GRANT ALL PRIVILEGES ON *.* TO "root2"@"%";
FLUSH PRIVILEGES;