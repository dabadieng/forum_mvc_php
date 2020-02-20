CREATE DATABASE IF NOT EXISTS forum DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE forum;
-- --------------------------------------------------------
set foreign_key_checks =0;
-- CREATION DES TABLES
DROP TABLE IF EXISTS utilisateur;
CREATE TABLE utilisateur (
	uti_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	uti_nom VARCHAR(20),
	uti_prenom VARCHAR(20),
	uti_dtnais DATE,
	uti_profil int
) ENGINE=InnoDB;

DROP TABLE IF EXISTS profil ;
CREATE TABLE profil(
	pro_id	INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
	pro_nom VARCHAR(20) 
)ENGINE=innoDB;

CREATE TABLE message(
	mes_id	INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
	mes_texte VARCHAR(2000),
	mes_utilisateur int Not null,
	mes_date DATETIME
)ENGINE=innoDB;


-- CONTRAINTE D'INTEGRITE
SET FOREIGN_KEY_CHECKS=1 ;
ALTER TABLE utilisateur ADD CONSTRAINT utilisateurprofil FOREIGN KEY (uti_profil) REFERENCES profil(pro_id) ;
ALTER TABLE message ADD CONSTRAINT message_utilisateur FOREIGN KEY (mes_utilisateur) REFERENCES utilisateur(uti_id) ;

