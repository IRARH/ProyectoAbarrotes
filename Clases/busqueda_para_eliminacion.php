<?php
require_once 'conexion.php';
$mensaje = "";
$codigo = "";

$codigo = $_POST['codigo'];
if ($codigo != "") {
    $busqueda = mysqli_query(conexion(), "SELECT codigo_barras, proveedor, nombre_producto, costo_compra, costo_venta,piezas_caja from productos where codigo_barras='$codigo'");
    if (mysqli_num_rows($busqueda) > 0) {
      
    }else{
        $mensaje = "sin datos";
        header("Location:../Formularios/menu_eliminar.php?mensaje=$mensaje");
}

}