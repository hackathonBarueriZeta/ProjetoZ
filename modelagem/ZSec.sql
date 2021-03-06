-- MySQL Script generated by MySQL Workbench
-- 11/27/16 06:30:39
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema zsec
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema zsec
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `zsec` DEFAULT CHARACTER SET utf8 ;
USE `zsec` ;

-- -----------------------------------------------------
-- Table `zsec`.`tbPefilUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbPefilUsuario` (
  `idPerfil` INT NOT NULL AUTO_INCREMENT,
  `nomePerfilUsuario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPerfil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbUsuario` (
  `emailUsuario` VARCHAR(50) NOT NULL,
  `fkIdPerfilUsuario` INT NOT NULL,
  `senhaUsuario` VARCHAR(128) NOT NULL,
  `nomeUsuario` VARCHAR(45) NOT NULL,
  `imgusuario` VARCHAR(45) NOT NULL DEFAULT '../dist/img/avatar.png',
  `statusUsuario` INT(1) NOT NULL DEFAULT 0 COMMENT '0 - bloqueado\n1 - aguardando\n2 - Primeiro Acesso\n3 - liberado',
  PRIMARY KEY (`emailUsuario`),
  INDEX `fk_tbUsuario_tbPefilUsuario_idx` (`fkIdPerfilUsuario` ASC),
  CONSTRAINT `fk_tbUsuario_tbPefilUsuario`
    FOREIGN KEY (`fkIdPerfilUsuario`)
    REFERENCES `zsec`.`tbPefilUsuario` (`idPerfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbCategoriaMenu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbCategoriaMenu` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `nomeCategoria` VARCHAR(45) NOT NULL,
  `iconeCategoria` VARCHAR(45) NOT NULL DEFAULT 'fa-folder-o',
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbItemMenu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbItemMenu` (
  `idItem` INT NOT NULL AUTO_INCREMENT,
  `fkIdCategoriaItem` INT NOT NULL,
  `exibeNomeMenuItem` VARCHAR(45) NOT NULL,
  `tituloItem` VARCHAR(45) NOT NULL,
  `descricaoItem` VARCHAR(128) NOT NULL,
  `caminhoItem` VARCHAR(128) NOT NULL,
  `arquivoItem` VARCHAR(45) NOT NULL,
  `iconeItem` VARCHAR(45) NOT NULL DEFAULT 'fa-circle-o',
  PRIMARY KEY (`idItem`),
  INDEX `fk_itemMenu_tbCategoriaMenu1_idx` (`fkIdCategoriaItem` ASC),
  CONSTRAINT `fk_itemMenu_tbCategoriaMenu1`
    FOREIGN KEY (`fkIdCategoriaItem`)
    REFERENCES `zsec`.`tbCategoriaMenu` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbPermissao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbPermissao` (
  `fkIdUsuario` VARCHAR(50) NOT NULL,
  `fkIdItem` INT NOT NULL,
  PRIMARY KEY (`fkIdUsuario`, `fkIdItem`),
  INDEX `fk_tbUsuario_has_tbItemMenu_tbItemMenu1_idx` (`fkIdItem` ASC),
  INDEX `fk_tbUsuario_has_tbItemMenu_tbUsuario1_idx` (`fkIdUsuario` ASC),
  CONSTRAINT `fk_tbUsuario_has_tbItemMenu_tbUsuario1`
    FOREIGN KEY (`fkIdUsuario`)
    REFERENCES `zsec`.`tbUsuario` (`emailUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbUsuario_has_tbItemMenu_tbItemMenu1`
    FOREIGN KEY (`fkIdItem`)
    REFERENCES `zsec`.`tbItemMenu` (`idItem`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbVistoriador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbVistoriador` (
  `idVistoriador` INT NOT NULL AUTO_INCREMENT,
  `fkEmailUsuarioVistoriador` VARCHAR(50) NOT NULL,
  `nomeVistoriador` VARCHAR(45) NOT NULL,
  `dataNascimentoVistoriador` DATE NOT NULL,
  `enderecoVistoriador` VARCHAR(45) NOT NULL,
  `statusAvaliador` INT NOT NULL DEFAULT 0,
  `imgVistoriador` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idVistoriador`),
  INDEX `fk_tbVistoriador_tbUsuario1_idx` (`fkEmailUsuarioVistoriador` ASC),
  CONSTRAINT `fk_tbVistoriador_tbUsuario1`
    FOREIGN KEY (`fkEmailUsuarioVistoriador`)
    REFERENCES `zsec`.`tbUsuario` (`emailUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbSeguradora`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbSeguradora` (
  `idSeguradora` INT NOT NULL AUTO_INCREMENT,
  `fkEmailUsuarioSeguradora` VARCHAR(50) NOT NULL,
  `nomeSeguradora` VARCHAR(45) NOT NULL,
  `imgSeguradora` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idSeguradora`),
  INDEX `fk_tbSeguradora_tbUsuario1_idx` (`fkEmailUsuarioSeguradora` ASC),
  CONSTRAINT `fk_tbSeguradora_tbUsuario1`
    FOREIGN KEY (`fkEmailUsuarioSeguradora`)
    REFERENCES `zsec`.`tbUsuario` (`emailUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbNivelVistoriador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbNivelVistoriador` (
  `idNivelVistoriador` INT NOT NULL AUTO_INCREMENT,
  `nomeNivelVistoriador` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idNivelVistoriador`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`solicitacaoVistoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`solicitacaoVistoria` (
  `idSolicitacaoVistoria` INT NOT NULL AUTO_INCREMENT,
  `fkIdSeguradoraSolicitacaoVistoria` INT NOT NULL,
  `fkIdNivelVistoriadorsolicitacaoVistoria` INT NOT NULL,
  `cepSolicitacaoVistoria` VARCHAR(45) NOT NULL,
  `dataSolicitacaoVistoria` DATE NOT NULL,
  `dataMaxSolicitacaoVistoria` DATE NOT NULL,
  `contatoLocalSolicitacaoVistoria` VARCHAR(45) NOT NULL,
  `valorPagoSolicitacaoVistoria` FLOAT NOT NULL,
  `clienteSolicitacaoVistoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idSolicitacaoVistoria`),
  INDEX `fk_solicitacaoVistoria_tbSeguradora1_idx` (`fkIdSeguradoraSolicitacaoVistoria` ASC),
  INDEX `fk_solicitacaoVistoria_tbNivelVistoriador1_idx` (`fkIdNivelVistoriadorsolicitacaoVistoria` ASC),
  CONSTRAINT `fk_solicitacaoVistoria_tbSeguradora1`
    FOREIGN KEY (`fkIdSeguradoraSolicitacaoVistoria`)
    REFERENCES `zsec`.`tbSeguradora` (`idSeguradora`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitacaoVistoria_tbNivelVistoriador1`
    FOREIGN KEY (`fkIdNivelVistoriadorsolicitacaoVistoria`)
    REFERENCES `zsec`.`tbNivelVistoriador` (`idNivelVistoriador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`interesseSolicitacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`interesseSolicitacao` (
  `idVistoriadorinteresseSolicitacao` INT NOT NULL,
  `idSolicitacaoVistoriaInteresseSolicitacao` INT NOT NULL,
  `localPartidaInteresseSolicitacao` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`idVistoriadorinteresseSolicitacao`, `idSolicitacaoVistoriaInteresseSolicitacao`),
  INDEX `fk_tbVistoriador_has_solicitacaoVistoria_solicitacaoVistori_idx` (`idSolicitacaoVistoriaInteresseSolicitacao` ASC),
  INDEX `fk_tbVistoriador_has_solicitacaoVistoria_tbVistoriador1_idx` (`idVistoriadorinteresseSolicitacao` ASC),
  CONSTRAINT `fk_tbVistoriador_has_solicitacaoVistoria_tbVistoriador1`
    FOREIGN KEY (`idVistoriadorinteresseSolicitacao`)
    REFERENCES `zsec`.`tbVistoriador` (`idVistoriador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbVistoriador_has_solicitacaoVistoria_solicitacaoVistoria1`
    FOREIGN KEY (`idSolicitacaoVistoriaInteresseSolicitacao`)
    REFERENCES `zsec`.`solicitacaoVistoria` (`idSolicitacaoVistoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbVistoriaAprovada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbVistoriaAprovada` (
  `idVistoriaAprovada` INT NOT NULL AUTO_INCREMENT,
  `fkIdVistoriadorinteresseSolicitacaoVistoriaAprovada` INT NOT NULL,
  `fkIidSolicitacaoVistoriaInteresseSolicitacaoVistoriaAprovada` INT NOT NULL,
  PRIMARY KEY (`idVistoriaAprovada`),
  INDEX `fk_tbVistoriaAprovada_interesseSolicitacao1_idx` (`fkIdVistoriadorinteresseSolicitacaoVistoriaAprovada` ASC, `fkIidSolicitacaoVistoriaInteresseSolicitacaoVistoriaAprovada` ASC),
  CONSTRAINT `fk_tbVistoriaAprovada_interesseSolicitacao1`
    FOREIGN KEY (`fkIdVistoriadorinteresseSolicitacaoVistoriaAprovada` , `fkIidSolicitacaoVistoriaInteresseSolicitacaoVistoriaAprovada`)
    REFERENCES `zsec`.`interesseSolicitacao` (`idVistoriadorinteresseSolicitacao` , `idSolicitacaoVistoriaInteresseSolicitacao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbFeedBackVistoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbFeedBackVistoria` (
  `idFeedBackVistoria` INT NOT NULL AUTO_INCREMENT,
  `fkIdVistoriaAprovadaFeedBackVistoria` INT NOT NULL,
  `scoreFeedBackVistoriacol` FLOAT NOT NULL,
  `obsFeedBackVistoriacol` LONGTEXT NULL,
  PRIMARY KEY (`idFeedBackVistoria`),
  INDEX `fk_tbFeedBackVistoria_tbVistoriaAprovada1_idx` (`fkIdVistoriaAprovadaFeedBackVistoria` ASC),
  CONSTRAINT `fk_tbFeedBackVistoria_tbVistoriaAprovada1`
    FOREIGN KEY (`fkIdVistoriaAprovadaFeedBackVistoria`)
    REFERENCES `zsec`.`tbVistoriaAprovada` (`idVistoriaAprovada`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tagVistoriador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tagVistoriador` (
  `idTagVistoriador` INT NOT NULL AUTO_INCREMENT,
  `nomeTagVistoriador` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTagVistoriador`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`skillVistoriador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`skillVistoriador` (
  `fkIdTagVistoriadorskillVistoriador` INT NOT NULL,
  `fkIdVistoriadorskillVistoriador` INT NOT NULL,
  PRIMARY KEY (`fkIdTagVistoriadorskillVistoriador`, `fkIdVistoriadorskillVistoriador`),
  INDEX `fk_tagVistoriador_has_tbVistoriador_tbVistoriador1_idx` (`fkIdVistoriadorskillVistoriador` ASC),
  INDEX `fk_tagVistoriador_has_tbVistoriador_tagVistoriador1_idx` (`fkIdTagVistoriadorskillVistoriador` ASC),
  CONSTRAINT `fk_tagVistoriador_has_tbVistoriador_tagVistoriador1`
    FOREIGN KEY (`fkIdTagVistoriadorskillVistoriador`)
    REFERENCES `zsec`.`tagVistoriador` (`idTagVistoriador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tagVistoriador_has_tbVistoriador_tbVistoriador1`
    FOREIGN KEY (`fkIdVistoriadorskillVistoriador`)
    REFERENCES `zsec`.`tbVistoriador` (`idVistoriador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbObjetoVistoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbObjetoVistoria` (
  `idobjetoVistoria` INT NOT NULL AUTO_INCREMENT,
  `nomeObjetoVistoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idobjetoVistoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbObjetoSolicitado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbObjetoSolicitado` (
  `fkIdObjetoVistoriaSolicitado` INT NOT NULL,
  `fkIidObjetoVistoriaSolicitado` INT NOT NULL,
  PRIMARY KEY (`fkIdObjetoVistoriaSolicitado`, `fkIidObjetoVistoriaSolicitado`),
  INDEX `fk_tbObjetoVistoria_has_solicitacaoVistoria_solicitacaoVist_idx` (`fkIidObjetoVistoriaSolicitado` ASC),
  INDEX `fk_tbObjetoVistoria_has_solicitacaoVistoria_tbObjetoVistori_idx` (`fkIdObjetoVistoriaSolicitado` ASC),
  CONSTRAINT `fk_tbObjetoVistoria_has_solicitacaoVistoria_tbObjetoVistoria1`
    FOREIGN KEY (`fkIdObjetoVistoriaSolicitado`)
    REFERENCES `zsec`.`tbObjetoVistoria` (`idobjetoVistoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbObjetoVistoria_has_solicitacaoVistoria_solicitacaoVistor1`
    FOREIGN KEY (`fkIidObjetoVistoriaSolicitado`)
    REFERENCES `zsec`.`solicitacaoVistoria` (`idSolicitacaoVistoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbObjetoSegurado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbObjetoSegurado` (
  `idObjetoSegurado` INT NOT NULL AUTO_INCREMENT,
  `nomeObjetoSegurado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idObjetoSegurado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbVistoriaObjeto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbVistoriaObjeto` (
  `fkIdObjetoSeguradoVistoriaObjeto` INT NOT NULL,
  `fkIdSolicitacaoVistoriaVistoriaObjeto` INT NOT NULL,
  PRIMARY KEY (`fkIdObjetoSeguradoVistoriaObjeto`, `fkIdSolicitacaoVistoriaVistoriaObjeto`),
  INDEX `fk_tbObjetoSegurado_has_solicitacaoVistoria_solicitacaoVist_idx` (`fkIdSolicitacaoVistoriaVistoriaObjeto` ASC),
  INDEX `fk_tbObjetoSegurado_has_solicitacaoVistoria_tbObjetoSegurad_idx` (`fkIdObjetoSeguradoVistoriaObjeto` ASC),
  CONSTRAINT `fk_tbObjetoSegurado_has_solicitacaoVistoria_tbObjetoSegurado1`
    FOREIGN KEY (`fkIdObjetoSeguradoVistoriaObjeto`)
    REFERENCES `zsec`.`tbObjetoSegurado` (`idObjetoSegurado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbObjetoSegurado_has_solicitacaoVistoria_solicitacaoVistor1`
    FOREIGN KEY (`fkIdSolicitacaoVistoriaVistoriaObjeto`)
    REFERENCES `zsec`.`solicitacaoVistoria` (`idSolicitacaoVistoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `zsec`.`tbEstrelaVistoriador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `zsec`.`tbEstrelaVistoriador` (
  `idEstrelaVistoriador` INT NOT NULL AUTO_INCREMENT,
  `valorEstrelaVistoriador` INT NOT NULL DEFAULT 0,
  `fkIdVistoriadorinteresseSolicitacaoEstrelaVistoriador` INT NOT NULL,
  `fkIdSolicitacaoVistoriaInteresseSolicitacaoEstrelaVistoriador` INT NOT NULL,
  PRIMARY KEY (`idEstrelaVistoriador`),
  INDEX `fk_tbEstrelaVistoriador_interesseSolicitacao1_idx` (`fkIdVistoriadorinteresseSolicitacaoEstrelaVistoriador` ASC, `fkIdSolicitacaoVistoriaInteresseSolicitacaoEstrelaVistoriador` ASC),
  CONSTRAINT `fk_tbEstrelaVistoriador_interesseSolicitacao1`
    FOREIGN KEY (`fkIdVistoriadorinteresseSolicitacaoEstrelaVistoriador` , `fkIdSolicitacaoVistoriaInteresseSolicitacaoEstrelaVistoriador`)
    REFERENCES `zsec`.`interesseSolicitacao` (`idVistoriadorinteresseSolicitacao` , `idSolicitacaoVistoriaInteresseSolicitacao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `zsec`.`tbPefilUsuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `zsec`;
INSERT INTO `zsec`.`tbPefilUsuario` (`idPerfil`, `nomePerfilUsuario`) VALUES (1, 'Adminisrador');
INSERT INTO `zsec`.`tbPefilUsuario` (`idPerfil`, `nomePerfilUsuario`) VALUES (2, 'Seguradora');
INSERT INTO `zsec`.`tbPefilUsuario` (`idPerfil`, `nomePerfilUsuario`) VALUES (3, 'Vistoriador');

COMMIT;


-- -----------------------------------------------------
-- Data for table `zsec`.`tbUsuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `zsec`;
INSERT INTO `zsec`.`tbUsuario` (`emailUsuario`, `fkIdPerfilUsuario`, `senhaUsuario`, `nomeUsuario`, `imgusuario`, `statusUsuario`) VALUES ('adm@cz.com', 1, 'd93a5def7511da3d0f2d171d9c344e91', 'Administrador', '../dist/img/avatar.png', 3);
INSERT INTO `zsec`.`tbUsuario` (`emailUsuario`, `fkIdPerfilUsuario`, `senhaUsuario`, `nomeUsuario`, `imgusuario`, `statusUsuario`) VALUES ('seguradora@cz.com', 2, 'd93a5def7511da3d0f2d171d9c344e91', 'Seguradora', '../dist/img/avatar.png', 3);
INSERT INTO `zsec`.`tbUsuario` (`emailUsuario`, `fkIdPerfilUsuario`, `senhaUsuario`, `nomeUsuario`, `imgusuario`, `statusUsuario`) VALUES ('vistoriador@cz.com', 3, 'd93a5def7511da3d0f2d171d9c344e91', 'Vistoriador', '../dist/img/avatar.png', 3);

COMMIT;


-- -----------------------------------------------------
-- Data for table `zsec`.`tbCategoriaMenu`
-- -----------------------------------------------------
START TRANSACTION;
USE `zsec`;
INSERT INTO `zsec`.`tbCategoriaMenu` (`idCategoria`, `nomeCategoria`, `iconeCategoria`) VALUES (1, 'Home', 'fa-dashboard');
INSERT INTO `zsec`.`tbCategoriaMenu` (`idCategoria`, `nomeCategoria`, `iconeCategoria`) VALUES (2, 'Vistoria', 'fa-folder-o');
INSERT INTO `zsec`.`tbCategoriaMenu` (`idCategoria`, `nomeCategoria`, `iconeCategoria`) VALUES (3, 'Seguradora', 'fa-folder-o');
INSERT INTO `zsec`.`tbCategoriaMenu` (`idCategoria`, `nomeCategoria`, `iconeCategoria`) VALUES (4, 'Vistoriador', 'fa-folder-o');
INSERT INTO `zsec`.`tbCategoriaMenu` (`idCategoria`, `nomeCategoria`, `iconeCategoria`) VALUES (5, 'Invisivel', 'fa-folder-o');

COMMIT;


-- -----------------------------------------------------
-- Data for table `zsec`.`tbItemMenu`
-- -----------------------------------------------------
START TRANSACTION;
USE `zsec`;
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (1, 1, 'Dashboard', 'Bem Vindo', 'Painel inicial', 'index.php', 'home/index.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (2, 2, 'Nova Vistoria', 'Nova vistoria', 'Nova vistoria', 'Vistoria/', 'seguradora/novaVistoria.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (3, 2, 'Vistorias pendentes', 'Vistorias pendentes', 'Vistorias pendentes', 'Vistoria/Pendente/', 'seguradora/listaTrabalhoPendente.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (4, 5, 'Perfil vistoriador', 'Perfil vistoriador', 'Perfil vistoriador', 'Vistoriador/Perfil/', 'vistoriador/perfil.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (5, 2, 'Avaliar vistoriador', 'Avaliar vistoriador', 'Avaliar vistoriador', 'Vistoriador/Avaliação/', 'seguradora/avaliarVistoriador.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (6, 5, 'Vistoria', 'Vistoria', 'Vistoria', 'Vistoria/Nova/', 'vistoriador/interesse.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (7, 5, 'Novo laudo', 'Novo laudo', 'Novo laudo', 'Vistoria/Laudo/', 'vistoriador/avaliacao.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (8, 5, 'Detalhe vistoria', 'Detalhe vistoria', 'Detalhe vistoria', 'Vistoria/Detalhes', 'vistoriador/detalheTrabalho.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (9, 4, 'Trabalhos pendentes', 'Trabalhos pendentes', 'Trabalhos pendentes', 'Vistoria/Pendente/', 'vistoriador/listaTrabalho.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (10, 5, 'Processamento', 'Processamento', 'Processamento', 'Processamento/', 'processa/processaVistoriador.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (11, 5, 'Processamento', 'Processamento', 'Processamento', 'Processamento/', 'processa/processaSeguradorar.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (12, 5, 'Selecionar vistoriador', 'Selecionar vistoriador', 'Selecionar vistoriador', 'Vistoriador/Aprovar', 'seguradora/aprovarVistoriador.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (13, 2, 'Avaliar Vistoriador', 'Avaliar Vistoriador', 'Avaliar Vistoriador', 'Seguradora/Avaliação/Vistoriador/', 'seguradora/trabalhosFinalizados.php', 'fa-circle-o');
INSERT INTO `zsec`.`tbItemMenu` (`idItem`, `fkIdCategoriaItem`, `exibeNomeMenuItem`, `tituloItem`, `descricaoItem`, `caminhoItem`, `arquivoItem`, `iconeItem`) VALUES (14, 5, 'Avaliar Vistoriador', 'Avaliar Vistoriador', 'Avaliar Vistoriador', 'Seguradora/Avaliação/Vistoriador/', 'seguradora/avaliacaoEstrelaVistoriador.php', 'fa-circle-o');

COMMIT;


-- -----------------------------------------------------
-- Data for table `zsec`.`tbPermissao`
-- -----------------------------------------------------
START TRANSACTION;
USE `zsec`;
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('seguradora@cz.com', 1);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('seguradora@cz.com', 2);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('seguradora@cz.com', 3);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('seguradora@cz.com', 11);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('seguradora@cz.com', 4);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('vistoriador@cz.com', 1);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('vistoriador@cz.com', 6);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('vistoriador@cz.com', 7);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('vistoriador@cz.com', 8);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('vistoriador@cz.com', 9);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('vistoriador@cz.com', 10);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('seguradora@cz.com', 12);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('seguradora@cz.com', 13);
INSERT INTO `zsec`.`tbPermissao` (`fkIdUsuario`, `fkIdItem`) VALUES ('seguradora@cz.com', 14);

COMMIT;


-- -----------------------------------------------------
-- Data for table `zsec`.`tbNivelVistoriador`
-- -----------------------------------------------------
START TRANSACTION;
USE `zsec`;
INSERT INTO `zsec`.`tbNivelVistoriador` (`idNivelVistoriador`, `nomeNivelVistoriador`) VALUES (1, 'Nível 1');
INSERT INTO `zsec`.`tbNivelVistoriador` (`idNivelVistoriador`, `nomeNivelVistoriador`) VALUES (2, 'Nível 2');
INSERT INTO `zsec`.`tbNivelVistoriador` (`idNivelVistoriador`, `nomeNivelVistoriador`) VALUES (3, 'Nível 3');
INSERT INTO `zsec`.`tbNivelVistoriador` (`idNivelVistoriador`, `nomeNivelVistoriador`) VALUES (4, 'Nível 4');
INSERT INTO `zsec`.`tbNivelVistoriador` (`idNivelVistoriador`, `nomeNivelVistoriador`) VALUES (5, 'Nível 5');

COMMIT;

