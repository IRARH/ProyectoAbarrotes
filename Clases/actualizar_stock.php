<?php
require_once 'conexion.php';
$mensaje = "";
if($_POST){

    $codigo = $_POST['codigo_barras'];
    $nombre_producto = $_POST['nombre'];
    $cantidad_piezas = $_POST['cantidad_piezas'];
    $piezas_caja = $_POST['piezas_caja'];
    $cantidad_cajas = (float)($cantidad_piezas / $piezas_caja);
    $fechaActualizada = date("Y") . "/" . date("m") . "/" . date("d");

    $busqueda = mysqli_query(conexion(), "SELECT * FROM productos WHERE codigo_barras = '$codigo'");

    if($busqueda){

        while($datos = mysqli_fetch_array($busqueda)){
            $totalVenta = $datos['costo_venta'];
            $totalCompra = $datos['costo_compra'];
        }
        
        $totalVentaActualizada = (float)($cantidad_piezas * $totalVenta);
        $totalCompraActualizada = (float)($cantidad_piezas * $totalCompra);

        $query = "UPDATE productos SET nombre_producto = '$nombre_producto', cantidad_piezas = '$cantidad_piezas', " 
        .""."piezas_caja = '$piezas_caja', cantidad_cajas = '$cantidad_cajas', total_precio_venta = '$totalVentaActualizada', total_precio_compra = '$totalCompraActualizada', fecha = '$fechaActualizada' WHERE codigo_barras = '$codigo'"; 

        if(mysqli_query(conexion(), $query)){
            $mensaje = "exitoso";
            header("Location:../Formularios/menu_actualizar_producto.php?mensaje=$mensaje");
        }else{
            $mensaje = "error";
            header("Location:../Formularios/menu_actualizar_producto.php?mensaje=$mensaje");
        }
    }
}


    



