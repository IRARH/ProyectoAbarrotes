<?php
require_once './conexion.php';

if($query = mysqli_query(conexion(), "TRUNCATE TABLE ventas")){
    header("Location: ../Formularios/menu_notas_registrar_nota.php?mensaje=cancelado");
}

