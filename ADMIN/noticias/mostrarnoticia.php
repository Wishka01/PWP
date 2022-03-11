
<html>
	<body>

<?php
	$idnoticia = $_GET['idnoticia'];
	include('clsnoticias.php');
	$noti = new clsnoticia();
	$noti->idnoticia = $_GET['idnoticia'];
	$lanoticia = $noti->traerunanoticia();

	$titulo	= $lanoticia['titulo'];
	echo $lanoticia['descripcioncorta'];
	$desccorta = $lanoticia['descripcioncorta'];
 	$desclarga 	= $lanoticia['descripcionlarga'];
	$imagen = $lanoticia['imagen'];
	$fechainicio = $lanoticia['fechainicio'];
	$fechafin = $lanoticia['fechafin'];
	$idusuario = $lanoticia['idusuario'];
	$imagen = $lanoticia['imagen'];
?>




		<div align="center">
				<label><?php echo $titulo; ?></label>
				<br>
				<div align="center">				
					<img width="400" height="200" src="imagenesnoticias/<?php echo $imagen; ?>">
				</div>									
				<br>
					<textarea disabled="" ><?php echo $desclarga; ?></textarea>
				<br>
				<br>
				<a href="grillanoticias.php">
				<input type="button" value="Volver">
				</a>
		</div>
	</body>

</html>