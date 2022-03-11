<?php

class clsmesa{
	public $idmesa;
    public $anio;
	public $idmateria;
	public $horario;
	public $fecha;
	public $idtipoinstancia;

	public function insertar()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta = "insert into mesas(idmesa, anio, idmateria, fecha, horario, idtipoinstancia)
		                     VALUES ('".$this->idmesa."','".$this->anio."','".$this->idmateria."','".$this->fecha."','".$this->horario."','".$this->idtipoinstancia."') ";

		$cantidadFilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al insertar una mesa de examen --".mysqli_error($conexion));

		mysqli_close($conexion);

		return $cantidadFilasAfectadas;
	}

	public function actualizar()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="update mesas
		             set anio = '".$this->anio."'
		               , idmateria = '".$this->idmateria."'
		               , fecha = '".$this->fecha."'
		               , horario = '".$this->horario."'
		               , idtipoinstancia = '".$this->idtipoinstancia."'
		           where idmesa = '".$this->idmesa . "' ";

		$cantidadFilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al actualizar una mesa de examen --".mysqli_error($conexion));

		mysqli_close($conexion);
		return $cantidadFilasAfectadas;

	}
		public function borrar() 
		{
		include('../funcionesgenerales/clsSQL.php');
		
		$consulta="delete from mesas
				   where idmesa = '".$this->idmesa."' ";
		$cantidadFilasAfectadas=mysqli_query($conexion, $consulta) 
		          or die ("Problemas para eliminar la mesa de examen --> " . mysqli_error($conexion));
		
		mysqli_close($conexion);
		return $cantidadFilasAfectadas;
	}

	public function traerUnaSolamesa()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta = "select idmesa, anio, idmateria,fecha,horario, idtipoinstancia
		              from mesas 
		             where idmesa = '".$this->IDMESAS."' ";

		$FilaAfectada = mysqli_query($conexion, $consulta ) or die("Error al buscar una mesa de examen --".mysqli_error($conexion));

		mysqli_close($conexion);
		return $FilaAfectada;
	}
	public function traerTodasLasmesas()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="select idmesa, anio, 
		                  m.idmateria as idmateria, ma.nombre as nombremateria,
		                  fecha, horario, 
		                  m.idtipoinstancia as idtipoinstancia, t.nombre as nombretipoinstancia
		              from mesas m, materias ma, tiposinstancia t 
		             where ma.idmateria = m.idmateria 
		               and t.idtipoinstancia = m.idtipoinstancia ";
		$where = "";		
		if($this->anio > 0){
			$where .= " AND anio = '".$this->anio."' ";
		}
		if($this->idtipoinstancia > 0){
			$where .= " AND idtipoinstancia = '".$this->idtipoinstancia."' ";
		}
		$consulta .= $where;

		$FilasAfectadas = mysqli_query($conexion, $consulta ) or die("Error al buscar una mesa de examen --".mysqli_error($conexion));

		mysqli_close($conexion);
		return $FilasAfectadas;
	}
	public function getNuevoIdmesa() {
		include('../funcionesgenerales/clsSQL.php');

		$consulta= "select MAX(idmesa) as maximo from mesas ";
		$registro= mysqli_query ($conexion, $consulta) 
		           or die ('Problemas para buscar el nro máximo de mesas de examen'. mysqli_error($conexion));
					
		if ($reg = mysqli_fetch_array($registro, MYSQLI_ASSOC))
		{
				$valor= $reg['maximo'] + 1;
		}
		else
		{
			$valor=1;
		}
		
		mysqli_close($conexion);
		return $valor;
	}


//---------------------------------------------------------------------------------------------
	public function buscarmesasxmateria()
	{
		include('../funcionesgenerales/clsSQL.php');


		$consulta="select idmesa, anio, idmateria,fecha,horario
              from mesas 
              where idmateria = '".$this->idmateria."'";		

		$FilasAfectadasS = mysqli_query($conexion, $consulta ) or die("Error al buscar una mesa de examen --".mysqli_error($conexion));

		mysqli_close($conexion);
		return $FilasAfectadasS;
	}
	public function buscarmesasxanio()
	{
		include('../funcionesgenerales/clsSQL.php');


		$consulta="select idmesa, anio, idmateria,fecha,horario
              from mesas 
              where anio = '".$this->anio."'";		

		$FilasAfectadasS = mysqli_query($conexion, $consulta ) or die("Error al buscar una mesa de examen --".mysqli_error($conexion));

		mysqli_close($conexion);
		return $FilasAfectadasS;
	}
	public function buscarmesasxfecha()
	{
		include('../funcionesgenerales/clsSQL.php');

		$consulta="select idmesa, anio, idmateria,fecha,horario
              from mesas 
              where fecha = '".$this->fecha."'";		

		$FilasAfectadasS = mysqli_query($conexion, $consulta ) or die("Error al buscar una mesa de examen --".mysqli_error($conexion));

		mysqli_close($conexion);
		return $FilasAfectadasS;
	}
}
?>