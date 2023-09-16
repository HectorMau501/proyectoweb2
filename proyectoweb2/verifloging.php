<?php
session_start();  //iniciamos la session 

//tomamos las variables del POST     //Obtenemos los POST del formulario de Login
$txtusuario = $_POST["txtusuario"];
$txtpassword = md5($_POST["txtpassword"]);

echo $txtusuario;
echo $txtpassword;

include 'php/conexionBD.php'; //accedemos al archivo de la funcion para la conexion a la BD

$conect = conexion_BD(); //invocamos a la función para realizar la conexión 


    //Generamos la cadena de la consulta para el usuario 
$sql = "SELECT * FROM usuarios where correo='$txtusuario' AND contrasena = '$txtpassword'";

$result = mysqli_query($conect, $sql);
$row = mysqli_fetch_array($result);

$row_nums = mysqli_num_rows($result); //Verificamos cuantos registros trae al consulta 

if($row_nums >= 1){
    $niv = $row["nivel"];
    $activo = $row["activo"] ;
    if($activo == 1){
        
        //Generamos la session para el usuario 
        if(!isset($_SESSION["SessionUser"])){
            
            $_SESSION["SessionUser"]=$row["correo"];
            $_SESSION["nivuS"]=$row["nivel"];
            $_SESSION["IDuS"]=$row["id"];

        }else{
            $_SESSION["SessionUser"]=$row["correo"];
            $_SESSION["nivuS"]=$row["nivel"];
            $_SESSION["IDuS"]=$row["id"];
        }
        switch($niv){   
            case 1:
                echo "<script>window.location = 'admin/index.php'; </script>";
            break;
        case 2: 
            echo "<script>window.location = 'usuarios/home.php'; </script>";
            break;    
    }
    }
    else{
        echo "<script>window.location = 'login.php?activo=El usuario no se encuentra activo.'; </script>";
    }
}else{
    echo "<script>window.location = 'login.php?error=Usuario y/o contraseña incorrectos'; </script>";
}

?>