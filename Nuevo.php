<?php
/*mantener la sesion activa nota:pegar en cada pagina que este dentro del inicio de sesion*/
session_start();
error_reporting(0);
$_SESSION[' Admi'];
$vsesion = $_SESSION['Admi'];
if ($vsesion == null || $vsesion = '') {
    /*alerta de no inicio de sesion*/
    echo '<script language="javascript">alert("Debes iniciar sesion");window.location.href="sesion.html"</script>';
    die();
}
?>

<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Registrar</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
                <h1><a href="index.html">TIEES</a> Admin | <?php      /* falta haccer abrir una nueva pagina de inicio */

                                                            echo $_SESSION['Admi'];
                                                            ?></h1>
            <nav id="nav">
              
            </nav>
        </header>

        <!-- Main -->
        <section id="main" class="container medium">
            <header>
                <h2>Nuevo Usuario</h2>
            </header>
            <br>
            <div class="boox">
                <form method="POST" action="backend/Insertar.php">
                    <ul class="actions special">
                        <li><input type="text" name="Usuario" value="" placeholder="Usuario" required /></li>
                    </ul>
                    <ul class="actions special">
                        <li> <input type="password" name="Clave" value="" placeholder="Contraseña" required /></li>
                    </ul>
                    </ul>
                    <ul class="actions special">
                        <li> <input type="int" name="rol_id" value="" placeholder="1-Admi 2-User" required /></li>
                    </ul>
                    <ul class="actions special">
                        <li><a href="Administrar.php" class="button primary">Atras</a></li>
                       <li> <input type="submit" value="Guardar" /></li>
                    </ul>
                </form>
            </div>
        </section>

        <!-- Footer 
        <footer id="footer">

            <ul class="copyright">
                <li>&copy; All rights reserved.</li>
                <li>Design: <a href="#">dielop</a></li>
            </ul>
        </footer>-->

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>


    
</body>

</html>
