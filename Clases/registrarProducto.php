<?php

require_once 'conexion.php';
require_once '../Formularios/barraLateral.php';

$conexion = conexion();

if(isset($_POST)){

    $sesion = $_SESSION['usuario']['user'];
    $fecha = date("Y") . "/" . date("m") . "/" . date("d");
    $codigo = $_POST['codigo'];
    $proveedor = $_POST['proveedor'];
    $producto = $_POST['producto'];
    $costo_compra =  $_POST['costo_compra'];
    $costo_venta = $_POST['costo_venta'];
    $piezas_caja = $_POST['piezas_caja'];
    $cantidad_cajas = $_POST['cantidad_cajas'];
    
    //consulta para obtener id del usuario que de la sesión
    $queryId = mysqli_query($conexion, "SELECT id_user FROM usuarios WHERE user = '$sesion'");
    if(mysqli_num_rows($queryId) > 0){
        while($id = mysqli_fetch_assoc($queryId)){
            $id_user = $id['id_user'];
        }

        $cantidad_piezas = ($cantidad_cajas * $piezas_caja);
        $total_compra = ($costo_compra * $cantidad_piezas);
        $total_venta = ($costo_venta * $cantidad_piezas);

        //inserción a la tabla usuarios
        $consulta = "INSERT INTO productos VALUES ('$codigo', '$proveedor', '$producto', '$costo_compra', $costo_venta, $cantidad_piezas, $piezas_caja, $cantidad_cajas, $total_venta, $total_compra, '$fecha', $id_user)";

        if(mysqli_query($conexion, $consulta)){
            $exito = 'exitoso';
            header("Location:../Formularios/menu_registro_producto.php?mensaje=$exito");
        }else{
            $exito = 'error';
            header("Location:../Formularios/menu_registro_producto.php?mensaje=$exito");
        }
    }
}