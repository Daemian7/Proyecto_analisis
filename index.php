<?php
    include 'db/config.php';
    include 'db/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Danna - Login</title>

    <!-- Custom fonts for this template-->
    <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="css/sb-admin-2.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/datatables.min.css">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <!--IMAGEN EN EL LOGIN-->
                                <img src="img/logoDanna.png" alt="" style="width:180px; position:absolute; padding:2rem 0rem 0rem 2rem;">
                                <img src="img/login-img2.webp" alt="imagen-login" style="width:100%;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">INCIAR SESIÓN</h1>
                                    </div>
                                    <hr>
                                    <form action="validar.php" method="post" >
                                        <div class="form-group">
                                            <label class="small mb-1" for="email"><i class="fas fa-envelope"></i> Correo Electrónico:</label>
                                            <input type="email" class="form-control form-control-user" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Ingresa tu correo electrónico...">
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="pass"><i class="fas fa-key"></i> Contraseña:</label>
                                            <input type="password" class="form-control form-control-user" id="contra" name="contra" placeholder="Ingresa tu contraseña">
                                        </div>

                                        <div class="alert alert-danger text-center d-none" id="alerta" role="alert">

                                        </div>
                                        <div>
                                        <input type="submit" value="Entrar" class="btn btn-primary btn-user btn-block">
                                        </div>

                                        <hr>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
        <script src="js/jquery-3.6.4.min.js"></script>       
        <script src="js/scripts.js"></script>
        
        <script src="js/datatables.min.js"></script>
        <script src="js/sb-admin-2.js"></script>
        <script src="js/sweetalert2.all.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>