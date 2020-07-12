<!DOCTYPE html>
<html lang="es">

<head>
    <title>Estadísticas de Notas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_estadisticas_inventario.css" />
    <script src="../js/jquery.min.js"></script> <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
</head>

<body>
    <?php require_once 'barraLateral.php'; ?>

    <div id="contenedor">
        <div id="formulario_busqueda">
            <h2 id='titulo_estadistica'>Estadísticas de Inventario</h2>
            <h2 id='titulo_reg'>Busqueda de Registro Entrada y Salida</h2>
            <form action="#" method="POST">
            
                <label id='fecha_final'>Fecha</label>
                <input type="date" id="fecha" name="fecha" min="2020-01-01" max="2100-12-31">
                <input type="submit" value="BUSCAR" />
                <br>
                <label id='inv_inicial'>Inventario Inicial</label>
                <input type="text" name="inv_inicial" id="inv_inicial"/>

                <label id='inv_final'>Inventario Incial</label>
                <input type="text" name="inv_final" id="inv_final" />

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
            <h2>Búsqueda por Rango</h2>
            <form action="#" method="POST">
                <label id='fecha_inicia'>Fecha Inicial</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" min="2020-01-01" max="2100-12-31">

                <label id='fecha_final'>Fecha Final</label>
                <input type="date" id="fecha_termino" name="fecha_termino"min="2020-01-01" max="2100-12-31">
               
                <input type="submit" value="BUSCAR" />
            </form>   
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
        <footer>
	        Abarrotes Estrella &copy;

	        <a href="#" class="subir">Ir arriba</a>
        </footer>
    </div>
</body>

</html>