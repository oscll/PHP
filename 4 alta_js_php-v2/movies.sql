CREATE DATABASE movie;
use movie;
CREATE TABLE movies(
    imdbID  varchar(255) PRIMARY KEY,
    titulo varchar(255),
    director varchar(255),
    actors varchar(255),
    fecha_lanzamiento varchar(255),
    plot varchar(255),
    email varchar(255),
    website varchar(255),
    aficion varchar(255),
    idioma varchar(255),
    type varchar(255)
);
