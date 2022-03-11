<html>
<header>
	<title>PREVIOS  E.E.S.T N°1</title>
</header>

<?php
	include ('clsmesas.php');
	$mesa = new clsmesa();
	$mesa->anio=0;
	$mesa->idtipoinstancia=0;

	if($_GET['buscar']==1){
		if(isset($_POST['cmbanios'])){
			$mesa->anio=$_POST['cmbanios'];
			$mesa->idtipoinstancia=$_POST['cmbtiposinstancia'];
		} else {
			$mesa->anio=$_GET['aniobuscado'];
			$mesa->idtipoinstancia=$_GET['idtipoinstanciabuscada'];
		}
	}

	$regmesas = $mesa->traertodaslasmesas();
?>
	
<body>
	<p></p>
	<div align="center">
		<label class="tituloFormulario claseFuente">Administraci&oacute;n de Mesas de examenes</label>
	</div>
	<p></p>
	<div align="center">
		<a href="formumesas.php?oper=ALTA&buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $mesa->anio;?>&idtipoinstanciabuscada=<?php echo $mesa->idtipoinstancia;?>">
			<input type="button" name="btnnuevo" value="NUEVA MESA DE EXAMEN" />
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
		<td>IDMESA</td>
		<td>AÑO</td>
		<td>MATERIA</td>
		<td>FECHA</td>
		<td>HORARIO</td>
		<td>INSTANCIA</td>
		<td>Opciones</td>
	</tr>
<?php
	while ($datosdelamesa = mysqli_fetch_array($regmesas, MYSQLI_ASSOC))
	{
?>
        <tr>
        	<td> <?php echo $datosdelamesa['idmesa']; ?> </td>
        	<td> <?php echo $datosdelamesa['anio']; ?> </td>
        	<td> <?php echo $datosdelamesa['nombremateria']; ?> </td>
        	<td> <?php echo $datosdelamesa['fecha']; ?> </td>
        	<td> <?php echo $datosdelamesa['horario']; ?> </td>
        	<td> <?php echo $datosdelamesa['nombretipoinstancia']; ?> </td>
        	<td>
        		<a href="grillaprofesoresmesas.php?buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $mesa->anio;?>&idtipoinstanciabuscada=<?php echo $mesa->idtipoinstancia;?>&idmesa=<?php echo $datosdelamesa['idmesa']; ?>&anio=<?php echo $datosdelamesa['anio']; ?>&idmateria=<?php echo $datosdelamesa['idmateria']; ?>&horario=<?php echo $datosdelamesa['horario']; ?>&fecha=<?php echo $datosdelamesa['fecha']; ?>&idtipoinstancia=<?php echo $datosdelamesa['idtipoinstancia']; ?>">
        	   		<input type="button" namer="btnProfesores" value="PROFESORES">
        	   	</a>
        		<a href="formumesas.php?oper=MODIFICACION&buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $mesa->anio;?>&idtipoinstanciabuscada=<?php echo $mesa->idtipoinstancia;?>&idmesa=<?php echo $datosdelamesa['idmesa']; ?>&anio=<?php echo $datosdelamesa['anio']; ?>&idmateria=<?php echo $datosdelamesa['idmateria']; ?>&horario=<?php echo $datosdelamesa['horario']; ?>&fecha=<?php echo $datosdelamesa['fecha']; ?>&idtipoinstancia=<?php echo $datosdelamesa['idtipoinstancia']; ?>">
        	   		<input type="button" namer="btnEditar" value="EDITAR">
        	   	</a>

        	   	<a href="formuconfibaja.php?oper=BAJA&buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $mesa->anio;?>&idtipoinstanciabuscada=<?php echo $mesa->idtipoinstancia;?>&idmesa=<?php echo $datosdelamesa['idmesa']; ?>&anio=<?php echo $datosdelamesa['anio']; ?>&idmateria=<?php echo $datosdelamesa['idmateria']; ?>&horario=<?php echo $datosdelamesa['horario']; ?>&fecha=<?php echo $datosdelamesa['fecha']; ?>&idtipoinstancia=<?php echo $datosdelamesa['idtipoinstancia']; ?>">
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

