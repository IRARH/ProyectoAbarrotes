<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar Producto</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_actualizar_producto.css" />
    <script src="../js/jquery.min.js"></script><!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
    <script type="text/javascript" src="../js/busqueda.js"></script>
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
                if($_GET['mensaje'] == 'noExistencia'):
                    echo "<div id='mensajeExistente'>No existen datos con el código de barras proporcionado</div>";
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
                    <label for="proveedor">Código Barras</label>
                    <input id="soloLectura" type="text" name="codigo_barras" value="<?= $mostrar['codigo_barras'] ?>" readonly="readonly" required />

                    <label for="proveedor">Nombre del Proveedor</label>
                    <input id="soloLectura" type="text" name="proveedor"  value="<?= $mostrar['proveedor'] ?>" readonly="readonly" required />

                    <label for="nombre">Nombre del Producto</label>
                    <input id="apuntar" type="text" name="nombre"  value="<?= $mostrar['nombre_producto'] ?>" required />

                    <label for="costo_compra">Costo Compra</label>
                    <input id="soloLectura" type="text" name="costo_compra" value="<?= $mostrar['costo_compra'] ?>" readonly="readonly" required />

                    <label for="costo_venta">Costo Venta</label>
                    <input id="soloLectura" type="text" name="costo_venta" value="<?= $mostrar['costo_venta'] ?>" readonly="readonly" required />

                    <label for="cantidad_piezas">Cantidad de Piezas</label>
                    <input id="soloLectura" type="text1" name="cantidad_piezas" pattern="[0-9]+" readonly="readonly" value="<?= $mostrar['cantidad_piezas'] ?>" required />

                    <label for="cantidad_piezas_extra">Cantidad de piezas a añadir</label>
                    <input id="apuntar" type="text1" name="cantidad_piezas_extra" pattern="{-}*[0-9]+" value="0" required />

                    <label for="piezas_caja">Piezas por Caja</label>
                    <input id="soloLectura" type="text1" name="piezas_caja" pattern="[0-9]+" readonly="readonly" value="<?= $mostrar['piezas_caja'] ?>" required />

                    <label for="piezas_caja_extra">Piezas por caja a añadir</label>
                    <input id="apuntar" type="text1" name="piezas_caja_extra" pattern="{-}*[0-9]+" value="0" required />

                    <span id="botonEnviar"><input type="submit" value="Actualizar Stock" /></span>
                </form>
                <?php 
                        endwhile; 
                    endif;
                    if(mysqli_num_rows($obtenerDatos) == 0):
                    header("Location:menu_actualizar_producto.php?mensaje=noExistencia");
                    endif;
                endif;
                ?>
            </div>
          
        </section>
        <?php require_once 'footer.php' ?>
    </div>
</body>

</html>