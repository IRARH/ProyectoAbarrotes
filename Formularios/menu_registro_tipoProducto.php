<!DOCTYPE html>
<html lang="es">
<head>
    <title>Dar de alta un tipo de producto</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_registro_tipoProducto.css" />
    <script src="../js/jquery.min.js"></script> <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
</head>
<body>
    <?php require_once 'barraLateral.php'; ?>
    
    <div id="palabras">
        <nav id="opciones">
			<ul>
				<li><a href="menu_registro_producto.php">Registrar Producto</a></li>
				<li><a href="menu_registro_proveedor.php">Registrar Proveedor</a></li>
				<li><a href="menu_registro_tipoProducto.php">Registrar tipo de producto</a></li>
			</ul>
		</nav>
        <section id="registro">
            <header id="encabezado_registro">
                <h2>Registro de tipo de productos </h2>
            </header>
            <div id="formulario">
                <form action="#" method="POST">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fecha" min="2020-01-01" max="2100-12-31"></br></br>

                    <label for="tipo">Tipo de producto</label>
                    <input type="text" name="tipo" id="tipo" placeholder="tipo" required />

                    <label for="marca">Marca del producto</label>
                    <input type="text" name="marca" id="marca" placeholder="marca" required />
                    <span id="botonEnviar"><input type="submit" value="Registrar tipo" /></span>
                </form>
            </div>
        </section>
        <?php require_once 'footer.php' ?>
    </div>
</body>
</html>