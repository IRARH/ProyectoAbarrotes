<!DOCTYPE html>
<html lang="es">

<head>
    <title>Productos a retirar en la Nota</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_menu_descuento_nota.css" />
    <script src="../js/jquery.min.js"></script> <!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script footer -->
    <script src="../js/peticionAjax_stock.js"></script><!-- Script petición -->
</head>

<body>
    <?php require_once 'barraLateral.php'; ?>

    <div id="palabras">

        <section id="registro">

            <header id="encabezado_registro">
                <h2>Ingreso de Productos a la Nota</h2>
            </header>

            <div id="formulario">
                <form action="../Clases/registrarProductoVenta.php" method="POST">
            <?php
            if(isset($_POST['codigo'])){
                require_once "../Clases/conexion.php";
                $codigo = $_POST['codigo'];
                $destinatario = $_POST['tienda'];

                $duplicado = mysqli_query(conexion(), "SELECT * FROM ventas WHERE codigo_barras ='$codigo'");
                if(mysqli_num_rows($duplicado) > 0){ 
                    header('Location:./menu_notas_registrar_nota.php?mensaje=codigoExistente');

                }  else{
                $query = mysqli_query(conexion(),"SELECT * FROM productos WHERE codigo_barras = '$codigo'"); 
                if(mysqli_num_rows($query) > 0){   
                while($datosProducto = mysqli_fetch_array($query)){
            ?>
                
                    <label for="proveedor">Código Barras</label>
                    <input type="text" name="codigo_barras" id="codigo_barras" value="<?= $datosProducto['codigo_barras'] ?>" readonly="readonly" required />

                    <label for="proveedor">Nombre del Proveedor</label>
                    <input id="soloLectura" type="text" name="proveedor" value="<?= $datosProducto['proveedor'] ?>" readonly="readonly" required />

                    <label for="nombre">Nombre del Producto</label>
                    <input id="apuntar" type="text" name="nombre" value="<?= $datosProducto['nombre_producto'] ?>" readonly="readonly" required />

                    <label for="costo_compra">Costo Compra</label>
                    <input id="soloLectura" type="text" name="costo_compra" value="<?= $datosProducto['costo_compra'] ?>" readonly="readonly" required />

                    <label for="costo_venta">Costo Venta</label>
                    <input id="soloLectura" type="text" name="costo_venta" value="<?= $datosProducto['costo_venta'] ?>" readonly="readonly" required />

                    <label for="cantidad_piezas">Stock de Piezas</label>
                    <input id="soloLectura" type="text1" name="cantidad_piezas" pattern="[0-9]+" readonly="readonly" value="<?= $datosProducto['cantidad_piezas'] ?>" required />

                    <label for="cantidadRetiro">Piezas a descontar</label>
                    <input  type="text1" name="cantidadRetiro" id="cantidadRetiro" pattern="{-}*[0-9]+" value="0" required /><br/>

                    <div id="mensajeStock">

                    </div>
                    
                    <input id="destinatario" type="hidden"  name="destinatario" value="<?= $destinatario ?>"  />
                    <span id="botonEnviar"><input type="submit" id="boton" value="Agregar a Nota" /></span>
                </form>


                <?php  } }else if(mysqli_num_rows($query) == 0){
                        header('Location:./menu_notas_registrar_nota.php?mensaje=codigoInexistente');
                } } } ?>

                
            </div>

            
        </section>
        <?php require_once 'footer.php' ?>
    </div>

</body>

</html>