<?php

class clshorario{
	public $idcurso;
	public $idturno;
	public $archivo;


	private function ejecutar($comando, $mensaje)
	{
		include('../funcionesgenerales/clssql.php');

		$cantidadFilasAfectadas = mysqli_query($conexion, $comando ) or die("Error - ".$mensaje." - ".mysqli_error($conexion));

		return $cantidadFilasAfectadas;

	}

	public function insertar()
	{
		$comando = "insert into horarios (idcurso, idturno, archivo)
				VALUES ('".$this->idcurso."','".$this->idturno."','".$this->archivo."') ";

		return $this->ejecutar($comando, "INSERTANDO EL HORARIO");
	}

	public function actualizar()
	{
		$comando = "update horarios 
		               set archivo = '".$this->archivo."'
				     where idcurso = '".$this->idcurso."'
				       and idturno = '".$this->idturno."' ";

		return $this->ejecutar($comando, "ACTUALIZANDO EL HORARIO");
	}

	public function borrar()
	{
		$comando = "delete from horarios 
				     where idcurso = '".$this->idcurso."'
				       and idturno = '".$this->idturno."' ";

		return $this->ejecutar($comando, "BORRANDO EL HORARIO");
	}

	public function traertodosloshorarios()
	{
		$comando="select idcurso, t.idturno as idturno, nombreturno, archivo
					from horarios H, turnos t
				   where idcurso = '".$this->idcurso."' 
				     and t.idturno = h.idturno
				    order by t.idturno";

		return $this->ejecutar($comando, "TRAYENDO TODOS LOS HORARIOS");
	} 

	public function traerunhorario()
	{
		$comando="select idcurso, idturno, archivo
					from horarios 
				     where idcurso = '".$this->idcurso."'
				       and idturno = '".$this->idturno."' ";

		return $this->ejecutar($comando, "TRAYENDO UN HORARIO");
	} 
}
	
?>
