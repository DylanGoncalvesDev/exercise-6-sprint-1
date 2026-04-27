<?php
//Parte 3//
require "Calculable.php";
require "Shape.php";
require "Circulo.php";
require "Rectangulo.php";
require "Triangulo.php";

$circulo1 = new Circulo (23);
$rectangulo1 = new Rectangulo (12 , 5);
$triangulo1 = new Triangulo (17 , 33);

//llamamos al metodo magico invoke//
echo $circulo1() . "\n";
echo $triangulo1() . "\n";
echo $rectangulo1() . "\n";

//llamamos al metodo magico toString//
echo $circulo1 . "\n";
echo $rectangulo1 . "\n";
echo $triangulo1 . "\n";

?> 

