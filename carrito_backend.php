<?php

session_start();
$mensaje = "";

if (isset($_POST['btnAccion'])) {

    switch ($_POST['btnAccion']) {

        case 'Agregar':

            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $ID = openssl_decrypt($_POST['id'], COD, KEY);
                $mensaje .= "ID correcto" . $ID;
            } else {
                $mensaje .= "ID incorrecto";
            }
            if (is_string(openssl_decrypt($_POST['nombre'], COD, KEY))) {
                $Nombre = openssl_decrypt($_POST['nombre'], COD, KEY);
            } else {
                $mensaje .= "nombre incorrecto";
                break;
            }
            if (is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                $Precio = openssl_decrypt($_POST['precio'], COD, KEY);
                $mensaje .= "precio correcto";
            } else {
                $mensaje .= "precio incorrecto";
                break;
            }
            if (is_numeric(openssl_decrypt($_POST['cantidad'], COD, KEY))) {
                $Cantidad = openssl_decrypt($_POST['cantidad'], COD, KEY);
                $mensaje .= "cantidad correcto";
            } else {
                $mensaje .= "cantidad incorrecto";
                break;
            }
            


            if (!isset($_SESSION['CARRITO'])) {
                $producto = array(
                    'id' => $ID,
                    'nombre' => $Nombre,
                    'precio' => $Precio,
                    'cantidad' => $Cantidad
                    
                    //'extra'=>
                );
                $_SESSION['CARRITO'][0] = $producto;
                $mensaje = "Producto agregado al carrito";
            } else {
                $idProductos = array_column($_SESSION['CARRITO'], "id");
                if (in_array($ID,$idProductos)) {
                   // echo "<script>alert('El Producto ya ha sido seleccionado..')</script>";
                   // $mensaje = "";
                }

                $NumeroProductos = count($_SESSION['CARRITO']);
                $producto = array(
                    'id' => $ID,
                    'nombre' => $Nombre,
                    'precio' => $Precio,
                    'cantidad' => $Cantidad
                    
                );
                $_SESSION['CARRITO'][$NumeroProductos] = $producto;
                
               // $mensaje = "Producto agregado al carrito  ";
            
        }
            // $mensaje=print_r( $_SESSION,true);

            break;

        case 'eliminar':

            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $COD_ID = openssl_decrypt($_POST['id'], COD, KEY);
                foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                    //error
                    if ($producto['id'] == $COD_ID) {
                        unset($_SESSION['CARRITO'][$indice]); //"unset" sirve para eliminar
                        echo "<script>alert('Producto eliminado..')</script>"; //le muestra un mensaje al usuario que se elimino
                    }
                }
            } else {
                $mensaje .= "Error";
            }
            break;

            
       
            // case 'actualizar':

            //     if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
            //         $COD_ID = openssl_decrypt($_POST['id'], COD, KEY);
            //         foreach ($_SESSION['CARRITO'] as $indice => $producto) {
            //             //error
            //             if ($producto['id'] == $COD_ID) {
            //                 unset($_SESSION['CARRITO'][$indice]); //"unset" sirve para eliminar
            //                 echo "<script>alert('Producto eliminado..')</script>"; //le muestra un mensaje al usuario que se elimino
            //             }
            //         }
            //     } else {
            //         $mensaje .= "Error";
            //     }
            //     break;
    }
}
