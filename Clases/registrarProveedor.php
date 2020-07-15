<?php

require_once 'conexion.php';
$conexion = conexion();
$exito = "";

if($_POST){
    $proveedor = $_POST['proveedor'];

    if(mysqli_query($conexion, "INSERT INTO proveedores VALUES(null, '$proveedor')")){
        $exito = "exitoso";
        header("Location:../Formularios/menu_registro_proveedor.php?mensaje=$exito");
    }else{
        $exito = "error";
        header("Location:../Formularios/menu_registro_proveedor.php?mensaje=$exito");
    }
}