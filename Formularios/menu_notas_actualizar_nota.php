<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar Precios</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_notas_actualizar_nota.css" />
    <script src="../js/jquery.min.js"></script>
    <!--Libreria Jquery -->
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

                <li><a href="menu_notas_registrar_nota.php">Registrar Nota</a></li>
                <li><a href="menu_notas_actualizar_nota.php">Actualizar Nota</a></li>

            </ul>
        </nav>

        <section id="principal_notas">
            <header id="encabezado">
                <h2>Actualizar Nota </h2>
            </header>
            <div id="formulario">
                <form action="#" method="POST">
                    
                <label id='tienda'>Seleccionar Tienda</label>
                <select name="select" id="selector">
                    <option value="value1" selected>Rayo</option>
                    <option value="value2">Estrella</option>
                </select>

                <label id='fecha_final'>Fecha</label>
                    <input type="date" id="start" name="trip-start" value="2020-06-07" min="2020-01-01" max="2100-12-31"></br></br>

                    
                    <div id="div1">
                        <table>
                            <tr>
                                <td class=color>Codigo de Barras</td>
                                <td class=color> Nombre de Producto</td>
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
                            <tr>
                                <td>10201021</td>
                                <td>Cerveza</td>
                                <td>Victoria</td>
                                <td>Caguama</td>
                                <td>10</td>
                                <td>10</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Cerveza</td>
                                <td>Tecate</td>
                                <td>Caguama</td>
                                <td>10</td>
                                <td>10</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                        </table>
                    </div>
                    <label class="label1">Total</label>
                    <input type="text1" name="correo" id="correo" value="$2500" required placeholder="" />
                </form>
            </div>
            <div id="final">
                <input type="submit" value="Actualizar nota" />
            </div>


        </section>
        <footer>
            Abarrotes Estrella &copy;
            <a href="#" class="subir">Ir arriba</a>
        </footer>

</body>

</html>