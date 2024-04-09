CREATE SCHEMA `coude_links`;

CREATE TABLE `coude_links`.`links` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL UNIQUE,
  `link` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`));