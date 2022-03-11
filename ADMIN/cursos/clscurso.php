<?php

class clscurso{
	public $id;
	public $anio;
	public $division;

	private function ejecutar($comando, $mensaje)
	{
		include('../funcionesgenerales/clssql.php');

		$cantidadFilasAfectadas = mysqli_query($conexion, $comando ) or die("Error - ".$mensaje." - ".mysqli_error($conexion));

		return $cantidadFilasAfectadas;

	}

	public function traertodosloscursos()
	{
		$comando="select idcurso, anio, division
					from cursos ";

		return $this->ejecutar($comando, "Buscando todos los cursos");
	} 

	public function traeruncurso()
	{
		$comando="select idcurso, anio, division
					from cursos 
				   where idcurso = '".$this->id."' ";

		return $this->ejecutar($comando, "Buscando el curso");
	} 

}
?>