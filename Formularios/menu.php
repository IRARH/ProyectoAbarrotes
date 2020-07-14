<!DOCTYPE html>
<html lang="es">
<head>
    <title>Menú Principal</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu.css" />
    <script src="../js/jquery.min.js"></script> <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
</head>
<body>

    <?php require_once 'barraLateral.php'; ?>
    
    <div id="palabras">
        <section id="principal_notas">
            <header id="encabezado">
                <h2>Almacén Estrella</h2>
            </header>
            <div id="formulario">
                <form action="#" method="POST">
                    <div id="div1">
                        <table>
                            <tr>
                                <td class="color">Codigo de Barras</td>
                                <td class="color">Proveedor</td>
                                <td class="color">Nombre de Producto</td>
                                <td class="color">Costo compra</td>
                                <td class="color">Costo venta</td>
                                <td class="color">Cantidad piezas</td>
                                <td class="color">Total venta</td>
                                <td class="color">Fecha</td>
                                <td class="color">Usuario</td>
                            </tr>
                            <?php  
                                require_once '../Clases/obtenerDatos.php';

                                //traer la consulta de los datos
                                $query = query();
                                $total_venta = 0;
                                //verificar si hay datos en la base
                                if($query){
            
                                    //recorrer el query e imprimir los datos
                                    while($datos = mysqli_fetch_array($query)){
                                        //consulta para obtener quien da de alta el producto
                                        $obtener_usuario = mysqli_query(conexion(), "SELECT DISTINCT user from usuarios s INNER JOIN productos p on s.id_user = p.id_user WHERE p.id_user = '$datos[id_user]'");
                                        //variable que obtiene el arreglo con el query solicitado
                                        $dato_usuario = mysqli_fetch_assoc($obtener_usuario);
                            ?>


                            <tr>
                                <td><?php echo $datos['codigo_barras'] ?></td>
                                <td><?php echo $datos['proveedor'] ?></td>
                                <td><?php echo $datos['nombre_producto'] ?></td>
                                <td><?php echo $datos['costo_compra'] ?></td>
                                <td><?php echo $datos['costo_venta'] ?></td>
                                <td><?php echo $datos['cantidad_piezas'] ?></td>
                                <td><?php echo $datos['total_precio_venta'] ?></td>
                                <td><?php echo $datos['fecha'] ?></td>
                                <td><?php echo $dato_usuario['user'] ?></td>
                            </tr>
                            <?php $total_venta += $datos['total_precio_venta'];
                                    }
                                }else{
                                    echo "Sin datos en existencia";
                                } 
                                ?>
                        </table>
                        
                    </div>
                    <label class="label1">Total en Almacén</label>
                    <input type="text" name="total" id="total" value="$ <?= $total_venta ?>"/>
                </form>
            </div>
        </section>
        <footer>
	        Abarrotes Estrella &copy;

	        <a href="#" class="subir">Ir arriba</a>
        </footer>
    </div>
</body>
</html>