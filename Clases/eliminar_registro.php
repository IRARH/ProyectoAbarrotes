<?php
require_once 'conexion.php';
//Variable que se envia al realizar la consulta.
$mensaje = "";
//Comprobar si se recibe algo por GET
if($_GET){
    //Obetner lo que se envio por GET
    $respuesta = $_GET['res'];
    //Realizar consulta y validar si se ejecuta
    if(mysqli_query(conexion(), "DELETE from productos where codigo_barras='$respuesta'")){
        //Si la consulta es exitosa, devuelve la variabel mensaje con el valor exitoso.
        $mensaje = "exitoso";
        //Se devuelve al mismo formulario y se envia la variable mensaje por GET.
        header("Location:../Formularios/menu_eliminar.php?mensaje=$mensaje");
    }else{
        //Si es error se enviar la varible mensaje con valor error
        $mensaje = "error";
        header("Location:../Formularios/menu_eliminar.php?mensaje=$mensaje");
    }
}



    
   
