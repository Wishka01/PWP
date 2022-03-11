<?php
if(isset($_GET['sSs'])){
	$idsession = $_GET['sSs'];
	include ('../funcionesgenerales/verlogueo.php');
} else {
	$SS_IDPERFIL = 0;
	$idsession = 0;
}
	include('../encapie/encabezado.php');
	include('clsUsuario.php');
	include('../encriptar/encriptar.php');
	$session = new clssession();
	$session->id = $idsession;
	$regsesiones=$session->getUnaSession();
	$lasession=mysqli_fetch_array($regsesiones,MYSQLI_ASSOC);
	$idusuario = $lasession['idusuario'];
	$usuario = new clsusuario();
	$usuario->idusuario = $idusuario;
	$regusuarios=$usuario->getUnUsuario();
	$elusuario=mysqli_fetch_array($regusuarios,MYSQLI_ASSOC);
	$pwdactual = $elusuario['pwd'];
	$err=false;
	if($_GET['vengode']!=1){
		if($_POST['txtpwdnueva']!=$_POST['txtpwdrepetir']){
			$mensaje="La nueva contraseña y la contraseña repetida no coinciden";
			$ir_a = "cambiarpwd.php?sSs=".$idsession;
			$err=true;
		}
		$pwdvieja = encriptar($_POST['txtpwdvieja']);
		if($pwdvieja != $pwdactual){
			echo $session->idusuario;
			$mensaje="La contraseña actual es incorrecta";
			$ir_a = "cambiarpwd.php?sSs=".$idsession;
			$err=true;
		}else{
			if(!$err == true){
				$usu = new clsusuario();
				$usu->idusuario = $idusuario;
				$usu->pwd = encriptar($_POST['txtpwdnueva']);
				if(($usu->actualizarPWD())>0){
					$mensaje = "La contraseña se actualizo correctamente";
					$ir_a = "../login/cerrarsesion.php?sSs=".$idsession;
				}
			}
		}
	}else{
		if($_POST['txtpwdnueva']!=$_POST['txtpwdrepetir']){
			$err=true;
		}
		if($err == true){
			$mensaje = "Las contraseñas no coinciden";
			$ir_a = 'cambiarsolopwdinicial.php?sSs='.$idsession.'&idusuario='.$_GET['idusuario'];
		} else {
			$usu = new clsusuario();
			$usu->idusuario = $_GET['idusuario'];
			$usu->pwd = encriptar($_POST['txtpwdnueva']);
			if(($usu->actualizarPWD())>0){
				$mensaje = "La contraseña se actualizo correctamente";
				$ir_a = "../login/cerrarsesion.php?sSs=".$idsession;
			}
		}
	}
?>

		<div align="center" class="Separador">
			<br>
			<br>
			<h1>Cambiar Contraseña</h1>
			<label><?php echo $mensaje?></label>
			<br>
			<br>
			<a style="text-decoration: none;" href="<?php echo $ir_a?>">
				<input class="botonVerde botonGrilla" type="button" value="Regresar">
			</a>
		</div>
	</body>
</html>
