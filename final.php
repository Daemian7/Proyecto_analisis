<?php
include 'Global/config.php';
include 'Global/conexion.php';
include 'carrito_backend.php';
include 'cabecera2.php';

error_reporting(0); 


$conexion = mysqli_connect('localhost', 'root', '', 'danna_p');


if (!empty($_SESSION['CARRITO'])) {

  if (isset($_POST["enviarDatos"])) {
    $Nit = $_POST["nit"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["email"];
    $telefono = $_POST["cel"];
    $departamento = $_POST["lista1"];
    $municipio = $_POST["lista2"];
  
    $insertarDatos = "INSERT INTO clientes VALUES ('','$nombre','$apellido','$Nit','$direccion','$municipio','$telefono','$departamento','$correo')";
  
    $ejecutarInertar = mysqli_query($conexion, $insertarDatos);
  
  
  
  //echo $idcliente." ";
    if (!$ejecutarInertar) {
     echo "error en la linea sql";
    }
  }
  
    if ($_POST) {
    
      $total=0;
      $SID=session_id();
      foreach ($_SESSION['CARRITO'] as $indice => $producto) {
      
        $total = $total + ($producto['precio'] * $producto['cantidad']);
      
      // salida de la base de datos
  
  }
  
  }
  //echo "<h3>".$total."</h3>";
  
  //salida
  $sentencia = $pdo->prepare("SELECT * FROM `clientes` ORDER by ID_Clientes DESC LIMIT 1");
  $sentencia->execute();
  $lista_clientes = $sentencia->fetchAll(PDO::FETCH_ASSOC);
  foreach ($lista_clientes as $cliente) {
   echo '<input type="hidden" name="id" id="id" value="'; echo ($cliente['ID_Clientes']);
  }
  $sentencia=$pdo->prepare(
    "INSERT INTO `salida` (`ID_Salida`, `Fecha`, `Comprobante`, `ID_Clientes`)
     VALUES (NULL, NOW(), '0', :IDCliente);");
     
    $sentencia->bindParam(":IDCliente",$cliente['ID_Clientes']);
  $sentencia->execute();
  
  $sentencia = $pdo->prepare("SELECT * FROM `salida` ORDER by ID_Salida DESC LIMIT 1");
  $sentencia->execute();
  $lista_salida = $sentencia->fetchAll(PDO::FETCH_ASSOC);
  foreach ($lista_salida as $salida) {
   echo '<input type="hidden" name="id" id="id" value="'; echo ($salida['ID_Salida']);
  }
  //salida detalle
   foreach ($_SESSION['CARRITO'] as $indice => $producto) {
  
    $sentencia = $pdo->prepare("INSERT INTO 
    `salida_detalle` (`ID_SalidaDetalle`, `ID_Salida`, `ID_Productos`, `Cantidad`, `Precio`, `Costo`) 
    VALUES (NULL, :IDSalida, :IDProducto, :cantidad, :precio, :costo);");
    
     $sentencia->bindParam(":IDProducto",$producto['id']);
     $sentencia->bindParam(":cantidad",$producto['cantidad']);
     $sentencia->bindParam(":precio",$producto['precio']);
     $sentencia->bindParam(":costo",$producto['precio']);
     $sentencia->bindParam(":IDSalida",$salida['ID_Salida']);
     $sentencia->execute();
  
   }
  
  //restar al inventario 
  
  $sentencia = $pdo->prepare("SELECT * FROM `productos`");
  $sentencia->execute();
  $lista_p = $sentencia->fetchAll(PDO::FETCH_ASSOC);
  foreach ($lista_p as $exist) {
   echo '<input type="hidden" name="id" id="id" value="'; echo ($exist['Existencia']);
  }
  
  foreach ($_SESSION['CARRITO'] as $indice => $producto) {
  $sentencia = $pdo->prepare("UPDATE `productos` SET `Existencia`=`Existencia`-:cantidad 
  WHERE `productos`.`ID_Productos` = :IDProducto;");
  
   $sentencia->bindParam(":cantidad",$producto['cantidad']);
   $sentencia->bindParam(":IDProducto",$producto['id']);
   $sentencia->execute();
  }
  //mensaje final 
  
  ?>

<div class="container">
<br><br><br>
<h1 align="center">Gracias por su compra!</h1>
<br>
<div class="position-absolute top-40 start-50 translate-middle">

<a x href="indexp.php" >Volver a la tienda</a>

</div>
  <br><br><br><br><br>
</div>





<?php 

session_destroy(); //finaliza la sesion

include 'pie.php';


?>
  

  <?php
}else{ ?>


<?php
include 'vacio.php';
}
?>




