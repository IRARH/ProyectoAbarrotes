<?php
require_once 'conexion.php';
//Variable que se envia al realizar la consulta.
$mensaje = "";
//Comprobar si se recibe algo por GET
if ($_POST) {
    //Obetner lo que se envio por GET
    $codigo_barras = $_POST['codigo1'];
    $costo_compra =  $_POST['costo_compra'];
    $costo_venta = $_POST['costo_venta'];
    $cantidad_piezas = $_POST['cantidad_piezas'];
    
    $fecha = date("Y") . "/" . date("m") . "/" . date("d");
     
    $totalCompraActualizada = (float)($costo_compra * $cantidad_piezas);
    $totalVentaActualizada  = (float)($costo_venta * $cantidad_piezas);

    if(mysqli_query(conexion(), "UPDATE productos SET costo_compra='$costo_compra', costo_venta='$costo_venta', fecha='$fecha', total_precio_venta='$totalVentaActualizada', total_precio_compra='$totalCompraActualizada' WHERE codigo_barras='$codigo_barras'")){
      $mensaje = "exitoso";
      header("Location:../Formularios/menu_actualizar_precios.php?mensaje=$mensaje");

    }else{
        //Si es error se enviar la varible mensaje con valor error
       $mensaje = "error";
        header("Location:../Formularios/menu_actualizar_precios.php?mensaje=$mensaje");
    }

}