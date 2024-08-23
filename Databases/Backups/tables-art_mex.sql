CREATE TABLE artesanos (
    id_artesano INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido_paterno VARCHAR(255) NOT NULL,
    apellido_materno VARCHAR(255),
    correo VARCHAR(255) NOT NULL,
    telefono VARCHAR(20)
);
CREATE TABLE taller (
    id_taller INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    horario VARCHAR(50),
    id_artesano INT,
    FOREIGN KEY (id_artesano) REFERENCES artesanos(id_artesano)
);
CREATE TABLE producto (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
    id_taller INT,
    id_artesano INT,
    FOREIGN KEY (id_taller) REFERENCES taller(id_taller),
    FOREIGN KEY (id_artesano) REFERENCES artesanos(id_artesano)
);
CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido_paterno VARCHAR(255) NOT NULL,
    apellido_materno VARCHAR(255),
    contrasena VARCHAR(255) NOT NULL,
    nombre_usuario VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL
);
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
