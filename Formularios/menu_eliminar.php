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

        if (isset($_GET['mensaje'])) :
            $mensaje = $_GET['mensaje'];

            if ($mensaje == 'exitoso') :
                echo "<div id='mensajeExitoso'>Eliminación de datos Correcta</div>";
                header("Refresh: 2; URL=menu_eliminar.php");
            endif;
            if ($mensaje == 'error') :
                echo "<div id='mensajeError'>Hubo un error en la eliminación</div>";
            endif;

            if ($mensaje == 'sin datos') :
                echo "<div id='mensajeExistente'>No hay datos para mostrar</div>";
                header("Refresh: 2; URL=menu_eliminar.php");
            endif;

        endif;
        ?>

        <section id="principal_notas">
            <header id="encabezado">
                <h2>Eliminar Producto</h2>
            </header>
            <div id="formulario">
                <form action="#" method="POST">
                    <label for="codigo">Ingresa Codigo de Barra</label>
                    <input type="text" name="codigo" id="codigo" placeholder="escaneo codigo" required />
                    <span id="botonEnviar"><input type="submit" value="Validar" /></span>
                    <div id="div1">
                </form>

                <form action="../Clases/eliminar_registro.php" method="POST">

                    <?php
                     
                    require_once '../Clases/busqueda_para_eliminacion.php';
                    while ($muestra = mysqli_fetch_array($busqueda)) {

                    ?>
                        <table>
                            <tr>
                                <td class=color>Codigo de Barras</td>
                                <td class=color>Proveedor</td>
                                <td class=color>Nombre del producto</td>
                                <td class=color>Costo Compra</td>
                                <td class=color>Costo Venta</td>
                                <td class=color>Cantidad de Piezas</td>
                            </tr>
                            <input type="text" name="codigo_barras" id="codigo_barras" style='display: none' value="<?php echo $muestra['codigo_barras'] ?> " />
                            <?php

                            // costo_compra, costo_venta, piezas_caja 

                            echo '<tr>';
                            echo '<td>' . $muestra['codigo_barras'] . '</td>';
                            echo '<td>' . $muestra['proveedor'] . '</td>';
                            echo '<td>' . $muestra['nombre_producto'] . '</td>';
                            echo '<td>' . $muestra['costo_compra'] . '</td>';
                            echo '<td>' . $muestra['costo_venta'] . '</td>';
                            echo '<td>' . $muestra['piezas_caja'] . '</td>';
                            //echo '<td>' . "<a href='../Clases/eliminar_registro.php?res=$muestra[codigo_barras]'>" . 'eliminar' . '</a>' . '</td>';
                            ?>
                        </table>
                        <span id="botonEliminar"><input type="submit" value="Eliminar" name="btn_eliminar" id="btn_eliminar" /></span>
            </div>
            </form>

        <?php } ?>



    </div>
    </section>
    <footer>
        Abarrotes Estrella &copy;
        <a href="#" class="subir">Ir arriba</a>
    </footer>
    </div>
</body>

</html>