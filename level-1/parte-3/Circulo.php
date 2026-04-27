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

public function calcularArea(): string {
    $area = M_PI * ($this->radio * $this->radio);
    return "El area del Circulo es: " . $area;
}

}

?> 