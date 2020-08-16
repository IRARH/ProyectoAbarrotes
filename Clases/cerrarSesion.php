<?php
session_start();
require_once 'conexion.php';

if(isset($_SESSION['usuario'])){
    session_destroy();
    
    mysqli_query(conexion(), "TRUNCATE TABLE ventas");
}

header("Location:../Formularios/index.php");