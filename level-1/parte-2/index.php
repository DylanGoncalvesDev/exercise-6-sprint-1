<?php
//Parte 2//
$a = 7;
$b = 5;
$limite = 4;

function informar ($funcion , $linea , $archivo): string {
   return "Se esta ejecutando la Funcion: " . $funcion . " En la Linea: " . $linea . " En el Archivo: " 
           . $archivo;
}

function saludar (): string {
   $info = informar(__FUNCTION__ , __LINE__ , __FILE__);
   return $info . "\n Hola Mundo";
}

function sumar (int|float $a, int|float $b): string {
   $info = informar(__FUNCTION__ , __LINE__ , __FILE__);
   $suma = $a + $b;
   return $info . "\n El resultado es: " . $suma;
}

function dibujar (int $limite): void {
   echo informar(__FUNCTION__ , __LINE__ , __FILE__) . "\n";
   for ($i=1; $i <= $limite ; $i++) { 
        for ($j=0; $j < $limite ; $j++) { 
             echo "*";
        } 
        echo "\n" ;
   }
}

echo "\n" . saludar();
echo "\n" . sumar($a , $b) . "\n";
dibujar($limite);

?> 