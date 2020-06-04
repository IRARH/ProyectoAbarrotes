<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesión</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
    <section id="principal">
        <header id="encabezado"><h2>Tienda Estrella</h2>
            <h4>Administración</h4>
        </header>
        
        <div id="formulario">    
            <form action="#" method="POST">
                <label for="correo">Ingresa correo</label>
                <input type="email" name="correo" id="correo" required placeholder="Digita correo"/>
                
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required placeholder="Digita Contraseña"/>
                
            </form>
        </div>
        <div id="final">
            <input type="submit" value="Iniciar Sesión"/>
            <span><a href="#">¿Olvidaste tu contraseña?</a></span>
        </div>
    </section>
</body>
</html>