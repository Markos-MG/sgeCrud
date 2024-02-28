<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Alumnos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        a {
            display: block;
            margin-bottom: 10px;
            color: #007bff; /* Color de los enlaces */
        }

        a:hover {
            color: #0056b3; /* Color de los enlaces al pasar el ratón */
        }

        .btn-primary, .btn-secondary {
            background-color: #007bff; /* Color de fondo de los botones */
            border-color: #007bff; /* Color del borde de los botones */
            color: #fff; /* Color del texto de los botones */
        }

        .btn-primary:hover, .btn-secondary:hover {
            background-color: #0056b3; /* Color de fondo de los botones al pasar el ratón */
            border-color: #0056b3; /* Color del borde de los botones al pasar el ratón */
        }

        .mt-3 {
            margin-top: 1rem; /* Espacio superior */
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="mt-4">Gestión de Alumnos</h1>
    <a href="alumno_crear.php" class="btn btn-primary">Añadir Alumno</a>
    <a href="buscar_alumno.php" class="btn btn-primary">Buscar Alumno</a>
    <a href="modificar_alumno.php" class="btn btn-primary">Modificar Alumno</a>
    <a href="eliminar_alumno.php" class="btn btn-primary">Borrar Alumno</a>
    <a href="mostrar_todos_alumnos.php" class="btn btn-primary">Mostrar Todos los Alumnos</a>
    <a href="index.php" class="btn btn-secondary mt-3">Volver a Inicio</a>
</div>
</body>
</html>

