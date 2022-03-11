<?php

class clsanio{
    public $anio;

    public function cargarCMB($uno){
			$anios = new clsanio();
			$reganios = $anios->traerTodosLosAnios();
			echo '<select name="cmbanios">';
			if($uno == 0){
				echo '<option value="0">Todos los años</option>';
			}
			while($cadaanio = mysqli_fetch_array($reganios, MYSQLI_ASSOC)){
				if($uno == $cadaanio['anio']){
					echo '<option value="'.$cadaanio['anio'].'" selected>'.$cadaanio['anio'].'</option>';
				} else {
					echo '<option value="'.$cadaanio['anio'].'">'.$cadaanio['anio'].'</option>';
				}
			}
			echo '</select>';
    }

	public function traerTodosLosAnios()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="select anio 
		             from anios ";

		$FilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al buscar los años --".mysqli_error($conexion));

		mysqli_close($conexion);
		return $FilasAfectadas;
	}
}