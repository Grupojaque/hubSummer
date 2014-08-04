SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `gimnasio` ;
CREATE SCHEMA IF NOT EXISTS `gimnasio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `gimnasio` ;

-- -----------------------------------------------------
-- Table `gimnasio`.`Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gimnasio`.`Usuarios` ;

CREATE TABLE IF NOT EXISTS `gimnasio`.`Usuarios` (
  `idUsuario` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `NombreUsuario` VARCHAR(45) NULL,
  `Correo` VARCHAR(30) NULL,
  `Contrasena` VARCHAR(9) NULL,
  `isAdmin` TINYINT(1) NULL DEFAULT 0,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gimnasio`.`Solicitudes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gimnasio`.`Solicitudes` ;

CREATE TABLE IF NOT EXISTS `gimnasio`.`Solicitudes` (
  `idSoicitudes` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `NombreUsuario` VARCHAR(45) NULL,
  `Correo` VARCHAR(30) NULL,
  PRIMARY KEY (`idSoicitudes`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gimnasio`.`Avisos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gimnasio`.`Avisos` ;

CREATE TABLE IF NOT EXISTS `gimnasio`.`Avisos` (
  `idAvisos` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `idUsuario` MEDIUMINT NULL,
  `Fecha` DATE NULL,
  `TextoAviso` VARCHAR(500) NULL,
  PRIMARY KEY (`idAvisos`),
  INDEX `fk_Avisos_1_idx` (`idUsuario` ASC),
  CONSTRAINT `fk_Avisos`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `gimnasio`.`Usuarios` (`idUsuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gimnasio`.`Pagos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gimnasio`.`Pagos` ;

CREATE TABLE IF NOT EXISTS `gimnasio`.`Pagos` (
  `idPagos` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `idUsuario` MEDIUMINT NULL,
  `FechaPago` DATE NULL,
  `Monto` INT NULL,
  `TiempoPago` TINYINT(1) NULL,
  `FormaPago` TINYINT(1) NULL,
  PRIMARY KEY (`idPagos`),
  INDEX `fk_Pagos_idx` (`idUsuario` ASC),
  CONSTRAINT `fk_Pagos`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `gimnasio`.`Usuarios` (`idUsuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gimnasio`.`InfoGym`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gimnasio`.`InfoGym` ;

CREATE TABLE IF NOT EXISTS `gimnasio`.`InfoGym` (
  `idinfoGym` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `idUsuario` MEDIUMINT NULL,
  `Horarios` VARCHAR(45) NULL,
  `Descripcion` VARCHAR(450) NULL,
  PRIMARY KEY (`idinfoGym`),
  INDEX `fk_infoGym_idx` (`idUsuario` ASC),
  CONSTRAINT `fk_infoGym`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `gimnasio`.`Usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gimnasio`.`Actividades`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gimnasio`.`Actividades` ;

CREATE TABLE IF NOT EXISTS `gimnasio`.`Actividades` (
  `idActividades` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `idUsuario` MEDIUMINT NULL,
  `NombreAct` VARCHAR(45) NULL,
  `Horarios` VARCHAR(45) NULL,
  `DescripcionActividad` VARCHAR(500) NULL,
  PRIMARY KEY (`idActividades`),
  INDEX `fk_Actividades_1_idx` (`idUsuario` ASC),
  CONSTRAINT `fk_Actividades_1`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `gimnasio`.`Usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

START TRANSACTION;
USE `gimnasio`;
INSERT INTO `gimnasio`.`Usuarios` (`idUsuario`, `NombreUsuario`, `Correo`, `Contrasena`, `isAdmin`) VALUES (1, 'Claudia rg', 'claudia.cirg@gmail.com', '306242351', 0);
INSERT INTO `gimnasio`.`Usuarios` (`idUsuario`, `NombreUsuario`, `Correo`, `Contrasena`, `isAdmin`) VALUES (2, 'Elizabeth Hermosillo Alfonso', 'elizheralf@gmail.com', '123456789', 1);
INSERT INTO `gimnasio`.`Usuarios` (`idUsuario`, `NombreUsuario`, `Correo`, `Contrasena`, `isAdmin`) VALUES (3, 'Raquel Aguilar Marquez', 'claudia.cirg@gmail.com', '234567890', 0);
INSERT INTO `gimnasio`.`Usuarios` (`idUsuario`, `NombreUsuario`, `Correo`, `Contrasena`, `isAdmin`) VALUES (4, 'Moises Vázquez ', 'claudia.cirg@gmail.com', 'moisesvaz', 0);
INSERT INTO `gimnasio`.`Usuarios` (`idUsuario`, `NombreUsuario`, `Correo`, `Contrasena`, `isAdmin`) VALUES (5, 'Sergio Amaro', 'claudia.cirg@gmail.com', 'sergioAma', 0);
INSERT INTO `gimnasio`.`Usuarios` (`idUsuario`, `NombreUsuario`, `Correo`, `Contrasena`, `isAdmin`) VALUES (6, 'Veronica Solano', 'claudia.cirg@gmail.com', 'veronicaSo', 0);

COMMIT;

START TRANSACTION;
USE `gimnasio`;
INSERT INTO `gimnasio`.`Solicitudes` (`idSoicitudes`, `NombreUsuario`, `Correo`) VALUES (NULL, 'Francisco rg', 'francisco@gmail.com');
INSERT INTO `gimnasio`.`Solicitudes` (`idSoicitudes`, `NombreUsuario`, `Correo`) VALUES (NULL, 'Alfonso rg', 'alfonso60.rg@gmail.com');

COMMIT;

START TRANSACTION;
USE `gimnasio`;
INSERT INTO `gimnasio`.`Avisos` (`idAvisos`, `idUsuario`, `Fecha`, `TextoAviso`) VALUES (1, 2, '2014-07-31', '¿Hola que hace?');
INSERT INTO `gimnasio`.`Avisos` (`idAvisos`, `idUsuario`, `Fecha`, `TextoAviso`) VALUES (2, 2, '2014-07-31', 'Poblando una base o que hace?');

COMMIT;

START TRANSACTION;
USE `gimnasio`;
INSERT INTO `gimnasio`.`Pagos` (`idUsuario`, `FechaPago`, `Monto`, `TiempoPago`,  `FormaPago`) VALUES (1,'2014-07-31', 4000, 1, 0);
INSERT INTO `gimnasio`.`Pagos` (`idUsuario`, `FechaPago`, `Monto`, `TiempoPago` , `FormaPago`) VALUES (3,'2014-07-31', 560, 0, 1);
INSERT INTO `gimnasio`.`Pagos` (`idUsuario`, `FechaPago`, `Monto`, `TiempoPago` , `FormaPago`) VALUES (5,'2014-06-4', 560, 0, 1);

COMMIT;

START TRANSACTION;
USE `gimnasio`;
INSERT INTO `gimnasio`.`InfoGym` (`idinfoGym`, `idUsuario`, `Horarios`, `Descripcion`) VALUES (NULL, 2, 'Lunes a viernes de 6:00 a 23:00 hrs', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.');

COMMIT;


START TRANSACTION;
USE `gimnasio`;
INSERT INTO `gimnasio`.`Actividades` (`idActividades`, `idUsuario`, `NombreAct`, `Horarios`, `DescripcionActividad`) VALUES (NULL, 2,'Clase de salsa', 'Lunes, miercoles y viernes de 18:00 a 19:00 hrs', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.');
INSERT INTO `gimnasio`.`Actividades` (`idActividades`, `idUsuario`, `NombreAct`, `Horarios`, `DescripcionActividad`) VALUES (NULL, 2,'Clase de zumba', 'Martes de 19:00 a 20:00 hrs', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains');

COMMIT;

