<?php

class clsturno{
	public $id;
	public $nombre;

	private function ejecutar($comando, $mensaje)
	{
		include('../funcionesgenerales/clssql.php');

		$cantidadFilasAfectadas = mysqli_query($conexion, $comando ) or die("Error - ".$mensaje." - ".mysqli_error($conexion));

		return $cantidadFilasAfectadas;

	}

	public function traertodoslosturnos()
	{
		$comando="select idturno, nombreturno
					from turnos ";

		return $this->ejecutar($comando, "Buscando todos los turnos");
	} 

	public function traerunturno()
	{
		$comando="select idturno, nombreturno
					from turnos 
				   where idturno = '".$this->id."' ";

		return $this->ejecutar($comando, "Buscando el turno");
	} 

}
?>