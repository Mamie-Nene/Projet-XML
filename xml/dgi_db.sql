CREATE DATABASE IF NOT EXISTS dgi_db;
USE dgi_db;


DROP TABLE IF EXISTS Classe, Users, Classe_Professeur, Cours, Examen, Prof_Classe_Cours;

CREATE TABLE Classe (
  id int PRIMARY KEY AUTO_INCREMENT,
  nom varchar(255) NOT NULL
) ;

INSERT INTO Classe (nom) VALUES ('DIC2INFO'), ('DIC2TR'), ('DIC3');

CREATE TABLE UserRole (
  id int PRIMARY KEY AUTO_INCREMENT,
  nomRole varchar(255) NOT NULL
);

INSERT INTO UserRole (nomRole) VALUES ('admin'), ('professeur'), ('etudiant');

CREATE TABLE Users (
  id int PRIMARY KEY AUTO_INCREMENT,
  nom varchar(255) NOT NULL,
  prenom varchar(255) NOT NULL,
  mail varchar(100) NOT NULL,
  mdp varchar(100) NOT NULL,
  userRole int NOT NULL,
  classe int DEFAULT NULL
) ;

INSERT INTO Users (nom, prenom, mail, mdp, userRole) VALUES('FALL', 'Ibrahima', 'dgiadmin@esp.sn', 'dgiadmin',1),
('Dallo','Mohamadou','mohamadou.diallo@esp.sn','eval001',2),
('Fall','Ibrahima','ibrahima.fall@esp.sn','eval002',2),
('KA','Aliou','aliou.ka@esp.sn','eval003',2);
INSERT INTO Users (nom, prenom, mail, mdp, userRole, classe) VALUES('DIENE','ousmane','ousmanediene@esp.sn','passer',3,1), 
('DIA','cire','ciredia@esp.sn','passer',3,1),
('BA','hassan','hassanba@esp.sn','passer',3,2),
('DIOP','mohamed','mohameddiop@esp.sn','passer',3,3);

ALTER TABLE Users ADD CONSTRAINT fk_users_classe FOREIGN KEY(classe) REFERENCES Classe(id);


CREATE TABLE Classe_Professeur (
  id_class_prof int PRIMARY KEY AUTO_INCREMENT,
  id_classe int NOT NULL ,
  id_prof int NOT NULL
) ;

INSERT INTO Classe_Professeur (id_classe, id_prof) VALUES (1, 2), (1,3 ),(2, 4 ), (2,2 ),(3,3 ), (3, 4);

ALTER TABLE classe_professeur ADD CONSTRAINT fk_classe_prof_classe FOREIGN KEY (id_classe) REFERENCES Classe(id);
ALTER TABLE classe_professeur ADD CONSTRAINT  fk_classe_prof_prof  FOREIGN KEY (id_prof) REFERENCES Users(id);


CREATE TABLE Cours (
  id int PRIMARY KEY AUTO_INCREMENT,
  nom varchar(255) NOT NULL,
  id_prof int NOT NULL
) ;

INSERT INTO Cours (nom, creation, id_prof) VALUES ('Algo', '2019-11-27 09:26:08',2),
                                                ('XML', '2019-11-25 13:22:42',3), 
                                                ('AL', '2019-12-02 09:25:36',4),
                                                ('Droit', '2019-12-22 09:25:46',4);
ALTER TABLE Cours ADD CONSTRAINT fk_cours_professeur FOREIGN KEY (id_prof) REFERENCES Users(id);


CREATE TABLE Examen (
  id int PRIMARY KEY AUTO_INCREMENT,
  nom_fichier varchar(255) DEFAULT NULL,
  id_prof int NOT NULL 
); 
ALTER TABLE Examen ADD CONSTRAINT fk_examen_professeur FOREIGN KEY (id_prof) REFERENCES Users(id);

CREATE TABLE Prof_Classe_Cours(
  id int PRIMARY KEY AUTO_INCREMENT,
  id_cours  int NOT NULL,
  id_prof int NOT NULL,
  id_classe int NOT NULL
) ;
INSERT INTO Prof_Classe_Cours (id_cours, id_prof, id_classe)VALUES(1, 2, 1),(2, 2,3),(3,3,2),(4,4,1);

ALTER TABLE Prof_Classe_Cours ADD CONSTRAINT fk_Prof_Classe_Cours_cours FOREIGN KEY (id_cours) REFERENCES Cours(id);
ALTER TABLE Prof_Classe_Cours ADD CONSTRAINT fk_Prof_Classe_Cours_prof FOREIGN KEY (id_prof) REFERENCES Users(id);
ALTER TABLE Prof_Classe_Cours ADD CONSTRAINT fk_Prof_Classe_Cours_classe FOREIGN KEY (id_classe) REFERENCES Classe(id);


