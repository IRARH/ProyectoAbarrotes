<!DOCTYPE html>
<html lang="es">
<head>
    <title>Visualizar y realizar búsquedas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_ver_y_buscar.css" />
    <script src="../js/jquery.min.js"></script> <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script footer -->
    <script src="../js/peticionAjax.js"></script><!-- Script petición -->
</head>
<body>
    <?php require_once 'barraLateral.php'; ?>
   
    <div id="contenedor">
   
        <div id="formulario_busqueda">
            <h2> Búsqueda general dentro de la tabla productos </h2>

            <input type="text" name="busqueda" id="busqueda" placeholder="Búsqueda..."/> 
        </div>

        <section id="productos_busqueda">

            <header id="encabezado">
                <h2>Resultado</h2>
            </header>

            <div id="div1">
                <!-- se imprimirá aquí tabla con los datos de la búsqueda -->
            </div>
            
        </section>
    
        <?php require_once 'footer.php' ?>
    </div>
</body>
</html>