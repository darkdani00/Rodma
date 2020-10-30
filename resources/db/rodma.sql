CREATE DATABASE rodma;
USE rodma;


CREATE TABLE usuario (
    id_usuario int primary key auto_increment,
    status_usuario enum('activo','inactivo') DEFAULT 'activo',
    correo_usuario VARCHAR(40) not null UNIQUE,
    pass_usuario VARCHAR(30) not NULL,
    nombre_usuario VARCHAR(60),
    apellidos VARCHAR(60),
    telefono int
);

CREATE VIEW user_vw AS SELECT id_usuario, status_usuario, correo_usuario FROM usuario;

CREATE TABLE pedido(
    id_pedido int PRIMARY KEY auto_increment,
    puertos VARCHAR(60),
    monitor VARCHAR(60),
    tarjeta_madre VARCHAR(60),
    tarjeta_video VARCHAR(60),
    gabinete VARCHAR(60),
    fuente_poder VARCHAR(60),
    procesador VARCHAR(60),
    ram VARCHAR(60),
    precio_total INT not null,
    usuariofk int,
    FOREIGN KEY (usuariofk) REFERENCES usuario(id_usuario)
);


INSERT INTO (puertos,monitor,tarjeta_madre,tarjeta_video,gabinete,fuente_poder,procesador,ram,precio_total)
VALUES ();