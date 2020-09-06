<!DOCTYPE html>
<html lang="es">

<head>
    <title>Eliminar Producto</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_eliminar.css" />
    <link rel="icon" type="image/x-icon" href="./Imagenes/favicon.ico" />
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
                header("Refresh: 3; URL=menu_eliminar.php");
            endif;
            if ($mensaje == 'error') :
                echo "<div id='mensajeError'>Hubo un error en la eliminación</div>";
                header("Refresh: 3; URL=menu_eliminar.php");
            endif;

            if ($mensaje == 'sinDatos') :
                echo "<div id='mensajeError'>No existen datos con el código de barras proporcionado</div>";
                header("Refresh: 3; URL=menu_eliminar.php");
            endif;
        endif;
        ?>

        <section id="principal_notas">
            <header id="encabezado">
                <h1>Eliminar Producto</h1>
            </header>
            <div id="formulario">
                <form action="#" method="POST">
                    <label for="codigo">Código de Barras</label>
                    <input type="text" name="codigo" id="codigo" autofocus required />
                    <span id="botonEnviar"><input type="submit" value="Validar" /></span>
                    <div id="div1">
                </form>

                <form action="../Clases/eliminar_registro.php" method="POST">

                    <?php

                    if (isset($_POST['codigo'])) :
                        require_once '../Clases/conexion.php';
                        $codigo = $_POST['codigo'];
                        $obtenerDatos = mysqli_query(conexion(), "SELECT * FROM productos WHERE codigo_barras = '$codigo'");
                        if (mysqli_num_rows($obtenerDatos) > 0) :
                            while ($muestra = mysqli_fetch_assoc($obtenerDatos)) :
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

                                    echo '<tr>';
                                    echo '<td>' . $muestra['codigo_barras'] . '</td>';
                                    echo '<td>' . $muestra['proveedor'] . '</td>';
                                    echo '<td>' . $muestra['nombre_producto'] . '</td>';
                                    echo '<td>' . $muestra['costo_compra'] . '</td>';
                                    echo '<td>' . $muestra['costo_venta'] . '</td>';
                                    echo '<td>' . $muestra['piezas_caja'] . '</td>';
                                    ?>
                                </table>
                                <span id="botonEliminar"><input type="submit" value="Eliminar" name="btn_eliminar" id="btn_eliminar" /></span>
                 </form>
            </div>
            
                        <?php
                            endwhile;
                        endif;
                        if (mysqli_num_rows($obtenerDatos) == 0) :
                            header("Location:../Formularios/menu_eliminar.php?mensaje=sinDatos");
                        endif;
                    endif; ?>
            </div>
        </section>
    </div>
</body>

</html>