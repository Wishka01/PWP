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
		$idmesa = $mesas->getNuevoIdmesa();
		$anio=1;
		$idmateria=1;
		$horario="";
		$fecha="";
		$idtipoinstancia=1;
	} else {
		$idmesa = $_GET['idmesa'];
		$anio=$_GET['anio'];
		$idmateria=$_GET['idmateria'];
		$horario=$_GET['horario'];
		$fecha=$_GET['fecha'];
		$idtipoinstancia=$_GET['idtipoinstancia'];
	}
?>

	
</div>
<div align="center">
<br>
	<form name="form1" method="post" action="mensamesas.php?oper=<?php echo $_GET['oper']; ?>&buscar=<?php echo $_GET['buscar'];?>&idmesa=<?php echo $idmesa; ?>&aniobuscado=<?php echo $aniobuscado;?>&idtipoinstanciabuscada=<?php echo $idtipoinstanciabuscada;?>&idmesa=<?php echo $idmesa;?>">
		<p>
			<label>TIPO DE INSTANCIA</label>
			<?php
			include('../tipoinstancia/clstipoinstancia.php');
			$tiposinst = new clstipoinstancia();
			$tiposinst->cargarCMB($idtipoinstancia);
			?>
		</p>
		<p>
			<label>AÑO</label>
			<?php
			include('../anios/clsanio.php');
			$anios = new clsanio();
			$anios->cargarCMB($anio);
			?>
		</p>
		<p>
			<label>MATERIA</label>
			<?php
			include('../materias/clsmateria.php');
			$mate = new clsmateria();
			$mate->cargarCMB($idmateria);
			?>
		</p>
		<p>
			<label>FECHA Y HORA</label>
			<input type="date" name="txtfecha" value="<?php echo $fecha;?>" required>
			<input type="time" name="txthora" value="<?php echo $horario;?>" required>
		</p>
		<p>
			<a href="grillamesas.php?buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $aniobuscado;?>&idtipoinstanciabuscada=<?php echo $idtipoinstanciabuscada;?>">
				<input type="button" name="btncancelar" value="CANCELAR"/>
			</a>
			<input type="submit" name="btngrabar" value="GUARDAR"/>
		</p>
	</form>
</body>
</html>