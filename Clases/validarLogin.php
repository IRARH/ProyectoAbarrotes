<?php
session_start();
if(isset($_POST)){

    //recoger los valores del formulario login
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //Validar los datos de los campos 
    if(!is_numeric($usuario) && !preg_match("/[0,9]/", $usuario)){
        echo "Error en el nombre";
    }
}