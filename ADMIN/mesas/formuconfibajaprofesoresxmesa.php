<html>
	<header></header>
	<body>
		<div align="center">
			<label>¿ESTÁ USTED SEGURO QUE DESEA ELIMINAR DE LA MESA:</label>
			<br>
			<br>
			<label>A:</label>
			<label><?php echo $_GET['idprofesor']; ?></label>
			<br>

		</div>
			<br>
			<br>
        <div align="center">
			<a href="grillaprofesoresmesas.php?buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $_GET['aniobuscado'];?>&idtipoinstanciabuscada=<?php echo $_GET['idtipoinstanciabuscada'];?>&idmesa=<?php echo $_GET['idmesa'];?>">
				<input type="button" value="NO"/>
			</a>
		<a href="mensaprofesoresmesas.php?oper=BAJA&buscar=<?php echo $_GET['buscar'];?>&aniobuscado=<?php echo $_GET['aniobuscado'];?>&idtipoinstanciabuscada=<?php echo $_GET['idtipoinstanciabuscada'];?>&idmesa=<?php echo $_GET['idmesa'];?>&idprofesor=<?php echo $_GET['idprofesor']; ?>">
			<input type="button" value="SI"/>
		</a>
	</body>
</html> 