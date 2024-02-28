<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Profesores o Alumnos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343a40; /* Fondo oscuro */
            color: #fff; /* Color de texto principal */
            padding: 20px;
            font-family: Arial, sans-serif; /* Fuente del texto */
        }

        h1 {
            margin-bottom: 20px;
            color: #007bff; /* Color del título */
        }

        input[type="submit"] {
            background-color: #007bff; /* Color de fondo del botón */
            border-color: #007bff; /* Color del borde del botón */
            color: #fff; /* Color del texto del botón */
            margin-right: 10px; /* Margen derecho para separar los botones */
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Color de fondo del botón al pasar el ratón */
            border-color: #0056b3; /* Color del borde del botón al pasar el ratón */
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Gestión de Profesores o Alumnos</h1>
    <form action="#" method="post">
        <input type="submit" name="profesores" value="Gestionar Profesores" formaction="profesores_html.php" class="btn btn-primary">
        <input type="submit" name="alumnos" value="Gestionar Alumnos" formaction="alumnos_html.php" class="btn btn-primary">
    </form>
</div>
</body>
</html>
