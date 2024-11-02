<?php

include_once "Soporte.php";
include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Juego.php";

class PruebaAbstracta extends Soporte {

    public function __construct(string $titulo, int $numero, float $precio) {
        parent::__construct($titulo, $numero, $precio);
    }

public function muestraResumen(): string {
    echo "Titulo: " . $this->titulo . " numero: " . $this->numero . " precio: " . $this->precio . "<br";
}

public function crearYMostrarSoportes() {
    $dvd = new Dvd ("Dvd abstracto", 25, 16, "es, en, fr", "16:9");
    $cintaVideo = new CintaVideo ("Cinta abstracta", 21, 3.5, 105);


    $dvd->muestraResumen();
    $cintaVideo->muestraResumen();
}

}

$prueba = new PruebaAbstracta("prueba abstracta", 3, 3);

$prueba->crearYMostrarSoportes();

?>