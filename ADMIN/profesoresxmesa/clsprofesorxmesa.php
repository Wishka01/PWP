<?php

class clsprofesorxmesa{
    public $idmesa;
    public $idprofesor;

	public function insertar()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta = "insert into profesoresxmesa(idmesa, idprofesor)
		                     VALUES ('".$this->idmesa."','".$this->idprofesor."') ";

		$cantidadFilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al insertar un profesor en una mesa de examen --".mysqli_error($conexion));

		mysqli_close($conexion);

		return $cantidadFilasAfectadas;
	}
	public function borrar()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="delete from profesoresxmesa
				   where idmesa = '".$this->idmesa."' 
				     and idprofesor = '".$this->idprofesor."' ";

		$cantidadFilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al eliminar un profesor en una mesa de examen --".mysqli_error($conexion));

		mysqli_close($conexion);

		return $cantidadFilasAfectadas;
	}

	public function traerTodosLosProfesores()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="select p.idprofesor as idprofesor, apellido, nombre, dni 
		             from profesores p, profesoresxmesa pxm
		            where pxm.idmesa = '".$this->idmesa."'
		              and pxm.idprofesor = p.idprofesor";

		$FilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al buscar los profesores --".mysqli_error($conexion));

		mysqli_close($conexion);
		return $FilasAfectadas;
	}
	public function traerTodasLasMesas()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="select pxm.idmesa as idmesa, anio, 
		                  m.idmateria as idmateria, ma.nombre as nombremateria,
		                  fecha, horario, 
		                  m.idtipoinstancia as idtipoinstancia, t.nombre as nombretipoinstancia
		              from mesas m, materias ma, tiposinstancia t, profesoresxmesa pxm 
		             where ma.idmateria = m.idmateria 
		               and t.idtipoinstancia = m.idtipoinstancia 
		               and pxm.idprofesor = '".$this->idprofesor."' ";

		$FilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al buscar las mesas --".mysqli_error($conexion));

		mysqli_close($conexion);
		return $FilasAfectadas;
	}
}