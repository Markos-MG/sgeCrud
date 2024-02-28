<?php
include 'conexion.php';

$sql = "SELECT nif, nombre, apellido1, apellido2, email FROM profesor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'><thead><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Apellido2</th><th>Email</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["nif"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido1"]."</td><td>".$row["apellido2"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 resultados";
}
$conn->close();
?>