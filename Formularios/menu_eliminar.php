<!DOCTYPE html>
<html lang="es">

<head>
    <title>Eliminar Producto</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_eliminar.css" />
    <script src="../js/jquery.min.js"></script>
    <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
</head>

<body>
    <?php require_once 'barraLateral.php'; ?>


    <div id="palabras">
        <?php

        if (isset($_GET['mensaje'])) {
            $mensaje = $_GET['mensaje'];
            if ($mensaje == 'exitoso') {
                echo 'Se eliminó';
            }
            if ($mensaje == 'error') {
                echo 'No se pudo eliminar';
            }
        }
        ?>

        <section id="principal_notas">
            <header id="encabezado">
                <h2>Eliminar Producto</h2>
            </header>
            <div id="formulario">
                <form action="#" method="POST">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fecha" min="2020-01-01" max="2100-12-31"></br></br>

                    <label for="codigo">Ingresa Codigo de Barra</label>
                    <input type="text" name="codigo" id="codigo" placeholder="escaneo codigo" required />

                    <div id="div1">

                        <table>
                            <tr>
                                <td class=color>Codigo de Barras</td>
                                <td class=color>Proveedor</td>
                                <td class=color>Nombre del producto</td>
                                <td class=color>Costo Compra</td>
                                <td class=color>Costo Venta</td>
                                <td class=color>Cantidad de Piezas</td>
                                <td class=color>Piezas por Caja</td>
                                <td class=color>Cantidad de Cajas</td>
                                <td class=color>Precio Venta</td>
                                <td class=color>Precio Compra</td>
                            </tr>

                            <?php
                            require_once '../Clases/busqueda_para_eliminacion.php';

                            while ($muestra = mysqli_fetch_array($busqueda)) {
                                echo '<tr>';
                                echo '<td>' . $muestra['codigo_barras'] . '</td>';
                                echo '<td>' . $muestra['proveedor'] . '</td>';
                                echo '<td>' . $muestra['nombre_producto'] . '</td>';
                                echo '<td>' . "<a href='../Clases/eliminar_registro.php?res=$muestra[codigo_barras]'>" . 'eliminar' . '</a>' . '</td>';
                            }
                            ?>
                        </table>

                    </div>
                    <span id="botonEnviar"><input type="submit" value="Eliminar producto" /></span>
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