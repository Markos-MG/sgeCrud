<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Profesores</title>
    <!-- Incluir Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container mt-5">
        <h2>Listado de Profesores</h2>
        <?php
        include '../conexion.php';

        $sql = "SELECT nif, nombre, apellido1, apellido2, email FROM profesor";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table'><thead class='thead-dark'><tr><th>NIF</th><th>Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Email</th></tr></thead><tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["nif"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido1"]."</td><td>".$row["apellido2"]."</td><td>".$row["email"]."</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "0 resultados";
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
