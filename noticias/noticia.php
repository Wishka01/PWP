<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!--GOOGLEFONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/templategrid.css">
    <link rel="stylesheet" href="./css/noticiaAbierta.css">
</head>

<style type="text/css">
    table, tr, td{
       border: 1px solid black;    
    }
</style>

<body>
    <div class="container">
        <header class="header">
            <div class="logo"><img src="../img/logo2.png" alt="Logo escuela"></div>
            <div class="eslogan"><h3>Escuela de Educacion Secundaria Tecnica Nº 1 - Crucero General Belgano - Pinamar</h3></div>
            <div class="redes">
                <a href="http://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="mailto:contacto@eest1pinamar.com.ar"><i class="far fa-envelope"></i></a>

            </div>
        </header>
        <nav class="main-menu">
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="../historia.html">Historia</a></li>
                <li><a href="../especialidades.html">Especialidades</a></li>
                <li><a href="../mesas de examen.html">Mesas de examen</a></li>
                <li><a href="../directivos.html">Directivos</a></li>
                <li><a href="../contacto.html">Contacto</a></li>
            </ul>
        </nav>
        <main class="container-content">
            <!-- La noticia -->
            <?php
                include("NoticiaDAO.php");
                $noticiaDAO = new NoticiaDAO();

                $idNoticia = $_GET['idNoticia'];

                $result = $noticiaDAO->selectById($idNoticia);

                $row = $result->fetch_array();

                echo("
                <div class=\"noticia-abierta\">
                    <h2 class=\"noticia-abierta-titulo\">" . $row['titulo'] . "</h2>
                    <img class=\"noticia-abierta-img\" src=" . $row['urlImg'] . ">
                    <p class=\"noticia-abierta-descCorta\">" . $row['descCorta'] . "</p>
                    <p class=\"noticia-abierta-descLarga\">" . $row['descLarga'] . "</p>
                </div>
                ");

            ?>

        </main>
            
        <aside class="sidebar">
            <div class="archivo">
                <div class="archivo-cabecera">
                    <b>NOTICIAS:</b>
                    <br></br>
                </div>
                
                <table style="width: 100%">
                    <tr>
                        <th colspan="3">Profesores ausentes</th>
                    </tr>
                    <tr>
                        <td><strong>Profesor/a</strong></td>
                        <td><strong>Desde</strong></td>
                        <td><strong>Hasta</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
    
                </table>   

            </div>

            <div class="linksSidebar">
                <div class="link1">
                    <a href="expotecnica.html"> 
                        <img src="../img/expotecnica.jpg" alt="LINK 1 SIDE">
                        <h3>Expotecnica</h3>
                    </a>  
                </div>
                <div class="link2">
                    <a href="artec.html">  
                        <img src="../img/biblioteca.jpg" alt="LINK 2 SIDE">
                        <h3>Artec</h3>
                    </a>
                </div>
           
                <div class="link3">
                    <a href="https://und.com.ar/moodle30/login/index.php" target="_blank">
                       <img src="../img/campus.jpg"  alt="LINK 3 SIDE">
                    </a>
               </div>
           
            </div>
        </aside>

        <footer class="footer">
            <h4>Escuela de Educacion Secundaria Tecnica N° 1 - Pinamar &copy; 2020</h4>
            <p>Sitio web desarrollado por alumnos del ultimo año</p>
        </footer>

    </div>
</body>
</html>