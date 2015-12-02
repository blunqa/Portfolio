CREATE TABLE KAYTTAJA(
    id INT PRIMARY KEY,
    username CHAR(30),
    saika DATE,
    sposti CHAR(50),
    salasana CHAR(30)
);

CREATE TABLE PROFIILI(
    id INT PRIMARY KEY,
    etunimi CHAR(25),
    sukunimi CHAR(25),
    pnumero CHAR(25),
    sposti CHAR(50),
    osoite CHAR(30),
    kaupunki CHAR(30),
    postinumero CHAR(10),
    maa CHAR(30,),
    omistaja INT,
    FOREIGN KEY(sposti) REFERENCES KAYTTAJA(sposti),
    FOREIGN KEY(omistaja) REFERENCES KAYTTAJA(id)
);

CREATE TABLE PROJEKTI(
    id INT PRIMARY KEY,
    nimi CHAR(30),
    rooli CHAR(100),
    kuvaus CHAR(100),
    url CHAR(100),
    kuva CHAR(100),
    avainsanat CHAR(100),
    omistaja INT,
    FOREIGN KEY(omistaja) REFERENCES KAYTTAJA(id)
);

CREATE TABLE PROJEKTI_KUVAT (
    PROJEKTI INT,
    KUVA INT,
    FOREIGN KEY(PROJEKTI) REFERENCES PROJEKTI(id),
    FOREIGN KEY(KUVA) REFERENCES KUVAT(ID)
    );
    
CREATE TABLE KUVAT (
    ID INT PRIMARY KEY,
    PVM DATETIME,
    KUVAUS CHAR(100)
    );
