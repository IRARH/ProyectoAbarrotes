<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar Precios</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_notas_registrar_nota.css" />
    <script src="../js/jquery.min.js"></script>
    <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
</head>

<body>
    <?php require_once 'barraLateral.php'; ?>

    <div id="palabras">

        <?php

        if (isset($_GET['mensaje'])) {
            if ($_GET['mensaje'] == "cancelado") {
                echo "<div id='mensajeCancelado'>Nota cancelada </div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            }
            if ($_GET['mensaje'] == "codigoInexistente") {
                echo "<div id='mensajeNoExistente'>No existen datos con el código de barras proporcionado</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            }

            if ($_GET['mensaje'] == "codigoExistente") {
                echo "<div id='mensajeNoExistente'>Producto Duplicado en la Nota</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            }
           
        }

        ?>

        <?php
        if (isset($_GET['mensaje'])) :
            $mensaje = $_GET['mensaje'];

            if ($mensaje == 'exitoso') :
                echo "<div id='mensajeExitoso'>Datos agregados a la Nota</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;

            if ($mensaje == 'error') :
                echo "<div id='mensajeError'>Hubo un error al agregar datos a la nota</div>";
                header("Refresh: 2; URL=menu_notas_registrar_nota.php");
            endif;
            endif
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
                        <input type="text" name="codigo" id="codigo" required />

                        <span id="botonValidar"><input type="submit" value="Validar existencia producto" /></span>
                </form>





                <form action="#" method="POST">
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
                            $query = "select v.codigo_barras, p.nombre_producto, v.destinatario, v.cantidad_retiro, v.precio_venta, v.subtotal from ventas v INNER JOIN productos p on p.codigo_barras = v.codigo_barras";
                            $productos_en_nota = mysqli_query(conexion(), $query);
                            if(mysqli_num_rows($productos_en_nota) > 0):
                                while($datos = mysqli_fetch_assoc($productos_en_nota)):
                                ?>
                            <tr>
                                <td><?= $datos['codigo_barras'] ?></td>
                                <td><?= $datos['nombre_producto'] ?></td>
                                <td><?= $datos['destinatario'] ?></td>
                                <td><?= $datos['cantidad_retiro'] ?></td>
                                <td><?= $datos['precio_venta'] ?></td>
                                <td><?= $datos['subtotal'] ?></td>
                                <td colspan="2"><a id="editar" href="#">Editar</a><a id="eliminar" href="#">Eliminar</a></td>
                            </tr>
                            <?php 
                                endwhile;
                            endif;
                            ?>
                        </table>
                    </div>

                    <label class="label1">Total</label>
                    <input type="text1" name="total" id="total" />

                    <span id="botonGenerarNota"><input type="submit" value="Generar Nota" /></span>
                </form>

                <form action="../Clases/cancelarNota.php">
                    <span id="botonCancelarNota"><input type="submit" value="Cancelar Nota" /></span>
                </form>

            </div>
        </section>
        <?php require_once 'footer.php' ?>
</body>

</html>