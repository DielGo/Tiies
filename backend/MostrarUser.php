<?php
include("conexion.php");

$mostrar = "SELECT * FROM usuarios";
$resultado = $conexion->query($mostrar);

while ($row = $resultado->fetch_assoc()) {
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['Usuario']; ?></td>
        <td><?php echo $row['Clave']; ?></td>
        <td><?php echo $row['rol_id']; ?></td>
    </tr>

<?php
}
?>      