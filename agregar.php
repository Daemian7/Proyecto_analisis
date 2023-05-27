<?php

include 'template/header.php';
include 'db/config.php';
include 'db/conexion.php';
include '../Danna_P/carrito_backend.php';




if (isset($_POST['codigo'])) {
    $Cod = ($_POST['codigo']);
    $Precio = ($_POST['precio']);
    $Des = ($_POST['descripcion']);
    $Cat = ($_POST['categoria']);
    $Talla = ($_POST['talla']);
    $Ext = ($_POST['existencia']);
    $Est = ($_POST['estanteria']);
    $Img = ($_POST['imagen']);


    echo '<h1>' . $Cod . '<h1>';
    echo '<h1>' . $Precio . '<h1>';
    echo '<h1>' . $Des . '<h1>';
    echo '<h1>' . $Cat . '<h1>';
    echo '<h1>' . $Talla . '<h1>';
    echo '<h1>' . $Ext . '<h1>';
    echo '<h1>'.$Est.'<h1>';
    echo '<h1>' . $Img . '<h1>';

//categoria
    $sentencia = $pdo->prepare("INSERT INTO `categoria` (`ID_Categoria`, `Categoria`) VALUES (NULL, :categoria);");
    $sentencia->bindParam(":categoria", $Cat);
    $sentencia->execute();

    $sentencia = $pdo->prepare("SELECT * FROM `categoria` ORDER by ID_Categoria DESC LIMIT 1");
    $sentencia->execute();
    $listaCat = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach ($listaCat as $categ) {
        echo '<input type="hidden" name="id" id="id" value="';echo ($categ['ID_Categoria']);
    }


    //estanteria
      $sentencia = $pdo->prepare("INSERT INTO `estanteria` (`ID_Estanteria`, `CodigoEstanteria`)
       VALUES (NULL, :estanteria);");
         $sentencia->bindParam(":estanteria", $Est);
     $sentencia->execute();

     $sentencia = $pdo->prepare("SELECT * FROM `estanteria` ORDER by ID_Estanteria DESC LIMIT 1");
     $sentencia->execute();
     $listaExt = $sentencia->fetchAll(PDO::FETCH_ASSOC);
          foreach ($listaExt as $Exist) {
       echo '<input type="hidden" name="ext" id="ext" value="';
         echo ($Exist['ID_Estanteria']);
     }



    //productos 
     $sentencia = $pdo->prepare(

         "INSERT INTO `productos` (`ID_Productos`, `Imagen`, `Codigo`, `Descripcion`, `Talla`, `ID_Categoria`, 
         `Precio`, `Existencia`, `ID_Estanteria`) 
         VALUES (NULL, :img, :cod, :descrip, :talla, :cat, :precio, :exs, :est);");
          $sentencia->bindParam(":img", $Img);
          $sentencia->bindParam(":cod", $Cod);
          $sentencia->bindParam(":descrip", $Des);
          $sentencia->bindParam(":talla", $Talla);
          $sentencia->bindParam(":precio", $Precio);
          $sentencia->bindParam(":exs", $Ext);
          $sentencia->bindParam(":cat", $categ['ID_Categoria']);
     $sentencia->bindParam(":est", $Exist['ID_Estanteria']);
     $sentencia->execute();
 }
