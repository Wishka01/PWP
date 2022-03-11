<?php

class clsnoticia{
	public $idnoticia;
	public $titulo;
	public $desccorta;
	public $desclarga;
	public $imagen;
	public $fechainicio;
	public $fechafin;
	public $idusuario;

	private function ejecutar($comando, $mensaje)
	{
		include('../funcionesgenerales/clssql.php');

		$cantidadFilasAfectadas = mysqli_query($conexion, $comando ) or die("Error - ".$mensaje." - ".mysqli_error($conexion));

		return $cantidadFilasAfectadas;

	}
	public function insertar()
	{

		$comando = "insert into noticias (idnoticia,titulo, descripcioncorta, descripcionlarga, imagen, fechainicio, fechafin, idusuario)
				VALUES ('".$this->getnuevanoticia()."','".$this->titulo."','".$this->desccorta."','".$this->desclarga."','".$this->imagen."','".$this->fechainicio."','".$this->fechafin."','".$this->idusuario."') ";


		return $this->ejecutar($comando, "INSERTANDO NOTICIA");

	}
	public function actualizar()
	{
		$comando="update noticias 
		             set descripcioncorta = '".$this->desccorta."'
		               , titulo = '".$this->titulo."'
		               , descripcionlarga = '".$this->desclarga."'
		               , imagen = '".$this->imagen."'
		               , fechainicio = '".$this->fechainicio."'
		               , fechafin = '".$this->fechafin."'
		               , idusuario = '".$this->idusuario."'
		           where idnoticia = '".$this->idnoticia. "' ";

		return $this->ejecutar($comando, "ACTUALIZANDO NOTICIA");
	}

	public function borrar()
	{
		$comando="delete from noticias
		           where idnoticia = '".$this->idnoticia."' ";

		return $this->ejecutar($comando, "BORRANDO NOTICIA");
	} 

	public function traertodaslasnoticias()
	{
		$comando="select idnoticia,titulo, descripcioncorta, descripcionlarga ,imagen, fechainicio, fechafin, idusuario
					from noticias";

		return $this->ejecutar($comando, "Trayendo todas las noticias");
	} 

	public function traerunanoticia()
	{
		$comando="select idnoticia,titulo, descripcioncorta, descripcionlarga ,imagen, fechainicio, fechafin, idusuario
					from noticias
				where idnoticia = '".$this->idnoticia."' ";

		$regnoticia = $this->ejecutar($comando, "Trayendo todas las noticias");

		return mysqli_fetch_array($regnoticia, MYSQLI_ASSOC);
	} 

	private function getnuevanoticia() 
	{
		$consulta= "select MAX(idnoticia) as maximo from noticias ";
		$registro= $this->ejecutar($consulta,"BUCANDO EL MAXIMO NRO DE NOTICIA");
					
		if ($reg=mysqli_fetch_array($registro, MYSQLI_ASSOC))
		{
			$valor= $reg['maximo'] + 1;
		}
		else
		{
			$valor=1;
		}
		return $valor;
	}

}
	
?>