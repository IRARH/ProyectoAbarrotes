<?php require_once '../Clases/helpers.php';
session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Inicio de sesión</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles.css" />
    <link rel="icon" type="image/x-icon" href="./Imagenes/favicon.ico" />
</head>

<body>
    <?php
    $error = null;
    if (isset($_GET['error'])) :
        $error = $_GET['error'];
    endif;
    ?>
    <section id="principal">
        <header id="encabezado">
            <h1>Tienda Estrella</h1>
            <h2>Administración</h2>
        </header>

        <?php echo $error == "error" ? '<div id="errorLogin">El nombre de usuario y/o la contraseña que ingresaste no coinciden con nuestros registros. Por favor, revisa tus credenciales e inténtalo de nuevo.</div><br/><br/>' : ''; ?>

        <div id="formulario">
            <form action="../Clases/validarLogin.php" method="POST">
                <label for="usuario">Ingresa usuario</label>
                <input type="text" name="usuario" required />
                <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'usuario') . "<br/><br/>" : ''; ?>

                <label for="password">Password</label>
                <input type="password" name="password" required />
                <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'password') : ''; ?>

                <span id="final"><input type="submit" value="Iniciar Sesión" />
                    <p><a href="#">Registrar nuevo usuario</a></p>
            </form>
            <?php borrarErrores(); ?>
        </div>

    </section>
</body>

</html>