<!DOCTYPE html>
<html>
<head>
    <title>Modificar Profesor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343a40; /* Fondo oscuro */
            color: #fff; /* Color de texto principal */
            padding: 20px;
            font-family: Arial, sans-serif; /* Fuente del texto */
        }

        label {
            margin-bottom: 5px;
            color: #007bff; /* Color de las etiquetas */
        }

        input[type="text"] {
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
    <form action="../controlador/modificacion_profesor.php" method="post">
        <label for="nif">NIF del profesor a modificar:</label><br>
        <input type="text" id="nif" name="nif"><br>
        <label for="nombre">Nuevo nombre (opcional):</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="apellido1">Nuevo primer apellido (opcional):</label><br>
        <input type="text" id="apellido1" name="apellido1"><br>
        <label for="apellido2">Nuevo segundo apellido (opcional):</label><br>
        <input type="text" id="apellido2" name="apellido2"><br>
        <label for="email">Nuevo email (opcional):</label><br>
        <input type="text" id="email" name="email"><br>
        <input type="submit" class="btn btn-primary" value="Modificar profesor">
    </form>
</div>

</body>
</html>

