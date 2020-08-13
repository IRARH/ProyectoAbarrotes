<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ingreso de Productos a la Nota</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_descuento_nota.css" />
</head>

<body>
    <?php require_once 'barraLateral.php'; ?>

    <div id="palabras">
        <nav id="opciones">
        </nav>

        <section id="registro">
            <header id="encabezado_registro">
                <h2>Ingreso de Productos a la Nota</h2>
            </header>

            <div id="formulario">
                <form action="#" method="POST">
                </form>

                <form action="#" method="POST">
                    <label for="proveedor">Código Barras</label>
                    <input id="soloLectura" type="text" name="codigo_barras" value="" readonly="readonly" required />

                    <label for="proveedor">Nombre del Proveedor</label>
                    <input id="soloLectura" type="text" name="proveedor" value="<?= $mostrar['proveedor'] ?>" readonly="readonly" required />

                    <label for="nombre">Nombre del Producto</label>
                    <input id="apuntar" type="text" name="nombre" value="<?= $mostrar['nombre_producto'] ?>" readonly="readonly" required />

                    <label for="costo_compra">Costo Compra</label>
                    <input id="soloLectura" type="text" name="costo_compra" value="<?= $mostrar['costo_compra'] ?>" readonly="readonly" required />

                    <label for="costo_venta">Costo Venta</label>
                    <input id="soloLectura" type="text" name="costo_venta" value="<?= $mostrar['costo_venta'] ?>" readonly="readonly" required />

                    <label for="cantidad_piezas">Stock de Piezas</label>
                    <input id="soloLectura" type="text1" name="cantidad_piezas" pattern="[0-9]+" readonly="readonly" value="<?= $mostrar['cantidad_piezas'] ?>" required />

                    <label for="cantidad_piezas_extra">Piezas a descontar</label>
                    <input id="apuntar" type="text1" name="cantidad_piezas_extra" pattern="{-}*[0-9]+" value="0" required />

                    <span id="botonEnviar"><input type="submit" value="Agregar a Nota" /></span>
                </form>

            </div>

        </section>
        <?php require_once 'footer.php' ?>
    </div>

</body>

</html>