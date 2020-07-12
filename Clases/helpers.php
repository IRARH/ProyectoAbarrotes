<?php

function mostrarErrores($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = '<strong style="color:red">'. $errores[$campo]."</strong>";
    }

    return $alerta;
}

function borrarErrores(){
    $_SESSION['errores'] = null;
    //$resultado = session_unset($_SESSION['errores']);
    session_unset();

    //return $resultado;
}