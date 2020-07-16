<?php
require_once 'conexion.php';

function query(){
    //traer la conexion
    $conexion =  conexion();

    //consulta para obtener datos
    $query = "SELECT * FROM productos ORDER BY fecha ASC";
    $resultado = mysqli_query($conexion, $query);
    
    if(mysqli_num_rows($resultado) > 0){
        return $resultado;
    }else{
        return false;
    } 
    
    
}
