<?php
class clsperfil{
	public $idperfil;
	public $nombre;
	
	public function getUnPerfil() {
		include("../funcionesgenerales/clssql.php");
		
		$consulta="select idperfil, nombreperfil from perfiles
				where idperfil = '".$this->idperfil."' ";
		$registro=mysqli_query($conexion, $consulta) or die ("Problemas para poder traer el perfil --> " . mysqli_error($conexion));
		
		mysqli_close($conexion);
		return $registro;
	}
	public function getTodosLosPerfiles() {
		include("../funcionesgenerales/clssql.php");
		
		$consulta="select idperfil, nombreperfil from perfiles order by nombreperfil";
		$registro=mysqli_query($conexion, $consulta) 
						or die ("Problemas para poder traer todos los perfiles " . mysqli_error($conexion));
		
		mysqli_close($conexion);
		return $registro;
	}
}
?>