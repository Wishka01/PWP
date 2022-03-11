<div class="noticias">
    <!--<div class="noticia1">
        <div class="noticia1-contenido">
            <a href="../noticias/regreso-clases.html"><h2>El gobierno autorizó el regreso a las clases presenciales</h2></a>
            <p>El Consejo Federal de Educación (CFE) aprobó por unanimidad los nuevos indicadores que regirán para definir la vuelta a las clases presenciales, suspendidas en casi todo el país desde el 16 de marzo. Pese al avance, según supo Infobae, aún no hay fecha de retorno en ningún distrito.</p>

            <a href="../noticias/regreso-clases.html">Seguir leyendo</a>
            
        </div>
        <div class="noticia1-img">
            <img src="../img/noticias/regreso-a-clases.jpg" alt="NOTICIA 1">
        </div>
    </div> -->

    <?php
        include("NoticiaDAO.php");
        echo("<br>");
        $noticiaDAO = new NoticiaDAO();
        $noticiaDAO->selectAll();
    ?>
</div>
