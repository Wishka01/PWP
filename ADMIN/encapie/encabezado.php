<?php
		include("../perfil/clsperfil.php");
		$perfil = new clsPerfil();
		$perfil->idperfil = $SS_IDPERFIL;
		if($SS_IDPERFIL == 1000){
			$tipoperfil = "SUPER ADMINISTRADOR";
		} else {
			$regperfiles=$perfil->getUnPerfil();
			$elperfil=mysqli_fetch_array($regperfiles,MYSQLI_ASSOC);
			$tipoperfil = strtolower($elperfil['nombreperfil']);
		}
?>
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
			<meta charset="utf-8">
			<link rel="stylesheet" href="../fonts/fonts.css?1.3" type="text/css" charset="utf-8" />
			<link rel="stylesheet" href="../css/eest1pinamar.css?1.3" type="text/css" charset="utf-8" />
			<link rel="stylesheet" href="../css/tablas.css?1.3" type="text/css" charset="utf-8" />
			<link rel="stylesheet" href="../css/botones.css?1.4" type="text/css" charset="utf-8" />
			<link rel="stylesheet" href="../css/elementosForm.css?1.3" type="text/css" charset="utf-8" />
			<link rel="stylesheet" href="../css/checkBox.css?1.3" type="text/css" charset="utf-8" />
			<link rel="stylesheet" href="../css/labels.css" type="text/css" charset="utf-8" />
			<title>Sistema Asistec</title>
			<meta charset="utf-8">
		</html>
		<?php
		switch($SS_IDPERFIL){
			case 0:
					include('perfil0.php');
					break;
			case 1:
					include('perfilpreceptor.php');
					break;
			case 2:
					include('perfiladministrador.php');
					break;
			case 1000:
					include('perfil1000.php');
					break;
		}
?>
