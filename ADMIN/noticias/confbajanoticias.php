			<html>
	<header></header>
	<body>
		<label>
			<?php echo "Esta seguro de querer eliminar la noticia?";?>		
		</label>
	<br>
	<br>
	<br>
		<a href="grillanoticias.php">
			<input type="button" value="NO"/>
		</a>
		<a href="mensanoticias.php?oper=BAJA&idpersona=<?php echo $_GET['idpersona']; ?>">
			<input type="button" value="SI"/>
		</a>
	</body>
			</html> 