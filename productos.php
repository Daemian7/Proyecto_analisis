<?php
    include 'template/header.php';
    include 'db/config.php';
    include 'db/conexion.php';

    $conexion = mysqli_connect('localhost', 'root', '', 'danna_p');
    //$productos = $pdo->prepare("SELECT * FROM productos");
    //$productos->execute();
    //$listarProductos = $productos->fetchALL(PDO::FETCH_ASSOC);
?>

<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Productos</li>
    </ol>

    <div class="card mb-4 row-cols-auto">
        <div class="card-header d-flex flex-wrap justify-content-between">
            <h3>Registro de Productos</h3>
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#regProductos"><i class="fas fa-solid fa-user-plus me-2"></i>NUEVO</button>
        </div>

        <!--MODAL-->
        <div id="regProductos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title text-white" id="titulo">Nuevo Producto</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php include_once "template/modalProductos.php"; ?>
                    </div>
                </div>
            </div>
        </div>

        <!--FINAL MODAL-->

        <div class="card-body">
            <div class="table-responsive datatable-wrapper no-footer align-items-center">
                <table class=" table table-striped table-dark pt-3" id="tblProductos">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center align-middle">No.</th>
                            <th class="text-center align-middle">FOTO</th>
                            <th class="text-center align-middle">CODIGO</th>
                            <th class="text-center align-middle">DESCRIPCION</th>
                            <th class="text-center align-middle">TALLA</th>
                            <Th class="text-center align-middle">EXISTENCIA</Th>
                            <Th class="text-center align-middle">PRECIO</Th>
                            <th class="text-center align-middle">ACCIONES</th>
                        </tr>
                    </thead>
                    <?php
                        $sql = "SELECT * FROM productos";
                        $resultado = mysqli_query($conexion, $sql);

                        while ($mostrar = mysqli_fetch_array($resultado)) {
                    ?>
                    <tbody class="table-light text-center align-middle">
                        
                        <td><?php echo $mostrar['ID_Productos'] ?></td>
                        <td><img src="<?php echo $mostrar['Imagen'] ?>" alt="" width=" 90" height="90" ></td>
                        <td><?php echo $mostrar['Codigo'] ?></td>
                        <td><?php echo $mostrar['Descripcion'] ?></td>
                        <td><?php echo $mostrar['Talla'] ?></td>
                        <td><?php echo $mostrar['Existencia'] ?></td>
                        <td><?php echo $mostrar['Precio'] ?></td>
                        <td>
                            <button class="btn btn-primary" type="submit" onclick=""><i class="fas fa-edit"></i></button>
                        </td>                        
                    </tbody>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>    
    </div>

<?php
    include_once "template/footer.php";
?>