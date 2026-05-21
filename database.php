<?php

$host = "localhost";
$usuario = "root";
$password = "";
$bd = "portfolio_web";

$conn = mysqli_connect(
    $host,
    $usuario,
    $password,
    $bd
);

if(!$conn){
    die("Error de conexión: " . mysqli_connect_error());
}

?>