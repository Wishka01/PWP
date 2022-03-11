<html>
	<header></header>
	<body>
		<div align="center">
			<label>¿ESTÁ USTED SEGURO QUE DESEA ELIMINAR LA MESA:</label>
			<br>
			<br>
			<label>AÑO:</label>
			<label><?php echo $_GET['anio']; ?></label>
			<br>

			<label>MATERIA:</label>
			<?php 
			include('../materias/clsmateria.php');
			$mate = new clsmateria();
			$mate->id = $_GET['idmateria'];
			$lamateria = $mate->traerUnaMateria();
			?>
			<label><?php echo $lamateria['nombre']; ?></label>
			<br>

			<label>TIPO DE INSTANCIA:</label>
			<?php 
			include('../tipoinstancia/clstipoinstancia.php');
			$tiposinst = new clstipoinstancia();
			$tiposinst->id = $_GET['idtipoinstancia'];
			$eltipo = $tiposinst->traerUnTipodeInstancia();
			?>
			<label><?php echo $eltipo['nombre']; ?></label>
			<br>

			<label>DEL:</label>
			<label>
				<?php echo $_GET['fecha']; ?>
				&nbsp;&nbsp;&nbsp; a las
				<?php echo $_GET['horario']; ?>
			</label>
			<br>

		</div>
			<br>
			<br>
        <div align="center">
		<a href="grillamesas.php?buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $_GET['aniobuscado'];?>&idtipoinstanciabuscada=<?php echo $_GET['idtipoinstanciabuscada'];?>">
			<input type="button" value="NO"/>
		</a>
		<a href="mensamesas.php?oper=BAJA&buscar=<?php echo $_GET['buscar']; ?>&idmesa=<?php echo $_GET['idmesa']; ?>">
			<input type="button" value="SI"/>
		</a>
	</body>
</html> 