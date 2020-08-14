

<?php
	
	$Admi=$_POST['Admi'];
	$Clave=$_POST['Clave'];
	
	//conectar a base de datos
    $conexion=mysqli_connect("localhost","root","","tiees");
	$consulta="SELECT * FROM adminn WHERE Admi='$Admi' and Clave='$Clave'";
 
	$resultado=mysqli_query($conexion, $consulta);

	$filas=mysqli_num_rows($resultado);

	if($filas>0){
		 // inicio de sesion..s
		session_start();
		$_SESSION['Admi']=$Admi;
	    // redirecionara a pagina..    
     	header("location:../Administrar.php");
	}
	else{
    // alerta de usuario ou contraseña no valido
	echo '<script language="javascript">alert("Error de autentificacion");window.location.href="../sesion.html"</script>';
	}

	mysqli_free_result($resultado);
	mysqli_close($conexion);
