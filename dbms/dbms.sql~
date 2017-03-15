CREATE DATABASE CASE_MANAGEMENT;

CREATE TABLE Case ( case_id    char(9)   PRIMARY KEY,
    case_description char(400)  NOT NULL,
    case_type char(50)  NOT NULL,
    case_court_id char(9) NOT NULL REFRENCES Court(court_id),
    case_status char(30) NOT NULL
);

CREATE TABLE Attorney ( attorney_id    char(9)   PRIMARY KEY,
    attorney_name char(40)  NOT NULL,
    attorney_address char(200) ,
    attorney_special char(20)
);

CREATE TABLE Judge ( judge_id    char(9)   PRIMARY KEY,
    judge_name char(40)  NOT NULL,
    years_of_service INT ,
    heads_court_id char(9) NOT NULL REFRENCES Court(court_id)
);

CREATE TABLE Court ( court_id    char(9)   PRIMARY KEY,
    court_name char(40)  NOT NULL,
    court_rank char(20)  ,
    court_location char(40) DEFAULT unavialable
);

CREATE TABLE Client ( client_id    char(9)   PRIMARY KEY,
    client_name char(40)  NOT NULL,
    contact char(100) NOT NULL ,
    client_address char(200), 
    client_dob char(10) NOT NULL,
    client_case_id char(9) NOT NULL REFRENCES Case(case_id)
);


CREATE TABLE Convict(  con_case_id    char(9) NOT NULL REFRENCES Case(case_id),
              con_client_id    char(9)   NOT NULL REFRENCES Client(client_id),
              PRIMARY KEY(con_case_id, con_client_id)
);     

CREATE TABLE Defence(  def_attorney_id    char(9) NOT NULL REFRENCES Attorey(attorney_id),
              def_client_id    char(9)   NOT NULL REFRENCES Client(client_id),
              PRIMARY KEY(def_attorney_id, def_client_id)
);           

CREATE TABLE Prosecute(  pro_attorney_id    char(9) NOT NULL REFRENCES Attorey(attorney_id),
              pro_case_id    char(9)   NOT NULL REFRENCES Case(case_id),
              PRIMARY KEY(pro_attorney_id, def_case_id)
);           

INSERT INTO Attorney (attorney_id,attorney_name,attorney_address,
    attorney_special )
VALUES ( '100','paul', 'delhi', 'criminal' );
INSERT INTO Attorney (attorney_id,attorney_name,attorney_address,
    attorney_special )
VALUES ('212', 'Shyam', 'Mumbai', 'civil' );
INSERT INTO Attorney (attorney_id,attorney_name,,attorney_address, 
    attorney_special )
VALUES ('123', 'Tejas', 'Bangalore', 'civil' );
INSERT INTO Attorney (attorney_id,attorney_name,attorney_address, 
    attorney_special )
VALUES ('438', 'Amit', 'Kolkata', 'crime' );
INSERT INTO Attorney (attorney_id,attorney_name,attorney_address,
    attorney_special )
VALUES ('225', 'Arvind', 'Bangalore', 'criminal' );
INSERT INTO Attorney (attorney_id,attorney_name,attorney_address,
    attorney_special )
VALUES ('428', 'Ravi', 'Bangalore', 'crime' );
INSERT INTO Attorney (attorney_id,attorney_name,attorney_address,
    attorney_special )
VALUES ( '193','Yash', 'Jamshedpur', 'criminal' );
INSERT INTO Attorney (attorney_id,attorney_name,attorney_address,
    attorney_special )
VALUES ('418', 'Shreyans', 'Malda', 'civil' );
INSERT INTO Attorney (attorney_id,attorney_name,,attorney_address, 
    attorney_special )
VALUES ('785', 'Pramod', 'Bangalore', 'criminal' );
INSERT INTO Attorney (attorney_id,attorney_name,attorney_address, 
    attorney_special )
VALUES ('322', 'Ashu', 'Surat', 'civil' );
INSERT INTO Attorney (attorney_id,attorney_name,attorney_address,
    attorney_special )
VALUES ('896', 'Bhavesh', 'Chandigarh', 'criminal' );
INSERT INTO Attorney (attorney_id,attorney_name,attorney_address,
    attorney_special )
VALUES ('985', 'Tushar', 'Raipur', 'criminal' );




INSERT INTO Client (client_id,client_name, contact, client_address,
    client_dob, client_case_id )
VALUES ( '115','Suresh','9876525251' 'delhi', '12-06-1978', '0197');
INSERT INTO Client (client_id,client_name,contact,client_address,
    client_dob, client_case_id  )
VALUES ('336','dharam', '9122345432', 'Mumbai', '19-05-1985','1482' );
INSERT INTO Client (client_id,client_name,contact,client_address, 
    client_dob, client_case_id  )
VALUES ('736', 'sandeep','8989761235', 'indore', '16-05-1975','7300' );
INSERT INTO Client (client_id,client_name,contact,client_address, 
    client_dob, client_case_id  )
VALUES ('516', 'karan','8914532235', 'allahbad', '13-10-1976', '3689' );
INSERT INTO Client (client_id,client_name,contact,client_address,
    client_dob,client_case_id  )
