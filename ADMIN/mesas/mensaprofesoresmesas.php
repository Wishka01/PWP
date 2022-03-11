<html>
	<header>
		
	</header>
	<body>

<?php

include('../profesoresxmesa/clsprofesorxmesa.php');
$profxmesa = new clsprofesorxmesa();
$profxmesa->idmesa = $_GET['idmesa'];

if ($_GET['oper'] == "ALTA"){
	//dar de alta a la mesas
    $profxmesa->idprofesor = $_POST['cmbprofesores'];

	if($profxmesa->insertar() > 0){
		$mensaje = "SE INCORPORÓ CORRECTAMENTE EL PROFESOR A LA MESA";
	} else {
		$mensaje = "NO SE PUDO INCORPORAR EL PROFESOR A LA MESA";
	}
}

if($_GET['oper'] == "BAJA"){
	//dar de baja a la mesa

    $profxmesa->idprofesor = $_GET['idprofesor'];
	if($profxmesa->borrar() > 0){
		$mensaje = "SE ELIMINÓ CORRECTAMENTE AL PROFESOR DE LA MESA";
	} else {
		$mensaje = "NO SE PUDO ELIMINAR AL PROFESOR DE LA MESA";
	}
}
?>


		<p>
			<label><?php echo $mensaje; ?></label>
		</p>
		<p>
			<a href="grillaprofesoresmesas.php?buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $_GET['aniobuscado'];?>&idtipoinstanciabuscada=<?php echo $_GET['idtipoinstanciabuscada'];?>&idmesa=<?php echo $_GET['idmesa'];?>">
				<input type="button" name="btnregresar" value="Regresar"/>
			</a>
		</p>
	</body>
</html>