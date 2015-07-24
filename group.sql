use student22db;

CREATE TABLE COMMUNITY_PARTNER(
	CommPartnerID	INT									AUTO_INCREMENT,
	CommName		VARCHAR(45)		NOT NULL, 			
	Phone			VARCHAR(45)     NOT NULL,	
	URL				VARCHAR(45)		NOT NULL,
	Email 			VARCHAR(45)		NOT NULL,

	PRIMARY KEY (CommPartnerID)
)ENGINE = InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE CLASS(
	CID				INT  								AUTO_INCREMENT,
	ClassName		VARCHAR(45) 	NOT NULL 			UNIQUE,
	StartDate		DATE			NOT NULL,
	EndDate			DATE			NOT NULL,
	Capacity		INT				NOT NULL,

	PRIMARY KEY(CID)
)ENGINE = InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE STUDENT(
	SID			INT  			 						AUTO_INCREMENT,
	FName		VARCHAR(45) 		NOT NULL,
	LName		VARCHAR(45)			NOT NULL,
	Initial 	VARCHAR(45),
	Phone 		VARCHAR(45)			NOT NULL,
	Email		VARCHAR(45)			NOT NULL,
	PRIMARY KEY (SID)
)ENGINE = InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE OPPORTUNITY (
    OppID 			INT 								AUTO_INCREMENT,
	CommPartnerID 	INT 			NOT NULL			UNIQUE,
	CID 			INT 			NOT NULL,
    OppName 		VARCHAR(45) 	NOT NULL,
    StartDate 		DATE 			NOT NULL,
    EndDate 		DATE,
    Slots 			INT 			NOT NULL,
    Location 		VARCHAR(70) 	NOT NULL,
    
	PRIMARY KEY (OppID),
	CONSTRAINT opportunity_fk_commpartner FOREIGN KEY (CommPartnerID) REFERENCES COMMUNITY_PARTNER (CommPartnerID),
	CONSTRAINT opportunity_fk_class FOREIGN KEY (CID) REFERENCES CLASS (CID)
)  ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE COMMENT(
	OppID			INT									AUTO_INCREMENT,
	SID				INT,
	InsertDate		VARCHAR(45)		NOT NULL,
	Assessment		VARCHAR(45),

	PRIMARY KEY (OppID, SID, InsertDate),
	CONSTRAINT comment_fk_opportunity FOREIGN KEY (OppID) REFERENCES OPPORTUNITY (OppID),
	CONSTRAINT comment_fk_student FOREIGN KEY (SID) REFERENCES STUDENT (SID)
)ENGINE = InnoDB DEFAULT CHARSET=latin1;

INSERT INTO COMMUNITY_PARTNER VALUES (1, 'HappyChildren', '1458769', 'hc.org', 'hc@mail.com');
INSERT INTO COMMUNITY_PARTNER VALUES (2, 'GoodHeart', '2458769', 'gh.org', 'gh@mail.com');
INSERT INTO COMMUNITY_PARTNER VALUES (3, 'SmartWorld', '3458769', 'sw.org', 'sw@mail.com');

INSERT INTO CLASS VALUES(101, 'Ethics', '2013-1-3', '2013-3-4', 25);
INSERT INTO CLASS VALUES(102, 'Social Work', '2013-1-3', '2013-3-4', 25);
INSERT INTO CLASS VALUES(103, 'Community Service', '2013-3-20', '2013-6-20', 25);

INSERT INTO STUDENT VALUES(1001, 'Geoff', 'Smythe', ' ', 2065555555, 'gsmyth@mail');
INSERT INTO STUDENT VALUES(1002, 'Jane', 'Bean', 'C', 7635554444, 'jcbean@mail');
INSERT INTO STUDENT VALUES(1003, 'Kether', 'Sidney', 'F', 4445553333, 'sfkether@mail');

INSERT INTO OPPORTUNITY VALUES (10001, 1, 101, 'Brave Heart', '2013-1-12', '2014-4-13', '100', '2345 Orange Way');
INSERT INTO OPPORTUNITY VALUES (10002, 2, 102, 'Red Cross', '2013-1-12', '2014-4-13', '100', '245 South Way');
INSERT INTO OPPORTUNITY VALUES (10003, 3, 103, 'Meow', '2013-1-12', '2013-3-18', '50', '2355 Grass Way');

INSERT INTO COMMENT VALUES (10001, 1001, '2014-1-17', 'good');
INSERT INTO COMMENT VALUES (10002, 1002, '2014-1-18', 'good');
INSERT INTO COMMENT VALUES (10003, 1003, '2014-1-19', 'good');

create view PartnerOpportunity as 
select CommName as PartnerName, OppName as OpportunityName
from COMMUNITY_PARTNER C join OPPORTUNITY O on C.CommPartnerID = O.CommPartnerID;

create view PartnerOpportunityStudent as 
select CommName as PartnerName, OppName as OpportunityName, 
concat(FName, ' ', ifnull(Initial,''), ' ', LName) as StudentName
from COMMUNITY_PARTNER CP join OPPORTUNITY O on CP.CommPartnerID = O.CommPartnerID
join COMMENT C on O.OppID = C.OppID
join STUDENT S on C.SID = S.SID;

create View StudentOppPartCom as
Select concat(FName, ' ', ifnull(Initial,''), ' ', LName) as StudentName, 
OppName as OpportunityName, CommName as PartnerName, Assessment as Comment
from COMMUNITY_PARTNER CP join OPPORTUNITY O on CP.CommPartnerID = O.CommPartnerID
join COMMENT C on O.OppID = C.OppID
join STUDENT S on C.SID = S.SID