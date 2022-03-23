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
categoria enum('SERIES','ANIMES','PELICULAS','VIDEOJUEGOS','VARIOS','TODAS','OTRAS'),
foto VARCHAR(255));

insert into productos(nombre, fabricacion, fecha_salida, numero, marca, precio, categoria, foto) values
('SPIDER-MAN','China','2022-01-07','220','Funko','114,65','VARIOS','images/spider-man.jpg'),
('PENNYWISE','Japón','2020-11-09','781','Funko','34,99','PELICULAS','images/pennywise.jpg'),
('DEMOGORGON','Japón','2018-05-07','428','Funko','40','SERIES','images/demogorgon.jpg'),
('TANJIRO KAMADO','Japón','2020-06-18','867','Funko','19,17','ANIMES','images/tanjiro.jpg'),
('RED KNIGHT','Japón','2015-07-22','089','Funko','24,95','VIDEOJUEGOS','images/red-knight.jpg'),
('GERALT','China','2019-12-04','149','Funko','19,90','VARIOS','images/geralt.jpg'),
('RORSCHACH','China','2017-02-07','024','Funko','16,74','PELICULAS','images/watchmen.jpg'),
('DARYL DIXON','EEUU','2015-07-07','391','Funko','18,99','TODAS','images/daryl.jpg');

CREATE TABLE proveedores(
id int auto_increment PRIMARY KEY,
empresa varchar(30), 
direccion VARCHAR(60),
envios_recientes date,
telefono char(9),
provincia VARCHAR(60),
unidades_vendidas INTEGER(5),
categoria enum('SERIES','ANIMES','PELICULAS','VIDEOJUEGOS','VARIOS','TODAS','OTRAS'),
foto VARCHAR(255));

insert into proveedores(empresa, direccion, envios_recientes, telefono, provincia, unidades_vendidas, categoria, foto) values
('TU FUNKO TIENDA','C/ Dominguez Perez #82, 35003','2022-02-14','654214587','Las Palmas','1500','TODAS','images/tienda.jpg'),
('DIBUPLANET','C/ San Pedro, #4, 35003','2022-01-10','928395486','Las Plamas','1300','VIDEOJUEGOS','images/dibuplanet.jpg'),
('ARTE FANTÁSTICO','C/ Senador Castillo Olivares, #16, 35003','2021-12-31','828120362','Las Palmas','2300','PELICULAS','images/arte.jpg'),
('UNIVERSO PARALELO','P.º de Tomás Morales, #29, 35003','2022-01-07','928504672','Las Palmas','2800','SERIES','images/paralelo.jpg'),
('LA ESQUINA FRIKY','C/ San Augusto, #48, 35003','2022-02-01','928325468','Las Palmas','1135','VARIOS','images/frikadas.jpg'),
('EL FRIKIVERSO','C/ Pedro Linares, #41, 35003','2022-02-24','928457301','Las Palmas','2125','OTRAS','images/frikiverso.jpg'),
('DAGOBAH COMICS','C/ Bencomo, #25, 38201','2022-02-18','922306497','Santa Cruz de Tenerife','1785','ANIMES','images/dagobah.jpg'),
('COMIC-SERIA','C/ SILVADOR, #07, 38201','2022-03-10','928542369','Santa Cruz de Tenerife','777','ANIMES','images/comic-seria.jpg');

CREATE TABLE usuarios(
id varchar(20) PRIMARY KEY,
pass varchar(20)); 
insert into usuarios values('juanfe','admin12345');



