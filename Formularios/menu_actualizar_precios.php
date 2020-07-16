<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar Precios</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_actualizar_precios.css" />
    <script src="../js/jquery.min.js"></script><!--Libreria Jquery -->
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
        <section id="registro">
            <header id="encabezado_registro">
                <h2>Actualizar Precios </h2>
            </header>
            <div id="formulario">
                <form action="#" method="POST">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fecha" min="2020-01-01" max="2100-12-31"></br></br>

                    <label for="codigo">Codigo de Barras</label>
                    <input type="text" name="codigo" id="codigo" required />

                    <label for="proveedor">Nombre del Proveedor</label>
                    <input type="text" name="proveedor" id="proveedor" required />

                    <label for="nombre">Nombre del Producto</label>
                    <input type="text" name="nombre" id="nombre" required />

                    <label for="costo_compra">Costo Compra</label>
                    <input type="text" name="costo_compra" id="costo_compra" required />

                    <label for="costo_venta">Costo Venta</label>
                    <input type="text" name="costo_venta" id="costo_venta" required />

                    <span id="botonEnviar"><input type="submit" value="Actualizar Precio" name="btn_actualizar"/></span>
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