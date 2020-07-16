<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar Precios</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_actualizar_precios.css" />
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
                <li><a href="menu_registro_proveedor.php">Actualizar Precios</a></li>
            </ul>
        </nav>
        <section id="registro">
            <header id="encabezado_registro">
                <h2>Actualizar Precios </h2>
            </header>
            <?php
            if (isset($_GET['mensaje'])) {
                $mensaje = $_GET['mensaje'];
                if ($mensaje == 'exitoso') {
                    echo 'Se actualizo';
                }
                if ($mensaje == 'error') {
                    echo 'No se pudo actualizar';
                }
            }
            ?>
            <div id="formulario">
            <form action="#" method="POST">

                    <label for="codigo">Ingrese Codigo de Barras</label>
                    <input type="text" name="codigo" id="codigo" required />

                    <span id="botonEnviar"><input type="submit" value="Validar" name="btn_buscar" /></span>
                    </form>
                    <?php
                    require_once '../Clases/busqueda_para_actualizacion_precio.php';

                    while ($muestra = mysqli_fetch_array($busqueda)) {

                    ?>
                    <form action="../Clases/actualizar_precio.php" method="POST">
                        <label for="codigo1">Codigo de Barras</label>
                        <input type="text" name="codigo1" id="codigo1" value="<?php echo $muestra['codigo_barras'] ?>" />

                        <label for="proveedor">Nombre del Proveedor</label>
                        <input type="text" name="proveedor" id="proveedor" value="<?php echo $muestra['proveedor'] ?>" required />

                        <label for="nombre">Nombre del Producto</label>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $muestra['nombre_producto'] ?>" required />

                        <label for="costo_compra">Costo Compra</label>
                        <input type="text" name="costo_compra" id="costo_compra" value="<?php echo $muestra['costo_compra'] ?>" required />

                        <label for="costo_venta">Costo Venta</label>
                        <input type="text" name="costo_venta" id="costo_venta" value="<?php echo $muestra['costo_venta'] ?>" required />

                        <span id="botonEnviar"><input type="submit" value="Busccar" name="btn_buscar" /></span>
                    
                       
                        </form>

                    <?php } ?>

             
            </div>
        </section>
        <footer>
            Abarrotes Estrella &copy;
            <a href="#" class="subir">Ir arriba</a>
        </footer>



    </div>
</body>

</html>