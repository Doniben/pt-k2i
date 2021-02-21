<?php
    if(isset($_POST['insertar'])){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];

        $insert = "INSERT INTO usuarios(nombre, telefono, email) VALUES('$nombre', '$telefono', '$email');";
        $execute = mysqli_query($con, $insert);

        if($execute){
            echo "<h3>Usuario Creado</h3>";
        }else{
            echo "<p>El usuario no se pudo crear</p>";
        }
    }
?>

