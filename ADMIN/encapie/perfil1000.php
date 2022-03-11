<html>
	<body class="claseFuente">
		<div width="100%">
			<img src="../imagenes/postaslider1.jpg" alt="" width="100%" style="">
		</div>
		   <div class="navbar" style="width: 100%"> 
					<a href="../index/index.php?sSs=<?php echo $SS_IDSESSION;?>">Inicio</a>
					<div class="dropdown">
						<button class="dropbtn">Administraci&oacute;n
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<a href="../noticias/grillanoticias.php?sSs=<?php echo $SS_IDSESSION;?>">Administracion de Noticias / Novedades</a>
							<a href="../mesas/filtrosmesa.php?sSs=<?php echo $SS_IDSESSION;?>">Administracion de Mesas de Examen</a>
							<a href="../profesores/grillaprofesores.php?sSs=<?php echo $SS_IDSESSION;?>">Administracion de Profesores Ausentes</a>
							<a href="../horarios/filtrarcurso.php?sSs=<?php echo $SS_IDSESSION;?>">Administracion de Horarios por curso</a>
						</div>
					</div>
					<div class="dropdown">
						<button class="dropbtn">Usuario
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<a href="../usuario/cambiarpwd.php?sSs=<?php echo $SS_IDSESSION;?>">Cambiar Contraseña</a>
							<a href="../login/cerrarsesion.php?sSs=<?php echo $SS_IDSESSION;?>">Cerrar Sesi&oacute;n</a>
						</div>
					</div>
			</div>
	</body>
</html>	
