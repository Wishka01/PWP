<?php

class clsmateria{
    public $id;
    public $nombre;

    public function cargarCMB($uno){
			$mates = new clsmateria();
			$regmates = $mates->traerTodasLasMaterias();
			echo '<select name="cmbmaterias">';
			if($uno == 0){
				echo '	<option value="0">Todas las materias</option>';
			}
			while($cadamate = mysqli_fetch_array($regmates, MYSQLI_ASSOC)){
				if($uno == $cadamate['idmateria']){
					echo '<option value="'.$cadamate['idmateria'].'" selected>'.$cadamate['nombre'].'</option>';
				} else {
					echo '<option value="'.$cadamate['idmateria'].'">'.$cadamate['nombre'].'</option>';
				}
			}
			echo '</select>';
    }

	public function traerTodasLasMaterias()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="select idmateria, nombre 
		             from materias ";

		$FilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al buscar las materias --".mysqli_error($conexion));

		mysqli_close($conexion);
		return $FilasAfectadas;
	}
	public function traerUnaMateria()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="select idmateria, nombre 
		             from materias 
		            where idmateria = '".$this->id."' ";

		$FilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al buscar una materia --".mysqli_error($conexion));
		$lamate = mysqli_fetch_array($FilasAfectadas, MYSQLI_ASSOC);

		mysqli_close($conexion);
		return $lamate;
	}
}