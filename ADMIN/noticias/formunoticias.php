<html>
	<header></header>
	<body>
<?php
	
	$hoy = date("d.m.y");
	if($_GET['oper'] == "ALTA")
	{
		
		$idnoticia = "";
		$titulo = "";
		$desccorta = "";
	 	$desclarga = "";
		$imagen = "";
		$fechainicio = $hoy;
		$fechafin = $hoy;
		$idusuario = "";
		$imagen = "";
		$Tituloformulario = "Agregar Noticia";
	} else {
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
		$Tituloformulario = "Modificar Noticia";
	}
?>
	<h1>Formulario para <?php echo $Tituloformulario?></h1>
	<br>
	<div align="center" style="background-color: #fff; border-radius: 40px;">
			<form name="form1" method="post" action="mensanoticias.php?oper=<?php echo $_GET['oper'];?>&idnoticia=<?php echo $idnoticia?>"  enctype="multipart/form-data"/>
			<p>
				<label>Ingrese Título de la Noticia </label>
				<input maxlength="250"required type="text" name="txttitulo" value="<?php echo $titulo; ?>"  placeholder="Ingresar el Titulo de la Noticia ...">
			</p>
			<p>
				<label>Ingrese una Descripcion corta </label>
				<textarea required name="txtdescorta" placeholder="Ingresar Descripcion Corta ..." maxlength="400"><?php echo $desccorta; ?></textarea>
			</p>
			<p>
				<label>Ingrese una Descripcion larga </label>
				<textarea required name="txtdeslarga" placeholder="Ingresar Descripcion Larga ..." maxlength="4500"><?php echo $desclarga; ?></textarea>
			</p>
				<p>
				<label>Ingrese una Imagen </label>
				<input required type="file" name="archivo" value="<?php echo $imagen; ?>" accept="image/*"/>
			</p>
					
				<label>Ingrese la fecha inicio y fecha fin</label>
				<br>
				<label>Desde</label>
				<input required  type="date" name="fechadesde" value="<?php echo date('Y-m-d', strtotime($fechainicio))?>">
				<label>Hasta</label>
				<input required type="date" name="fechahasta" value="<?php echo date('Y-m-d', strtotime($fechafin))?>">
				</div>
			<p align="center">
				<a href="grillanoticias.php">
					<input type="button" name="btncancelar" value="Volver "/>
				</a>
				<input type="submit" name="btngrabar" value="Guardar"/>
			</p>
		</form>
	</div>
	
</body>
</html>