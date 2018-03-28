

CREATE TABLE `demo_tienda`.`usuarios` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `nombre` VARCHAR(255) NOT NULL , 
    `password` VARCHAR(255) NOT NULL , 
    `email` VARCHAR(255) NOT NULL , 
    `activo` INT NOT NULL DEFAULT '0' ,
    `ultimo_acceso` DATETIME NULL DEFAULT NULL,
 PRIMARY KEY (`id`));
