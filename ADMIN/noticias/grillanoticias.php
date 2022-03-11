
<html>
<body>
		<div align="center" style="background-color: #fff; border-radius: 10px;">
			<h1>Grilla de noticias</h1>
				<a href="formunoticias.php?oper=ALTA">
					<input type="button"name="btnnuevo" value="Insertar Nueva Noticia" />
				</a>
			<br>
			<br>		
			<table border="1" width="90%">
				<tr>
					<td>FOTO</td>
					<td>TITULO</td>
					<td>INICIO</td>
					<td>FIN</td>
					<td>ACCIONES</td>
				</tr>

				<?php 
				include('clsnoticias.php');

				$clsnoticias = new clsnoticia();

				$registrosdenoticias = $clsnoticias->traertodaslasnoticias();

				while($datosdelanoticia = mysqli_fetch_array($registrosdenoticias, MYSQLI_ASSOC)){
				?>
					<tr>
						<td>
							<img width="60px" height="60px" src="imagenesnoticias/<?php echo $datosdelanoticia['imagen']?>">
						</td>
						<td><?php echo $datosdelanoticia['titulo']; ?></td>
						<td><?php echo $datosdelanoticia['fechainicio']; ?></td>
						<td><?php echo $datosdelanoticia['fechafin']; ?></td>
		 				<td>
		 					<a href="formunoticias.php?oper=MODIFICACION&idnoticia=<?php echo $datosdelanoticia['idnoticia'];?>">
								<input type="button" namer="btnEditar" value="Editar">
							</a> 
							<a href="mensanoticias.php?oper=BAJA&idnoticia=<?php echo $datosdelanoticia['idnoticia']?>">
								<input type="button" namer="btnEliminar" value="Borrar">
								<br>
							</a>
							<a href="mostrarnoticia.php?idnoticia=<?php echo $datosdelanoticia['idnoticia'];?>">
								<input type="button" namer="btnEditar" value="Ver" >
								<br>
							</a> 
						</td>
					</tr>	
				<?php
				}
				?>
			</table>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
	</body>
</html>