<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar Producto</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_actualizar_producto.css" />
    <script src="../js/jquery.min.js"></script><!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
    <script type="text/javascript" src="../js/busqueda.js"></script>



}
</head>

<body>
    <?php require_once 'barraLateral.php'; ?>
    
    <div id="palabras">

        <nav id="opciones">
            
            <ul>
                <li><a href="menu_actualizar_producto.php">Actualizar Stock</a></li>
				<li><a href="menu_actualizar_precios.php">Actualizar Precios</a></li>
			
            </ul>
        </nav>
        <?php 
            if(isset($_GET['mensaje'])):
                if($_GET['mensaje'] == 'exitoso'):
                    echo "<div id='mensajeExitoso'>Datos actualizados </div>";
                    header("Refresh: 2; URL=menu_actualizar_producto.php");
                endif;

                if($_GET['mensaje'] == 'error'):
                    echo "<div id='mensajeError'>Error en la actualización</div>";
                    header("Refresh: 2; URL=menu_actualizar_producto.php");
                endif;
            endif;
        ?>
        <section id="registro">
            <header id="encabezado_registro">
                <h2>Actualizar Stock </h2>
            </header>
            <div id="formulario">
                <form  action="#" method="POST">

                    <label for="codigo">Codigo de Barras</label>
                    <input type="text" name="codigo" id="codigo" required />

                    <span id="botonBuscar"><input type="submit" value="Obtener datos" /></span>
                    <br/><br/><br/><br/><br/><br/>
                </form>
                
                <?php
                if(isset($_POST['codigo'])):
                    require_once '../Clases/conexion.php';
    
                    $codigo = $_POST['codigo'];
                    $obtenerDatos = mysqli_query(conexion(), "SELECT * FROM productos WHERE codigo_barras = '$codigo'");
                    
                    if(mysqli_num_rows($obtenerDatos) > 0):
                        while($mostrar = mysqli_fetch_assoc($obtenerDatos)):
                            
                ?>

                <form action="../Clases/actualizar_stock.php" method="POST">
                    <label for="proveedor">Nombre del Proveedor</label>
                    <input type="text" name="codigo_barras" value="<?= $mostrar['codigo_barras'] ?>" readonly="readonly" required />

                    <label for="proveedor">Nombre del Proveedor</label>
                    <input type="text" name="proveedor" id="proveedor" value="<?= $mostrar['proveedor'] ?>" readonly="readonly" required />

                    <label for="nombre">Nombre del Producto</label>
                    <input type="text" name="nombre" id="nombre" value="<?= $mostrar['nombre_producto'] ?>" required />

                    <label for="costo_compra">Costo Compra</label>
                    <input type="text" name="costo_compra" id="costo_compra" value="<?= $mostrar['costo_compra'] ?>" readonly="readonly" required />

                    <label for="costo_venta">Costo Venta</label>
                    <input type="text" name="costo_venta" id="costo_venta" value="<?= $mostrar['costo_venta'] ?>" readonly="readonly" required />

                    <label for="cantidad_piezas">Cantidad de Piezas</label>
                    <input type="text" name="cantidad_piezas" id="cantidad_piezas" pattern="[0-9]+" value="<?= $mostrar['cantidad_piezas'] ?>" required />

                    <label for="piezas_caja">Piezas por Caja</label>
                    <input type="text" name="piezas_caja" id="piezas_caja" pattern="[0-9]+" value="<?= $mostrar['piezas_caja'] ?>" required />

                    <span id="botonEnviar"><input type="submit" value="Actualizar Stock" /></span>
                </form>
                <?php 
                        endwhile; 
                    endif;
                    if(mysqli_num_rows($obtenerDatos) == 0):
                     // echo '<script language="javascript">alert("Sin datos");</script>';
                        echo "<div id='mensajeExistente'>No existen datos con el código de barras proporcionado</div>";
                       
                    endif;
                endif;
                ?>
            </div>
          
        </section>
       
        <footer>
            Abarrotes Estrella &copy;

            <a href="#" class="subir">Ir arriba</a>
        </footer>
       
    </div>
</body>

</html>