<?php
	
	if (isset($_GET['sSs'])){
		include('../sessiones/clssession.php');

		$session = new clssession();

		$session->id = $_GET['sSs'];
		$session->Cerrar();
	}


	header('location:login.php');
	exit();
?>