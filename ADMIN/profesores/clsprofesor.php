<?php

class clsprofesor{
    public $id;
    public $apellido;
    public $nombre;
    public $dni;

    public function cargarCMB($uno){
			$profes = new clsprofesor();
			$regprofes = $profes->traerTodosLosProfesores();
			echo '<select name="cmbprofesores">';
			if($uno == 0){
				echo '	<option value="0">Todas los profesores</option>';
			}
			while($cadaprofe = mysqli_fetch_array($regprofes, MYSQLI_ASSOC)){
				if($uno == $cadaprofe['idprofesor']){
					echo '<option value="'.$cadaprofe['idprofesor'].'" selected>'.$cadaprofe['apellido'].', '.$cadaprofe['nombre'].' - DNI: '.$cadaprofe['dni'].'</option>';
				} else {
					echo '<option value="'.$cadaprofe['idprofesor'].'">'.$cadaprofe['apellido'].', '.$cadaprofe['nombre'].' - DNI:'.$cadaprofe['dni'].'</option>';
				}
			}
			echo '</select>';
    }

	public function traerTodosLosProfesores()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="select idprofesor, apellido, nombre, dni 
		             from profesores ";

		$FilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al buscar los profesores --".mysqli_error($conexion));

		mysqli_close($conexion);
		return $FilasAfectadas;
	}
	public function traerUnProfesor()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="select idprofesor, apellido, nombre, dni 
		             from profesores 
		            where idprofesor = '".$this->id."' ";

		$FilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al buscar un profesor --".mysqli_error($conexion));
		$elprofe = mysqli_fetch_array($FilasAfectadas, MYSQLI_ASSOC);

		mysqli_close($conexion);
		return $elprofe;
	}
}