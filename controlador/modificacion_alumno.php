<?php
include '../conexion.php';

if (isset($_POST['nif'])) {
    $nif = $_POST['nif'];
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
    $apellido1 = isset($_POST['apellido1']) ? $_POST['apellido1'] : null;
    $apellido2 = isset($_POST['apellido2']) ? $_POST['apellido2'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;

    $sql = "UPDATE alumno SET ";
    $params = array();
    $types = "";

    if ($nombre !== "") {
        $sql .= "nombre = ?, ";
        $params[] = $nombre;
        $types .= "s";
    }

    if ($apellido1 !== "") {
        $sql .= "apellido1 = ?, ";
        $params[] = $apellido1;
        $types .= "s";
    }

    if ($apellido2 !== "") {
        $sql .= "apellido2 = ?, ";
        $params[] = $apellido2;
        $types .= "s";
    }

    if ($email !== "") {
        $sql .= "email = ?, ";
        $params[] = $email;
        $types .= "s";
    }

    // Eliminar la última coma y espacio
    $sql = rtrim($sql, ", ");

    $sql .= " WHERE nif = ?";
    $params[] = $nif;
    $types .= "s";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "Alumno modificado correctamente.";
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
