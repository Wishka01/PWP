<html>
<body>
	<?php 
	if(isset($_POST['cmbcursos'])){
		$idcurso = $_POST['cmbcursos'];
	} else {
		$idcurso = $_GET['idcurso'];
	}
	?>

		<h1>Administración de horarios</h1>
		<div align="center" style="background-color: #fff; border-radius: 10px;">
			<a href="formuhorarios.php?oper=ALTA&idcurso=<?php echo $idcurso; ?>">
				<input type="button" name="btnnuevo" value="Insertar Nuevo horario" />
			</a>
			<a href="filtrarcurso.php">
				<input type="button" name="btnregresar" value="Buscar otro curso" />
			</a>
			<br>
			<br>		
			<table border="1" width="90%">
				<tr>
					<td style="width: 15%">Turno</td>
					<td style="width: 75%">Horario</td>
					<td style="width: 10%">Acciones</td>
				</tr>

				<?php 
				include('clshorarios.php');

				$horarios = new clshorario();
				$horarios->idcurso = $idcurso;
				$registrosdehorarios = $horarios->traertodosloshorarios();

				while($datosdeloshorarios = mysqli_fetch_array($registrosdehorarios, MYSQLI_ASSOC)){
				?>
					<tr>
						<td style="width: 15%"><?php echo $datosdeloshorarios['nombreturno']; ?></td>
						<td align="center" style="width: 75%">
							<img width="70%" src="imageneshorarios/<?php echo $datosdeloshorarios['archivo']?>">
						</td>
						<td style="width: 10%">
							<a href="mensahorarios.php?oper=BAJA&idcurso=<?php echo $idcurso; ?>&idturno=<?php echo $datosdeloshorarios['idturno']; ?>">
								<input type="button" value="ELIMINAR"/>
							</a>
						</td>
					</tr>	
				<?php
				}
				?>
			</table>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
	</body>
</html>