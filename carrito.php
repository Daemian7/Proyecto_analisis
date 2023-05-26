<?php
include 'Global/config.php';
include 'Global/conexion.php';
include 'carrito_backend.php';
include 'cabecera.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>



</head>

<body>


    <div class="container">
        <br>
        <div>

            <h4> Envios a Toda Guatemala </h4>
        </div>
    </div>


    <div class="container">
        <br>
        <div>

            <h4> Articulos </h4>
        </div>
    </div>

    <?php if (!empty($_SESSION['CARRITO'])) {  ?>

        <table class="table table-light table-bordered">
            <tr>
                <th width="20%" class="text-center">Descripcion</th>
                <th width="15%" class="text-center">Cantidad</th>
                <th width="15%" class="text-center">Precio</th>
                <th width="15%" class="text-center">Subtotal</th>
                <th width="10%">--</th>
            </tr>

            <?php $total = 0; ?>
            <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>
                <tr>
                    <td width="20%"><?php echo $producto['nombre'] ?></td>
                    <td width="15%" class="text-center"><?php echo $producto['cantidad'] ?></td>
                    <td width="15%" class="text-center">Q<?php echo $producto['precio'] ?></td>
                    <td width="15%" class="text-center">Q<?php echo number_format($producto['precio'] * $producto['cantidad'], 2); ?></td>
                    <td width="10%">

                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'], COD, KEY); ?>">
                            <button class="btn btn-danger" name="btnAccion" value="eliminar" type="submit">
                                Eliminar </button>
                        </form>


                    </td>
                </tr>


                <?php $total = $total + ($producto['precio'] * $producto['cantidad']); ?>
            <?php } ?>


         
            <?php $total = $total; ?>
           
            <tr>
                <td colspan="3" align="right">
                    <h3>Total</h3>
                </td>
                <td align="right">
                    <h3>Q<?php echo number_format($total, 2) ?></h3>
                </td>
                <td></td>
            </tr>
        </table>
        <div class="container" align="right">
        <br>
       
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="datos_factura.php" class="btn btn-primary btn-lg" >REALIZAR PEDIDO</a>    
             

        </div>
        <br>
      
    </div>
        <br>
    <?php } else { ?>
        <div class="alert alert-success">
            No hay productos en el carrito
        </div>
    <?php } ?>
<br>
<!-- <div class="container">
<h6 > <b>AVISO: Si usted reside en Retalhuleu y desea pasar a recoger en tienda activar la opcion 
    *pasar a recoger en tienda de lo contrario se le agregarán Q45 por los gastos de envio</b></h6>
    <br>
</div>
<div class="container" align="right">
                <input type="checkbox" name="envios" id="envios"> Pasar a recoger en tienda
            </div>
            </div>
<br> -->



</body>

</html>


<?php
include 'pie.php';
?>