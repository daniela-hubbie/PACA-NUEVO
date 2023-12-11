<?php 
    $conexion = new mysqli('localhost','root','','tienda');
    if($conexion-> connect_error){
        die('No se pudo conectar al servidor');
    }
?>
