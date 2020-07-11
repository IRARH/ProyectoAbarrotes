<?php

$conexion = mysqli_connect('localhost','root','admin.1234','abarrotes');

//conexión correcta
if(mysqli_connect_errno()){
    echo "La conexión a la base de datos ha fallado. Error: " .mysqli_connect_error();
}else{
    echo "Conexión realizada correctamente";
}

//consulta para codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");


session_start();

