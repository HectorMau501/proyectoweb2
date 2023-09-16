<?php session_start(); ?>
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
        .btn-primary:hover, .btn-warning:hover, .btn-danger:hover {
            background-color: #ffad00; /* Cambio de color al pasar el mouse */
            border-color: #ffad00; /* Cambio de color del borde al pasar el mouse */
        }
    </style>
</head>
<body>
    <?php
        // Validamos que exista una sesión activa por el usuario 
        if (!isset($_SESSION["SessionUser"])) {
            echo "<script>window.location='../index.html';</script>";
        }
    ?>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <a class="text-white ml-auto"><b><?php echo $_SESSION["SessionUser"]; ?></b></a>
        </div>
        <h1 class="mb-4">CRUD de Usuarios</h1>
        <!-- Formulario para agregar usuario -->
        <!-- Formulario para agregar usuario -->
        <h2 class="mb-3">Agregar Usuario</h2>
        <form method="POST" action="operacionesUrs.php">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="ID" id="id" value="<?php echo isset($id) ? $id : ''; ?>" name="id_usuario" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" id="correo" name="correo" value="<?php echo isset($correo) ? $correo : ''; ?>" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" id="contrasena" name="contrasena" value="<?php echo isset($contrasena_md5) ? $contrasena_md5 : ''; ?>"required>
            </div>
            <button type="submit" class="btn btn-primary" name="agregar">Agregar</button>
        </form>

        <!-- Tabla para mostrar usuarios -->
        <h2 class="mt-4">Lista de Usuarios</h2>
        <table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Realiza una consulta a la base de datos para obtener los usuarios
        include '../php/conexionBD.php'; // Incluye el archivo de conexión a la BD
        $conect = conexion_BD(); // Establece la conexión

        $query = "SELECT * FROM usuarios"; // Consulta SQL para obtener todos los usuarios
        $result = mysqli_query($conect, $query);

        if ($result) {
            // Recorre los registros y muestra cada uno en una fila de la tabla
            while ($row = mysqli_fetch_assoc($result)) {
                // echo '<tr>';
                // echo '<td>' . $row['id_usuario'] . '</td>';
                // echo '<td>' . $row['correo'] . '</td>';
                // echo '<td>' . $row['contrasena'] . '</td>';
                // echo '<td>';
                ?>
                <!-- Dentro del bucle que muestra las filas de la tabla -->
                <!-- Dentro del bucle que muestra las filas de la tabla -->
<!-- Dentro del bucle que muestra las filas de la tabla -->
<!-- Dentro del bucle que muestra las filas de la tabla -->
                <tr>
                    <td><?= $row['id_usuario'] ?></td>
                    <td>
                        <form method="POST" action="operacionesUrs.php">
                            <input type="hidden" name="id_usuario" value="<?= $row['id_usuario'] ?>">
                            <input type="text" name="correo_editar" value="<?= $row['correo'] ?>">
                    </td>
                    <td><input type="text" name="contrasena_editar" value="<?= $row['contrasena'] ?>"></td>
                    <td>
                        <button class="btn btn-warning" name="editar" type="submit">Editar</button>
                        <button class="btn btn-danger" name="cancelar" type="submit">Cancelar</button>
                        </form>
                    </td>
                </tr>

                <form>
                <?php
                echo '</td>';
                echo '</tr>';
            }
        } else {
            echo 'Error al consultar la base de datos.';
        }
        ?>
    </tbody>
</table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>

</script>
</body>
</html>
