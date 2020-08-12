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
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Transformadores</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header">
			<h1>TIEES Test Data | <?php
															echo $_SESSION['Usuario'];
															?></h1>
			<nav id="nav">
				<ul>
					<li><a href="menu.php" class="button">menu</a></li>
					<li><a href="backend/destruir_sesion.php" class="button">Cerrar Sesion</a></li>
				</ul>
			</nav>
		</header>
		<!-- Header -->

		<!-- Main -->
		<section id="main" class="container">
			<header>
				<h2>Transformadores</h2>
			</header>
			<div class="box">
				<form method="post" action="">
					<fieldset>
						<table width="50%" border="0">
							<thead>
								<h4>Formato de pruebas de transformadores</h4>
								<tr>
									<th> <input type="text" name="compania" value="" placeholder="Compañia" required /></th>
									<th> <input type="text" name="CAT" value="" placeholder="Corrientes AT." required /></th>
								</tr>
								<tr>
									<th> <input type="text" name="UTR" value="" placeholder="Ubicasion de T.R." required /></th>
									<th> <input type="text" name="CBT" value="" placeholder="Corrientes B.T" required /></th>

								</tr>
								<tr>
									<th> <input type="text" name="DTR" value="" placeholder="Designacion de TR." required /></th>
									<th> <input type="text" name="Imp" value="" placeholder="Impedancia" required /></th>

								</tr>
								<tr>
									<th> <input type="text" name="Marca" value="" placeholder="Marca" required /></th>
									<th> <input type="text" name="Alt" value="" placeholder="Altitud" required /></th>

								</tr>
								<tr>
									<th> <input type="text" name="Nos" value="" placeholder="No de serie" required /></th>
									<th> <input type="text" name="Lts" value="" placeholder="Lts de Aceite" required /></th>

								</tr>
								<tr>
									<th> <input type="text" name="Pot" value="" placeholder="Potencia" required /></th>
									<th> <input type="text" name="Peso" value="" placeholder="Peso Total" required /></th>

								</tr>
								<tr>
									<th> <input type="text" name="Tipo" value="" placeholder="Tipo" required /></th>
									<th> <input type="text" name="AFA" value="" placeholder="Año de fabricasion" required /></th>

								</tr>
								<tr>
									<th> <input type="text" name="Clase" value="" placeholder="Clase" required /></th>
									<th> <input type="text" name="TiO" value="" placeholder="Tipo de operacion" required /></th>

								</tr>
							</thead>
						</table>
					</fieldset>
					<fieldset>
						<tr>
							<th> <input type="text" name="Clase" value="" placeholder="Clase" required /></th>
							<th> <input type="text" name="TiO" value="" placeholder="Tipo de operacion" required /></th>

						</tr>
					</fieldset>
					<br>
					<br>

					 <ul class="actions special">
                        <li><a href="menu.php" class="button secundary">Atras</a></li>
						<li><input type="submit" value="Limpiar" /></li>
						<li><input class="button primary" type="submit" value="Guardar" /></li>
                    </ul>

					
				</form>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<!--<ul class="copyright">
				<li>&copy; Untitled. All rights reserved.</li>
				<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>-->
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