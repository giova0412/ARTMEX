<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="inicio.php">ARTMEX</a>
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
        <div class="row mt-4">

            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/muñecas.jpg" class="card-img-top" alt="Imagen de Muñecas Artesanales">
                    <div class="card-body">
                        <h5 class="card-title">Muñecas Artesanales</h5>
                        <p class="card-text">Coloridas muñecas hechas a mano.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalArtesania1">Ver Más</a>
                    </div>
                </div>
            </div>

            
            <div class="modal fade" id="modalArtesania1" tabindex="-1" role="dialog" aria-labelledby="modalArtesania1Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalArtesania1Label">Detalles de Muñecas Artesanales</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Nombre del Taller:</strong> Taller de Muñecas</p>
                            <p><strong>Ubicación:</strong> Ciudad de México, México</p>
                            <p><strong>Contacto:</strong> +52 55 1234 5678</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card">
                    <img src="images/barro.jpg" class="card-img-top" alt="Imagen de Cerámica de Barro">
                    <div class="card-body">
                        <h5 class="card-title">Cerámica de Barro</h5>
                        <p class="card-text">Vasijas y platos de barro tradicionales.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalArtesania2">Ver Más</a>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalArtesania2" tabindex="-1" role="dialog" aria-labelledby="modalArtesania2Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalArtesania2Label">Detalles de Cerámica de Barro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Nombre del Taller:</strong> Taller de Barro</p>
                            <p><strong>Ubicación:</strong> Oaxaca, México</p>
                            <p><strong>Contacto:</strong> +52 951 234 5678</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card">
                    <img src="images/tejidos.jpg" class="card-img-top" alt="Imagen de Tejidos de Lana">
                    <div class="card-body">
                        <h5 class="card-title">Tejidos de Lana</h5>
                        <p class="card-text">Chalecos y cobijas tejidas a mano.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalArtesania3">Ver Más</a>
                    </div>
                </div>
            </div>

            
            <div class="modal fade" id="modalArtesania3" tabindex="-1" role="dialog" aria-labelledby="modalArtesania3Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalArtesania3Label">Detalles de Tejidos de Lana</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Nombre del Taller:</strong> Tejidos y Más</p>
                            <p><strong>Ubicación:</strong> Chiapas, México</p>
                            <p><strong>Contacto:</strong> +52 961 123 4567</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card">
                    <img src="images/alebrijes.jpg" class="card-img-top" alt="Imagen de Alebrijes">
                    <div class="card-body">
                        <h5 class="card-title">Alebrijes</h5>
                        <p class="card-text">Figuras fantásticas talladas y pintadas.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalArtesania4">Ver Más</a>
                    </div>
                </div>
            </div>

            
            <div class="modal fade" id="modalArtesania4" tabindex="-1" role="dialog" aria-labelledby="modalArtesania4Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalArtesania4Label">Detalles de Alebrijes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Nombre del Taller:</strong> Alebrijes Creativos</p>
                            <p><strong>Ubicación:</strong> Oaxaca, México</p>
                            <p><strong>Contacto:</strong> +52 951 987 6543</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card">
                    <img src="images/bordados.jpg" class="card-img-top" alt="Imagen de Bordados">
                    <div class="card-body">
                        <h5 class="card-title">Bordados</h5>
                        <p class="card-text">Blusas y servilletas con bordados detallados.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalArtesania5">Ver Más</a>
                    </div>
                </div>
            </div>

            
            <div class="modal fade" id="modalArtesania5" tabindex="-1" role="dialog" aria-labelledby="modalArtesania5Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalArtesania5Label">Detalles de Bordados</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Nombre del Taller:</strong> Bordados Finos</p>
                            <p><strong>Ubicación:</strong> Chiapas, México</p>
                            <p><strong>Contacto:</strong> +52 961 876 5432</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card">
                    <img src="images/joyeria.jpg" class="card-img-top" alt="Imagen de Joyería Artesanal">
                    <div class="card-body">
                        <h5 class="card-title">Joyería dde plata</h5>
                        <p class="card-text">Collares y pulseras elaborados a mano.

                        </p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalArtesania6">Ver Más</a>
                    </div>
                </div>
            </div>

            
            <div class="modal fade" id="modalArtesania6" tabindex="-1" role="dialog" aria-labelledby="modalArtesania6Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalArtesania6Label">Detalles de Joyería Artesanal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Nombre del Taller:</strong> Joyas de Plata</p>
                            <p><strong>Ubicación:</strong> Taxco, México</p>
                            <p><strong>Contacto:</strong> +52 762 123 9876</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2023 ARTMEX
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="java/navbar.js"></script>
</body>
</html>


