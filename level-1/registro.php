<?php
//Parte 1//
session_start();

 function procesarFormulario(): string {
  if (!empty($_POST["usuario"]) && !empty($_POST["email"]) && !empty($_POST["contrasena"])) {
      $usuario = $_POST["usuario"];
      $email = $_POST["email"];
      $contraseña = $_POST["contrasena"];
      $_SESSION["usuario"] = $usuario; 
   }

   return "Sus Datos Usuario: " . $usuario . "Email: " . $email . "y Contraseña: " . $contraseña 
           . "se han registrado correctamente";
}

echo procesarFormulario ();



?> 