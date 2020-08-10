<!DOCTYPE html>
<html lang="es">
<head>
    <title>Estadísticas de Notas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_estadisticas_notas.css" />
    <script src="../js/jquery.min.js"></script> <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
</head>
<body>
    <?php require_once 'barraLateral.php'; ?>
    
    <div id="contenedor">
        <div id="formulario_busqueda">
            <h2 id='titulo_estadistica'>Estadísticas de Notas</h2>
            <h3>Busqueda Especifica</h3>
            <form action="#" method="POST">
                <label id='destinatario'>Seleccionar Tienda</label>
                <select name="destinatario" id="destinatario">
                    <option>Rayo</option>
                    <option>Estrella</option>
                </select>

                <label id='fecha'>Fecha </label>
                <input type="date" id="fecha" name="fecha"  min="2020-01-01" max="2100-12-31">

                <input type="submit" value="BUSCAR" />
                <br>

                <label id='url' >URL del archivo: </label>
                <input type="text" name="url" id="url" placeholder="url de búsqueda" />
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
            <input type="text" name="total_piezas_busqueda" id="total_piezas_busqueda" />

            <label for="total_busqueda">Total dinero</label>
            <input type="text" name="total_busqueda" id="total_busqueda" />
        </div>
        <section id="productos_generales">
            <header id="encabezado">
                <form id="busqueda_rango" action="#" method="POST">
                    <h2>Busqueda por Rango</h2>
                    

                    <label id='tienda'>Seleccionar Tienda</label>
                    <select name="tienda" id="tienda">
                        <option>Rayo</option>
                        <option>Estrella</option>
                    </select>

                    <label id='fecha_inicial'>Fecha Inicial</label>
                    <input type="date" id="fecha_inicial" name="fecha_inicial" min="2020-01-01" max="2100-12-31">

                    <label id='fecha_final'>Fecha Final</label>
                    <input type="date" id="fecha_final" name="fecha_final" min="2020-01-01" max="2100-12-31">

                    <input type="submit" value="BUSCAR" />
                </form>
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
        <?php require_once 'footer.php' ?>
    </div>
</body>
</html>