CREATE DATABASE db_arraiabem;
USE db_arraiabem;

CREATE TABLE tb_usuario (
	cd_chave INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nm_nome VARCHAR (256),
	ds_email VARCHAR (100),
	qt_ddd INT,
	qt_telefone INT,
	ds_senha VARCHAR (16),
	ds_tipotel INT,
	ds_tipoimovel INT,
	ds_compra INT
);