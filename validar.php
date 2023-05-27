<?php

    $usuario = ($_POST['correo']);
    $password = ($_POST['contra']);

    session_start();
    $_SESSION['usuario'] = $usuario;

    $conexion = mysqli_connect("localhost", "root", "", "danna_p");


    if (!empty($_SESSION['usuario'])) {

        $consulta = "SELECT * FROM `usuario` 
        where Correo='$usuario' and Contraseña='$password'";
    
        $resultado=mysqli_query($conexion, $consulta);
    
        $filas=mysqli_num_rows($resultado);
    
        if($filas){
            header("location:productos.php");
        }else{
    
    include('index.php');
    ?>
    
    <h3 class="bad"> Correo o contraseña incorrectos </h3>
    
    <?php
        }
    
    
        mysqli_free_result($resultado);
        mysqli_close($conexion);
    
    

    }else{
        include('index.php');
        ?>
        
        <h3 class="bad"> No se inicio sesion </h3>

        <?php
    }
 

?>