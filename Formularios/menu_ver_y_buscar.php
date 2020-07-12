<!DOCTYPE html>
<html lang="es">
<head>
    <title>Visualizar y realizar búsquedas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_ver_y_buscar.css" />
    <script src="../js/jquery.min.js"></script> <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
</head>
<body>
    <?php require_once 'barraLateral.php'; ?>
   
    <div id="contenedor">
   
        <div id="formulario_busqueda">
            <form action="#" method="POST">
                <h2> Buscar Productos y Proveedores </h2>
                <h3>Busqueda por Proveedor</h3>

                <label id="busqueda1" for="busqueda1">Busqueda por proveedor</label>
                <input type="checkbox" name="busqueda1" id="busqueda1"/></br>

                <label for="proveedor">Proveedor</label>
                <input type="text" name="proveedor" placeholder="proveedor"/>
                <hr>
                
                <h3>Busqueda por Producto</h3>
                
                <label id="busqueda2" for="busqueda2">Busqueda por código y producto</label>
                <input type="checkbox" name="busqueda2" id="busqueda2"/>

                <label for="encolar">Encolar búsquedas</label>
                <input type="checkbox" name="encolar" id="encolar"/></br>

                
                <label for="codigo">Código de producto</label>
                <input type="text" name="codigo" id="codigo" placeholder="escaneo producto"/>

                <label for="producto">Nombre producto</label>
                <input type="text" name="producto" id="producto" placeholder="nombre producto"/>
            </br><br>
                <input type="submit" value="Realizar Búsqueda"/>
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
        <footer>
	        Abarrotes Estrella &copy;

	        <a href="#" class="subir">Ir arriba</a>
        </footer>
    </div>
</body>
</html>