CREATE DATABASE db_arraiabem;
USE db_arraiabem;

CREATE TABLE tb_usuario (
	cd_chave INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nm_nome VARCHAR (256),
	ds_email VARCHAR (100),
	qt_ddd VARCHAR (3) INT,
	qt_telefone VARCHAR (11),
	ds_senha VARCHAR (16),
	ds_tipotel,
	ds_tipoimovel,
	ds_compra
);