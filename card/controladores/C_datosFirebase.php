<?php

    require_once("../modelos/M_conexion.php");

    $data= json_decode(file_get_contents("https://login-875cd-default-rtdb.firebaseio.com/users.json"),true);
    foreach ($data as $i){
        $email= $i['email'];
        $nombre= $i['username'];
        $query = mysqli_query($conexion, "INSERT INTO usuarios(nombre, email) VALUES ('$nombre', '$email')"); 
    }
?>
