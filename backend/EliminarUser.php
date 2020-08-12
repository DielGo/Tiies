<?php
    include("conexion.php");
    $id = $_POST ['id'];
    $slq="DELETE FROM usuarios WHERE id = '$id'";
        $consulta = mysqli_query($conexion, $slq);
        if ($consulta == false) {
            echo "Error en la ejecucion de la consulta.<br/>";
        } else {
            header("location:../Administrar.php");
        }
?>