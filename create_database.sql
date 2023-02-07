ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'aluno123';

CREATE DATABASE bancoxpto;
USE bancoxpto;

CREATE TABLE IF NOT EXISTS users (id int NOT NULL AUTO_INCREMENT,username varchar(255) NOT NULL,password varchar(255) NOT NULL, role varchar(32) NOT NULL, PRIMARY KEY (id));

INSERT INTO users (username,password,role) VALUES ('admin','admin','admin');
INSERT INTO users (username,password,role) VALUES ('maria','password','user');
INSERT INTO users (username,password,role) VALUES ('frederico','frederico','user');
INSERT INTO users (username,password,role) VALUES ('luis','Jk18$$a+0b','user');
INSERT INTO users (username,password,role) VALUES ('carla','elefante','user');
INSERT INTO users (username,password,role) VALUES ('manuel','s7rwk','user');

CREATE TABLE IF NOT EXISTS transferencias (id int NOT NULL AUTO_INCREMENT,origem varchar(255) NOT NULL,destino varchar(255) NOT NULL,valor INTEGER NOT NULL, descricao varchar(255) NOT NULL,PRIMARY KEY (id));
