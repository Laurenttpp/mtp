DROP SCHEMA IF EXISTS DataBase CASCADE;

CREATE SCHEMA DataBase;

 DROP TABLE IF EXISTS DataBase.account;





CREATE TABLE IF NOT EXISTS DataBase.account (
		nameAccount	VARCHAR(10)		NOT NULL,
		mailAccount	VARCHAR(50) 		NOT NULL,
		mdpAccount	VARCHAR(10)		NOT NULL,
	PRIMARY KEY (mailAccount));

