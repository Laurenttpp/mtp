DROP SCHEMA IF EXISTS DataBase CASCADE;

CREATE SCHEMA DataBase;

 DROP TABLE IF EXISTS DataBase.account;
 DROP TABLE IF EXISTS DataBase.count;
 DROP TABLE IF EXISTS DataBase.camera;




CREATE TABLE IF NOT EXISTS DataBase.account (
		nameAccount	VARCHAR(10)		NOT NULL,
		mailAccount	VARCHAR(50) 		NOT NULL,
		mdpAccount	VARCHAR(10)		NOT NULL,
		loged		boolean				,
	PRIMARY KEY (mailAccount));

CREATE TABLE IF NOT EXISTS DataBase.camera (
		idcamera	VARCHAR(10)	NOT NULL,
		likes		int 				,
		dislike		int 				,
		reviewed	int 				,
		rented		int 				,
	PRIMARY KEY (idcamera));

INSERT INTO DataBase.camera VALUES ('canon1dc', 0, 0, 0, 0);
INSERT INTO DataBase.camera VALUES ('sonya99ii', 0, 0, 0, 0);
INSERT INTO DataBase.camera VALUES ('nikond4', 0, 0, 0, 0);
INSERT INTO DataBase.camera VALUES ('nikond5', 0, 0, 0, 0);
INSERT INTO DataBase.camera VALUES ('canon1dx', 0, 0, 0, 0);
INSERT INTO DataBase.camera VALUES ('lumixgh5', 0, 0, 0, 0);
INSERT INTO DataBase.camera VALUES ('olympusem1', 0, 0, 0, 0);