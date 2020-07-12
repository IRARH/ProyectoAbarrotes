<?php require_once '../Clases/helpers.php'; session_start();?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesión</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles.css"/>
</head>
<body>
    <?php 
        $error = null;
        if(isset($_GET['error'])):
            $error = $_GET['error'];
        endif
    ?>
    <section id="principal">
        <header id="encabezado"><h2>Tienda Estrella</h2>
            <h4>Administración</h4>
        </header>

        <?php echo $error == "error" ? '<strong style=color:red>El nombre de usuario y/o la contraseña que ingresaste no coinciden con nuestros registros. Por favor, revisa e inténtalo de nuevo.</strong><br/><br/>' : ''; ?>

        <div id="formulario">    
            <form action="../Clases/validarLogin.php" method="POST">
                <label for="usuario">Ingresa usuario</label>
                <input type="text" name="usuario" required placeholder="Usuario"/>
                <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'usuario')."<br/><br/>" : ''; ?>

                <label for="password">Password</label>
                <input type="password" name="password" required placeholder= "Contraseña"/>
                <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'password') : ''; ?>

                <span id="final"><input type="submit" value="Iniciar Sesión"/>
                <p><a href="#">¿Olvidaste tu contraseña?</a></p>
            </form>
            <?php borrarErrores(); ?>
        </div>
            
    </section>
</body>
</html>