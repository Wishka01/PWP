<html>
	<header>
		
	</header>
	<body>

<?php 
include('clshorarios.php');

$horarios = new clshorario();
$horarios->idcurso = $_GET['idcurso'];

if($_GET['oper'] == "ALTA")
{
	$directorio = 'imageneshorarios/';
	$fotohorario = $_FILES['archivo']['name'];
	$fotohorario_tmp = $_FILES['archivo']['tmp_name'];
	move_uploaded_file($fotohorario_tmp,$directorio.$fotohorario);
	$horarios->archivo = $fotohorario;
	$horarios->idturno = $_POST['cmbturnos'];
	if($horarios->insertar() > 0){
		$mensaje = "SE INSERTO CORRECTAMENTE EL HORARIO";
	} else {
		$mensaje = "NO SE PUDO INSERTAR EL HORARIO";
	}
}


if($_GET['oper'] == "BAJA")
{
	$horarios->idturno = $_GET['idturno'];
	if($horarios->borrar() > 0){
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
			<a href="grillahorarios.php?idcurso=<?php echo $_GET['idcurso']; ?>">
				<input type="button" name="btnregresar" value="Regresar"/>
			</a>
		</p>
	</body>
</html>