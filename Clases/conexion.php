<?php

function conexion(){
    $server = "localhost:3306";
    $usuario = "admin";
    $password = "admin.1234";
    $dataBase = "abarrotes";
    
    $conexion = mysqli_connect($server, $usuario, $password, $dataBase);

    //confirmar conexión exitosa
    if(mysqli_connect_errno()){
        echo "La conexión a la base de datos ha fallado. Error: " .mysqli_connect_error();
    }else{
        echo "";
    }

    //consulta para confimar codificación de caracteres
    mysqli_query($conexion, "SET NAMES 'utf8'");
    return $conexion;
}
    
    

