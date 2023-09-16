<?php

function desconectar_BD($conexion){
    $close = mysqli_close($conexion) or 
    die ("Error, no se pudo desconectar");

    return $close;
}

?>