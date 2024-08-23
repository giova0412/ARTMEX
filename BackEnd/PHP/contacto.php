<?php 
// Incluir el archivo que maneja el inicio de sesión y registro
include("formularip.php"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="inicio.html">ARTMEX</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artesanias.php">Artesanías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="busqueda.php">Búsqueda</a>
                </li>
                <li class="nav-item" id="forumLink" style="display: none;">
                    <a class="nav-link" href="foro.php">Foro</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="loginLink">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <h2>Contacto</h2>
        <p>Pon tus datos si eres artesano:</p>
        <form action="process_form.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellidoPaterno">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" required>
            </div>
            <div class="form-group">
                <label for="apellidoMaterno">Apellido Materno</label>
                <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="nombreTaller">Nombre del Taller</label>
                <input type="text" class="form-control" id="nombreTaller" name="nombreTaller" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <footer class="bg-dark text-white text-center p-3 mt-4">
        <p>&copy; 2024 ARTMEX - Todos los derechos reservados</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="java/navbar.js"></script>
</body>
</html>
