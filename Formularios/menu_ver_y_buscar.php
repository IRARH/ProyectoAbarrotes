<!DOCTYPE html>
<html lang="es">
<head>
    <title>Visualizar y realizar búsquedas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_ver_y_buscar.css" />
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
            <form>
                <label for="proveedor">Proveedor</label>
                <input type="text" name="proveedor" placeholder="proveedor"/>

                <label id="busqueda1" for="busqueda1">Busqueda por proveedor</label>
                <input type="checkbox" name="busqueda1"/>

                <label id="busqueda2" for="busqueda2">Busqueda por código y producto</label>
                <input type="checkbox" name="busqueda2"/>
                <hr>
                <label for="codigo">Código de producto</label>
                <input type="text" name="codigo" placeholder="código producto"/>

                <label for="producto">Nombre producto</label>
                <input type="text" name="producto" placeholder="nombre producto"/>

                <label for="encolar">Encolar búsquedas</label>
                <input type="checkbox" name="encolar"/></br>

                <input type="submit" value="BUSCAR"/>
            </form>
        </div>
        <section id="productos_busqueda">
            <header id="encabezado">
                <h2>Búsqueda</h2>
            </header>
            <div id="tabla_busqueda">
                <div id="div1">
                    <table>
                        <tr>
                            <td class=color>Codigo de Barras</td>
                            <td class=color>Surtidor</td>
                            <td class=color>Nombre de Producto</td>
                            <td class=color>Marca</td>
                            <td class=color>Tipo</td>
                            <td class=color>Costo compra</td>
                            <td class=color>Costo venta</td>
                            <td class=color>Cantidad</td>
                            <td class=color>Piezas p/caja</td>
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
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    
        <div id="resultados_busqueda">
            <label for="total_piezas_busqueda">Total / pza</label>
            <input type="text" name="total_piezas_busqueda" />
            <label for="total_busqueda">Total dinero</label>
            <input type="text" name="total_busqueda"/>
        </div>
        <section id="productos_generales">
            <header id="encabezado">
                <h2>Productos Generales</h2>
            </header>
            <div id="tabla_general">
                <div id="div1">
                    <table>
                        <tr>
                            <td class=color>Codigo de Barras</td>
                            <td class=color>Surtidor</td>
                            <td class=color>Nombre de Producto</td>
                            <td class=color>Marca</td>
                            <td class=color>Tipo</td>
                            <td class=color>Costo compra</td>
                            <td class=color>Costo venta</td>
                            <td class=color>Cantidad</td>
                            <td class=color>Piezas p/caja</td>
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
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <td>10201021</td>
                            <td>Corona</td>
                            <td>Cerveza</td>
                            <td>Corona</td>
                            <td>Caguama</td>
                            <td>20</td>
                            <td>35</td>
                            <td>50</td>
                            <td>12</td>
                            <td>21000</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <div id="final">
            <label for="total_piezas">Total / pza</label>
            <input type="text" name="total_piezas" />
            <label for="total">Total dinero</label>
            <input type="text" name="total"/>
        </div>
    </div>
</body>
</html>