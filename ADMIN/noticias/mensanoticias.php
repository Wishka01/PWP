<html>
	<header>
		
	</header>
	<body>

<?php 
include('clsnoticias.php');

$noticias = new clsnoticia();

if($_GET['oper'] == "ALTA")
{
	$directorio = "imagenesnoticias/";
	$fotonoticia = $_FILES['archivo']['name'];

	$fotonoticia_tmp = $_FILES['archivo']['tmp_name'];
	move_uploaded_file($fotonoticia_tmp,$directorio.$fotonoticia);
	$noticias->titulo = $_POST['txttitulo'];

	$noticias->desccorta = $_POST['txtdescorta'];
	$noticias->desclarga = $_POST['txtdeslarga'];
	$noticias->fechainicio = $_POST['fechadesde'];
	$noticias->fechafin = $_POST['fechahasta'];
	$noticias->imagen = $fotonoticia;
	$noticias->idusuario = 1;
	if($noticias->insertar() > 0){
		$mensaje = "SE INSERTO CORRECTAMENTE LA NOTICIA";
	} else {
		$mensaje = "NO SE PUDO INSERTAR LA NOTICIA";
	}
}

if($_GET['oper'] == "MODIFICACION")
{
	$directorio = "imagenesnoticias/";
	$fotonoticia = $_FILES['archivo']['name'];
	$fotonoticia_tmp = $_FILES['archivo']['tmp_name'];
	move_uploaded_file($fotonoticia_tmp,$directorio.$fotonoticia);

	$noticias->idnoticia = $_GET['idnoticia'];
	$noticias->titulo = $_POST['txttitulo'];
	$noticias->desccorta = $_POST['txtdescorta'];
	$noticias->desclarga = $_POST['txtdeslarga'];
	$noticias->fechainicio = $_POST['fechadesde'];
	$noticias->fechafin = $_POST['fechahasta'];
	$noticias->imagen = $fotonoticia;
	$noticias->idusuario = 1;

	if($noticias->actualizar() > 0){
		$mensaje = "SE ACTUALIZO CORRECTAMENTE LA NOTICIA";
	} else {
		$mensaje = "NO SE PUDO ACTUALIZAR LA NOTICIA";
	}
}

if($_GET['oper'] == "BAJA")
{
	$noticias->idnoticia = $_GET['idnoticia'];

	if($noticias->borrar() > 0){
		$mensaje = "SE ELIMINÓ CORRECTAMENTE";
	} else {
		$mensaje = "NO SE PUDO ELIMINAR";
	}
}
?>
		<p>
			<label><?php echo $mensaje; ?></label>
		</p>
		<p>
			<a href="grillanoticias.php">
				<input type="button" name="btnregresar" value="Regresar"/>
			</a>
		</p>
	</body>
</html>