-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table 
--


create table observation (
oid int NOT NULL,
cloud_coverage int NOT NULL,
temperature decimal(3,2) NOT NULL,
constraint PK_observation primary key(oid)
);

create table city (
city_name varchar(25) NOT NULL,
constraint PK_city primary key(city_name)
);

create table event_name(
event_name varchar(25) NOT NULL,
constraint PK_events primary key(event_name)
);

create table prescipitation (
p_name varchar(25) NOT NULL,
constraint PK_prescipitation primary key(p_name)
);

create table observation_time (
oid int NOT NULL,
obs_date date NOT NULL,
obs_time time NOT NULL,
constraint FK_observation_time foreign key(oid) references observation(oid) on delete cascade ON UPDATE CASCADE 
);


create table meterological_station (
msid varchar(15) NOT NULL,
city_name varchar(25) NOT NULL,
ms_type varchar(25) NOT NULL,
constraint FK_meterological_station foreign key(city_name) references city(city_name) on delete cascade ON UPDATE CASCADE,
constraint PK_meterological_station primary key(msid) 
);

create table observation_city (
oid int NOT NULL,
city_name varchar(25) NOT NULL,
msid varchar(15) NOT NULL,
constraint FK_observation_city_oid foreign key(oid) references observation(oid) on delete cascade ON UPDATE CASCADE,
constraint FK_observation_city_city_name foreign key(city_name) references city(city_name) on delete cascade ON UPDATE CASCADE,
constraint FK_observation_city_msid foreign key(msid) references meterological_station(msid) on delete cascade ON UPDATE CASCADE,
constraint PK_observation_city primary key(oid)
);


create table observation_prescipitation (
oid int NOT NULL,
p_name varchar(25) NOT NULL,
amount decimal(5,5) NOT NULL,
constraint FK_observation_prescipitation_oid foreign key(oid) references observation(oid) on delete cascade ON UPDATE CASCADE ,
constraint FK_observation_prescipitation_p_name foreign key(p_name) references prescipitation(p_name) on delete cascade ON UPDATE CASCADE 
);

create table observation_event (
oid int NOT NULL,
event_name varchar(25) NOT NULL,
constraint FK_observation_event_oid foreign key(oid) references observation(oid) on delete cascade ON UPDATE CASCADE ,
constraint FK_observation_event_event_name foreign key(event_name) references event_name(event_name) on delete cascade ON UPDATE CASCADE,
constraint PK_observation_event primary key(oid,event_name));


-- ---------------------------------------------------------
-- Insert Queries
-- ---------------------------------------------------------
insert into observation values(1,'',''),
(1,'5', '100'),
(2, '3', '20'),
(3, '4', '10'),
(4,'5', '20'),
(5,'5','23'),
(6, '4','25'),
(7,'4','20'),
(8,'5','25'),
(9,'5','25'),
(10,'5','23'),
(11,'4','25'),
(12,'4','20'),
(13,'4','20'),
(14, '5', '20'),
(15,'5','25'),
(16,'5','23'),
(17,'4','25'),
(18,'4','20'),
(19,'4','25'),
(20,'5','25');

insert into event_name values("Rain");
insert into event_name values("Hail");
insert into event_name values("Snow");
insert into event_name values("Freezing Rain");
insert into event_name values("Thunder Storm");

insert into Precipitation values("Rain");
insert into Precipitation values("Snow");

insert into city values('Rome');
insert into city values('Berlin');
insert into city values('Athens');
insert into city values('Paris');

insert into observation_time values
(1, '2015-11-27', '05-06'),
(2, '2015-11-27', '08-09'),
(3, '2015-11-20', '03-04'),
(4, '2015-11-28', '00-01'),
(5, '2015-11-25','02-03'),
(6, '2015-11-25','03-04'),
(7, '2015-11-25','04-05'),
(8, '2015-11-25','07-08'),
(9, '2015-11-25','05-06'),
(10, '2015-11-26','02-03'),
(11, '2015-11-26','03-04'),
(12, '2015-11-26','04-05'),
(13, '2015-11-26','04-05'),
(14, '2015-11-28', '00-01'),
(15, '2015-11-26','05-06'),
(16, '2015-11-27','02-03'),
(17, '2015-11-27','03-04'),
(18, '2015-11-27','04-05'),
(19, '2015-11-27','03-04'),
(20, '2015-11-27','05-06');

insert into meterological_station values(1,'Athens','Private'),
(2,'Athens','Public'),
(3,'Rome','Private'),
(4,'Rome','Public'),
(5,'Paris','Private'),
(6,'Paris','Public'),
(7,'Berlin','Private'),
(8,'Berlin','Public');

insert into observation_city values(1,'Paris','Private'),
(2,'Paris','Public'),
(3,'Paris','Private'),
(4,'Athen','Public'),
(5,'Athens','Private'),
(6,'Athens','Public'),
(6,'Athens','Private'),
(7,'Athens','Public'),
(8,'Athens','Private'),
(9,'Athens','Public'),
(10,'Rome','Private'),
(11,'Rome','Public'),
(12,'Rome','Private'),
(13,'Rome','Public'),
(14,'Paris','Private'),
(15,'Rome','Public'),
(16,'Berlin','Private'),
(17,'Berlin','Public'),
(18,'Berlin','Private'),
(19,'Berlin','Public'),
(20,'Berlin','Private');

