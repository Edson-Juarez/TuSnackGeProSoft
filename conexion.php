<?php
$servidor = "localhost";
$usuario = "root";
$password = "1234";
$db = "productos";

$conexion = mysqli_connect($servidor, $usuario, $password, $db) or die ("error");

if($conexion){
    echo "";
}else{
    echo "mal";
}
?>