CREATE DATABASE capitales;
USE capitales;

CREATE TABLE ciudades (
  id INT PRIMARY KEY,
  ciudad VARCHAR(50),
  pais VARCHAR(50),
  habitantes INT,
  superficie DECIMAL(10,2),
  tieneMetro TINYINT(1)
);

INSERT INTO ciudades VALUES
(1,'México D.F.','México',555666,23434.34,1),
(2,'Barcelona','España',444333,1111.11,0),
(3,'Buenos Aires','Argentina',888111,333.33,1),
(4,'Medellín','Colombia',999222,888.88,0),
(5,'Lima','Perú',999111,222.22,0),
(6,'Caracas','Venezuela',111222,111.11,1),
(7,'Santiago','Chile',777666,222.22,1),
(8,'Antigua','Guatemala',444222,877.33,0),
(9,'Quito','Ecuador',333111,999.11,1),
(10,'La Habana','Cuba',111222,333.11,0);
