<?php

include('../noticias/clsnoticia.php');

$noti = new clsnoticia();

$reginoticias = $noti->getTodasLasNoticiasVigentes();
$contador = 0;

while($cadanoticia = mysqli_fetch_array($reginoticias, MYSQLI_ASSOC)){

    $nronoticia = "NOTICIA NRO: ". $contador;
?>
<div class="noticia1">
    <div class="noticia1-contenido">
        <a href="noticias/regreso-clases.html">
            <h2><?php echo $cadanoticia['titulo']; ?></h2>
        </a>
        <p><?php echo $cadanoticia['descripcioncorta']; ?></p>

        <a href="noticias/regreso-clases.html">Seguir leyendo</a>
        
    </div>
    <div class="noticia1-img">
        <img src="<?php echo $cadanoticia['imagen']; ?>" alt="<?php echo $nronoticia; ?>">
    </div>
</div>

<?php
    $contador++;
}
?>


