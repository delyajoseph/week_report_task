# Medication Week Report
To produce previous week medical report


## Introduction
This is to keep track of medications that the patient taken in past week and to have the information in csv format to share with doctor. 


## Development Environment
* Linux
* Apache
* MySQL
* PHP
* Visual Studio Code

## SQL Schema

### Create schema
CREATE SCHEMA `Medication` ;

### Create table

SELECT * FROM Medication.MedIntake;CREATE TABLE `MedIntake` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intake_date` date NOT NULL,
  `intake_day` varchar(15) NOT NULL,
  `intake_time` time(3) NOT NULL,
  `name_med` varchar(45) NOT NULL,
  `Dosage` varchar(10) NOT NULL,
  `type_med` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;