VALUES ('325', 'ranjit','8981231235', 'darjeeling', '08-07-1980', '6985' );
INSERT INTO Client (client_id,client_name,contact,client_address,
    client_dob, client_case_id  )
VALUES ('317', 'shushant','9832421276', 'patna', '1-10-1965', '4812' );


INSERT INTO Court  (court_id,court_name,court_rank,
    court_location )
VALUES ( '1289','Ambala high-court', 'HIGH', 'Delhi' );

INSERT INTO Court  (court_id,court_name,court_rank,
    court_location )
VALUES ( '3896','delhi high-court', 'HIGH', 'Delhi' );

INSERT INTO Court  (court_id,court_name,court_rank,
    court_location )
VALUES ( '4875','gujurat high-court', 'HIGH', 'ahmedabad' );
INSERT INTO Court  (court_id,court_name,court_rank,
    court_location )
VALUES ( '5893','Baroda court', 'District', 'Baroda' );
INSERT INTO Court  (court_id,court_name,court_rank,
    court_location )
VALUES ( '7176','Patna high court', 'HIGH', 'Patna' );
INSERT INTO Court  (court_id,court_name,court_rank,
    court_location )
VALUES ( '2804','karnataka high-court', 'HIGH', 'Bangalore' );


INSERT INTO Case  (case_id,case_description,case_type,
    case_court_id, case_status )
VALUES ( '0197','murder case', 'crime', '5893', 'On-hold' );
INSERT INTO Case  (case_id,case_description,case_type,
    case_court_id,  case_status  )
VALUES ( '3689','property dispute case', 'civil', '4875','next hearing on 12th may' );
INSERT INTO Case  (case_id,case_description,case_type,
    case_court_id,  case_status  )
VALUES ( '1482','rape case', 'crime', '3896','waiting for evidence' );
INSERT INTO Case  (case_id,case_description,case_type,
    case_court_id,  case_status  )
VALUES ( '7300','robbery case', 'crime', '2804','convict held for interrogation' );
INSERT INTO Case  (case_id,case_description,case_type,
    case_court_id,  case_status  )
VALUES ( '6985','corruption case', 'civil', '7176' ,'police report under investigation');
INSERT INTO Case  (case_id,case_description,case_type,
    case_court_id,  case_status  )
VALUES ( '4812','dowry case', 'civil', '1289','on-hold' );


INSERT INTO Judge  (judge_id,judge_name,years_of_service,
    heads_court_id )
VALUES ( '8973','Ravi kant sharma', 8, '1289' );
INSERT INTO Judge (judge_id,judge_name,years_of_service,
    heads_court_id )
VALUES ( '4932','Sunil Sharan', 14, '3896' );
INSERT INTO Judge  (judge_id,judge_name,years_of_service,
    heads_court_id )
VALUES ( '0132','Vinod Singh', 18, '4875' );
INSERT INTO Judge  (judge_id,judge_name,years_of_service,
    heads_court_id )
VALUES ( '4600','Anand kumar Patil', 16, '5893' );
INSERT INTO Judge  (judge_id,judge_name,years_of_service,
    heads_court_id )
VALUES ( '3132','Ashok Khemka', 22, '7176' );
INSERT INTO Judge  (judge_id,judge_name,years_of_service,
    heads_court_id )
VALUES ( '1490','Manoj Agarwal', 20, '2804' );

INSERT INTO Convict(con_case_id,con_client_id)
VALUES ('1482','115')
INSERT INTO Convict(con_case_id,con_client_id)
VALUES ('7300','336')
INSERT INTO Convict(con_case_id,con_client_id)
VALUES ('4812','736')
INSERT INTO Convict(con_case_id,con_client_id)
VALUES ('0197','516')
INSERT INTO Convict(con_case_id,con_client_id)
VALUES ('6985','325')
INSERT INTO Convict(con_case_id,con_client_id)
VALUES ('3689','317')

INSERT INTO Defence(def_attorney_id,def_client_id)
VALUES ('100','115')
INSERT INTO Defence(def_attorney_id,def_client_id)
VALUES ('193','336')
INSERT INTO Defence(def_attorney_id,def_client_id)
VALUES ('785','736')
INSERT INTO Defence(def_attorney_id,def_client_id)
VALUES ('322','516')
INSERT INTO Defence(def_attorney_id,def_client_id)
VALUES ('418','325')
INSERT INTO Defence(def_attorney_id,def_client_id)
VALUES ('212','317')

INSERT INTO Prosecute(pro_attorney_id,pro_case_id)
VALUES ('123','4812')
INSERT INTO Prosecute(pro_attorney_id,pro_case_id)
VALUES ('438','6985')
INSERT INTO Prosecute(pro_attorney_id,pro_case_id)
VALUES ('428','7300')
INSERT INTO Prosecute(pro_attorney_id,pro_case_id)
VALUES ('225','0197')
INSERT INTO Prosecute(pro_attorney_id,pro_case_id)
VALUES ('896','1482')
INSERT INTO Prosecute(pro_attorney_id,pro_case_id)
VALUES ('985','3689')
