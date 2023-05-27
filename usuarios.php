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
        <li class="breadcrumb-item active">Usuarios</li>
    </ol>

    <div class="card mb-4 row-cols-auto">
        <div class="card-header d-flex flex-wrap justify-content-between">
            <h3>Usuarios Registrados</h3>
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#regUsuarios"><i class="fas fa-solid fa-user-plus me-2"></i>NUEVO</button>
        </div>

        <!--MODAL-->
        <div id="regUsuarios" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title text-white" id="titulo">Nuevo Usuario</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php include_once "template/modalUsuario.php"; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL-->

        <div class="card-body">
            <div class="table-responsive datatable-wrapper no-footer align-items-center">
                <table class=" table table-striped table-dark pt-3" id="tblUsuarios">
                    <thead class="thead-dark">
                        <tr>
                        <th class="text-center align-middle">ID</th>
                            <th class="text-center align-middle">ROL</th>
                            <th class="text-center align-middle">CORREO ELECTRONICO</th>
                            <th class="text-center align-middle">CONTRASEÑA</th>
                            <Th class="text-center align-middle">ESTADO</Th>
                            <Th class="text-center align-middle">FECHA</Th>
                        </tr>
                    </thead>
                    <tbody class="table table-light text-center align-middle">
                    </tbody>
                </table>

                <!--MODAL PARA REGISTRAR NUEVO USUARIO-->
                <div id="nuevoUsuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                                <h5 class="modal-title text-white" id="titulo">Nuevo Usuario</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php include "Views/Template/nuevoUsuario.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>

<?php
    include_once "template/footer.php";
?>