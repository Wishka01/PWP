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

            return $result;
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

            return $result;
        }
    }

?>