DROP DATABASE IF EXISTS na_crm;
CREATE DATABASE IF NOT EXISTS na_crm

USE na_crm;

CREATE TABLE `users` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(198) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(255) NOT NULL,

    PRIMARY KEY (`id`),
    UNIQUE KEY `email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;


INSERT INTO users (name, email, password) VALUES ('Technical Admin', 'tech@admin.com', 'tech@admin.com');
INSERT INTO users (name, email, password) VALUES ('Engineering Admin', 'engineer@admin.com', 'engineer@admin.com');
