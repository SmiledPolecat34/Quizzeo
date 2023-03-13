DROP TABLE IF EXISTS choix;
DROP TABLE IF EXISTS jouer;
DROP TABLE IF EXISTS question;
DROP TABLE IF EXISTS quizz;
DROP TABLE IF EXISTS test;
DROP TABLE IF EXISTS utilisateur;
DROP TABLE IF EXISTS asso_3;
CREATE TABLE Utilisateur(
   Id_utilisateur INT NOT NULL AUTO_INCREMENT,
   pseudutilisateuro VARCHAR(50),
   email VARCHAR(50),
   motDePasse VARCHAR(50),
   role INT,
   PRIMARY KEY (Id_utilisateur)
);

CREATE TABLE Quizz(
   Id_quizz INT AUTO_INCREMENT,
   Titre VARCHAR(50),
   difficulte INT,
   date_creation DATE,
   Id_utilisateur INT NOT NULL,
   PRIMARY KEY(Id_quizz),
   FOREIGN KEY(Id_utilisateur) REFERENCES Utilisateur(Id_utilisateur)
);

CREATE TABLE question(
   Id INT AUTO_INCREMENT,
   intituleQuestion VARCHAR(50),
   choix_1 varchar(30),
   choix_2 varchar(30),
   choix_3 varchar(30),
   choix_4 varchar(30),
   reponse varchar(30),
   Id_quizz INT NOT NULL,
   FOREIGN KEY(Id_quizz) REFERENCES quizz(Id_quizz),
   PRIMARY KEY(Id)
);

CREATE TABLE Choix(
   Id INT,
   reponse VARCHAR(50),
   BonneReponse bool,
   Id_1 INT NOT NULL,
   PRIMARY KEY(Id),
   FOREIGN KEY(Id_1) REFERENCES Question(Id)
);

CREATE TABLE Jouer(
   Id_utilisateur INT,
   Id_quizz INT,
   Score VARCHAR(50),
   PRIMARY KEY(Id_utilisateur, Id_quizz),
   FOREIGN KEY(Id_utilisateur) REFERENCES Utilisateur(Id_utilisateur),
   FOREIGN KEY(Id_quizz) REFERENCES Quizz(Id_quizz)
);

CREATE TABLE Asso_3(
   Id_quizz INT,
   Id INT,
   PRIMARY KEY(Id_quizz, Id),
   FOREIGN KEY(Id_quizz) REFERENCES Quizz(Id_quizz),
   FOREIGN KEY(Id) REFERENCES Question(Id)
);