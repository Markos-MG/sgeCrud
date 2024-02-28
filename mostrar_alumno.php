<?php
include 'conexion.php';

if (isset($_POST['nif'])) {
    $nif = $_POST['nif'];

    $sql = "SELECT nif, nombre, apellido1, apellido2, email FROM alumno WHERE nif = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nif);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            echo "<table class='table'><thead><tr><th>NIF</th><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Email</th></tr></thead><tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["nif"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido1"]."</td><td>".$row["apellido2"]."</td><td>".$row["email"]."</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Alumno no encontrado.";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: No se proporcionó un NIF.";
}

$conn->close();
?>
