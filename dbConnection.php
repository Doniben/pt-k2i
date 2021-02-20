<?php
    $serverName = 'localhost';
    $connection = array("Database" => "prueba",
                        "UID" => "candidato",
                        "PWD" => "Candidato1!",
                        "CharacterSet" => "UTF-8");
    
    $con = mysqli_connect($serverName, $connection);
    if($con){
        echo "Base de datos conectada";
    } else{
        echo "Fallo en la conexión de la base de datos";
    }
?>