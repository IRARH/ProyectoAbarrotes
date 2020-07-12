<?php
session_start();
require_once 'conexion.php';

if(isset($_POST)){
    $error = "";

    //recoger los valores del formulario login
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //errores
    $errores = array();

    //Validar los datos de los campos 
    if(!is_numeric($usuario) && !preg_match("/[0-9]/", $usuario)){
        
    }else{
        $errores['usuario'] = "Usuario no válido, no puede contener números";
    }

    if(!empty($password) && strlen($password) >= 5){
        
    }else{
        $errores['password'] = "Longitud de contraseña muy corta, 5 caracteres mínimo";
    }


    if(count($errores) == 0){
        $query = "SELECT * FROM usuarios WHERE user = '$usuario' AND password = '$password'"; 
        $resultado = mysqli_query($conexion, $query);
        
        
        if(mysqli_num_rows($resultado) > 0 ){
            echo "<h2>login correcto, reedirigiendo...";
            header("Refresh: 2; URL=../Formularios/menu.php");
        }else{
            $error = "error";
            header("Location:../Formularios/index.php?error=$error");
        }
    }else{
        $_SESSION['errores'] = $errores;
        header('Location:../Formularios/index.php');
    }

}