<?php 
// Incluir el archivo que maneja el inicio de sesión y registro
include("iniciarsesion.php"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión / Registro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .form-container {
            margin-top: 50px;
        }
        .form-switch {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center" id="formTitle">Iniciar Sesión</h3>
                        
                        <!-- Formulario de Inicio de Sesión -->
                        <div id="loginForm">
                            <form id="loginFormSubmit" method="POST" action="">
                                <input type="hidden" name="action" value="login">
                                <div class="form-group">
                                    <label for="loginUsername">Nombre de Usuario</label>
                                    <input type="text" name="loginUsername" class="form-control" id="loginUsername" required>
                                </div>
                                <div class="form-group">
                                    <label for="loginPassword">Contraseña</label>
                                    <input type="password" name="loginPassword" class="form-control" id="loginPassword" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                            </form>
                        </div>

                        <!-- Formulario de Registro (oculto por defecto) -->
                        <div id="registerForm" style="display:none;">
                            <h3 class="card-title text-center">Registro</h3>
                            <form id="registerFormSubmit" method="POST" action="">
                                <input type="hidden" name="action" value="register">
                                <div class="form-group">
                                    <label for="registerName">Nombre</label>
                                    <input type="text" name="registerName" class="form-control" id="registerName" required>
                                </div>
                                <div class="form-group">
                                    <label for="registerSurname">Apellidos</label>
                                    <input type="text" name="registerSurname" class="form-control" id="registerSurname" required>
                                </div>
                                <div class="form-group">
                                    <label for="registerEmail">Correo Electrónico</label>
                                    <input type="email" name="registerEmail" class="form-control" id="registerEmail" required>
                                </div>
                                <div class="form-group">
                                    <label for="registerUsername">Nombre de Usuario</label>
                                    <input type="text" name="registerUsername" class="form-control" id="registerUsername" required>
                                </div>
                                <div class="form-group">
                                    <label for="registerPassword">Contraseña</label>
                                    <input type="password" name="registerPassword" class="form-control" id="registerPassword" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Registrarse</button>
                            </form>
                        </div>

                        <div class="form-switch">
                            <p id="switchText">¿No tienes cuenta? <a href="#" id="switchLink">Regístrate</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const switchLink = document.getElementById('switchLink');
            const switchText = document.getElementById('switchText');
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const formTitle = document.getElementById('formTitle');

            // Cambiar entre formularios de inicio de sesión y registro
            switchLink.addEventListener('click', function(event) {
                event.preventDefault();
                if (loginForm.style.display === 'none') {
                    loginForm.style.display = 'block';
                    registerForm.style.display = 'none';
                    formTitle.textContent = 'Iniciar Sesión';
                    switchText.innerHTML = '¿No tienes cuenta? <a href="#">Regístrate</a>';
                } else {
                    loginForm.style.display = 'none';
                    registerForm.style.display = 'block';
                    formTitle.textContent = 'Registro';
                    switchText.innerHTML = '¿Ya tienes cuenta? <a href="#">Inicia Sesión</a>';
                }
            });
        });
    </script>
</body>
</html>
