SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';
CREATE SCHEMA IF NOT EXISTS `directorio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `directorio` ;
-- -----------------------------------------------------
-- Table `directorio`.`contacto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `directorio`.`registros` (
`id` INT NOT NULL AUTO_INCREMENT ,
`titulo` VARCHAR(100) NOT NULL ,
`contenido` VARCHAR(140) NOT NULL ,
`autor` VARCHAR(60) NOT NULL ,
`fecha` date NOT NULL ,
PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;