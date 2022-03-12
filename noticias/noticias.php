<div class="noticias">
    <?php
        include("NoticiaDAO.php");
        $noticiaDAO = new NoticiaDAO();
        $result = $noticiaDAO->selectAll();

        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $fecha = date("Y-m-d");

        while ( ($row = $result->fetch_array()) != null) {
            $fechaInicio = date("Y-m-d", strtotime($row['fecInicio']));
            $fechaFin = date("Y-m-d", strtotime($row['fecFin']));
            if (($fecha >= $fechaInicio) && ($fecha <= $fechaFin)) {
                echo("
                <div class=\"noticia\">
                    <div class=\"contenedor_img\">
                        <img class=\"noticia_img\" src=" . $row['urlImg'] . ">
                    </div>
                    <div class=\"cuerpo\">
                        <h2 class=\"noticia_titulo\">" . $row['titulo'] . "</h2>
                        <p class=\"noticia_decCorta\">" . $row['descCorta'] . "</p>
                        <a href=\"../noticias/noticia.php?idNoticia=" . $row['idNoticia'] . "\">Seguir Leyendo</a>
                    </div>
                </div>
                ");
            }
        }
    ?>
</div>
