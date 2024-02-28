<?php
include 'conexion.php';

$sql = "SELECT NIF, nombre, apellido1, apellido2, email FROM alumno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'><thead><tr><th>NIF</th><th>Nombre</th><th>Apellido</th><th>Apellido2</th><th>Email</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["NIF"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido1"]."</td><td>".$row["apellido2"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 resultados";
}
$conn->close();
?>
