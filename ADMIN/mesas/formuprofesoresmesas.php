<?php
	include("clsmesas.php");
	$mesas = new clsmesa();
?>
<html>
	<header><title>PREVIOS  E.E.S.T N°1</title></header>
	<body>
		<div align="center"><label class="tituloFormulario claseFuente">Administraci&oacute;n de Mesas de examenes</label></div>
		
<?php
	$aniobuscado=$_GET['aniobuscado'];
	$idtipoinstanciabuscada=$_GET['idtipoinstanciabuscada'];
     if($_GET['oper'] == "ALTA")
	{
		$idmesa = $_GET['idmesa'];
		$idprofesor=0;
	} else {
		$idmesa = $_GET['idmesa'];
		$idprofesor=$_GET['idprofesor'];
	}
?>
	
</div>
<div align="center">
<br>
	<form name="form1" method="post" action="mensaprofesoresmesas.php?oper=<?php echo $_GET['oper']; ?>&buscar=<?php echo $_GET['buscar'];?>&idmesa=<?php echo $idmesa; ?>&aniobuscado=<?php echo $aniobuscado;?>&idtipoinstanciabuscada=<?php echo $idtipoinstanciabuscada;?>&idprofesor=<?php echo $idprofesor;?>">
		<p>
			<label>PROFESORES</label>
			<?php
			include('../profesores/clsprofesor.php');
			$profes = new clsprofesor();
			$profes->cargarCMB($idprofesor);
			?>
		</p>
		<p>
			<a href="grillaprofesoresmesas.php?buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $aniobuscado;?>&idtipoinstanciabuscada=<?php echo $idtipoinstanciabuscada;?>&idmesa=<?php echo $idmesa;?>&idprofesor=<?php echo $idprofesor;?>">
				<input type="button" name="btncancelar" value="CANCELAR"/>
			</a>
			<input type="submit" name="btngrabar" value="GUARDAR"/>
		</p>
	</form>
</body>
</html>