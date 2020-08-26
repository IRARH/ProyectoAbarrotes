<!DOCTYPE html>
<html lang="es">
<head>
    <title>Estadísticas de Notas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_estadisticas_notas.css" />
    <script src="../js/jquery.min.js"></script> <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
</head>
<body>
    <?php require_once 'barraLateral.php'; ?>
    <div id="contenedor">
        <div id="formulario_busqueda">
            <h2 id='titulo_estadistica'>Estadísticas de Notas</h2>
            <h3>Busqueda Especifica</h3>
            <form action="../Clases/busquedaNota.php" method="POST">
          <?php
                    require_once '../Clases/conexion.php';
                    ?>
                        <label for="tienda">Destinatario</label>
                    <?php 
                        $queryDestinatarios = mysqli_query(conexion(), "SELECT * FROM tiendas"); ?>
                        <label for="select">Elige destinatario</label><select id="select" name="tienda">
                            <?php
                            while ($tiendas = mysqli_fetch_assoc($queryDestinatarios)) : ?>
                                <option><?= $tiendas['nombre'] ?> </option>
                        <?php endwhile;
                        ?>
                        </select>
                <label id='fecha'>Fecha </label>
                <input type="date" id="fecha" name="fecha"  min="2020-01-01" max="2100-12-31">

                <input type="submit" value="BUSCAR" />
            </form>
        </div>
        </section>
        <section id="productos_generales">
            <header id="encabezado">

                <form id="busqueda_rango" action="#" method="POST">
                    <h2>Busqueda por Rango</h2>

                    <label id='tienda'>Seleccionar Tienda</label>
                    <select name="tienda" id="tienda">
                        <option>Rayo</option>
                        <option>Estrella</option>
                    </select>

                    <label id='fecha_inicial'>Fecha Inicial</label>
                    <input type="date" id="fecha_inicial" name="fecha_inicial" min="2020-01-01" max="2100-12-31">

                    <label id='fecha_final'>Fecha Final</label>
                    <input type="date" id="fecha_final" name="fecha_final" min="2020-01-01" max="2100-12-31">

                    <input type="submit" value="BUSCAR" />
                </form>
        </section>
</body>
</html>