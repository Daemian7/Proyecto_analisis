<?php
include 'Global/config.php';
include 'Global/conexion.php';
include 'carrito_backend.php';
include 'cabecera.php';
?>

<!-- mostrar productos de bd -->
<?php
$sentencia = $pdo->prepare("SELECT * FROM `productos`");
$sentencia->execute();
$lista_productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($lista_productos);

?>
<br>
<br>
<div class="container ">

    <div class="row  "> <!--di-->

        <?php foreach ($lista_productos as $producto) { ?>

            <div class="col-md-3">
                <div class="card  "> <!-- tam -->
                    <img class="card-img-top " src="<?php echo $producto['Imagen']; ?> "> <!-- tam_img -->

                    <div class="card-body ">


                        <div class="position-relative">
                            <p class="card-text"><?php echo $producto['Descripcion']; ?></p>
                            <H5 class="card-title position-absolute bottom-0 start-0">Q<?php echo $producto['Precio']; ?></H5>
                            <form action="" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID_Productos'], COD, KEY); ?>">
                                <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Descripcion'], COD, KEY); ?>">
                                <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY); ?>">
                                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
                                <button class="boton position-absolute bottom-0 end-0" name="btnAccion" value="Agregar" type="submit">
                                    <i class="fa fa-fw fa-cart-arrow-down mr-1 withe"></i>
                                </button>
                                <br>
                                <style>
                                    .di {
                                        width: 100%;
                                        height: auto;
                                        display: flex;
                                        flex-direction: row;
                                        /* justify-content: space-around; */
                                        flex-wrap: wrap;
                                    }

                                    .tam_img {
                                        width: 3px;
                                        height: 3px;
                                    }

                                    .tam {
                                        margin: 20px;
                                        width: 300px;
                                        height: 300px;
                                        box-sizing: border-box;
                                        font-size: 50px;
                                    }

                                    @media screen and (max-width:1200px) {
                                        .tam {

                                            margin-top: 0px;
                                            margin-left: 0px;
                                            margin-right: 0px;
                                            margin-bottom: 0px;
                                            box-sizing: border-box;
                                            width: 200px;
                                        }
                                    }

                                    @media screen and (max-width:980px) {
                                        .tam {

                                            margin-top: 0px;
                                            margin-left: 50px;
                                            margin-right: 0px;
                                            margin-bottom: 30px;
                                            width: 100%;
                                        }
                                    }

                                    @media screen and (max-width:767px) {

                                        .tam {
                                            /* margin-top: 0px;
                                            margin-left: 20%;
                                            margin-right: 0px;
                                            margin-bottom: 30px; */
                                            width: 60%;
                                        }
                                    }

                                    @media screen and (max-width:600px) {

                                        .tam {
                                            margin-top: 0px;
                                            margin-left: 20%;
                                            margin-right: 50%;
                                            margin-bottom: 30px;
                                            width: 60%;
                                        }
                                    }

                                    .withe {
                                        color: white;
                                    }

                                    .boton {
                                        background: #ff9c9c;
                                        /* color: #FFFFFF; */
                                        border-radius: 100px;
                                        width: 45px;
                                        height: 44px;
                                        position: relative;
                                        /*top: 10px;*/
                                        border: #ffbe33;

                                    }
                                </style>
                            </form>
                        </div>



                    </div>

                </div>
                <br>

            </div>

        <?php } ?>

    </div>
</div>


<?php
include 'pie.php';
?>