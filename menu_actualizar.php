<!DOCTYPE html>
<html>

<head>
    <title>Actulizar Stock</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles_menu_actualizar.css" />
</head>

<body>
    <div class="navegacion">
        <img src="estrella_logo.png" height="70px" width="90px" />
        <img id="menu" src="principal.png" height="30px" width="30px" /><a href="menu.php">Menú Principal</a>
        <img id="nuevo" src="registronuevo.png" height="30px" width="30px" /><a href="menu_registro.php">Registrar Nuevo</a>
        <img id="actualizar" src="actualizar.png" height="30px" width="30px" /><a href="menu_actualizar.php">Actualizar Stock</a>
        <img id="eliminar" src="eliminar.png" height="30px" width="30px" /><a href="menu_eliminar.php">Eliminar Producto</a>
        <img id="buscar" src="buscar.png" height="30px" width="30px" /><a href="menu_ver_y_buscar.php">Ver y Buscar</a>
        <img id="nota" src="nota.png" height="30px" width="30px" /><a href="Notas_menu.php">Registrar Nota</a>
        <img id="estadistica" src="estadisticas.png" height="30px" width="30px" /> <a href="#">Estadísticas</a>
    </div>

    <nav id="principal">
        <h2>Tienda de abarrotes estrella</h2>
    </nav>
    <div id="palabras">
        <section id="registro">
            <header id="encabezado_registro">
                <h2>Actualizar Stock</h2>

            </header>
            <div id="formulario">
                <label for="start">Fecha</label>
                <input type="date" id="start" name="trip-start" value="2020-06-07" min="2020-01-01" max="2100-12-31"></br></br>


                <form action="#" method="POST">

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
                <input type="submit" value="Registrar Actulización " />
            </div>
        </section>
    </div>
</body>

</html>