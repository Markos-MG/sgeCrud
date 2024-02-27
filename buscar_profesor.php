<?php
include 'conexion.php';

if (isset($_POST['nif'])) {
    $nif = $_POST['nif'];

    $sql = "SELECT idProfesor, nombre, apellido1, email FROM profesor WHERE nif = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nif);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            echo "<table class='table'><thead><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th></tr></thead><tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["idProfesor"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido1"]."</td><td>".$row["email"]."</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Profesor no encontrado.";
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
