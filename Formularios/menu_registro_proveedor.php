<!DOCTYPE html>
<html lang="es">
<head>
    <title>Dar de alta un Proveedor</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_registro_proveedor.css" />
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
			</ul>
        </nav>
        <?php
            if(isset($_GET['mensaje'])):
                $mensaje = $_GET['mensaje'];

                if($mensaje == 'exitoso'):
                    echo "<strong id='mensaje'>Datos insertados correctamente</strong>";
                endif;
                
                if($mensaje == 'error'):
                    echo "<strong id='mensaje'>Hubo un error en la inserción</strong>";
                endif;
            endif;
        ?>
        <section id="registro">
            <header id="encabezado_registro">
                <h2>Registro de Proveedores </h2>
            </header>
            <div id="formulario">

                <form action="../Clases/registrarProveedor.php" method="POST">
                    <label for="proveedor">Nombre del Proveedor</label>
                    <input type="text" name="proveedor" id="proveedor" placeholder="proveedor" required />
                    <span id="botonEnviar"><input type="submit" value="Registrar proveedor" /></span>
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