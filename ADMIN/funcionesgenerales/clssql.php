<?php
//require_once("../funcionesgenerales/validarlogeo.php");
$host="localhost";
$user="root";
$pwd="";
$base="pwinstitucional";

$conexion=mysqli_connect ($host,$user,$pwd, $base)
	or die ("Problemas para conectar con la base de datos - MySQL Error: ");
	
?>