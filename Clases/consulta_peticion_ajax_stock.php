<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
require_once 'conexion.php';

//////////////// VALORES INICIALES ///////////////////////

$mensaje="";
$query="";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['cantidad']) && isset($_POST['codigo']))
{
    $cantidad=conexion()->real_escape_string($_POST['cantidad']);
    $codigo=conexion()->real_escape_string($_POST['codigo']);

	$query="SELECT cantidad_piezas FROM productos WHERE 
		codigo_barras = '$codigo'";

    $buscarCantidad = mysqli_query(conexion(), $query);  //conexion()->query($query);
    
    while ($filaProductos =mysqli_fetch_assoc($buscarCantidad)) {
        $diferencia = ($filaProductos['cantidad_piezas'] - $cantidad);
    }
    if($diferencia < 0){
        $mensaje = "<h5>Cantidad a retirar superior al Stock</h5>";
    }
    else if($diferencia == 0){
        $mensaje = "<h5>Stock de producto en 0 si retira la cantidad seleccionada</h5>";
    }
}

echo $mensaje;
?>