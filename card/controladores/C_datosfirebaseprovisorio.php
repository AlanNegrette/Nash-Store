<?php
require_once("../modelos/M_conexion.php");

$url="https://login-875cd-default-rtdb.firebaseio.com/users.json";
$ch= curl_init();

$nombre="";
$email="";
$id="1";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response=curl_exec($ch);

curl_close($ch);

$data=json_decode($response, true);
foreach ($data as $key => $value) {
    $id=$id+1;
    $nombre= $data[$key]["username"];
    $email= $data[$key]["email"];
    $query = mysqli_query($conexion, "INSERT INTO usuarios(id, nombre, email) VALUES ('$id', '$nombre', '$email')");   
    if ($query) {
        echo "INSERTADO CORRECTAMENTE";
    }else{
        echo "No se inserto nada";
    }
}

?>