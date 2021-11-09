CREATE DATABASE IF NOT EXISTS dgi_db;
USE dgi_db;


DROP TABLE IF EXISTS Utilisateur, Classe, Etudiant, Professeur, Classe_Professeur, Cours, Examen, Prof_Classe_Cours;

CREATE TABLE Classe (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  nom varchar(1000) NOT NULL
) 

INSERT INTO Classe (id, nom) VALUES (1, 'DIC2INFO'), (2, 'DIC2TR'), (3, 'DIC3');

CREATE TABLE Utilisateur (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  nom varchar(1000) NOT NULL,
  prenom varchar(155) DEFAULT NULL,
  mail varchar(1000) NOT NULL,
  mdp varchar(1000) NOT NULL,
  userRole int() 
  classe int(11)  
) 

INSERT INTO Utilisateur (nom,prenom,mail, mdp,userRole,classe) VALUES(1, 'IFALL' 'dgiadmin@esp.sn', 'dgiadmin');

 (1,'ousmane','DIENE','ousmanediene@esp.sn','passer',2), (2,'cire','DIA','ciredia@esp.sn','passer123',1),
                            (3,'hassan','BA','hassanba@esp.sn','passer',2),(4,'mohamed','DIOP','mohameddiop@esp.sn','passer12',3);

ALTER TABLE Utilisateur ADD CONSTRAINT fk_utilisateur_classe FOREIGN KEY(classe) REFERENCES Classe(id);

CREATE TABLE Professeur (
  matricule bigint(11) PRIMARY KEY AUTO_INCREMENT,
  nom varchar(155) DEFAULT NULL,
  prenom varchar(155) DEFAULT NULL,
  mail varchar(100) DEFAULT NULL,
  mdp varchar(255) DEFAULT NULL
) 

INSERT INTO Professeur VALUES (19990405001,'Dallo','Mohamadou','mohamadou.diallo@esp.sn','eval001'),
                              (19921206002,'Fall','Ibrahima','ibrahima.fall@esp.sn','eval002'),
                              (19780208003,'KA','Aliou','aliou.ka@esp.sn','eval003');


CREATE TABLE Classe_Professeur (
  id_class_prof int(11) PRIMARY KEY AUTO_INCREMENT,
  classe_id int(11) DEFAULT NULL,
  matricule_prof bigint(11) DEFAULT NULL
) 

INSERT INTO Classe_Professeur VALUES (201, 1, '19990405001'), (202, 1, '19921206002')
                                     (203, 2, '19921206002'), (204, 2, '19780208003')
                                     (205, 3, '19990405001'), (206, 3, '19780208003');

ALTER TABLE classe_professeur ADD CONSTRAINT fk_classe_prof_classe FOREIGN KEY (classe_id) REFERENCES Classe(id);
ALTER TABLE classe_professeur ADD CONSTRAINT  fk_classe_prof_prof  FOREIGN KEY (matricule_prof) REFERENCES Professeur(matricule);


CREATE TABLE Cours (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  nom varchar(1000) NOT NULL,
  creation timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  prof bigint(11)
) 

INSERT INTO Cours (nom, creation, prof) VALUES ('Algo', '2019-11-27 09:26:08',19990405001),
                                                    ('XML', '2019-11-25 13:22:42',19921206002), 
                                                    ('AL', '2019-12-02 09:25:36',19780208003),
                                                    ('Droit', '2019-12-22 09:25:46',19780208003);;
ALTER TABLE Cours ADD CONSTRAINT fk_cours_professeur FOREIGN KEY (prof) REFERENCES Professeur(matricule);


CREATE TABLE Examen (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  nom_fichier varchar(1000) DEFAULT NULL,
  matricule_prof bigint(11) DEFAULT NULL 
) 
ALTER TABLE Examen ADD CONSTRAINT fk_examen_professeur FOREIGN KEY (matricule_prof) REFERENCES Professeur(matricule);

CREATE TABLE Prof_Classe_Cours(
  id PRIMARY KEY AUTO_INCREMENT,
  id_cours  int(11) NOT NULL,
  matricule_prof bigint(11) NOT NULL,
  classe_id int(11) NOT NULL
) 
INSERT INTO Prof_Classe_Cours VALUES(1001,1, '19990405001',25),(1002,2, '19921206002',25),(1003,3,'19921206002',26);

ALTER TABLE Prof_Classe_Cours ADD CONSTRAINT fk_Prof_Classe_Cours_classe FOREIGN KEY (class_id) REFERENCES Classe(id);
ALTER TABLE Prof_Classe_Cours ADD CONSTRAINT fk_Prof_Classe_Cours_prof FOREIGN KEY (matricule_prof) REFERENCES Professeur(matricule);
ALTER TABLE Prof_Classe_Cours ADD CONSTRAINT fk_Prof_Classe_Cours_cours FOREIGN KEY (cours_id) REFERENCES Cours(id);
