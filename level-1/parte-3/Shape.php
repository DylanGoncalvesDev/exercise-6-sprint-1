<?php
abstract class Shape implements Calculable {
 private $ancho = 0;
 private $alto = 0;

 public function __construct (int|float $ancho , int|float $alto) {
    $this->ancho = $ancho;
    $this->alto = $alto;
 }

  public function getAncho () : int|float {
    return $this-> ancho;
  }
  public function getAlto () : int|float {
     return $this-> alto;
  }

  public function setAncho (int|float $ancho) {
     $this-> ancho = $ancho;
  }
  public function setAlto (int|float $alto) {
     $this-> alto = $alto;
  }      

}

?> 