CREATE DATABASE lif4projet;

USE lif4projet;

DROP TABLE IF EXISTS utilisateur;
DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS commentaire;
DROP TABLE IF EXISTS memo;
DROP TABLE IF EXISTS historique;

CREATE TABLE utilisateur(
idu int(8) NOT NULL,
pseudo varchar(30) NOT NULL,
mdp varchar(30) NOT NULL,
PRIMARY KEY(idu)
);

CREATE TABLE post(
idp int(8) NOT NULL,
idu int(8),
contenup varchar(500),
datep date,
categorie varchar(30),
PRIMARY KEY (idp),
FOREIGN KEY (idu) REFERENCES utilisateur(idu)
);

CREATE TABLE commentaire(
idc int(8) NOT NULL,
idu int(8),
idp int(8),
datec date,
contenuc varchar(500),
PRIMARY KEY (idc),
FOREIGN KEY (idu) REFERENCES utilisateur(idu),
FOREIGN KEY (idp) REFERENCES post(idp)
);


CREATE TABLE memo(
idm int(8) NOT NULL,
idu int(8),
contenum varchar (150),
datem date,
dater date,
categorie varchar(30),
PRIMARY KEY(idm),
FOREIGN KEY (idu) REFERENCES utilisateur(idu)
);
CREATE TABLE historique;

INSERT INTO utilisateur(idu,pseudo,mdp) VALUES (1,'licorne','paradis');