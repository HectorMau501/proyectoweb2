<?php
include 'conexionBD.php'; // Accedemos al archivo de la función para la conexión a la BD

$conect = conexion_BD(); // Invocamos a la función para realizar la conexión


$correo = $_POST['correo'];
$contrasena_md5 = $_POST['contrasena'];
$confirmar_contrasena = $_POST['confirmar_contrasena'];

echo $correo;
echo $contrasena_md5;
echo $confirmar_contrasena;

// Realizar la consulta para verificar si el usuario ya existe
$sql_verificar = "SELECT * FROM usuarios WHERE correo = '$correo'";
$resultado = mysqli_query($conect, $sql_verificar);

// Definir la variable $sql y asignarle false inicialmente
$sql = false;

// Verifica que las contraseñas sean iguales
if ($contrasena_md5 != $confirmar_contrasena) {
    echo "Las contraseñas no coinciden. Por favor, inténtalo nuevamente.";
} else {
    if (mysqli_num_rows($resultado) > 0) {
        echo "El usuario ya existe. Por favor, elige otro correo.";
    } else {
        $contrasena_md5 = md5($contrasena);
        $sql = mysqli_query($conect, "INSERT INTO usuarios (id_usuario ,correo, contrasena, nivel, activo) 
        VALUES (NULL,'".$_POST['correo']."', '$contrasena_md5', '2', '1')");
    }
}

if ($sql) {
    header("location:/proyectoweb2/index.html");
} else {
    echo " Usuario no agregado";
}


?>