# presentation-website
Prima dată trebuie sa avem xampp instalat
Al doilea lucru trebuie sa creem o baza de date:
CREATE DATABASE present;
Al treilea pas este crearea tabelelor:
CREATE TABLE users
(
    User_id int(11) NOT NULL AUTO_INCREMENT,
    Username varchar(255) NOT NULL,
    Password varchar(255) NOT NULL, 
    Email varchar(255) NOT NULL
);

CREATE TABLE join_class
(
    Id int(11) NOT NULL AUTO_INCREMENT,
    FirstName varchar(255) NOT NULL,
    SecondName varchar(255) NOT NULL, 
    Phone varchar(255) NOT NULL,
    Address varchar(255) NOT NULL,
    Email varchar(255) NOT NULL
);

CREATE TABLE contact_admin
(
    id int(11) NOT NULL AUTO_INCREMENT,
    FullName varchar(255) NOT NULL,
    Email varchar(255) NOT NULL, 
    Textarea varchar(255) NOT NULL
);

Pentru a accesa back-end-ul websitului trebuie sa dai click in navbar pe LTP Betel, dupa care va trebuii sa iti creezi un cont de admin. Aici pagina de login are un secret, daca apesi pe Username ti se va deschide o pagina de Create Account. Dupa ce ti-ai facut un cont de admin poti sa accesezi back-end-ul si sa vezi ce se intampla pe site. 
