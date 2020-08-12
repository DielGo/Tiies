<?php
/*mantener la sesion activa nota:pegar en cada pagina que este dentro del inicio de sesion*/
session_start();
error_reporting(0);
$_SESSION['Usuario'];
$vsesion = $_SESSION['Usuario'];
if ($vsesion == null || $vsesion = '') {
	/*alerta de no inicio de sesion*/
	echo '<script language="javascript">alert("Debes iniciar sesion");window.location.href="sesion.html"</script>';
	die();
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Menu</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header">
			<h1><a href="">TIEES</a> Test Data | <?php      /* falta haccer abrir una nueva pagina de inicio */

													echo $_SESSION['Usuario'];
													?></h1>
			<nav id="nav">
				<ul>
					<li><a href="backend/destruir_sesion.php" class="button">Cerrar Sesion</a></li>
				</ul>
			</nav>
		</header>
		<!-- Header -->


		<!-- Main -->
		<section id="main" class="container">
			<header>
				<h2>Menu</h2>
				<p>Seleciona un tipo de prueba</p>
			</header>
			<div class="row">
				<div class="col-12">
					<!-- Image -->
					<section class="box">
						<div class="box alt">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-4"><span class="image fit"><a href="Transformadores.php"><img src="images/transformador.png"></a>Transformador de corriente</span></div>
								<div class="col-4"><span class="image fit"><a href="#"><img src="images/tierras.png"></a>TC´s</span></div>
								<div class="col-4"><span class="image fit"><a href="#"><img src="images/Len.png"></a>TP´s</span></div>
								<div class="col-4"><span class="image fit"><a href="#"><img src="images/tierras.png"></a>Tierras</span></div>
								<div class="col-4"><span class="image fit"><a href="#"><img src="images/Pruebas en transformadores de tensión.png"></a>le</span></div>
								<div class="col-4"><span class="image fit"><a href="#"><img src="images/pur.png"></a>Conductores</span></div>
							</div>
					</section>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<!-- <ul class="copyright">
				<li>&copy; Untitled. All rights reserved.</li>
				<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul> -->
		</footer>

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

