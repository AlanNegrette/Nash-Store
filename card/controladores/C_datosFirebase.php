<?php
    require_once("../modelos/M_conexion.php");
    require("../JS/JS_login.php");
        $data= json_decode(file_get_contents("https://login-nash-store-default-rtdb.firebaseio.com/users.json"),true);
        foreach ($data as $i){
            $id=$i['id'];
            $email= $i['email'];
            $nombre= $i['username'];
            $query = mysqli_query($conexion, "INSERT IGNORE usuarios SET id='$id', nombre='$nombre', email='$email'"); 
        }
    //header('Location: ../V_paginaPrincipal.php');
?>

