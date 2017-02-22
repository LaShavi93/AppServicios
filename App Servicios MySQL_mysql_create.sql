CREATE TABLE `users` (
	`id` int NOT NULL AUTO_INCREMENT,
	`city_id` int NOT NULL,
	`role_id` int NOT NULL,
	`cedula` int(12) NOT NULL,
	`name` varchar(50) NOT NULL,
	`lastname` varchar(50) NOT NULL,
	`email` varchar(50) NOT NULL,
	`password` varchar(250) NOT NULL,
	`photo` varchar(100) NOT NULL,
	`photo_dir` varchar(250) NOT NULL,
	`role` varchar(50) NOT NULL,
	`cellphone` varchar(15) NOT NULL,
	`curriculum` varchar(250) NOT NULL,
	`curriculum_dir` varchar(250) NOT NULL,
	`account` int NOT NULL,
	`date` TIMESTAMP NOT NULL,
	`birthday` DATE NOT NULL,
	`point` int NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `specialties` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(150) NOT NULL,
	`description` TEXT NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `specialties_users` (
	`id` int NOT NULL AUTO_INCREMENT,
	`user_id` int NOT NULL,
	`specialty_id` int NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `categories` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`description` TEXT NOT NULL,
	`photo` varchar(250) NOT NULL,
	`photo_dir` varchar(250) NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `services` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`description` TEXT NOT NULL,
	`price` int(30) NOT NULL,
	`price_points` int(30) NOT NULL,
	`money` varchar(10) NOT NULL,
	`photo` varchar(250) NOT NULL,
	`photo_dir` varchar(250) NOT NULL,
	`term_condition` TEXT NOT NULL,
	`warranty` TEXT NOT NULL,
	`specification` TEXT NOT NULL,
	`category_id` int NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `services_users` (
	`id` int NOT NULL AUTO_INCREMENT,
	`service_id` int NOT NULL,
	`user_id` int NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `countries` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `cities` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`country_id` int NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `cities_services` (
	`id` int NOT NULL AUTO_INCREMENT,
	`city_id` int NOT NULL,
	`service_id` int NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `ratings` (
	`id` int NOT NULL AUTO_INCREMENT,
	`value` int(2) NOT NULL,
	`date` TIMESTAMP NOT NULL,
	`costumer_id` INT NOT NULL,
	`technical_id` INT NOT NULL,
	`application_id` int NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `applications` (
	`id` int NOT NULL AUTO_INCREMENT,
	`orderid` int NOT NULL,
	`costumer_id` int NOT NULL,
	`technical_id` int NOT NULL,
	`service_id` int NOT NULL,
	`start_time` DATETIME NOT NULL,
	`end_time` DATETIME NOT NULL,
	`address` varchar(250) NOT NULL,
	`progress_id` int NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `progress` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`description` TEXT NOT NULL,
	`type` varchar(50) NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `payments` (
	`id` int NOT NULL AUTO_INCREMENT,
	`user_id` int NOT NULL,
	`method_id` int NOT NULL,
	`promotion_id` int NOT NULL,
	`date` TIMESTAMP NOT NULL,
	`reference` varchar(250) NOT NULL,
	`progress_id` int NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `promotions` (
	`id` int NOT NULL AUTO_INCREMENT,
	`code` int NOT NULL,
	`name` varchar(100) NOT NULL,
	`description` TEXT NOT NULL,
	`value` int NOT NULL,
	`start_time` DATETIME NOT NULL,
	`end_time` DATETIME NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `methods` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`description` TEXT NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `applications_payments` (
	`id` int NOT NULL AUTO_INCREMENT,
	`application_id` int NOT NULL,
	`payment_id` int NOT NULL,
	`state` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `roles` (
	`id` int NOT NULL,
	`name` varchar(100) NOT NULL,
	`description` TEXT NOT NULL,
	`state` int(3) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`city_id`) REFERENCES `cities`(`id`);

ALTER TABLE `users` ADD CONSTRAINT `users_fk1` FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`);

ALTER TABLE `specialties_users` ADD CONSTRAINT `specialties_users_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `specialties_users` ADD CONSTRAINT `specialties_users_fk1` FOREIGN KEY (`specialty_id`) REFERENCES `specialties`(`id`);

ALTER TABLE `services` ADD CONSTRAINT `services_fk0` FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`);

ALTER TABLE `services_users` ADD CONSTRAINT `services_users_fk0` FOREIGN KEY (`service_id`) REFERENCES `services`(`id`);

ALTER TABLE `services_users` ADD CONSTRAINT `services_users_fk1` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `cities` ADD CONSTRAINT `cities_fk0` FOREIGN KEY (`country_id`) REFERENCES `countries`(`id`);

ALTER TABLE `cities_services` ADD CONSTRAINT `cities_services_fk0` FOREIGN KEY (`city_id`) REFERENCES `cities`(`id`);

ALTER TABLE `cities_services` ADD CONSTRAINT `cities_services_fk1` FOREIGN KEY (`service_id`) REFERENCES `services`(`id`);

ALTER TABLE `ratings` ADD CONSTRAINT `ratings_fk0` FOREIGN KEY (`costumer_id`) REFERENCES `users`(`id`);

ALTER TABLE `ratings` ADD CONSTRAINT `ratings_fk1` FOREIGN KEY (`technical_id`) REFERENCES `users`(`id`);

ALTER TABLE `applications` ADD CONSTRAINT `applications_fk0` FOREIGN KEY (`costumer_id`) REFERENCES `users`(`id`);

ALTER TABLE `applications` ADD CONSTRAINT `applications_fk1` FOREIGN KEY (`technical_id`) REFERENCES `users`(`id`);

ALTER TABLE `applications` ADD CONSTRAINT `applications_fk2` FOREIGN KEY (`service_id`) REFERENCES `services`(`id`);

ALTER TABLE `applications` ADD CONSTRAINT `applications_fk3` FOREIGN KEY (`progress_id`) REFERENCES `progress`(`id`);

ALTER TABLE `payments` ADD CONSTRAINT `payments_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `payments` ADD CONSTRAINT `payments_fk1` FOREIGN KEY (`method_id`) REFERENCES `methods`(`id`);

ALTER TABLE `payments` ADD CONSTRAINT `payments_fk2` FOREIGN KEY (`promotion_id`) REFERENCES `promotions`(`id`);

ALTER TABLE `payments` ADD CONSTRAINT `payments_fk3` FOREIGN KEY (`progress_id`) REFERENCES `progress`(`id`);

ALTER TABLE `applications_payments` ADD CONSTRAINT `applications_payments_fk0` FOREIGN KEY (`application_id`) REFERENCES `applications`(`id`);

ALTER TABLE `applications_payments` ADD CONSTRAINT `applications_payments_fk1` FOREIGN KEY (`payment_id`) REFERENCES `payments`(`id`);

