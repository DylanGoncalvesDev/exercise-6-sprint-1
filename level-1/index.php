<?php
session_start();

if (!empty($_POST["usuario"]) && !empty($_POST["email"]) && !empty($_POST["contraseña"])) {
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $contraseña = ["contraseña"];
    
    $_SESSION["usuario"] = $usuario; 

    echo $usuario . " " . $email . " " . $contraseña;

}

?> 