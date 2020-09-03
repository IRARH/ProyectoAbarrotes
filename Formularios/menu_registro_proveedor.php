<!DOCTYPE html>
<html lang="es">
<head>
    <title>Dar de alta un Proveedor</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_registro_proveedor.css" />
    <link rel="icon" type="image/x-icon" href="./Imagenes/favicon.png" />
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
                    echo "<div id='mensajeExitoso'>Datos insertados correctamente</div>";
                endif;
                
                if($mensaje == 'error'):
                    echo "<div id='mensajeError'>Hubo un error en la inserción</div>";
                endif;

                if($mensaje == 'existente'):
                    echo "<div id='mensajeExistente'>El proveedor ya existe</div>";
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
                    <input type="text" name="proveedor" id="proveedor" pattern="[A-Z]{1}[a-z ñ\s]+" required />
                    <span id="botonEnviar"><input type="submit" value="Registrar proveedor" /></span>
                </form>
            </div>
        </section>
    </div>
</body>
</html>