<?php
require_once 'conexion.php';
$codigo = "";

$codigo = $_POST['codigo'];

if ($codigo != "") {
    $busqueda = mysqli_query(conexion(), "SELECT codigo_barras, proveedor, nombre_producto from productos where codigo_barras='$codigo'");
    if(mysqli_num_rows($busqueda) > 0){
        return $busqueda;
    }else{
        return false;
    } 
}
   



