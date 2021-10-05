create database if not exists `back-end-checklist`;

use `back-end-checklist`;

CREATE TABLE `back-end-checklist` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` TEXT NOT NULL , 
    `position` INT NOT NULL , 
    `sortBy` TEXT NOT NULL DEFAULT 'default' ,
    `sortDirect` TEXT NOT NULL DEFAULT 'ASC' , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `back-end-checklist` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` TEXT NOT NULL , 
    `description` TEXT NOT NULL , 
    `duration` INT NOT NULL , 
    `labels` TEXT NOT NULL , 
    `fromList` INT NOT NULL , 
    `position` INT NOT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;