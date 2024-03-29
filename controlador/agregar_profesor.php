<?php
include '../conexion.php';

$nombre = $_POST['nombre'];
$nif = $_POST['nif'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];

// Generar un ID único basado en la fecha actual y el NIF
$id = "PR" . $nif;

$sql = "INSERT INTO profesor (idProfesor, NIF, nombre, apellido1, apellido2, email) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $id, $nif, $nombre, $apellido1, $apellido2, $email);

if ($stmt->execute()) {
    echo "Profesor agregado correctamente.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
