<?php
include 'cabecera.php';
?>


<div class="container-xl">
    <br />

    <form method="POST" class="login row" action="final.php">
        <div class="form_container">
            <h5 class="from_title"><b>Factura</b></h5>
            <div class="form_grup">

                <input class="controls" minlength="2" maxlength="10" type="text" name="nit" id="nit" placeholder=" " required>
                <label for="nit" class="form_label tex_wide">

                    <i class="fa-solid fa-pen-to-square"></i>
                    Nit o C/F
                </label>
                <span class="form_line"></span>
            </div>
            <div class="form_grup">

                <input class="controls" minlength="3" pattern="[a-z A-Z ´]+" type="text" name="nombre" id="nombre" placeholder=" " required>
                <label for="nombre" class="form_label tex_wide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg> Nombre
                </label>
                <span class="form_line"></span>
            </div>
            <div class="form_grup">

                <input class="controls" minlength="3" pattern="[a-z A-Z ´]+" type="text" name="apellido" id="apellido" placeholder=" " required>
                <label for="apellido" class="form_label tex_wide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    Apellido
                </label>
                <span class="form_line"></span>
            </div>

            <div class="form_grup">

                <input class="controls" minlength="3" pattern="[a-z A-Z , ´]+" type="text" name="direccion" id="direccion" placeholder=" " required>
                <label for="direccion" class="form_label tex_wide">
                    <i class="fa-solid fa-location-dot"></i>
                    Direccion
                </label>
                <span class="form_line"></span>
            </div>
            <div class="form_grup">

                <input class="controls" type="email" name="email" id="email" placeholder=" " required>
                <label for="email" class="form_label ">

                    <i class="fa-sharp fa-solid fa-envelope"></i>
                    Correo
                </label>
                <span class="form_line"></span>
            </div>
            <div class="form_grup">

                <input class="controls" type="number" name="cel" id="cel" placeholder=" " required>
                <label for="cel" class="form_label ">
                    <i class="fa-solid fa-phone"></i>
                    Telefono
                </label>
                <span class="form_line"></span>
            </div>
            <div class="form_grup">
                <label for="formGroupExampleInput" class="form-label">Departamento</label>
                <select id="lista1" name="lista1" class="mb-3 form-select form-select-lg" aria-label="size 3 select example">
                    <option selected>Seleccione</option>
                    <option value="1">Retalhuleu</option>
                    <option value="2">Petén</option>
                    <option value="3">Huehuetenango</option>
                    <option value="4">Quiché</option>
                    <option value="5">Alta Verapaz</option>
                    <option value="6">Baja Verapaz</option>
                    <option value="7">San Marcos</option>
                    <option value="8">Quetzaltenango</option>
                    <option value="9">Totonicapan</option>
                    <option value="10">Sololá</option>
                    <option value="11">Suchitepequez</option>
                    <option value="12">Chimaltenango</option>
                    <option value="13">Sacatepéquez</option>
                    <option value="14">Guatemala</option>
                    <option value="15">Escuintla</option>
                    <option value="16">Santa Rosa</option>
                    <option value="17">Jutiapa</option>
                    <option value="18">Jalapa</option>
                    <option value="19">Chiquimula</option>
                    <option value="20">El Progreso</option>
                    <option value="21">Zacapa</option>
                    <option value="22">Izabal</option>
                </select>
            </div>
            <div class="form_grup" id="select2lista"></div>

            <div id="select2lista"></div>

           
        </div>
        <div class="table-responsive">
            <table class="table">

                <tbody>
                    <tr>
                        <td><a href="/" class="atras">Atras</a></td>
                        <td align="right"><button class="bottons"  type="submit"  name="enviarDatos" value="enviarDatos">Continuar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </form>
    <style>
        .border1 {
            border-color: #8A8A8A;
        }

        .border1:hover {
            border-color: #E0CC27;
        }

        .form_grup {
            position: relative;
            --color: black;
        }

        .form_container {
            margin-top: 2em;
            display: grid;
            gap: 1em;
            position: relative;
        }

        .login {
            max-width: 900px;
            box-shadow: 0 5px 10px -5px rgb(0, 0, 0 / 30%);

        }

        .controls {
            width: 100%;
            background: none;
            color: black;
            font-size: 1rem;

            padding: .8em .3em;
            border: none;
            outline: none;
            border-bottom: 1px solid var(--color);
            font-family: "Open Sans", sans-serif;
        }

        .controls:focus+.form_label,
        .controls:not(:placeholder-shown)+.form_label {
            transform: translateY(-10px) scale(.7);
            transform-origin: left top;
            color: #1d9bd8;
        }

        .form_label {
            color: var(--color);
            cursor: pointer;
            position: absolute;
            top: 0;
            left: 5px;
            transform: translateY(10px);
            transition: transform .5s, color .3s;


        }

        .from_title {
            font-size: 1.3rem;
            margin-bottom: .5em;
            color: black;

        }

        .atras {
            display: block;
            width: 125px;
            height: 50px;

            border-radius: 40px;
            padding: 10px 40px;
            background: grey;

            color: #FFFFFF;
            border: grey;
        }

        .atras:hover {
            color: #FFFFFF;
            background: #525252;
        }

        .bottons {

            background: #ffbe33;
            color: #FFFFFF;
            width: 125px;
            height: 50px;
            font-family: "Open Sans", sans-serif;
            padding: .6em 0;
            border: none;
            border-radius: 40px;

        }

        .mb-5 {

            color: #0a446c;

        }

        .section-title {
            color: #1d9bd8;
        }

        .foodicon {
            font-size: 30px;
            color: #1d9bd8;
        }

        .rest {

            color: #e40202;

        }

        .com {
            color: #000000;
            display: block;
        }

        .metodo {
            color: #000000;
            display: block;
        }

        .meto {
            margin-bottom: 20px;
            width: 100%;
            height: 50%;

        }

        .meto:focus {
            border: 1px solid #1d9bd8;
        }

        .comen {
            margin-bottom: 20px;
            width: 100%;
            border: 1px solid #000000;
        }

        .comen:focus {
            border: 1px solid #ccc;
        }
    </style>

</div>

<?php
include 'pie.php';
?>

<script type="text/javascript">
    $(document).ready(function() {
        //$('#lista1').val(0); //Para inicializar la lista con el departamento segun su ID
        recargarLista();

        $('#lista1').change(function() {
            recargarLista();
        });
    })
</script>
<script type="text/javascript">
    function recargarLista() {
        $.ajax({
            type: "POST",
            url: "conexion.php",
            data: "departamento=" + $('#lista1').val(),
            success: function(r) {
                $('#select2lista').html(r);
            }
        });
    }
</script>