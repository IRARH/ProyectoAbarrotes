<!DOCTYPE html>
<html lang="es">

<head>
    <title>Estadísticas de Notas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_estadisticas_notas.css" />
    <link rel="icon" type="image/x-icon" href="./Imagenes/favicon.ico" />
    <script src="../js/jquery.min.js"></script>
    <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
</head>

<body>
    <?php require_once 'barraLateral.php'; ?>

    <div id='contenedor'>
        <?php
        if (isset($_GET['mensaje'])) :
            if ($_GET['mensaje'] == 'sinDatosEspecificos') :
                echo "<div id='mensajeExistente'>No hay datos para visualizar con la fecha especificada</div>";
                header("Refresh: 3; URL=menu_estadisticas_notas.php");
            endif;
            if ($_GET['mensaje'] == 'sinDatosRango') :
                echo "<div id='mensajeExistente'>No hay datos para visualizar con el rango de fechas especificado</div>";
                header("Refresh: 3; URL=menu_estadisticas_notas.php");
            endif;
        endif;
        ?>

        <div id="formulario_busqueda">
            <h1 id="titulo_principal">Estadísticas de Notas </h1>
            <h2 id="titulo_secundarioEspecifico">Busqueda Especifica</h2>
            <form action="../Clases/busquedaNota.php" method="POST">
                <?php
                require_once '../Clases/conexion.php';
                ?>
                <?php
                $queryDestinatarios = mysqli_query(conexion(), "SELECT * FROM tiendas"); ?>
                <label for="select">Elige destinatario</label><select name="tienda">
                    <?php
                    while ($tiendas = mysqli_fetch_assoc($queryDestinatarios)) : ?>
                        <option><?= $tiendas['nombre'] ?> </option>
                    <?php endwhile;
                    ?>
                </select>
                <label>Fecha </label>
                <input type="date" id="fecha" name="fecha" min="2020-01-01" max="2100-12-31">

                <input type="submit" value="BUSCAR" />
            </form>
        </div>

        </section>
        <section id="productos_generales">
            <header id="encabezado">

                <form action="../Clases/busquedaNotaRango.php" method="POST">

                    <h2 id="titulo_secundarioRango">Busqueda por Rango</h2>
                    <?php
                    $queryDestinatarios = mysqli_query(conexion(), "SELECT * FROM tiendas"); ?>
                    <label for="select">Elige destinatario</label><select id="select" name="tienda">
                        <?php
                        while ($tiendas = mysqli_fetch_assoc($queryDestinatarios)) : ?>
                            <option><?= $tiendas['nombre'] ?> </option>
                        <?php endwhile;
                        ?>
                    </select>


                    <label>Fecha Inicial</label>
                    <input type="date" id="fecha_inicial" name="fecha_inicial" min="2020-01-01" max="2100-12-31">

                    <label>Fecha Final</label>
                    <input type="date" id="fecha_final" name="fecha_final" min="2020-01-01" max="2100-12-31">

                    <input type="submit" value="BUSCAR" />
                </form>
        </section>
        <?php require_once 'footer.php' ?>
</body>

</html>