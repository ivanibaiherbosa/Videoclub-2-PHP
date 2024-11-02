<?php
include_once "Soporte.php";

class CintaVideo extends Soporte {

private int $duracion;

public function __construct(string $titulo, int $numero, 
float $precio, int $duracion) {

parent::__construct($titulo, $numero, $precio);

$this->duracion = $duracion;

}


public function muestraResumen() : string {
    return "Cinta de Video - Título: 
     $this->titulo, Número:
     $this->numero, Precio:
     $this->precio euros (IVA no incluido), Duración: 
     $this->duracion minutos<br>";
  
}

}

?>