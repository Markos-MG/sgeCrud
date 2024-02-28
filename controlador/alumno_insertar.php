<?php
include '../conexion.php';

$nif = $_POST['nif'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];

// Generar un ID único basado en la fecha actual y el NIF
$id = "AL" . $nif;

$sql = "INSERT INTO alumno (idAlumno, NIF, nombre, apellido1, apellido2, email) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $id, $nif, $nombre, $apellido1, $apellido2, $email);

if ($stmt->execute()) {
    echo "Alumno agregado correctamente.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
