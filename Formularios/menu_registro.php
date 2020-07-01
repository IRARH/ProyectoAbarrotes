<!DOCTYPE html>
<html lang="es">
<head>
    <title>Menu de opciones de registro</title>
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
        <nav id="opciones">
			<ul>
				<li><a href="menu_registro_producto.php">Registrar Producto</a></li>
				<li><a href="menu_registro_proveedor.php">Registrar Proveedor</a></li>
				<li><a href="menu_registro_tipoProducto.php">Registrar tipo de producto</a></li>
			</ul>
		</nav>
    </div>

    
</body>
</html>