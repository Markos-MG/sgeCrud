<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Profesores</title>
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
            background-color: #007bff; /* Color de fondo del botón */
            border-color: #007bff; /* Color del borde del botón */
            color: #fff; /* Color del texto del botón */
            text-decoration: none; /* Eliminar subrayado del enlace */
            padding: 10px 20px; /* Padding interno del botón */
        }

        a:hover {
            background-color: #0056b3; /* Color de fondo del botón al pasar el ratón */
            border-color: #0056b3; /* Color del borde del botón al pasar el ratón */
        }

        .mt-3 {
            margin-top: 20px; /* Espacio superior */
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mt-4">Gestión de Profesores</h1>
    <a href="profesor_crear.php">Añadir Profesor</a>
    <a href="buscar_profesor.php">Buscar Profesor</a>
    <a href="modificar_profesor.php">Modificar Profesor</a>
    <a href="eliminar_profesor.php">Borrar Profesor</a>
    <a href="mostrar_todos_profesores.php">Mostrar Todos los Profesores</a>
    <a href="../index.php" class="btn btn-secondary mt-3">Volver a Inicio</a>
</div>

</body>
</html>
