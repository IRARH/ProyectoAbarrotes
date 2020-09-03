<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar Precios</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_notas_registrar_nota.css" />
    <link rel="icon" type="image/x-icon" href="./Imagenes/favicon.png" />
    <script src="../js/jquery.min.js"></script>
    <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
</head>

<body>
    <?php require_once 'barraLateral.php'; ?>
    <div id="palabras">
        <?php
        if (isset($_GET['mensaje'])) :

            if ($_GET['mensaje'] == "cancelado") :
                echo "<div id='mensajeExitoso'>Nota cancelada </div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($_GET['mensaje'] == "notaGenerada") :
                echo "<div id='mensajeExitoso'>Nota Generada </div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($_GET['mensaje'] == "codigoInexistente") :
                echo "<div id='mensajeNoExistente'>No existen datos con el código de barras proporcionado</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($_GET['mensaje'] == "codigoExistente") :
                echo "<div id='mensajeExistente'>Producto existente en la Nota</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($_GET['mensaje'] == 'exitoso') :
                echo "<div id='mensajeExitoso'>Datos agregados a la Nota</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($_GET['mensaje'] == 'error') :
                echo "<div id='mensajeError'>Hubo un error al agregar datos a la nota</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($_GET['mensaje'] == 'actualizacionCorrecta') :
                echo "<div id='mensajeExitoso'>Datos actualizados en nota</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($_GET['mensaje'] == 'actualizacionFallida') :
                echo "<div id='mensajeError'>Datos no actualizados en nota</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($_GET['mensaje'] == 'eliminacionCorrecta') :
                echo "<div id='mensajeExitoso'>Producto eliminado de nota</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($_GET['mensaje'] == 'eliminacionnFallida') :
                echo "<div id='mensajeError'>Error para eliminar producto de nota</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($_GET['mensaje'] == "sinDatos") :
                echo "<div id='mensajeExistente'>No hay datos para generar una nota</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($_GET['mensaje'] == "noDatos") :
                echo "<div id='mensajeExistente'>No hay datos para cancelar</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($_GET['mensaje'] == 'sinDatosVer') :
                echo "<div id='mensajeExistente'>No hay datos para visualizar en Nota</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;            
        endif;

        ?>

        <section id="principal_notas">
            <header id="encabezado">
                <h2>Registro de Nota </h2>
            </header>
            <div id="formulario">
                <form id="formValidar" action="menu_descuento_nota.php" method="POST">
                    <?php
                    require_once '../Clases/conexion.php';

                    $query = mysqli_query(conexion(), "SELECT * FROM ventas");
                    if (mysqli_num_rows($query) > 0) {
                        $cont = 0;
                        $tienda = "";
                        $queryTienda = mysqli_query(conexion(), "SELECT destinatario FROM ventas");
                        while ($destinatario = mysqli_fetch_assoc($queryTienda)) :
                            $tienda = $destinatario['destinatario'];
                            $cont++;
                            if ($cont == 1) {
                                break;
                            }
                        endwhile;

                    ?>
                        <label for="tienda">Destinatario</label>
                        <input type="text" name="tienda" id="tienda" value="<?= $tienda ?>" readonly /><br><br />
                    <?php } else {
                        $queryDestinatarios = mysqli_query(conexion(), "SELECT * FROM tiendas"); ?>
                        <label for="select">Elige destinatario</label><select id="select" name="tienda">
                            <?php
                            while ($tiendas = mysqli_fetch_assoc($queryDestinatarios)) : ?>
                                <option><?= $tiendas['nombre'] ?> </option>
                        <?php endwhile;
                        } ?>
                        </select><br />

                        <label for="codigo">Ingresa Codigo de Barra</label>
                        <input type="text" name="codigo" id="codigo" autofocus required />

                        <span id="botonValidar"><input type="submit" value="Validar existencia producto" /></span>
              
                </form>
                <span id="botonVerNota"><input type="submit" value="Previsualizar Nota " onclick="location.href='pdfGenerador.php'"/></span>

                <form action="../Clases/generar_nota.php" method="POST">
                    <header id="notas">
                        <h2>Datos en nota </h2>
                    </header>
                    <div id="div1">
                        <table>
                            <tr>
                                <td class=color>Codigo de Barras</td>
                                <td class=color>Nombre producto</td>
                                <td class=color>Destinatario</td>
                                <td class=color>Cantidad salida</td>
                                <td class=color>Precio venta</td>
                                <td class=color>Subtotal</td class=color>
                                <td colspan="2" class=color>Opción</td>
                            </tr>
                            <?php
                            $query = "select v.codigo_barras, p.nombre_producto, v.destinatario, v.cantidad_retiro, v.precio_venta, v.subtotal from ventas v 
                            INNER JOIN productos p ON p.codigo_barras = v.codigo_barras";
                            $productos_en_nota = mysqli_query(conexion(), $query);
                            $subtotal = 0;
                            if (mysqli_num_rows($productos_en_nota) > 0) :
                                while ($datos = mysqli_fetch_assoc($productos_en_nota)) :
                                    $subtotal += $datos['subtotal'];
                            ?>
                                    <tr>
                                        <td><?= $datos['codigo_barras'] ?></td>
                                        <td><?= $datos['nombre_producto'] ?></td>
                                        <td><?= $datos['destinatario'] ?></td>
                                        <td><?= $datos['cantidad_retiro'] ?></td>
                                        <td><?= $datos['precio_venta'] ?></td>
                                        <td><?= $datos['subtotal'] ?></td>
                                        <td colspan="2"><a id="editar" href="./menu_descuento_nota_actualizar.php?codigo=<?= $datos['codigo_barras'] ?>&destinatario=<?= $datos['destinatario'] ?> ">Editar</a>
                                        <a id="eliminar" href="../Clases/eliminar_producto_nota.php?codigo=<?= $datos['codigo_barras'] ?>">Eliminar</a></td>
                                    </tr>
                            <?php

                                endwhile;
                            endif;
                            ?>
                        </table>
                    </div>

                    <label class="label1">Subtotal</label>
                    <input type="text1" name="total" id="total" value="<?= $subtotal ?>" />

                    <span id="botonGenerarNota"><input type="submit" value="Generar Nota" /></span>
                </form>

                    <span id="botonCancelarNota"><input type="submit" value="Cancelar Nota" onclick="location.href='../Clases/cancelarNota.php'" /></span>
               

            </div>
        </section>
        <?php require_once 'footer.php' ?>
</body>

</html>