<?php

class clstipoinstancia{
    public $id;
    public $nombre;

    public function cargarCMB($uno){
			$tiposinst = new clstipoinstancia();
			$regtiposinst = $tiposinst->traerTodosLosTiposdeInstancia();
			echo '<select name="cmbtiposinstancia">';
			if($uno == 0){
				echo '	<option value="0">Todas las instancias</option>';
			}
			while($cadatipoinst = mysqli_fetch_array($regtiposinst, MYSQLI_ASSOC)){
				if($uno == $cadatipoinst['idtipoinstancia']){
					echo '<option value="'.$cadatipoinst['idtipoinstancia'].'" selected>'.$cadatipoinst['nombre'].'</option>';
				} else {
					echo '<option value="'.$cadatipoinst['idtipoinstancia'].'">'.$cadatipoinst['nombre'].'</option>';
				}
			}
			echo '</select>';
    }

	public function traerTodosLosTiposdeInstancia()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="select idtipoinstancia, nombre 
		             from tiposinstancia ";

		$FilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al buscar los tipos de instancia --".mysqli_error($conexion));

		mysqli_close($conexion);
		return $FilasAfectadas;
	}
	public function traerUnTipodeInstancia()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="select idtipoinstancia, nombre 
		             from tiposinstancia 
		            where idtipoinstancia = '".$this->id."' ";

		$FilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al buscar un tipo de instancia --".mysqli_error($conexion));
		$untipo = mysqli_fetch_array($FilasAfectadas, MYSQLI_ASSOC);

		mysqli_close($conexion);
		return $untipo;
	}
}