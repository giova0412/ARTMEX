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
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/alebrije.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>conoce donde conseguir tus artesanias</h5>
                        <p>miles de artesanos te esperan para conocerte</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/tenanblack.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>somos una pagina qu ayude a encontrar artesanias</h5>
                        <p>busca y encuentra artesanias</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/muñecas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">taller de muñecas</h5>
                        <p class="card-text">nos dedicamos a dordar muñecas desde hace 40 años</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalArtesania1">Ver Más</a>
                    </div>
                </div>
            </div>

            
            <div class="modal fade" id="modalArtesania1" tabindex="-1" role="dialog" aria-labelledby="modalArtesania1Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalArtesania1Label">Muñecas bodrdadas</h5>
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
                    <img src="images/barro.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Barro negro</h5>
                        <p class="card-text">creamos barro negro y somos originarios de oaxaca.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalArtesania2">Ver Más</a>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalArtesania2" tabindex="-1" role="dialog" aria-labelledby="modalArtesania2Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalArtesania2Label">Barro negro</h5>
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
                    <img src="images/tenangos.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">arte tenango</h5>
                        <p class="card-text">hacemos increibles piezas bordadas con el arte tenango</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalArtesania2">Ver Más</a>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalArtesania3" tabindex="-1" role="dialog" aria-labelledby="modalArtesania2Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalArtesania2Label">Detalles de Artesanía 2</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Nombre del Taller:</strong> Taller de tenangos</p>
                            <p><strong>Ubicación:</strong> ixmiquilpan,Hdalgo</p>
                            <p><strong>Contacto:</strong> +52 764 234 5678</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
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
