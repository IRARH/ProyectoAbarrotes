<?php
require_once 'conexion.php';
$destinatario = ""; $codigo = ""; $nombre = ""; $retiro = ""; $venta = ""; $fecha = ""; $subtotal = "";
$cantidad_retiro = "";
$cantidad_stock = "";
$codigo_barras = "";
$resultanteStock = "";
$piezas_caja = "";
$resultante_cajas = "";
$precioVenta = "";
$precioCompra = "";
$resultanteTotalVenta = "";
$resultanteTotalCompra = "";
$queryDatos;

$query = "select v.codigo_barras, p.nombre_producto, v.destinatario, v.cantidad_retiro, v.precio_venta, v.fecha, v.subtotal from ventas v 
INNER JOIN productos p ON p.codigo_barras = v.codigo_barras";

$queryVenta = mysqli_query(conexion(), $query);
if(mysqli_num_rows($queryVenta) > 0){

    while($datosVenta = mysqli_fetch_assoc($queryVenta)){

        $destinatario = $datosVenta['destinatario'];
        $codigo = $datosVenta['codigo_barras'];
        $nombre = $datosVenta['nombre_producto'];  
        $retiro = $datosVenta['cantidad_retiro'];
        $venta = $datosVenta['precio_venta'];
        $fecha = $datosVenta['fecha'];
        $subtotal = $datosVenta['subtotal'];

        mysqli_query(conexion(), "INSERT INTO ".$destinatario." VALUES (null, '$codigo', '$nombre', '$retiro', '$venta', '$fecha', '$subtotal')");

        $codigo_barras = $datosVenta['codigo_barras'];
        $cantidad_retiro = $datosVenta['cantidad_retiro'];

        $queryDatos = mysqli_query(conexion(),"SELECT * FROM productos WHERE codigo_barras=$codigo_barras");

        while($datosProducto = mysqli_fetch_assoc($queryDatos)){
            $precioCompra = $datosProducto['costo_compra'];
            $precioVenta = $datosProducto['costo_venta'];
            $piezas_caja = $datosProducto['piezas_caja'];
            $cantidad_stock = $datosProducto['cantidad_piezas'];
            $resultanteStock = ($cantidad_stock - $cantidad_retiro);
            $resultante_cajas = (float)($resultanteStock / $piezas_caja);
            $resultanteTotalVenta = (float)($resultanteStock * $precioVenta);
            $resultanteTotalCompra = (float)($resultanteStock * $precioCompra);

            mysqli_query(conexion(), "UPDATE productos SET cantidad_piezas=$resultanteStock, cantidad_cajas=$resultante_cajas, total_precio_venta=$resultanteTotalVenta, total_precio_compra=$resultanteTotalCompra WHERE codigo_barras=$codigo_barras");
        }
        $precioCompra = "";
        $precioVenta = "";
        $piezas_caja = "";
        $cantidad_stock = "";
        $resultanteStock = "";
        $resultante_cajas ="";
        $resultanteTotalVenta = "";
        $resultanteTotalCompra = "";
        $codigo_barras = "";
        $cantidad_retiro = "";   
        $destinatario = ""; $codigo = ""; $nombre = ""; $retiro = ""; $venta = ""; $fecha = ""; $subtotal = "";  
    }
    mysqli_query(conexion(), "TRUNCATE TABLE ventas");
    header('Location:../Formularios/menu_notas_registrar_nota.php?mensaje=notaGenerada');

}else if(mysqli_num_rows($queryVenta) == 0){
    header('Location:../Formularios/menu_notas_registrar_nota.php?mensaje=sinDatos');
}
