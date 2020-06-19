<!DOCTYPE html>
<html lang="es">
<head>
    <title>Eliminar Producto</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_eliminar.css" />
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
        <section id="principal_notas">
            <header id="encabezado">
                <h2>Eliminar Producto</h2>
            </header>
            <div id="formulario">
                <form action="#" method="POST">
                    <label for="start">Fecha</label>
                    <input type="date" id="start" name="trip-start" value="2020-06-07" min="2020-01-01" max="2100-12-31"></br></br>

                    <label for="codigo_barra">Ingresa Codigo de Barra</label>
                    <input type="text" name="correo" id="correo" required placeholder="" />
                    <div id="div1">
                        <table>
                            <tr>
                                <td class=color>Codigo de Barras</td>
                                <td class=color>Nombre de Producto</td>
                                <td class=color>Marca</td>
                                <td class=color>Tipo</td>
                                <td class=color>Cantidad</td class=color>
                                <td class=color>Precio</td>
                                <td class=color>Subtotal</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Cerveza</td>
                                <td>Corona</td>
                                <td>Caguama</td>
                                <td>10</td>
                                <td>10</td>
                                <td>500</td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
            <div id="final">
                <input type="submit" value="Eliminar Producto" />
            </div>
        </section>
    </div>
</body>
</html>