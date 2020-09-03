<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar Precios</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_actualizar_precios.css" />
    <link rel="icon" type="image/x-icon" href="./Imagenes/favicon.png" />
    <script src="../js/jquery.min.js"></script>
    <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
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
            if (isset($_GET['mensaje'])) {
                $mensaje = $_GET['mensaje'];
                if ($mensaje == 'exitoso') {
                
                    echo "<div id='actualizacionCorrecta'>Precios Actualizados</div>";
                    header("Refresh: 2; URL=menu_actualizar_precios.php");
                }
                if ($mensaje == 'error') {
                    echo "<div id='mensajeError'>Error en la actualización</div>";
                    header("Refresh: 2; URL=menu_actualizar_precios.php");
                }
            }
            ?>
        <section id="registro">
            <header id="encabezado_registro">
                <h2>Actualizar Precios </h2>
            </header>
          
            <div id="formulario">
            <form action="#" method="POST">

                    <label for="codigo">Ingrese Codigo de Barras</label>
                    <input type="text" name="codigo" id="codigo" required  autofocus/>

                   <input type="submit" id="botonValidar" value="Validar" name="btn_buscar" />
                    </form>

                    <?php
            
                    if(isset($_POST['codigo'])):
                        require_once '../Clases/conexion.php';
         
                        $codigo = $_POST['codigo'];
                        $obtenerDatos = mysqli_query(conexion(), "SELECT * from productos where codigo_barras='$codigo'");
                    
                        if(mysqli_num_rows($obtenerDatos) > 0):
                            while($muestra = mysqli_fetch_assoc($obtenerDatos)):
                    ?>
                    <form action="../Clases/actualizar_precio.php" method="POST">

                        <label for="codigo1">Codigo de Barras</label>
                        <input type="text" name="codigo1" id="codigo1" value="<?php echo $muestra['codigo_barras'] ?>" readonly="readonly" required/>

                        <label for="proveedor">Nombre del Proveedor</label>
                        <input type="text" name="proveedor" id="proveedor" value="<?php echo $muestra['proveedor'] ?>"  readonly="readonly" required/>

                        <label for="nombre">Nombre del Producto</label>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $muestra['nombre_producto'] ?>" readonly="readonly" required/>

                        <label for="costo_compra">Costo Compra</label>
                        <input type="text" name="costo_compra" id="costo_compra" value="<?php echo $muestra['costo_compra'] ?>" pattern="[0-9]+" required />

                        <label for="costo_venta">Costo Venta</label>
                        <input type="text" name="costo_venta" id="costo_venta" value="<?php echo $muestra['costo_venta'] ?>" pattern="[0-9]+" required />

                        <input type="hidden" name="cantidad_piezas" id="cantidad_piezas" value="<?php echo $muestra['cantidad_piezas']  ?>"/>

                        <span id="botonEnviar"><input type="submit" value="Actualizar" name="btn_buscar" /></span>
                    
                
                        </form>

                    <?php 
                     endwhile; 
                    endif;
                    if(mysqli_num_rows($obtenerDatos) == 0):
                        echo "<div id='mensajeExistente'>No existen datos con el código de barras proporcionado</div>";
                        header("Refresh: 2; URL=menu_actualizar_precios.php");
                    endif;
                endif;
                ?>

             
            </div>
        </section>
        <?php require_once 'footer.php' ?>
    </div>
</body>

</html>