<!DOCTYPE html>
<html lang="es">

<head>
    <title>Estadísticas de Notas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_estadisticas_inventario.css" />
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
            <h2 id='titulo_estadistica'>Estadísticas de Inventario</h2>
            <h2 id='titulo_reg'>Busqueda de Registro Entrada y Salida</h2>
            <form>
            
                <label id='fecha_final'>Fecha</label>
                <input type="date" id="start" name="trip-start" value="2020-06-07" min="2020-01-01" max="2100-12-31">
                <input type="submit" value="BUSCAR" />
                <br>
                <label id='inv_inicial'>Inventario Inicial</label>
                <input type="text" name="codigo" />

                <label id='inv_final'>Inventario Incial</label>
                <input type="text" name="codigo" />


            </form>
        </div>



        <section id="productos_busqueda">
            <header id="encabezado">
               
            </header>
            <div id="tabla_busqueda">
            <h3>Registro Encontrado</h3>
                <div id="div1">
                    <table>
                        <tr>
                            <td class=color>Fecha</td>
                            <td class=color>Entrada</td>
                            <td class=color>Salida</td>
                            <td class=color>Importe en Inventario</td>
                        </tr>
                        <tr>
                            <td>22 junio</td>
                            <td>2000</td>
                            <td>0</td>
                            <td>8000</td>
                        </tr>
                    </table>
                </div>
            </div>


        </section>

        <section id="productos_generales">
        
            <header id="encabezado">
            <h2>Busqueda por Rango</h2>
                <label id='fecha_inicia'>Fecha Inicial</label>
                <input type="date" id="start" name="trip-start" value="2020-06-07" min="2020-01-01" max="2100-12-31">

                <label id='fecha_final'>Fecha Final</label>
                <input type="date" id="start" name="trip-start" value="2020-06-07" min="2020-01-01" max="2100-12-31">
                <input type="submit" value="BUSCAR" />
               
            </header>
            

            
            <div id="tabla_general">
            <h3>Registros Encontrados</h3>
                <div id="div3">
                    <table>
                        <tr>
                            <td class=color>Fecha</td>
                            <td class=color>Entrada</td>
                            <td class=color>Salida</td>
                            <td class=color>Importe en Inventario</td>
                        </tr>

                        <tr>
                            <td>22 junio</td>
                            <td>2000</td>
                            <td>0</td>
                            <td>8000</td>
                        </tr>
                        <tr>
                            <td>22 junio</td>
                            <td>2000</td>
                            <td>0</td>
                            <td>8000</td>
                        </tr>
                        <tr>
                            <td>22 junio</td>
                            <td>2000</td>
                            <td>0</td>
                            <td>8000</td>
                        </tr>
                        <tr>
                            <td>22 junio</td>
                            <td>2000</td>
                            <td>0</td>
                            <td>8000</td>
                        </tr>
                        <tr>
                            <td>22 junio</td>
                            <td>2000</td>
                            <td>0</td>
                            <td>8000</td>
                        </tr>

                    </table>
                </div>
            </div>
        </section>
      
    </div>
</body>

</html>