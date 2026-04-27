<?php
class Triangulo extends Shape {
  
   public function calcularArea (): string {
        $area = ($this-> getAncho() * $this-> getAlto()) / 2;
        return "El Area del Triangulo es: " . $area;
   }
}

?> 