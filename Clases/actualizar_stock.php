<?php
require_once 'conexion.php';
$mensaje = "";
if($_POST){

    $codigo = $_POST['codigo_barras'];
    $nombre_producto = $_POST['nombre'];
    $cantidad_piezas = $_POST['cantidad_piezas'];
    $piezas_caja = $_POST['piezas_caja'];
    $cantidad_cajas = (float)($cantidad_piezas / $piezas_caja);

    echo $codigo."<br/>";
    echo $nombre_producto."<br/>";
    echo $cantidad_piezas."<br/>";
    echo $piezas_caja."<br/>";
    echo $cantidad_cajas."<br/>";

    $query = "UPDATE productos SET nombre_producto = '$nombre_producto', cantidad_piezas = '$cantidad_piezas', " 
    .""."piezas_caja = '$piezas_caja', cantidad_cajas = '$cantidad_cajas' WHERE codigo_barras = '$codigo'"; 

    if(mysqli_query(conexion(), $query)){
        $mensaje = "exitoso";
        header("Location:../Formularios/menu_actualizar_producto.php?mensaje=$mensaje");
    }else{
        $mensaje = "error";
        header("Location:../Formularios/menu_actualizar_producto.php?mensaje=$mensaje");
    }
}


    



