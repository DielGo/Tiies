<?php
error_reporting(0);
header('content-type: application/json; charset=utf-8');
        include "conexion.php";
        
        $ejecutar = $conexion -> query($sql);
        
        $Usuario = $_REQUEST['Usuario'];
        $Clave = $_REQUEST['Clave'];
        $rol_id = $_REQUEST['rol_id'];

        $sql = "INSERT INTO usuarios VALUES (default, '$Usuario','$Clave' ,'$rol_id')";
        $data["sql"] = $sql;
        $ejecutar = $conexion -> query($sql);

        if ($ejecutar) {
			// redirecionara a pagina..
            header("location:../Administrar.php"); 
        } else {
            $data["resultado"] = "Error";
        }

print $_GET['callback'] . '('.json_encode($data).')';
?>