insert into observation_prescipitation values
(1,'Rain', '200'),
(2,'Snow', '300'),
(3,'Rain', '300'),
(4,'Rain', '200'),
(5,'Rain', '100'),
(6,'Snow', '150'),
(7,'Rain', '200'),
(8,'Rain', '300'),
(9,'Rain', '300'),
(10,'Rain', '100'),
(11,'Snow', '150'),
(12,'Rain', '200'),
(13,'Rain', '200'),
(14,'Rain', '200'),
(15,'Rain', '300'),
(16,'Rain', '100'),
(17,'Snow', '150'),
(18,'Rain', '200'),
(19,'Snow', '150'),
(20,'Rain', '300');

insert into observation_event values
(1,'Freazing Rain'),
(2,'Snow'),
(3,'Hail'),
(4,'Rain'),
(5,'Hail'),
(6,'Snow'),
(7,'Rain'),
(8,'Freazing Rain'),
(9,'Freazing Rain'),
(10,'Hail'),
(11,'Snow'),
(12,'Rain'),
(13,'Rain'),
(14,'Rain'),
(15,'Freazing Rain'),
(16,'Hail'),
(17,'Snow'),
(18,'Rain'),
(19,'Snow'),
(20,'Freazing Rain');
-- ---------------------------------------------------------
--
-- Table structure for table `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `password` varchar(100) NOT NULL,
  `del` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `name`, `password`, `del`, `email`) VALUES
(1, 'admin', 'YWRtaW4%3D', 0, 'vineethxaviercs3@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE IF NOT EXISTS `tb_event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `calender` date NOT NULL,
  `time_duration` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `whether_event` varchar(200) NOT NULL,
  `precipitation_type` varchar(200) NOT NULL,
  `precipitation_amount` varchar(200) NOT NULL,
  `cloud_coverage` varchar(200) NOT NULL,
  `temperature` varchar(200) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `tb_event` (`event_id`, `calender`, `time_duration`, `city`, `whether_event`, `precipitation_type`, `precipitation_amount`, `cloud_coverage`, `temperature`) VALUES
(1, '2015-11-27', '05-06', 'Paris', 'Freazing Rain', 'Rain', '200', '5', '100'),
(2, '2015-11-27', '08-09', 'Paris', 'Snow', 'Snow', '300', '3', '20'),
(3, '2015-11-20', '03-04', 'Paris', 'Hail', 'Snow', '300', '4', '10'),
(4, '2015-11-28', '00-01', 'Athens', 'Rain', 'Rain', '200', '5', '20');
INSERT INTO `tb_event` (`event_id`, `calender`, `time_duration`, `city`, `whether_event`, `precipitation_type`, `precipitation_amount`, `cloud_coverage`, `temperature`) VALUES
(5, '2015-11-25','02-03','Athens','Hail','Rain', '100','5','23'),
(6, '2015-11-25','03-04','Athens','Snow','Snow', '150','4','25'),
(7, '2015-11-25','04-05','Athens','Rain','Rain', '200','4','20'),
(8, '2015-11-25','07-08','Athens','Freazing Rain','Rain', '300','5','25'),
(9, '2015-11-25','05-06','Athens','Freazing Rain','Rain', '300','5','25');
INSERT INTO `tb_event` (`event_id`, `calender`, `time_duration`, `city`, `whether_event`, `precipitation_type`, `precipitation_amount`, `cloud_coverage`, `temperature`) VALUES
(10, '2015-11-26','02-03','Rome','Hail','Rain', '100','5','23'),
(11, '2015-11-26','03-04','Rome','Snow','Snow', '150','4','25'),
(12, '2015-11-26','04-05','Rome','Rain','Rain', '200','4','20'),
(13, '2015-11-26','04-05','Rome','Rain','Rain', '200','4','20'),
(14, '2015-11-28', '00-01', 'Paris', 'Rain', 'Rain', '200', '5', '20'),
(15, '2015-11-26','05-06','Rome','Freazing Rain','Rain', '300','5','25');
INSERT INTO `tb_event` (`event_id`, `calender`, `time_duration`, `city`, `whether_event`, `precipitation_type`, `precipitation_amount`, `cloud_coverage`, `temperature`) VALUES
(16, '2015-11-27','02-03','Berlin','Hail','Rain', '100','5','23'),
(17, '2015-11-27','03-04','Berlin','Snow','Snow', '150','4','25'),
(18, '2015-11-27','04-05','Berlin','Rain','Rain', '200','4','20'),
(19, '2015-11-27','03-04','Berlin','Snow','Snow', '150','4','25'),
(20, '2015-11-27','05-06','Berlin','Freazing Rain','Rain', '300','5','25');

-- --------------------------------------------------------





