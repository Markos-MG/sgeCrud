<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Alumno</title>
    <!-- Incluir Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Buscar Alumno</h2>
        <?php
        include '../conexion.php';

        if (isset($_POST['nif'])) {
            $nif = $_POST['nif'];

            $sql = "SELECT nif, nombre, apellido1, apellido2, email FROM alumno WHERE nif = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $nif);

            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    echo "<table class='table'><thead class='thead-dark'><tr><th>NIF</th><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Email</th></tr></thead><tbody>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>".$row["nif"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido1"]."</td><td>".$row["apellido2"]."</td><td>".$row["email"]."</td></tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "<div class='alert alert-warning' role='alert'>Alumno no encontrado.</div>";
                }
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error: " . $stmt->error . "</div>";
            }

            $stmt->close();
        } else {
            echo "<div class='alert alert-danger' role='alert'>Error: No se proporcionó un NIF.</div>";
        }

        $conn->close();
        ?>
    </div>
    <!-- Opcional: incluir jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
