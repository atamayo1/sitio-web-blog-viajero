<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Viajero</title>
    <link rel="icon" href="assets/img/icono.jpg">
    <!-- Bootstrap CSS3 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Chewy|Open+Sans&display=swap" rel="stylesheet">
    <!-- Main Dev -->
    <link rel="stylesheet" href="assets/css/maindev.css">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap Script -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/fed9e4ca1e.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="container-fluid">
        <div class="container p-0">
            <div class="row">
                <!--Logo-->
                <div class="col-10 col-sm-11 col-md-8 col-lg-7 pt-1 pt-lg-2 p-xl-0">
                    <a href="index.php">
                        <img class="logotipo img-fluid" src="assets/img/logotipo-negativo.png" alt="logo de juanito travel">
                    </a>
                </div>
                <!--Redes Sociales-->
                <div class="d-none d-md-block col-md-2 col-lg-3 redes">
                    <ul class="d-flex justify-content-end pt-2 mt-1">
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-facebook-square lead rounded-circle text-white mr-1 text-center"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-instagram lead rounded-circle text-white mr-1 text-center"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-twitter lead rounded-circle text-white mr-1 text-center"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-youtube lead rounded-circle text-white mr-1 text-center"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-snapchat-ghost lead rounded-circle text-white mr-1 text-center"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--Buscador y Menú-->
                <div class="col-2 col-sm-1 col-md-2 col-lg-2 d-flex justify-content-end pt-2 mt-1">
                    <!--Buscador-->
                    <div class="d-none d-md-block pr-4 pr-lg-5 mt-1">
                        <i class="fas fa-search load text-white text-center"></i>
                    </div>
                    <!--Menú-->
                    <div class="mt-0 mt-sm-1 mt-md-0 pr-0 pr-sm-2 pr-lg-3">
                        <i class="fas fa-bars load text-white text-center"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Buscador para Móvil -->
    <div class="container d-block d-md-none py-3">
        <div class="input-group input-group-sm mb-3">
            <input type="text" class="form-control" placeholder="Buscar">
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
        </div>
    </div>