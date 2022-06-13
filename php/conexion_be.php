<?php

    $conexion = mysqli_connect("localhost", "root", "", "login_register_db");

    if($conexion){
        echo "conectado exitosamente a la bd";

    }else{
        echo "no se conecta a la bd";
    }

?>