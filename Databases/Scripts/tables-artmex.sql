CREATE TABLE Artesano (
ID_Artesano INT AUTO_INCREMENT PRIMARY
KEY,
Nombre VARCHAR (100), Dirección VARCHAR(200),
Teléfono VARCHAR (15),
Email VARCHAR (100)
) ;
CREATE TABLE Taller (
ID_Taller INT AUTO_INCREMENT PRIMARY
KEY,
Nombre VARCHAR (100),
Dirección VARCHAR (200) , Horario VARCHAR (100),
ID_Artesano INT,
FOREIGN KEY (ID_Artesano) REFERENCES
Artesano (ID_Artesano));
CREATE TABLE Producto (
ID_Producto INT AUTO_INCREMENT PRIMARY
KEY,
Nombre VARCHAR (100),
Descripción TEXT,
Precio DECIMAL (10, 2),
Stock INT,
ID_Artesano INT,
ID_Taller INT,
FOREIGN KEY (ID_Artesano) REFERENCES
Artesano (ID_Artesano),
FOREIGN KEY (ID_Taller) REFERENCES
Taller(ID_Taller));
CREATE TABLE Usuario (
ID_Usuario INT AUTO_INCREMENT PRIMARY
KEY,
Nombre VARCHAR(100),
Email VARCHAR (100),
Contraseña VARCHAR (100), Dirección VARCHAR (200), Teléfono VARCHAR (15));
CREATE TABLE Pedido (
ID_Pedido INT AUTO_INCREMENT PRIMARY
KEY,
Fecha DATETIME,
Total DECIMAL (10, 2),
ID_Usuario INT,
FOREIGN KEY (ID_Usuario) REFERENCES
Usuario (ID_Usuario)
) ;
CREATE TABLE Pedido_Producto (
ID_Pedido INT,
ID_Producto INT,
Cantidad INT,
PRIMARY KEY (ID_Pedido, ID_Producto), FOREIGN KEY (ID_Pedido) REFERENCES
Pedido (ID_Pedido),
FOREIGN KEY (ID_Producto) REFERENCES
Producto (ID_Producto)
) ;
CREATE TABLE Transacción (
ID_Transacción INT AUTO_INCREMENT
PRIMARY KEY,
Monto DECIMAL (10, 2),
Fecha DATETIME,
Método_Pago VARCHAR (50),
ID_Pedido INT,
FOREIGN KEY (ID_Pedido) REFERENCES
Pedido (ID_Pedido));