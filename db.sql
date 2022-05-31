DROP DATABASE IF EXISTS apac_db;
CREATE DATABASE apac_db;
use apac_db;
DROP TABLE IF EXISTS registro;
CREATE TABLE registro(
	id INT PRIMARY KEY AUTO_INCREMENT,
    imagen LONGBLOB,
    tipo VARCHAR(5) NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    raza VARCHAR(255) NOT NULL,
    color VARCHAR(255) NOT NULL,
    fecha_de_nacimiento DATE NOT NULL,
    fecha_de_ingreso DATE NOT NULL,
	descripcion TEXT NOT NULL,
    esterilizado DATE,
    adoptado DATE,
	tamano VARCHAR(20) NOT NULL,
	sexo VARCHAR(20) NOT NULL,
	publico TINYINT
);

DROP TABLE IF EXISTS vacuna;
CREATE TABLE vacuna(
	id INT PRIMARY KEY AUTO_INCREMENT,
	id_registro INT NOT NULL,
    fecha DATE NOT NULL,
	FOREIGN KEY (id_registro) REFERENCES registro(id)
);

DROP TABLE IF EXISTS operacion;
CREATE TABLE operacion(
	id INT PRIMARY KEY AUTO_INCREMENT,
	id_registro INT NOT NULL,
    fecha DATE NOT NULL,
	FOREIGN KEY (id_registro) REFERENCES registro(id)
);


INSERT INTO registro( time, imagen, tipo, nombre, raza, color, fecha_de_nacimiento, fecha_de_ingreso, descripcion, esterilizado, adoptado, tamano, sexo, publico) VALUES 
                (CURRENT_TIMESTAMP,"","perro","nombre1","mestizo","blanco","2020-04-30","2020-04-30","asdads","2020-04-30","2020-04-30","grande","masculino",1);
                
select * from registro;







