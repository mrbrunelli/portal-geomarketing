-- MySQL Script generated by MySQL Workbench
-- qua 29 jan 2020 22:49:05 -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `usuariotipo` CHAR(1) NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`negocio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`negocio` (
  `idnegocio` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idnegocio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`gerente_regional`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`gerente_regional` (
  `idgerenteregional` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idgerenteregional`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`filial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`filial` (
  `idfilial` INT NOT NULL AUTO_INCREMENT,
  `fantasia` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idfilial`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`gerente_loja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`gerente_loja` (
  `idgerenteloja` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idgerenteloja`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pesquisa_categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pesquisa_categoria` (
  `idpesquisacategoria` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idpesquisacategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pesquisa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pesquisa` (
  `idpesquisa` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `data` DATE NOT NULL,
  `pesquisa_categoria_idpesquisacategoria` INT NOT NULL,
  `filial_idfilial` INT NULL,
  `gerente_regional_idgerenteregional` INT NULL,
  `gerente_loja_idgerenteloja` INT NULL,
  `usuario_idusuario` INT NOT NULL,
  `negocio_idnegocio` INT NOT NULL,
  PRIMARY KEY (`idpesquisa`),
  INDEX `fk_pesquisa_pesquisa_categoria_idx` (`pesquisa_categoria_idpesquisacategoria` ASC),
  INDEX `fk_pesquisa_filial1_idx` (`filial_idfilial` ASC),
  INDEX `fk_pesquisa_gerente_regional1_idx` (`gerente_regional_idgerenteregional` ASC),
  INDEX `fk_pesquisa_gerente_loja1_idx` (`gerente_loja_idgerenteloja` ASC),
  INDEX `fk_pesquisa_usuario1_idx` (`usuario_idusuario` ASC),
  INDEX `fk_pesquisa_negocio1_idx` (`negocio_idnegocio` ASC),
  CONSTRAINT `fk_pesquisa_pesquisa_categoria`
    FOREIGN KEY (`pesquisa_categoria_idpesquisacategoria`)
    REFERENCES `mydb`.`pesquisa_categoria` (`idpesquisacategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesquisa_filial1`
    FOREIGN KEY (`filial_idfilial`)
    REFERENCES `mydb`.`filial` (`idfilial`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesquisa_gerente_regional1`
    FOREIGN KEY (`gerente_regional_idgerenteregional`)
    REFERENCES `mydb`.`gerente_regional` (`idgerenteregional`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesquisa_gerente_loja1`
    FOREIGN KEY (`gerente_loja_idgerenteloja`)
    REFERENCES `mydb`.`gerente_loja` (`idgerenteloja`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesquisa_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesquisa_negocio1`
    FOREIGN KEY (`negocio_idnegocio`)
    REFERENCES `mydb`.`negocio` (`idnegocio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`anexo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`anexo` (
  `idanexo` INT NOT NULL AUTO_INCREMENT,
  `anexo` TEXT NOT NULL,
  `pesquisa_idpesquisa` INT NOT NULL,
  `datainclusao` TIMESTAMP NOT NULL,
  PRIMARY KEY (`idanexo`),
  INDEX `fk_anexo_pesquisa1_idx` (`pesquisa_idpesquisa` ASC),
  CONSTRAINT `fk_anexo_pesquisa1`
    FOREIGN KEY (`pesquisa_idpesquisa`)
    REFERENCES `mydb`.`pesquisa` (`idpesquisa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
