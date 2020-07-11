<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesión</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Estilos/styles.css"/>
</head>
<body>
    <section id="principal">
        <header id="encabezado"><h2>Tienda Estrella</h2>
            <h4>Administración</h4>
        </header>
        
        <div id="formulario">    
            <form action="../Clases/validarLogin.php" method="POST">
                <label for="usuario">Ingresa usuario</label>
                <input type="text" name="usuario" required placeholder="Usuario"/>
                
                <label for="password">Password</label>
                <input type="password" name="password" minlength="7" required placeholder= "Contraseña"/>
                
                <span id="final"><input type="submit" value="Iniciar Sesión"/>
                <p><a href="#">¿Olvidaste tu contraseña?</a></p>
            </form>
        </div>
            
    </section>
</body>
</html>