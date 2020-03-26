CREATE DATABASE gsb ;  
USE gsb;  


CREATE TABLE IF NOT EXISTS visiteur (  


id int(5) Not Null ,  

nom char(30) Not Null,  

prenom char(30) Not Null,  

adresse char(30) default Null,  

cp char(5) default Null,  

ville char(5) default Null,  

dteEmbauche date default Null,  

login char(6) default Null,  

pwd char(30) default Null,  

   PRIMARY KEY ( id )   

)  


;  


CREATE TABLE IF NOT EXISTS lignefraisforfait (  

idFicheFrais int(11) Not Null ,  

idForfait char(3) Not Null,  


quantite int(11) default Null,  

  
   PRIMARY KEY ( idFicheFrais, idForfait )   


)  


;  


CREATE TABLE IF NOT EXISTS forfait (  


id int(5) Not Null ,  


libelle char(20) Not Null,  

  

montant decimal(5,2) default Null,  
  

   PRIMARY KEY ( id )   

)  

  

;  
   

CREATE TABLE IF NOT EXISTS etat (  

id int(5) Not Null ,  


libelle char(20) Not Null,  

   PRIMARY KEY ( id )   

)  

;  

CREATE TABLE IF NOT EXISTS fichefrais (   

id int(11)  Not Null primary key ,   
idVisiteur int(5),  
mois char(30),  

annee int(4),  

nbJustificatifs int(11),  

montantValide decimal(10.2),  
dateModif date,  

idEtat int(5)  

);   

create user 'Nathan Menou'@'localhost';  


create user 'Robin Caradec'@'localhost';  

create user 'Kilian DIVANACH'@'localhost';  

create user 'Yann  QUEGUINER'@'localhost';  

create user 'Kevin JOLY'@'localhost'; 

ALTER TABLE fichefrais  

ADD FOREIGN key (idEtat)  

REFERENCES etat(id)  ;  



  

ALTER TABLE fichefrais   

ADD FOREIGN key (idVisiteur)   

REFERENCES visiteur(id)   ;  

  


  

ALTER TABLE lignefraisforfait  

ADD FOREIGN key (idforfait)   
REFERENCES forfait(id)  ;  

ALTER TABLE lignefraisforfait  


ADD FOREIGN key (idfichefrais)   



REFERENCES fichefrais(id)   ; 