<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="carrito" href="carrito.php">
    <link rel="apple-touch-icon" href="img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <link rel="stylesheet" href="css/factura.css" />
    <link rel="stylesheet" href="css/select.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"   />

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
</head>

<body>




    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center mv ">

<!-- aqui esta el logo -->
            <a href="indexp.php"><img src="img\logo_letra.png" width="200" height="60"></a>

            <a class="nav-icon position-relative text-decoration-none ca  " href="#" data-bs-toggle="modal" data-bs-target="#carrito">
              
            
            <!-- este es el carrito -->
                <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">
                    <?php echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']) ?>

                </span>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- estilos del icono carrito  -->
            <style>
                .mv {
                    position: relative;
                }

                @media screen and (min-width:1200px),
                screen and (max-width:1800px) {
                    .cen {
                        position: absolute;
                        right: 46%;
                        translate: middle;
                    }

                    .ca {
                        position: absolute;
                        left: 75%;
                        translate: middle;
                    }
                }

                @media screen and (max-width:1200px) {
                    .ca {
                        position: absolute;
                        left: 75%;
                        translate: middle;
                    }
                }

                @media screen and (max-width:1200px) {
                    .ca {
                        position: absolute;
                        left: 75%;
                        translate: middle;
                    }
                }

                @media screen and (max-width:1000px) {
                    .ca {
                        position: absolute;
                        left: 70%;
                        translate: middle;
                    }
                }

                @media screen and (max-width:990px) {
                    .ca {
                        position: absolute;
                        left: 27%;
                        translate: middle;
                    }
                }

                @media screen and (max-width:767px) {
                    .ca {
                        position: absolute;
                        left: 19%;
                        translate: middle;
                    }
                }

                @media screen and (max-width:600px) {
                    .ca {
                        position: absolute;
                        left: 18%;
                        translate: middle;
                    }
                }

                @media screen and (max-width:570px) {
                    .ca {
                        position: absolute;
                        left: 18%;
                        translate: middle;
                    }
                }

                @media screen and (max-width:500px) {
                    .ca {
                        position: absolute;
                        left: 15%;
                        translate: middle;
                    }
                }

                @media screen and (max-width:450px) {
                    .ca {
                        position: absolute;
                        left: 12%;
                        translate: middle;
                    }
                }

                @media screen and (max-width:400px) {
                    .ca {
                        position: absolute;
                        left: 10%;
                        translate: middle;
                    }
                }
            </style>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill cen "><!--position-absolute top-50 start-50 translate-middle-->
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="indexp.php">Inicio</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </nav>

<!-- aqui muestro los datos de los productos ingresados al carrito -->

    <!-- Modal -->
    <div class="modal fade" id="carrito" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header"> <!-- Head -->
                    <h5 class="modal-title" id="exampleModalLabel">Carrito</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> <!-- Body -->



                    <!--aqui muestra el mensaje -->
                    <? //php if ($mensaje != "") { 
                    ?>
                    <div class="alert alert-success">
                        <? //php
                        //echo   $mensaje;
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="80%" class="text-center">Producto</th>
                                    <th scope="col" width="10%" class="text-center">Precio</th>
                                    <th scope="col" width="10%" class="text-center">Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>
                                <tr>
                                    <td width="80%"><?php echo $producto['nombre'] ?></td>
                                    <td width="10%" class="text-center">Q<?php echo $producto['precio'] ?></td>
                                    <td width="10%" class="text-center"><?php echo $producto['cantidad'] ?></td>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tr>
                            </tbody>
                        </table>



                    </div>
                    <? //php } 
                    ?>

                </div>
                <div class="modal-footer"> <!-- Pie de modal -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a class="btn btn-primary" href="carrito.php">
                        Comprar
                    </a>
                    <!--<button type="button" class="btn btn-primary">Guardar</button>-->
                </div>
            </div>
        </div>
    </div>

    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Buscar ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>