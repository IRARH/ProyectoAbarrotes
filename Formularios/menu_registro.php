<!DOCTYPE html>
<html lang="es">
<head>
    <title>Dar de alta un Producto Nuevo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_registro.css" />
</head>
<body>
    <div class="navegacion">
        <img src="Imagenes/estrella_logo.png" height="70px" width="90px" />
        <img id="menu" src="Imagenes/principal.png" height="25px" width="25px" /><a href="menu.php">Menú Principal</a>
        <img id="nuevo" src="Imagenes/registronuevo.png" height="25px" width="25px" /><a href="menu_registro.php">Registrar Nuevo</a>
        <img id="actualizar" src="Imagenes/actualizar.png" height="30px" width="25px" /><a href="menu_actualizar.php">Actualizar Stock</a>
        <img id="eliminar" src="Imagenes/eliminar.png" height="25px" width="25px" /><a href="menu_eliminar.php">Eliminar Producto</a>
        <img id="buscar" src="Imagenes/buscar.png" height="25px" width="25px" /><a href="menu_ver_y_buscar.php">Ver y Buscar</a>
        <img id="nota" src="Imagenes/nota.png" height="25px" width="25px" /><a href="menu_notas.php">Registrar Nota</a>
        <img id="estadistica" src="Imagenes/estadisticas.png" height="25px" width="25px" /> <a href="menu_estadisticas_notas.php">Estadísticas Notas</a>
        <a href="menu_estadisticas_inventario.php">Inventario</a>
    </div>
    <nav id="principal">
        <h2>Tienda de abarrotes estrella</h2>
    </nav>
    <div id="palabras">
        <section id="registro">
            <header id="encabezado_registro">
                <h2>Registro de Productos </h2>
            </header>
            <div id="formulario">
                <form action="#" method="POST">
                    <label for="start">Fecha</label>
                    <input type="date" id="start" name="trip-start" value="2020-06-07" min="2020-01-01" max="2100-12-31"></br></br>

                    <label for="codigo_barras">Codigo de Barras</label>
                    <input type="text" name="codigo_barras" id="codigo_barras" required />

                    <label for="nombre_producto">Nombre del Proveedor</label>
                    <input type="text" name="nombre_producto" id="nombre_producto" required />

                    <label for="marca_producto">Marca del Producto</label>
                    <input type="text" name="marca_producto" id="marca_producto" required />

                    <label for="tipo_producto">Tipo de Producto</label>
                    <input type="text" name="tipo_producto" id="tipo_producto" required />

                    <label for="precio_pieza">Costo Compra</label>
                    <input type="text" name="precio_pieza" id="precio_pieza" required />

                    <label for="precio_pieza">Costo Venta</label>
                    <input type="text" name="precio_pieza" id="precio_pieza" required />

                    <label for="cantidad_pieza">Cantidad de Piezas</label>
                    <input type="text" name="cantidad_pieza" id="cantidad_pieza" required />

                    <label for="pieza_caja">Piezas por Caja</label>
                    <input type="text" name="pieza_caja" id="pieza_caja" required />

                    <label for="cantidad_cajas">Cantidad de Cajas</label>
                    <input type="text" name="cantidad_pieza" id="cantidad_pieza" required />

                    <label for="precio_total">Precio Total</label>
                    <input type="text" name="precio_total" id="precio_total" required />
                </form>
            </div>
            <div id="final">
                <input type="submit" value="Registrar " />
            </div>
        </section>
    </div>
</body>
</html>