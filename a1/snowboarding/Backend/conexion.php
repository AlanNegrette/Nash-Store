<?php 

$host="localhost";
$bd="sitio";
$usuario="root";
$password="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$password);
    if ($conexion) {echo "Conectado al sistema";}
    
} catch (Excepcion $ex) {
    echo $ex->getMessage();
}

?>