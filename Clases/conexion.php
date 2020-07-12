<?php

$server = "localhost:3306";
$usuario = "root";
$password = "admin.1234";
$dataBase = "abarrotes";

$conexion = mysqli_connect($server, $usuario, $password, $dataBase);

//conexión correcta
if(mysqli_connect_errno()){
    echo "La conexión a la base de datos ha fallado. Error: " .mysqli_connect_error();
}else{
    echo "";
}

//consulta para codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");


