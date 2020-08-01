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

        <nav id="opciones">
            <ul>
                <li><a href="menu_notas_registrar_nota.php">Registrar Nota</a></li>
                <li><a href="menu_notas_actualizar_nota.php">Actualizar Nota</a></li>
            </ul>
        </nav>
        <section id="principal_notas">
            <header id="encabezado">
                <h2>Registro de Nota </h2>
            </header>
            <div id="formulario">
                <form action="#" method="POST">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fecha" min="2020-01-01" max="2100-12-31"></br></br>

                    <label for="codigo">Ingresa Codigo de Barra</label>
                    <input type="text" name="codigo" id="codigo" required placeholder="escaneo codigo" />

                    <label for="destinatario">Destinatario</label>
                    <input type="text" name="destinatario" id="destinatario" required placeholder="destinatario" />
                    <div id="div1">
                        <table>
                            <tr>
                                <td class=color>Codigo de Barras</td>
                                <td class=color> Nombre de Producto</td>
                                <td class=color>Marca</td>
                                <td class=color>Tipo</td>
                                <td class=color>Cantidad</td class=color>
                                <td class=color>Precio</td>
                                <td class=color>Subtotal</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Cerveza</td>
                                <td>Corona</td>
                                <td>Caguama</td>
                                <td>10</td>
                                <td>10</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Cerveza</td>
                                <td>Victoria</td>
                                <td>Caguama</td>
                                <td>10</td>
                                <td>10</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Cerveza</td>
                                <td>Tecate</td>
                                <td>Caguama</td>
                                <td>10</td>
                                <td>10</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>10201021</td>
                                <td>Frijol</td>
                                <td>Costeña</td>
                                <td>Lata</td>
                                <td>2</td>
                                <td>$15</td>
                                <td>30</td>
                            </tr>
                        </table>
                    </div>

                    <label class="label1">Total</label>
                    <input type="text1" name="total" id="total" required />
                    
                    <span id="botonEnviar"><input type="submit" value="Registrar producto" /></span>
                </form>
            </div>
        </section>
        <?php require_once 'footer.php' ?>
</body>

</html>