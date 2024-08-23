<?php
session_start();
include("conex.php"); // Conectar a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] == 'login') {
        $username = $_POST['loginUsername'];
        $password = $_POST['loginPassword'];

        // Verificar usuario en la base de datos
        $query = "SELECT * FROM usuarios WHERE nombre_usuario = '$username' AND contraseña = '$password'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['currentUser'] = $username;
            header("Location: inicio.php"); // Redirigir a la página de inicio
        } else {
            echo "Usuario o contraseña incorrectos.";
        }
    } elseif ($_POST['action'] == 'register') {
        $name = $_POST['registerName'];
        $surname = $_POST['registerSurname'];
        $email = $_POST['registerEmail'];
        $username = $_POST['registerUsername'];
        $password = $_POST['registerPassword'];

        // Insertar el nuevo usuario en la base de datos
        $query = "INSERT INTO usuarios (nombre, apellido, nombre_usuario, email, contraseña) 
                  VALUES ('$name', '$surname', '$username', '$email', '$password')";

        if ($conn->query($query) === TRUE) {
            echo "Registro exitoso. Ahora puedes iniciar sesión.";
        } else {
            echo "Error al registrar: " . $conn->error;
        }
    }
}

$conn->close();
?>
