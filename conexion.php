<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "inventario_fares";

$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

if(!$conexion){
    die("Error de conexion");
}

?>