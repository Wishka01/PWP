<html>
	<header></header>
	<body>
<?php
	
	$hoy = date("d.m.y");
	$idcurso = $_GET['idcurso'];

	if($_GET['oper'] == "ALTA")
	{
		$idturno = "";
		$archivo = "";
		$Tituloformulario = "Agregar horarios";
	}
?>
	<h1>Formulario para <?php echo $Tituloformulario?></h1>
	<div align="center" style="background-color: #fff; border-radius: 40px;">
		<form name="form1" method="post" action="mensahorarios.php?oper=<?php echo $_GET['oper'];?>&idcurso=<?php echo $idcurso; ?>" enctype="multipart/form-data">
			<p>
				<label>TURNO: </label>
				<?php 
				include('../turnos/clsturno.php');
				$turnos = new clsturno();
				$regturnos = $turnos->traertodoslosturnos();
				?>
				<select name="cmbturnos">
				<?php 
				while($cadaturno = mysqli_fetch_array($regturnos, MYSQLI_ASSOC)){
				?>
					<option value="<?php echo $cadaturno['idturno']; ?>">
						<?php echo $cadaturno['nombreturno']; ?>
					</option>					
				<?php 
				}
				?>
				</select>
			</p>
			<p>
				<br>
				<input required type="file" name="archivo" value="<?php echo $imagen; ?>" accept="image/*"/>
			</p>
			<p align="center">
				<a href="grillahorarios.php?idcurso=<?php echo $idcurso; ?>">
					<input style="width: 30%; height: 50px; border-radius: 10px;margin-bottom: 10px;" type="button" name="btncancelar" value="Volver "/>
				</a>
				<br>
				<input style="width: 30%; height: 50px; border-radius: 10px;margin-bottom: 10px;" type="submit" name="btngrabar" value="Subir"/>
				<br>
			</p>
		</form>
	</div>
</body>
</html>