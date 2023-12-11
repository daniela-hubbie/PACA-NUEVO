<?php 
    $conexion = new mysqli('localhost','root','','paca');
    if($conexion-> connect_error){
        die('No se pudo conectar al servidor');
    }
?>