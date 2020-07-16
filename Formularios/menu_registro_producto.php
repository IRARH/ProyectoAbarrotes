<!DOCTYPE html>
<html lang="es">
<head>
    <title>Dar de alta un Producto Nuevo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_registro_producto.css" />
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
                <h2>Registro de Productos </h2>
            </header>
            <div id="formulario">
                <form action="../Clases/registrarProducto.php" method="POST">

                    
                    <label for="codigo">Codigo de Barras</label>
                    <input type="text" name="codigo" id="codigo" placeholder="escaneo código" required  />

                    <label for="proveedor">Nombre del Proveedor</label>
                    <select name="proveedor">
                    <?php 
                        require_once '../Clases/conexion.php';
                        $conexion = conexion();

                        //consulta para obtener proveedores 
                        $query = mysqli_query($conexion, "SELECT* FROM proveedores");
                        if(mysqli_num_rows($query) > 0):
                            while($mostrar = mysqli_fetch_assoc($query)):
                    ?>
                        <option><?= $mostrar['nombre']; ?></option>
                    <?php 
                            endwhile;
                        endif;
                    ?>
                    </select>

                    <label for="marca">Nombre del Producto</label>
                    <input type="text" name="producto" id="marca" placeholder="producto" required />

                    <label for="costo_compra">Costo Compra</label>
                    <input type="text" name="costo_compra" id="costo_compra"  placeholder="costo compra" required />

                    <label for="costo_venta">Costo Venta</label>
                    <input type="text" name="costo_venta" id="costo_venta" placeholder="costo venta" required />

                    <label for="piezas_caja">Piezas por Caja</label>
                    <input type="text" name="piezas_caja" id="piezas_caja" pattern="[0-9]+" placeholder="piezas por caja" required />

                    <label for="cantidad_cajas">Cantidad de Cajas</label>
                    <input type="text" name="cantidad_cajas" id="cantidad_cajas" pattern="[0-9]+" placeholder="cantidad cajas" required />

                    <span id="botonEnviar"><input type="submit" value="Registrar producto" /></span>



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