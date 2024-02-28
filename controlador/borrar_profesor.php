<?php
include 'conexion.php';

if (isset($_POST['nif'])) {
    $nif = $_POST['nif'];

    $sql = "UPDATE asignatura SET coordinador = NULL WHERE coordinador = (SELECT idProfesor FROM profesor WHERE nif = ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nif);

if ($stmt->execute()) {
    // intentamos eliminar las filas de la tabla 'impartir' que hacen referencia al profesor
    $sql = "DELETE FROM impartir WHERE idProfesor = (SELECT idProfesor FROM profesor WHERE nif = ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nif);

        if ($stmt->execute()) {
            // Si se ha podido eliminar las filas de las tablas 'impartir' y 'asignatura', procedemos a eliminar el profesor
            $sql = "DELETE FROM profesor WHERE nif = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $nif);

            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    echo "Profesor eliminado correctamente.";
                } else {
                    echo "Profesor no encontrado.";
                }
            } else {
                echo "Error: " . $stmt->error;
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




