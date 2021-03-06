<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - EEST N 1</title>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!--GOOGLEFONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/css2.css">
</head>

<style type="text/css">
    table, tr, td{
       border: 1px solid black;    
    }
</style>

<body>
    <div class="container">
        <header class="header">
            <div class="redes">
                <a href="http://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                <a href="mailto:contacto@eest1pinamar.com.ar"><i class="far fa-envelope"></i></a>

            </div>
        </header>
        <nav class="main-menu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="historia.html">Historia</a></li>
                <li><a href="especialidades.html">Especialidades</a></li>
                <li><a href="mesas de examen.html">Mesas de examen</a></li>
                <li><a href="directivos.html">Directivos</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </nav>
        <main class="noticias">
<?php
//        include('../principal/noticiasimpleenindex.php');
?>

        </main>
        <aside class="sidebar">
            <div class="archivo">
                <div class="archivo-cabecera">
                    <b>NOTICIAS:</b>
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
                  <a href="../noticias/expotecnica.html"> 
                    <img src="../img/expotecnica.jpg" alt="LINK 1 SIDE">
                    <h3>Expotecnica</h3>
                </a>  
               
                </div>
               
               <div class="link2">
                    <a href="../noticias/artec.html"> 
                        <img src="../img/biblioteca.jpg" alt="LINK 2 SIDE">
                        <h3>Artec</h3>
                    </a>
                </div>

                <div class="link3">
                     <a href="https://und.com.ar/moodle30/login/index.php" target="_blank">
                        <img src="../img/campus.jpg"  alt="LINJ 3 SIDE">
                     </a>
                </div>

            </div>
        </aside>

        <footer class="footer">
            <h4>
                <a style="text-decoration: none;" href="../login/login.php">
                    Escuela de Educacion Secundaria Tecnica N?? 1 - Pinamar &copy; 2020
                </a>
            </h4>
            <p>Sitio web desarrollado por alumnos del ultimo a??o</p>
        </footer>

    </div>
</body>
</html>