<html>
	<header>
		
	</header>
	<body>

<?php

include('clsmesas.php');
$mesas = new clsmesa();
$mesas->idmesa = $_GET['idmesa'];

if ($_GET['oper'] == "ALTA"){
	//dar de alta a la mesas
    $mesas->anio = $_POST['cmbanios'];
	$mesas->idmateria = $_POST['cmbmaterias'];
	$mesas->fecha = $_POST['txtfecha'];
	$mesas->horario = $_POST['txthora'];
	$mesas->idtipoinstancia = $_POST['cmbtiposinstancia'];

	if($mesas->insertar() > 0){
		$mensaje = "SE INCORPORÓ CORRECTAMENTE LA MESA";
	} else {
		$mensaje = "NO SE PUDO INCORPORAR LA MESA";
	}
}

if($_GET['oper'] == "MODIFICACION"){
	//modificar la mesa
    $mesas->anio = $_POST['cmbanios'];
	$mesas->idmateria = $_POST['cmbmaterias'];
	$mesas->fecha = $_POST['txtfecha'];
	$mesas->horario = $_POST['txthora'];
	$mesas->idtipoinstancia = $_POST['cmbtiposinstancia'];

	if($mesas->actualizar() > 0){
		$mensaje = "SE ACTUALIZÓ CORRECTAMENTE LA MESA";
	} else {
		$mensaje = "NO SE PUDO ACTUALIZAR LA MESA";
	}
}
if($_GET['oper'] == "BAJA"){
	//dar de baja a la mesa

	if($mesas->borrar() > 0){
		$mensaje = "SE ELIMINÓ CORRECTAMENTE LA MESA";
	} else {
		$mensaje = "NO SE PUDO ELIMINAR LA MESA";
	}
}
?>


		<p>
			<label><?php echo $mensaje; ?></label>
		</p>
		<p>
			<a href="grillamesas.php?buscar=<?php echo $_GET['buscar']; ?>">
				<input type="button" name="btnregresar" value="Regresar"/>
			</a>
		</p>
	</body>
</html>