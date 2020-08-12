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
<html>

<head>
    <title>Admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />



</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1><a href="">TIEES</a> Admin | <?php      /* falta haccer abrir una nueva pagina de inicio */

                                                echo $_SESSION['Admi'];
                                                ?></h1>
            <nav id="nav">
                <ul>
                    <li><a href="backend/destruir_sesion.php" class="button">Cerrar Sesion</a></>
                </ul>
            </nav>
        </header>
        <!-- Header -->
        <!-- Main -->
        <section id="main" class="container">
            <br>
            <ul class="actions special">
                <li><a href="Nuevo.php" class="button primary">Nuevo Usuario</a></li>
                <li><a href="Eliminar.php" class="button primary">Eliminar Usuario</a></li>
            </ul>
            <hr>
            <table class="table table-dark">
                <thead>
                    <tr class="font-weight-bold">
                        <td>id</td>
                        <td>Usuario</td>
                        <td>Clave</>
                        <td>rol_id</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <?php
                        include("backend/MostrarUser.php");
                        ?>
                    </tr>


                </tbody>
            </table>
        </section>


        <!-- Footer 
        <footer id="footer">
            <ul class="copyright">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: <a href="http://html5up.net">DieLop</a></li>
            </ul>
        </footer> -->

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

<script>
    window.onload = function() {
        killerSession();
    }

    function killerSession() {
        setTimeout("window.open('Index.html','_top');", 60000);
    }
</script>