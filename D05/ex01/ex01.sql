CREATE TABLE `db_rmaury`.`ft_table` (
	`id` INT  AUTO_INCREMENT NOT NULL ,
	`login` VARCHAR(8) NOT NULL DEFAULT 'toto',
	`groupe` ENUM('staff','student','other') NOT NULL ,
	`date_de_creation` DATE NOT NULL,
	PRIMARY KEY (`id`)
	);