<?php

include '../php/conexionBD.php'; // Accedemos al archivo de la función para la conexión a la BD

$conect = conexion_BD(); // Invocamos a la función para realizar la conexión

$id = $_POST['id_usuario'];
$correo = $_POST['correo'];
$contrasena_md5 = md5($_POST['contrasena']);


if(isset($_POST['id_usuario'])){
    $id = $_POST['id_usuario'];
}

var_dump($_POST);

//Esto es para que en el boton dependiendo del name que tenga pues al momento
//de oprimirlo pues haga dicha accion.

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['agregar'])){

$sql = mysqli_query($conect, "INSERT INTO usuarios (id_usuario,correo,contrasena,nivel,activo) 
values (0,'$correo', '$contrasena_md5','2','1')");


    if($sql){
        header("location: ../admin/index.php ");
    }
    else{
        echo " Usuario no agregado";
    }

}

// ... Tu código PHP anterior ...

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['editar'])) {
        $id = $_POST['id_usuario'];
        $correo_editar = $_POST['correo_editar'];
        $contrasena_editar = md5($_POST['contrasena_editar']);

        $sql_modificar = "UPDATE usuarios SET correo = '$correo_editar', contrasena = '$contrasena_editar' WHERE id_usuario = $id";

        if (mysqli_query($conect, $sql_modificar)) {
            header('location: ../admin/index.php');
        } else {
            echo "No se pudo editar";
            echo "Error " . $sql_modificar . "<br>" . mysqli_error($conect);
        }
    } elseif (isset($_POST['cancelar'])) {
        // Puedes agregar código para manejar la cancelación aquí si es necesario
        header('location: ../admin/index.php');
    }
}


// ... Tu código PHP posterior ...


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminar'])) {
    // Asegúrate de que $id se establece correctamente

    // Verifica si $id tiene un valor válido
    if (!empty($id)) {
        $sql_eliminar = "DELETE FROM usuarios WHERE id_usuario = $id";

        if (mysqli_query($conect, $sql_eliminar)) {
            // Redirecciona a la página correcta después de la eliminación exitosa
            header('location: ../admin/index.php');
        } else {
            // Muestra el mensaje de error de MySQL
            echo "Error al eliminar usuario: " . mysqli_error($conect);
        }
    } else {
        echo "ID de usuario no válido.";
    }
}

