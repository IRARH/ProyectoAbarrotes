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
    $cantidad_piezas = $_POST['cantidad_piezas'];

    //consulta para verificar que el producto no exista ya en la base 
    $consulta_existencia = mysqli_query($conexion, "SELECT codigo_barras FROM productos WHERE codigo_barras = '$codigo'");
    
    //verificar si se realizó correctamente la consulta 
    if($consulta_existencia){

        //si existen datos mandar mensaje de error y si no, dar de alta el producto
        if(mysqli_num_rows($consulta_existencia) == 0){

            //consulta para obtener id del usuario que inició la sesión
            $queryId = mysqli_query($conexion, "SELECT id_user FROM usuarios WHERE user = '$sesion'");

            if(mysqli_num_rows($queryId) > 0){
                while($id = mysqli_fetch_assoc($queryId)){
                    $id_user = $id['id_user'];
                }
                
                $cantidad_cajas = (float)($cantidad_piezas / $piezas_caja);
                $total_compra = (float)($costo_compra * $cantidad_piezas);
                $total_venta = (float)($costo_venta * $cantidad_piezas);

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
        }else{
            $exito = 'existente';
            header("Location:../Formularios/menu_registro_producto.php?mensaje=$exito");
        }
    } 


    
    
}