<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Cambia esto si tienes una contraseña para tu base de datos
$dbname = "artmex";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$nombreTaller = $_POST['nombreTaller'];

// Preparar la consulta SQL
$sql = "INSERT INTO artesanos (nombre, apellidoPaterno, apellidoMaterno, correo, telefono, nombreTaller) 
        VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$correo', '$telefono', '$nombreTaller')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
