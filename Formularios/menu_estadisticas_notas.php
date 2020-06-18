<!DOCTYPE html>
<html lang="es">
<head>
    <title>Estadísticas de Notas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_estadisticas_notas.css" />
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
        <a href="#">Inventario</a>
    </div>
    <nav id="principal">
        <h2>Tienda de abarrotes estrella</h2>
    </nav>
    <div id="contenedor">
        <div id="formulario_busqueda">
            <h2 id='titulo_estadistica'>Estadísticas de Notas</h2>
            <h3>Busqueda Especifica</h3>
            <form>
                <label id='fecha_inicial'>Seleccionar Tienda</label>
                <select name="select" id="selector">
                    <option value="value1" selected>Rayo</option>
                    <option value="value2">Estrella</option>
                </select>

                <label id='fecha_final'>Fecha </label>
                <input type="date" id="start" name="trip-start" value="2020-06-07" min="2020-01-01" max="2100-12-31">

                <input type="submit" value="BUSCAR" />
                <br>

                <label id='url'>URL del archivo: </label>
                <input type="text" name="codigo" placeholder="código producto" />
            </form>
        </div>
        <section id="productos_busqueda">
            <header id="encabezado">
                <h2>Tabla de Nota</h2>
            </header>
            <div id="tabla_busqueda">
                <div id="div1">
                    <table>
                        <tr>
                            <td class=color>Codigo de Barras</td>
                            <td class=color>Nombre del Producto</td>
                            <td class=color>Marca</td>
                            <td class=color>Tipo</td>
                            <td class=color>Cantidad</td>
                            <td class=color>Precio</td>
                            <td class=color>Subtotal</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <div id="resultados_busqueda">
            <label for="total_piezas_busqueda">Total / pza</label>
            <input type="text" name="total_piezas_busqueda" />

            <label for="total_busqueda">Total dinero</label>
            <input type="text" name="total_busqueda" />
        </div>
        <section id="productos_generales">
            <header id="encabezado">
                <h2>Busqueda por Rango</h2>
                

                <label id='tienda'>Seleccionar Tienda</label>
                <select name="select" id="selector">
                    <option value="value1" selected>Rayo</option>
                    <option value="value2">Estrella</option>
                </select>



                <label id='fecha_inicia'>Fecha Inicial</label>
                <input type="date" id="start" name="trip-start" value="2020-06-07" min="2020-01-01" max="2100-12-31">

                <label id='fecha_final'>Fecha Final</label>
                <input type="date" id="start" name="trip-start" value="2020-06-07" min="2020-01-01" max="2100-12-31">

                <input type="submit" value="BUSCAR" />
                <h2>Arhivos encontrados</h2>
            </header>
            <div id="tabla_general">
                <div id="div3">
                    <table>
                        <tr>
                            <td class=color>Fecha</td>
                            <td class=color>URL</td>
                        </tr>
                        <tr>
                            <td>22 Junio</td>
                            <td>http://servidor.gio/1234</td>
                        </tr>
                        <tr>
                            <td>22 Junio</td>
                            <td>http://servidor.gio/1234</td>
                        </tr>
                        <tr>
                            <td>22 Junio</td>
                            <td>http://servidor.gio/1234</td>
                        </tr>
                        <tr>
                            <td>22 Junio</td>
                            <td>http://servidor.gio/1234</td>
                        </tr>
                        <tr>
                            <td>22 Junio</td>
                            <td>http://servidor.gio/1234</td>
                        </tr>
                        <tr>
                            <td>22 Junio</td>
                            <td>http://servidor.gio/1234</td>
                        </tr>
                        <tr>
                            <td>22 Junio</td>
                            <td>http://servidor.gio/1234</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <div id="final">
            <label id="dinero">Dinero en Notas: </label>
            <input type="text" name="total_piezas" />
        </div>
    </div>
</body>
</html>