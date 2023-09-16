<?php

function conexion_BD(){
    $server = "localhost";
    $user = "root";
    $passw = "";
    $bd = "computadoras";

 

    $conexion = mysqli_connect($server,$user,$passw,$bd)
    OR die("Error, no se puede hacer la conexion");

    return $conexion;
}

?>