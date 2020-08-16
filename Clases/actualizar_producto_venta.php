<?php
require_once 'conexion.php';


if (isset($_POST)) {
    $codigo_barras = $_POST['codigo_barras'];
    $cantidad_retiro = $_POST['cantidadRetiro'];
    $precio_venta = $_POST['costo_venta'];
    $subtotal = (float)($precio_venta * $cantidad_retiro);

    $update = "UPDATE ventas SET cantidad_retiro='$cantidad_retiro', subtotal='$subtotal' WHERE codigo_barras='$codigo_barras'";
    if(mysqli_query(conexion(), $update)) {
        header("Location:../Formularios/menu_notas_registrar_nota.php?mensaje=actualizacionCorrecta");
    }else{
        header("Location:../Formularios/menu_notas_registrar_nota.php?mensaje=actuaizacionFallida");
    }
}