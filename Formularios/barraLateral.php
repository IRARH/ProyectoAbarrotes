<?php session_start(); ?>

    <div class="navegacion">
        <img id="estrella" src="Imagenes/estrella_logo.png" height="70px" width="90px" />
        <img src="Imagenes/principal.png" height="25px" width="25px" /><a href="menu.php">Menú Principal</a>
        <img src="Imagenes/registronuevo.png" height="25px" width="25px" /><a href="menu_registro.php">Registro Nuevo</a>
        <img src="Imagenes/actualizar.png" height="30px" width="25px" /><a href="menu_actualizar.php">Actualizar Stock</a>
        <img src="Imagenes/eliminar.png" height="25px" width="25px" /><a href="menu_eliminar.php">Eliminar Producto</a>
        <img src="Imagenes/buscar.png" height="25px" width="25px" /><a href="menu_ver_y_buscar.php">Ver y Buscar</a>
        <img src="Imagenes/nota.png" height="25px" width="25px" /><a href="menu_notas_registrar_nota.php">Registrar Nota</a>
        <img src="Imagenes/estadisticas.png" height="25px" width="25px" /> <a href="menu_estadisticas_notas.php">Estadísticas Notas</a>
        <img src="Imagenes/inventario.png" height="25px" width="25px" /><a href="menu_estadisticas_inventario.php">Inventario</a>
    </div>
    <nav id="principal">
        <h2 style="font-family: 'Helvetica';">Tienda de abarrotes estrella</h2>

        <?php if(isset($_SESSION['usuario'])){ ?>

        <div id="salir">
            <h5 id="sesion" style="font-family: 'Helvetica';"><?= $_SESSION['usuario']['user'];  ?></h5>
            <h5 style="font-family: 'Helvetica';"><a  href="../Clases/cerrarSesion.php">Salir</a></h5>
        </div>

        <?php }else{  
            header("Location:index.php");
            }
        ?>
    </nav>
    
