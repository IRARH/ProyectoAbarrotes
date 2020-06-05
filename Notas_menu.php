<!DOCTYPE html>
<html>

<head>
    <title>Crear Nota</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="styles_menu_notas.css" />
</head>


<body>
    <div class="navegacion">
        <img src="estrella_logo.png" height="70px" width="90px"/>
        <img id="menu" src="principal.png" height="30px" width="30px" /><a href="menu.php">Menú Principal</a>
        <img id="nuevo" src="registronuevo.png" height="30px" width="30px" /><a href="menu_registro.php">Registrar Nuevo</a>
        <img id="actualizar" src="actualizar.png" height="30px" width="30px" /><a href="#">Actualizar Stock</a>
        <img id="eliminar" src="eliminar.png" height="30px" width="30px" /><a href="#">Eliminar Producto</a>
        <img id="buscar" src="buscar.png" height="30px" width="30px" /><a href="#">Ver y Buscar</a>
        <img id="nota" src="nota.png" height="30px" width="30px" /><a href="Notas_menu.php">Registrar Nota</a>
        <img id="estadistica" src="estadisticas.png" height="30px" width="30px" /> <a href="#">Estadísticas</a>
    </div>

    <nav id="principal">
        <h2>Tienda de abarrotes estrella</h2>
    </nav>

    <div id="palabras">
        <section id="principal_notas">

            <header id="encabezado">
                <h2>Registro de Nota </h2>
            </header>

            <div id="formulario">

                <form action="#" method="POST">
                    <label for="codigo_barra">Ingresa Codigo de Barra</label>
                    <input type="text" name="correo" id="correo" required placeholder="" />
                    <label for="destinatario">Destinatario</label>
                    <input type="text" name="correo" id="correo" required placeholder="" />

                    <div id="div1">
                        <table>
                            <tr>
                                <td class=color>Codigo de Barras</td>
                                <td class=color> Nombre de Producto</td>
                                <td class=color>Marca</td>
                                <td class=color>Tipo</td>
                                <td class=color>Cabtidad</td class=color>
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

                    <input type="text1" name="correo" id="correo" value="$2500" required placeholder="" />
                </form>

            </div>
            <div id="final">
                <input type="submit" value="Crear nota" />

            </div>
        </section>






</body>

</html>