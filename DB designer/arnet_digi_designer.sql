CREATE TABLE zaposlenik (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  ime VARCHAR(20) NULL,
  prezime VARCHAR(20) NULL,
  adresa VARCHAR(45) NULL,
  grad VARCHAR(45) NULL,
  email VARCHAR(45) NULL,
  PRIMARY KEY(id)
)
TYPE=InnoDB;

CREATE TABLE telefon (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  zaposlenik_id INT UNSIGNED NOT NULL,
  telefon VARCHAR(45) NULL,
  PRIMARY KEY(id, zaposlenik_id),
  INDEX telefon_FKIndex1(zaposlenik_id)
)
TYPE=InnoDB;


