<!DOCTYPE html>
<html lang="es">
<head>
    <title>Dar de alta un Producto Nuevo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_registro_producto.css" />
    <script src="../js/jquery.min.js"></script> <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
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
        <nav id="opciones">
			<ul>
				<li><a href="menu_registro_producto.php">Registrar Producto</a></li>
				<li><a href="menu_registro_proveedor.php">Registrar Proveedor</a></li>
				<li><a href="menu_registro_tipoProducto.php">Registrar tipo de producto</a></li>
			</ul>
		</nav>
        <section id="registro">
            <header id="encabezado_registro">
                <h2>Registro de Productos </h2>
            </header>
            <div id="formulario">
                <form action="#" method="POST">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fecha" min="2020-01-01" max="2100-12-31"></br></br>

                    <label for="codigo">Codigo de Barras</label>
                    <input type="text" name="codigo" id="codigo" placeholder="escaneo código" required  />

                    <label for="proveedor">Nombre del Proveedor</label>
                    <input type="text" name="proveedor" id="proveedor" placeholder="proveedor" required />

                    <label for="marca">Marca del Producto</label>
                    <input type="text" name="marca" id="marca" placeholder="marca" required />

                    <label for="tipo">Tipo de Producto</label>
                    <input type="text" name="tipo" id="tipo" placeholder="tipo" required />

                    <label for="costo_compra">Costo Compra</label>
                    <input type="text" name="costo_compra" id="costo_compra" placeholder="costo compra" required />

                    <label for="costo_venta">Costo Venta</label>
                    <input type="text" name="costo_venta" id="costo_venta" placeholder="costo venta" required />

                    <label for="cantidad_piezas">Cantidad de Piezas</label>
                    <input type="text" name="cantidad_piezas" id="cantidad_piezas" placeholder="cantidad piezas" required />

                    <label for="piezas_caja">Piezas por Caja</label>
                    <input type="text" name="piezas_caja" id="piezas_caja" placeholder="piezas por caja" required />

                    <label for="cantidad_cajas">Cantidad de Cajas</label>
                    <input type="text" name="cantidad_pieza" id="cantidad_pieza" placeholder="cantidad cajas" required />

                    <label for="total_venta">Precio Total de Venta</label>
                    <input type="text" name="total_venta" id="total_venta" placeholder="total venta" required />

                    <label for="total_compra">Precio Total de Compra</label>
                    <input type="text" name="total_compra" id="total_compra" placeholder="total compra" required />

                    <span id="botonEnviar"><input type="submit" value="Registrar producto" /></span>
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