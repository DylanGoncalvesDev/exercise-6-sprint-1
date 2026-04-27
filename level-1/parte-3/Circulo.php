<?php
class Circulo implements Calculable {
private $radio = 0;

public function __construct (int|float $radio) {
   $this->radio = $radio;
}

public function getRadio(): int|float {
    return $this->radio;
}
    
public function setRadio(int|float $radio) {
    $this->radio = $radio;
}

public function calcularArea(): int|float {
    $area = M_PI * ($this->radio * $this->radio);
    return $area;
}

public function __invoke(): int|float {
   return $this->calcularArea();
}

public function __toString(): string {
      return "Un Circulo con el Radio de: " . $this->radio; . " y su Area de: " $this->calcularArea();
}

}

?> 