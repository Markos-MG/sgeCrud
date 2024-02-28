<?php
include '../conexion.php';

if (isset($_POST['nif'])) {
    $nif = $_POST['nif'];

    // Primero, intentamos eliminar las filas de la tabla 'matricula' que hacen referencia al alumno
    $sql = "DELETE FROM matricula WHERE idAlumno = (SELECT idAlumno FROM alumno WHERE nif = ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nif);

    if ($stmt->execute()) {
        // Si se ha podido eliminar las filas de la tabla 'matricula', procedemos a eliminar el alumno
        $sql = "DELETE FROM alumno WHERE nif = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nif);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Alumno eliminado correctamente.";
            } else {
                echo "Alumno no encontrado.";
            }
        } else {
            echo "Error: " . $stmt->error;
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

