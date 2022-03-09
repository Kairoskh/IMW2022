DROP DATABASE IF EXISTS COMERCIO;
CREATE DATABASE COMERCIO character set utf8mb4 collate utf8mb4_general_ci;
USE COMERCIO;

CREATE TABLE productos(
id int auto_increment PRIMARY KEY,
nombre varchar(20), 
fabricacion VARCHAR(30),
fecha_salida date,
numero char(3),
marca VARCHAR(30),
precio DECIMAL(6,2),
categoria enum('SERIES','ANIMES','PELICULAS','VIDEOJUEGOS','VARIOS','TODAS','OTRAS')
);
insert into productos(nombre, fabricacion, fecha_salida, numero, marca, precio, categoria) values
('SPIDER-MAN','China','2022-01-07','220','Funko','114,65','VARIOS'),
('PENNYWISE','Japón','2020-11-09','781','Funko','34,99','PELICULAS'),
('DEMOGORGON','Japón','2018-05-07','428','Funko','40','SERIES'),
('TANJIRO KAMADO','Japón','2020-06-18','867','Funko','19,17','ANIMES'),
('RED KNIGHT','Japón','2015-07-22','089','Funko','24,95','VIDEOJUEGOS'),
('GERALT','China','2019-12-04','149','Funko','19,90','VARIOS'),
('RORSCHACH','China','2017-02-07','024','Funko','16,74','PELICULAS');

CREATE TABLE proveedores(
id int auto_increment PRIMARY KEY,
empresa varchar(30), 
direccion VARCHAR(60),
envios_recientes date,
telefono char(9),
provincia VARCHAR(60),
unidades_vendidas INTEGER(5),
categoria enum('SERIES','ANIMES','PELICULAS','VIDEOJUEGOS','VARIOS','TODAS','OTRAS')
);
insert into proveedores(empresa, direccion, envios_recientes, telefono, provincia, unidades_vendidas, categoria) values
('TU FUNKO TIENDA','C/ Dominguez Perez #82, 35003','2022-02-14','654214587','Las Palmas','1500','TODAS'),
('DIBUPLANET','C/ San Pedro, #4, 35003','2022-01-10','928395486','Las Plamas','1300','VIDEOJUEGOS'),
('ARTE FANTÁSTICO','C/ Senador Castillo Olivares, #16, 35003','2021-12-31','828120362','Las Palmas','2300','PELICULAS'),
('UNIVERSO PARALELO','P.º de Tomás Morales, #29, 35003','2022-01-07','928504672','Las Palmas','2800','SERIES'),
('LA ESQUINA FRIKY','C/ San Augusto, #48, 35003','2022-02-01','928325468','Las Palmas','1135','VARIOS'),
('EL FRIKIVERSO','C/ Pedro Linares, #41, 35003','2022-02-24','928457301','Las Palmas','2125','OTRAS'),
('DAGOBAH COMICS','C/ Bencomo, #25, 38201','2022-02-18','922306497','Santa Cruz de Tenerife','1785','ANIMES');


