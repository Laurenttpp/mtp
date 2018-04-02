DROP SCHEMA IF EXISTS DataBase CASCADE;

CREATE SCHEMA DataBase;

 DROP TABLE IF EXISTS DataBase.account;
 DROP TABLE IF EXISTS DataBase.count;
 DROP TABLE IF EXISTS DataBase.camera;




CREATE TABLE IF NOT EXISTS DataBase.account (
		nameAccount	VARCHAR(10)		NOT NULL,
		mailAccount	VARCHAR(50) 		NOT NULL,
		mdpAccount	VARCHAR(10)		NOT NULL,
		logState	BOOLEAN			NOT NULL,
		loged		boolean				,
		canon1dc	int 				,
		sonya99ii	int 				,
		nikond4		int 				,
		nikond5		int 				,
		canon1dx	int 				,
		lumixgh5	int 				,
		olympusem1	int 				,
		canon5dmarkiii	int 				,
		lumixgx8	int 				,
		canond750	int 				,
		nikond850	int 				,
		nikondf		int 				,
		sonyalpha68	int 				,
		sonyalpha77	int 				,
		canond7d	int 				,
		canon60d	int 				,
		canon100d	int 				,
		canon1300d	int 				,
		nikond500	int 				,
		nikond600	int 				,
		nikond7500	int 				,
	PRIMARY KEY (mailAccount));

CREATE TABLE IF NOT EXISTS DataBase.camera (
		idcamera	VARCHAR(20)		NOT NULL,
		likes		int 				,
		dislike		int 				,
		rented		int 				,
		price		int 			NOT NULL,
		
	PRIMARY KEY (idcamera));

INSERT INTO DataBase.camera VALUES ('canon1dc', 0, 0, 0,200);
INSERT INTO DataBase.camera VALUES ('sonya99ii', 0, 0, 0, 250);
INSERT INTO DataBase.camera VALUES ('nikond4', 0, 0, 0, 300);
INSERT INTO DataBase.camera VALUES ('nikond5', 0, 0, 0,170);
INSERT INTO DataBase.camera VALUES ('canon1dx', 0, 0, 0,230);
INSERT INTO DataBase.camera VALUES ('lumixgh5', 0, 0, 0,120);
INSERT INTO DataBase.camera VALUES ('olympusem1', 0, 0, 0,330);

INSERT INTO DataBase.camera VALUES ('canon5dmarkiii', 0, 0, 0,90);
INSERT INTO DataBase.camera VALUES ('lumixgx8', 0, 0, 0,55);
INSERT INTO DataBase.camera VALUES ('canond750', 0, 0, 0,60);
INSERT INTO DataBase.camera VALUES ('nikond850', 0, 0, 0,77);
INSERT INTO DataBase.camera VALUES ('nikondf', 0, 0, 0,70);
INSERT INTO DataBase.camera VALUES ('sonyalpha68', 0, 0, 0,55);
INSERT INTO DataBase.camera VALUES ('sonyalpha77', 0, 0, 0,65);

INSERT INTO DataBase.camera VALUES ('canond7d', 0, 0, 0,17);
INSERT INTO DataBase.camera VALUES ('canon60d', 0, 0, 0,27);
INSERT INTO DataBase.camera VALUES ('canon100d', 0, 0, 0,35);
INSERT INTO DataBase.camera VALUES ('canon1300d', 0, 0, 0,40);
INSERT INTO DataBase.camera VALUES ('nikond500', 0, 0, 0,25);
INSERT INTO DataBase.camera VALUES ('nikond600', 0, 0, 0,30);
INSERT INTO DataBase.camera VALUES ('nikond7500', 0, 0, 0,15);