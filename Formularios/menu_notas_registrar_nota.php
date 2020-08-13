<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar Precios</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles_notas_registrar_nota.css" />
    <script src="../js/jquery.min.js"></script><!--Libreria Jquery -->
    <script type="text/javascript" src="../js/main.js"></script><!-- Script -->
</head>

<body>
    <?php require_once 'barraLateral.php'; ?>
    
    <div id="palabras">

       
        <section id="principal_notas">
            <header id="encabezado">
                <h2>Registro de Nota </h2>
            </header>
            <div id="formulario">
                <form id="formValidar" action="#" method="POST">

                    <label for="codigo">Ingresa Codigo de Barra</label>
                    <input type="text" name="codigo" id="codigo" required /><br>

                    <span id="botonEnviar"><input type="submit" value="Validar existencia producto"/></span>
                </form>

                <form>
                    <div id="div1">
                        <table>
                            <tr>
                                <td class=color>Codigo de Barras</td>
                                <td class=color>Nombre producto</td>
                                <td class=color>Destinatario</td>
                                <td class=color>Cantidad salida</td>
                                <td class=color>Precio venta</td>
                                <td class=color>Subtotal</td class=color>
                                
                            </tr>
                        </table>
                    </div>

                    <label class="label1">Total</label>
                    <input type="text1" name="total" id="total" required />
                    
                    <span id="botonEnviar"><input type="submit" value="Generar Nota"/></span>
                </form>
            </div>
        </section>
        <?php require_once 'footer.php' ?>
</body>

</html>