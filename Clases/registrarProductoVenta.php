<?php
require_once 'conexion.php';

$conexion = conexion();

if (isset($_POST)) {
    $codigo_barras = $_POST['codigo_barras'];
    $destinatario = $_POST['destinatario'];
    $cantidad_retiro = $_POST['cantidadRetiro'];
    $fecha = date("Y") . "/" . date("m") . "/" . date("d");

    

            $consulta = "INSERT INTO ventas VALUES(null,'$codigo_barras', '$destinatario', '$cantidad_retiro', '$fecha')";
            if(mysqli_query($conexion, $consulta)) {
                $mensaje = 'exitoso';
                header("Location:../Formularios/menu_notas_registrar_nota.php?mensaje=$mensaje");
            }else{
                $mensaje = 'error';
                header("Location:../Formularios/menu_notas_registrar_nota.php?mensaje=$mensaje");
            }
}
