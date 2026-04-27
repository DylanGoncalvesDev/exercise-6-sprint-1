<?php
class Rectangulo extends Shape {

   public function calcularArea (): string {
        $area = $this-> getAncho() * $this-> getAlto();
        return "El Area del Rectangulo es: " . $area;
   }
}

?> 