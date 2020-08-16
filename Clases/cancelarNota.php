<?php
require_once './conexion.php';
$query = mysqli_query(conexion(), "SELECT * FROM ventas");
if(mysqli_num_rows($query) > 0){
    if($query = mysqli_query(conexion(), "TRUNCATE TABLE ventas")){
        header("Location: ../Formularios/menu_notas_registrar_nota.php?mensaje=cancelado");
    }
}else if(mysqli_num_rows($query) == 0){
    header("Location: ../Formularios/menu_notas_registrar_nota.php?mensaje=noDatos");
}


