<script src="../js/jquery.min.js"></script>
    <!--Libreria Jquery -->
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
        $mensaje = "<h5 class='mensaje'>Cantidad a retirar superior al Stock</h5>";
        ?>
        <script>
            $(document).ready(function(){
                var boton = $('#boton');
                $('#boton').attr('disabled', true);
                $('#boton').removeClass('atributos');
            })
        </script>
    <?php
    }
    else if($diferencia == 0){
        $mensaje = "<h5 class='mensaje'>Stock de producto en 0 si retira la cantidad seleccionada</h5>";?>
        <script>
            $(document).ready(function(){
                var boton = $('#boton');
                $('#boton').attr('disabled', true);
                $('#boton').removeClass('atributos');
            })
        </script>
        <?php
    }else{?>
        <script>
            $(document).ready(function(){
                var boton = $('#boton');
                $('#boton').attr('disabled', false);
                $('#boton').addClass('atributos');
            })
        </script>
   <?php }
}

echo $mensaje;
?>