<?php
/*require_once 'conexion.php';
$codigo = "";
$busqueda="";
$codigo = $_POST['codigo'];
if(isset($_POST['codigo'])){
 
    $busqueda = mysqli_query(conexion(), "SELECT codigo_barras, proveedor, nombre_producto,costo_compra,costo_venta from productos where codigo_barras=$codigo");
    if (mysqli_num_rows($busqueda) > 0) {
        return $busqueda;
    } else {
        return false;
    }
}
