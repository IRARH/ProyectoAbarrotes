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
    $fecha = date("Y") . "/" . date("m") . "/" . date("d");
   

  echo $codigo_barras,"         ", $costo_compra,"         ", $costo_venta, "      ", $fecha;

    if(mysqli_query(conexion(), "UPDATE productos SET costo_compra='$costo_compra', costo_venta='$costo_venta', fecha='$fecha' WHERE codigo_barras='$codigo_barras'")){
      
      $mensaje = "exitoso";
      header("Location:../Formularios/menu_actualizar_precios.php?mensaje=$mensaje");

    }else{
        //Si es error se enviar la varible mensaje con valor error
       $mensaje = "error";
        header("Location:../Formularios/menu_actualizar_precios.php?mensaje=$mensaje");
    }

}