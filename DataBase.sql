DROP SCHEMA IF EXISTS DataBase CASCADE;

CREATE SCHEMA DataBase;

 DROP TABLE IF EXISTS DataBase.account;





CREATE TABLE IF NOT EXISTS DataBase.account (
		nameAccount	VARCHAR(10)		NOT NULL,
		mailAccount	VARCHAR(50) 		NOT NULL,
		mdpAccount	VARCHAR(10)		NOT NULL,
		loged		boolean				,
	PRIMARY KEY (mailAccount));

CREATE TABLE IF NOT EXISTS DataBase.camera (
		idproduct	VARCHAR(9)		NOT NULL,
		likes		int 				,
		dislikes	int				,
		rented		boolean				,
	PRIMARY KEY (idproduct));

