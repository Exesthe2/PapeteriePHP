CREATE TABLE articles (
    id_article INT PRIMARY KEY AUTO_INCREMENT,
    reference CHAR(10) NOT NULL,
    marque VARCHAR(200) NOT NULL,
    designation VARCHAR(200) NOT NULL,
    prix_unitaire float NOT NULL,
    qte_stock INT NOT NULL, 
    grammage INT NULL,
    couleur VARCHAR(50) NULL, 
    type CHAR(10) NOT NULL
);