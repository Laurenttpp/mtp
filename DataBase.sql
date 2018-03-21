DROP SCHEMA IF EXISTS DataBase CASCADE;

CREATE SCHEMA DataBase;

 DROP TABLE IF EXISTS DataBase.account;
 DROP TABLE IF EXISTS DataBase.count;




CREATE TABLE IF NOT EXISTS DataBase.account (
		nameAccount	VARCHAR(10)		NOT NULL,
		mailAccount	VARCHAR(50) 		NOT NULL,
		mdpAccount	VARCHAR(10)		NOT NULL,
		loged		boolean				,
	PRIMARY KEY (mailAccount));

CREATE TABLE IF NOT EXISTS DataBase.count (
		id		VARCHAR(10)		NOT NULL,
		count		int 				,
	PRIMARY KEY (id));

INSERT INTO DataBase.count VALUES ('pfourcl', 0);