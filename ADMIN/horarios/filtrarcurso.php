<html>
	<body>
		<h1>Administración de Horarios</h1>
		<form name="frmfiltrtado" method="post" action="grillahorarios.php">
			<label>CURSO: </label>
			<?php
			include('../cursos/clscurso.php');
			$cursos = new clscurso();
			$regcursos = $cursos->traertodosloscursos();
			?>
			<select name="cmbcursos">
				<?php
				while($cadacurso = mysqli_fetch_array($regcursos, MYSQLI_ASSOC)){
				?>
					<option value="<?php echo $cadacurso['idcurso'];?>">
						<?php echo $cadacurso['anio']."° ".$cadacurso['division'];?>
					</option>					
				<?php
				}
				?>
			</select>
			<input type="submit" value="FILTRAR"/>
		</form>
	</body>
</html>