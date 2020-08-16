<?php
require_once 'conexion.php';

if(isset($_GET['codigo'])){
    $codigo = $_GET['codigo'];

    if(mysqli_query(conexion(), "DELETE FROM ventas WHERE codigo_barras='$codigo'")){
        header("Location:../Formularios/menu_notas_registrar_nota.php?mensaje=eliminacionCorrecta");
    }else{
        header("Location:../Formularios/menu_notas_registrar_nota.php?mensaje=eliminacionFallida");
    }
}