<!DOCTYPE html>
<html>
<head>
    <title>Buscar Profesor</title>
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
            margin-bottom: 10px;
            color: #007bff; /* Color de las etiquetas */
        }

        input[type="text"] {
            background-color: #444; /* Color de fondo del campo de texto */
            color: #fff; /* Color del texto del campo de texto */
            border-color: #007bff; /* Color del borde del campo de texto */
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
    <h2>Buscar Profesor</h2>
    <form action="mostrar_profesor.php" method="post">
        <div class="form-group">
            <label for="nif">NIF:</label>
            <input type="text" class="form-control" id="nif" name="nif">
        </div>
        <input type="submit" class="btn btn-primary" value="Buscar">
    </form>
</div>

</body>
</html>
