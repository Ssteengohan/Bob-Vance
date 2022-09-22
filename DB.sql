CREATE DATABASE bob;




CREATE TABLE gebruikers(
    userID int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Naam varchar(255) NOT NULL,
    Achternaam varchar(255) NOT NULL,
    Email varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    wachtwoord varchar(50) NOT NULL,
    hash varchar(100) NOT NULL,
    active INT(1) NOT NULL DEFAULT '0'

);