<html>
	<header>
		<title>MESAS DE EXAMEN E.E.S.T N°1</title>
	</header>
	<body>
		<div align="center">
			<label class="tituloFormulario claseFuente">Administraci&oacute;n de Mesas de examenes</label>
		</div>
		<div align="center">
			<a href="formumesas.php?oper=ALTA&buscar=0&aniobuscado=0&idtipoinstanciabuscada=0">
				<input type="button" name="btnnuevo" value="NUEVA MESA DE EXAMEN" />
			</a>
		</div>
	<form name="frmanios" method="post" action="grillamesas.php?buscar=1">
		<div align="center">
			<label>Filtrar por:</label>
		</div>
		<div align="center">
			<label>AÑO:</label>
			<?php
			include('../anios/clsanio.php');
			$anios = new clsanio();
			$anios->cargarCMB(0);
			?>
		</div>
		<div align="center">
			<label>TIPO DE INSTANCIA:</label>
			<?php
			include('../tipoinstancia/clstipoinstancia.php');
			$tiposinst = new clstipoinstancia();
			$tiposinst->cargarCMB(0);
			?>
		</div>
		<div align="center">
			<input type="submit" name="" value="BUSCAR FILTRADO"/>
		</div>
	</form>
		<div align="center">
			<a href="grillamesas.php?buscar=0">
				<input type="button" name="" value="TODAS LAS MESAS"/>
			</a>
		</div>

	</body>
</html>