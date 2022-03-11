<html>
<header>
	<title>PREVIOS  E.E.S.T N°1</title>
</header>

<body>
	<p></p>
	<div align="center">
		<label class="tituloFormulario claseFuente">Administraci&oacute;n de Mesas de examenes</label>
	</div>
	<p></p>
	<div align="center">
		<a href="formuprofesoresmesas.php?oper=ALTA&buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $_GET['aniobuscado'];?>&idtipoinstanciabuscada=<?php echo $_GET['idtipoinstanciabuscada'];?>&idmesa=<?php echo $_GET['idmesa'];?>">
			<input type="button" name="btnnuevo" value="NUEVO PROFESOR" />
		</a>
		<a href="grillamesas.php?buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $_GET['aniobuscado'];?>&idtipoinstanciabuscada=<?php echo $_GET['idtipoinstanciabuscada'];?>">
			<input type="button" name="btnnuevo" value="REGRESAR AL LISTADO DE MESAS" />
		</a>
		<a href="filtrosmesa.php">
			<input type="button" name="btnnuevo" value="REGRESAR A FILTROS" />
		</a>
	</div>
	<br>
</div>
<div align="center">
<table border="1">
	<tr>
		<td>ID</td>
		<td>PROFESOR</td>
		<td>DNI</td>
		<td>Opciones</td>
	</tr>
<?php
	include('../profesoresxmesa/clsprofesorxmesa.php');
	$profes = new clsprofesorxmesa();
	$profes->idmesa = $_GET['idmesa'];
	$regprofes = $profes->traerTodosLosProfesores();
	while ($datosdelosprofes = mysqli_fetch_array($regprofes, MYSQLI_ASSOC))
	{
?>
        <tr>
        	<td> <?php echo $datosdelosprofes['idprofesor'];?> </td>
        	<td> <?php echo $datosdelosprofes['apellido'].', '.$datosdelosprofes['nombre']; ?> </td>
        	<td> <?php echo $datosdelosprofes['dni']; ?> </td>
        	<td>
        	   	<a href="formuconfibajaprofesoresxmesa.php?oper=BAJA&buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $_GET['aniobuscado'];?>&idtipoinstanciabuscada=<?php echo $_GET['idtipoinstanciabuscada'];?>&idmesa=<?php echo $_GET['idmesa']; ?>&idprofesor=<?php echo $datosdelosprofes['idprofesor'];?>">
        	   		<input type="button" namer="btnELIMINAR" value="ELIMINAR">
        	   	</a>
        	</td>
		</tr>
<?php
	}
?>
</table>
</body>
</html>

