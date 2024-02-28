
<?php
$conexion = new mysqli("localhost", "root", "", "facultad", 3306);
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

$sql = "SELECT idProfesor, nombre FROM profesores";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$fila['idProfesor']."</td>";
        echo "<td>".$fila['nombre']."</td>";

        echo "<td><a href='editar_profesor.php?id=".$fila['id']."'>Editar</a> | <a href='eliminar_profesor.php?id=".$fila['id']."'>Eliminar</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay profesores registrados</td></tr>";
}

$conexion->close();
?>

