<?php
class Rectangulo extends Shape {

   public function calcularArea (): int|float {
        $area = $this-> getAncho() * $this-> getAlto();
        return $area;
   }
    
   public function __invoke(): int|float {
      return $this->calcularArea();
   } 
 
   public function __toString(): string {
      return "Un Rectangulo con la Altura de: " . $this->alto; . ", la Anchura de: " . $this->ancho 
             . " y su Area de: " . $this->calcularArea();
   }
}
?> 