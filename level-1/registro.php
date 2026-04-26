<?php
session_start();

if (!empty($_POST["usuario"]) && !empty($_POST["email"]) && !empty($_POST["contrasena"])) {
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $contraseña = $_POST["contrasena"];
    
    $_SESSION["usuario"] = $usuario; 

    echo $usuario . " " . $email . " " . $contraseña;

}

?> 