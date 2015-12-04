

CREATE TABLE KAYTTAJA(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username CHAR(30),
    sposti CHAR(50),
    salasana CHAR(30)
    etunimi CHAR(25),
    sukunimi CHAR(25),
    saika DATETIME,
    pnumero CHAR(25),
    osoite CHAR(30),
    kaupunki CHAR(30),
    postinumero CHAR(10),
    maa CHAR(30),
    sukupuoli CHAR(30),
    koulutus CHAR(100),
    ohj_val CHAR(100),
);
CREATE TABLE PROF_PROJ (
    kayttaja INT,
    projekti INT,
    FOREIGN KEY(kayttaja) REFERENCES KAYTTAJA(id),
    FOREIGN KEY(projekti) REFERENCES PROJEKTI(id)
    );

CREATE TABLE PROJEKTI(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nimi CHAR(30),
    rooli CHAR(100),
    kuvaus CHAR(100),
    kuva CHAR(100),
    kategoria CHAR(100),
    omistaja INT,
    FOREIGN KEY(omistaja) REFERENCES KAYTTAJA(id)
);

CREATE TABLE PROJEKTI_KUVAT (
    projekti INT,
    kuva INT,
    FOREIGN KEY(projekti) REFERENCES PROJEKTI(id),
    FOREIGN KEY(kuva) REFERENCES KUVAT(id)
    );
    
CREATE TABLE KUVAT (
    id INT PRIMARY KEY,
    pvm DATETIME,
    kuvaus CHAR(100)
    );
