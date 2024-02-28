<!DOCTYPE html>
<html>
<head>
    <title>Agregar Profesor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343a40; /* Fondo oscuro */
            color: #fff; /* Color de texto principal */
            padding: 20px;
            font-family: Arial, sans-serif; /* Fuente del texto */
        }

        h2 {
            margin-bottom: 20px;
            color: #007bff; /* Color del título */
        }

        label {
            margin-bottom: 5px;
            color: #007bff; /* Color de las etiquetas */
        }

        input[type="text"],
        input[type="email"] {
            background-color: #444; /* Color de fondo del campo de texto */
            color: #fff; /* Color del texto del campo de texto */
            border-color: #007bff; /* Color del borde del campo de texto */
            margin-bottom: 10px; /* Espacio inferior */
        }

        input[type="submit"] {
            background-color: #007bff; /* Color de fondo del botón */
            border-color: #007bff; /* Color del borde del botón */
            color: #fff; /* Color del texto del botón */
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Color de fondo del botón al pasar el ratón */
            border-color: #0056b3; /* Color del borde del botón al pasar el ratón */
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Agregar Profesor</h2>
    <form action="../controlador/agregar_profesor.php" method="post">
        <div class="form-group">
            <label for="nif">NIF:</label>
            <input type="text" class="form-control" id="nif" name="nif" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido1">Apellido:</label>
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
