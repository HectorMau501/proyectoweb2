<?php
//Cerramos las sessiones activas en el sistema
session_start();
session_unset();
session_destroy();

//Se direcciona a la pagina principal.
echo "<script>window.location='../index.php';</script>";


?>