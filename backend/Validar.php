<?php
    
    $Usuario=$_POST['Usuario'];
    $Clave=$_POST['Clave'];


    //conectar a base de datos
    $conexion=mysqli_connect("localhost", "root", "", "tiees");
    $consulta="SELECT * FROM usuarios WHERE Usuario='$Usuario' and Clave='$Clave'";
 
    $resultado=mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($resultado);

    if ($filas>0) {
        // inicio de sesion..
        session_start();
        $_SESSION['Usuario']=$Usuario;
        // redirecionara a pagina..
        header("location:../menu.php");
    } else {
        // alerta de usuario ou contraseña no valido
        echo '<script language="javascript">alert("Error de autentificacion");window.location.href="../sesion.html"</script>';
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>	