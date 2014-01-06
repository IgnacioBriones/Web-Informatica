
/* Drop Tables */

DROP TABLE IF EXISTS carrera;
DROP TABLE IF EXISTS funcionario;
DROP TABLE IF EXISTS noticia;
DROP TABLE IF EXISTS cee;
DROP TABLE IF EXISTS laboral;




/* Create Tables */

CREATE TABLE carrera
(
	codigo int NOT NULL,
	nombre_carrera char(255),
	PRIMARY KEY (codigo)
) WITHOUT OIDS;


CREATE TABLE funcionario
(
	rut int NOT NULL UNIQUE,
	nombre_funcionario char(255) NOT NULL,
	paterno char(255) NOT NULL,
	materno char(255) NOT NULL,
	alias_f char(255) NOT NULL,
	passwd char(255) NOT NULL
) WITHOUT OIDS;


CREATE TABLE noticia
(
	idnoticia serial NOT NULL,
	titulo_noticia char(255) NOT NULL,
	cuerpo_noticia char(10000) NOT NULL,
	fecha_publicacion_n date NOT NULL,
	alias_user char(255) NOT NULL,
	PRIMARY KEY (idnoticia)
) WITHOUT OIDS;


CREATE TABLE cee
(
	idcee serial NOT NULL,
	periodo date NOT NULL,
	cargo char(255) NOT NULL,
	rut int NOT NULL,
	PRIMARY KEY (idcee)
) WITHOUT OIDS;


CREATE TABLE laboral
(
	idlaboral serial NOT NULL,
	fecha_publicacion_l date NOT NULL,
	titulo_laboral char(255) NOT NULL,
	cuerpo_laboral char(255) NOT NULL,
	contacto_laboral char(255) NOT NULL,
	alias_usuario char(255) NOT NULL,
	PRIMARY KEY (idlaboral)
) WITHOUT OIDS;

insert into carrera (codigo, nombre_carrera) values
                                                     (21041, 'ingenieria civil en computacion mencion informatica'),
                                                     (21030, 'ingenieria en informatica');


