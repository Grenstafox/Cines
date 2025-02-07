<?php
    $conexion = new mysqli("localhost", "root", "", "cines");
    if($conexion){
        echo "la gestión fue exitosa !!";
    }else{
        echo "Algo salio mal";
    }
?>