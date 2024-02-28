<!DOCTYPE html>
<html>
<head>
    <title>Agregar Alumno</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Agregar Alumno</h2>
        <form action="alumno_insertar.php" method="post">
            <div class="form-group">
                <label for="nif">Nif:</label>
                <input type="text" class="form-control" id="nif" name="nif" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido1" name="apellido1" required>
            </div>
            <div class="form-group">
                <label for="apellido2">Segundo apellido:</label>
                <input type="text" class="form-control" id="apellido2" name="apellido2" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</body>
</html>
