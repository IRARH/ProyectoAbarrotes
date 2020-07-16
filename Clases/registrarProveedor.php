<?php

require_once 'conexion.php';
$conexion = conexion();
$exito = "";

if($_POST){
    $proveedor = $_POST['proveedor'];

    //consulta para verificar que el proveedor no exista en la base
    $consuta_existencia = mysqli_query($conexion, "SELECT nombre FROM proveedores WHERE nombre = '$proveedor'");

    //verificar que se haga correctamente la consulta
    if($consuta_existencia){

        //verificar que no existan datos después de ejecutar la consulta
        if(mysqli_num_rows($consuta_existencia) == 0){

            if(mysqli_query($conexion, "INSERT INTO proveedores VALUES(null, '$proveedor')")){
                $exito = "exitoso";
                header("Location:../Formularios/menu_registro_proveedor.php?mensaje=$exito");
            }else{
                $exito = "error";
                header("Location:../Formularios/menu_registro_proveedor.php?mensaje=$exito");
            }
        }else{
            $exito = "existente";
                header("Location:../Formularios/menu_registro_proveedor.php?mensaje=$exito");
        }
    }
}