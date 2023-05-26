<?php 
$conexion=mysqli_connect('localhost','root','','danna_p');
$departamento=$_POST['departamento'];

	$sql="SELECT ID_Municipio,
			 NombreMunicipio,
			 ID_Departamento 
		from municipio
		where ID_Departamento='$departamento'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label for='formGroupExampleInput' class='form-label'>Municipio</label>
			<select id='lista2' name='lista2' class='mb-3 form-select form-select-lg' aria-label='size 3 select example'> 
			<option selected>Seleccione</option>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.$ver[1].'</option>';
	}
 
	echo  $cadena."</select>";

	
?>