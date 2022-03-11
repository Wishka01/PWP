<?php

    class NoticiaDAO {

        function selectAll() {
            $host = "localhost";
            $user = "root";
            $password = "";
            $database = "pwi";
            $mysqli = new mysqli($host, $user, $password, $database);
            if ($mysqli->connect_errno) {
                printf("Falló la conexión.");
                exit();
            }

            $query = "SELECT * FROM Noticias;";
            $result = $mysqli->query($query);

            while ( ($row = $result->fetch_array()) != null) {
                // hago algo

                echo("
                <div class=\"noticia\">
                    <div class=\"contenedor_img\">
                        <img class=\"noticia_img\" src=" . $row['url_Img'] . ">
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

        function selectById($idNoticia) {
            $host = "localhost";
            $user = "root";
            $password = "";
            $database = "pwi";
            $mysqli = new mysqli($host, $user, $password, $database);
            if ($mysqli->connect_errno) {
                printf("Falló la conexión.");
                exit();
            }

            $query = "SELECT * FROM Noticias WHERE idNoticia = " . $idNoticia . ";";
            $result = $mysqli->query($query);
        }
    }

?>