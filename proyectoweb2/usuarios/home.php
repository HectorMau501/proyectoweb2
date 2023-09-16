<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuarios</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
body {
background-color: #212121; /* Fondo negro similar al tema oscuro */
color: #fff; /* Texto blanco */
}

/* Estilos para las tablas */
table.table {
    background-color: #333; /* Fondo gris oscuro para la tabla */
    color: #fff; /* Texto blanco para la tabla */
}

/* Estilos para los botones */
.btn-primary, .btn-warning, .btn-danger {
    color: #fff; /* Texto blanco para los botones */
    background-color: #ffc107; /* Fondo amarillo */
    border-color: #ffc107; /* Borde amarillo */
}

.btn-primary:hover, .btn-warning:hover, .btn-danger:hover {
    background-color: #ffad00; /* Cambio de color al pasar el mouse */
    border-color: #ffad00; /* Cambio de color del borde al pasar el mouse */
}

    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">CRUD de Usuarios</h1>

        <!-- Formulario para agregar usuario -->
        <h2 class="mb-3">Agregar Usuario</h2>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>

        <!-- Tabla para mostrar usuarios -->
        <h2 class="mt-4">Lista de Usuarios</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Usuario 1</td>
                    <td>usuario1@example.com</td>
                    <td>
                        <button class="btn btn-warning">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Usuario 2</td>
                    <td>usuario2@example.com</td>
                    <td>
                        <button class="btn btn-warning">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
