<!DOCTYPE html>
<html lang="es">

<head>
    <title>Datos a actualizar en nota la Nota</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_descuento_nota.css" />
    <link rel="icon" type="image/x-icon" href="./Imagenes/favicon.png" />
    <script src="../js/jquery.min.js"></script>
    <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script footer -->
    <script src="../js/peticionAjax_stock.js"></script><!-- Script petición -->
</head>

<body>
    <?php require_once 'barraLateral.php'; ?>

    <div id="palabras">

        <section id="registro">

            <header id="encabezado_registro">
                <h2>Actualización de cantidad de productos a retirar en Nota</h2>
            </header>

            <div id="formulario">

                <?php
                if (isset($_GET)) {

                    require_once "../Clases/conexion.php";
                    $codigoAct = $_GET['codigo'];
                    $dest = $_GET['destinatario'];

                    $queryAct = "select v.codigo_barras, p.proveedor, p.nombre_producto, p.costo_compra, p.costo_venta, p.cantidad_piezas, v.cantidad_retiro from ventas v INNER JOIN productos p ON p.codigo_barras = v.codigo_barras WHERE v.codigo_barras='$codigoAct'";
                    $actualizar = mysqli_query(conexion(), $queryAct);
                    while ($datos = mysqli_fetch_array($actualizar)) {
                ?>
                        <form action="../Clases/actualizar_producto_venta.php" method="POST">

                            <label for="proveedor">Código Barras</label>
                            <input type="text" name="codigo_barras" id="codigo_barras" value="<?= $datos['codigo_barras'] ?>" readonly="readonly" required />

                            <label for="proveedor">Nombre del Proveedor</label>
                            <input id="soloLectura" type="text" name="proveedor" value="<?= $datos['proveedor'] ?>" readonly="readonly" required />

                            <label for="nombre">Nombre del Producto</label>
                            <input id="apuntar" type="text" name="nombre" value="<?= $datos['nombre_producto'] ?>" readonly="readonly" required />

                            <label for="costo_compra">Costo Compra</label>
                            <input id="soloLectura" type="text" name="costo_compra" value="<?= $datos['costo_compra'] ?>" readonly="readonly" required />

                            <label for="costo_venta">Costo Venta</label>
                            <input id="soloLectura" type="text" name="costo_venta" value="<?= $datos['costo_venta'] ?>" readonly="readonly" required />

                            <label for="cantidad_piezas">Stock de Piezas</label>
                            <input id="soloLectura" type="text1" name="cantidad_piezas" pattern="[0-9]+" readonly="readonly" value="<?= $datos['cantidad_piezas'] ?>" required />

                            <label for="cantidadRetiro">Piezas a descontar</label>
                            <input type="text1" name="cantidadRetiro" id="cantidadRetiro" pattern="{-}*[0-9]+" value="<?= $datos['cantidad_retiro'] ?>" required /><br />

                            <div id="mensajeStock">

                            </div>

                            <input id="destinatario" type="hidden" name="destinatario" value="<?= $dest ?>" />
                            <span id="botonEnviar"><input type="submit" id="boton" value="Actualizar datos en Nota" /></span>
                        </form>
                <?php }
                }  ?>

            </div>
        </section>
        <?php require_once 'footer.php' ?>
    </div>

</body>

</html>