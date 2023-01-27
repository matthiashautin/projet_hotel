CREATE TABLE Client (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(255) NOT NULL,
    Prenom VARCHAR(255) NOT NULL,
    telephone INT(20) NOT NULL UNIQUE,
    mail VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL,  
    user_type varchar(20) NOT NULL DEFAULT 'user'
);

CREATE TABLE Restauration (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Pension_Complete BOOL NOT NULL,
    Demi_Pension BOOL NOT NULL,
    Repas_Bebe BOOL NOT NULL,
    Pique_nique BOOL NOT NULL,
    Reunions BOOL NOT NULL
);

CREATE TABLE Hebergement (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Logements BOOL INT(40),
    Chambres_doubles BOOL INT(15),
    Chambres_3_Lits BOOL INT(8),
    Chambres_4_Lits BOOL INT(12),
    Logement_Handi BOOL INT(1),
    Menage BOOL
);

CREATE TABLE Animation (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Vacances_Scolaire BOOL NOT NULL,
    Hors_Vacances_Scolaire BOOL NOT NULL
);

CREATE TABLE Region {
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Nom_Region VARCHAR(50)
};

CREATE TABLE Reservation (
    Hebergement_ID INT,
    Client_ID INT,
    Restauration_ID INT,
    Animation_ID INT,
    Region_ID INT,
    DateDebut DATETIME NOT NULL,
    DateFin DATETIME NOT NULL,
    CONSTRAINT FK_ReservationHebergement FOREIGN KEY (Hebergement_ID) REFERENCES Hebergement(ID),
    CONSTRAINT FK_ReservationClient FOREIGN KEY (Client_ID) REFERENCES Client(ID),
    CONSTRAINT FK_ReservationRestauration FOREIGN KEY (Restauration_ID) REFERENCES Restauration(ID),
    CONSTRAINT FK_ReservationAnimation FOREIGN KEY (Animation_ID) REFERENCES Animation(ID),
    CONSTRAINT FK_ReservationRegion FOREIGN KEY (Region_ID) REFERENCES Region(ID),
    PRIMARY KEY (Hebergement_ID, Client_ID, Restauration_ID, Animation_ID, Region_ID)
);


