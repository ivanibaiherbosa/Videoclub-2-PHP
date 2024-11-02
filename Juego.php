<?php
include_once "Soporte.php";

class Juego extends Soporte {

    public string $consola;
    private int $minJugadores;
    private int $maxJugadores;

    public function __construct(string $titulo, int $numero, float $precio, string $consola, int $minJugadores, int $maxJugadores) {
        parent::__construct($titulo, $numero, $precio);
        $this->consola = $consola;
        $this->minJugadores = $minJugadores;
        $this->maxJugadores = $maxJugadores;
    }

    public function muestraJugadoresPosibles(): string {
        return "De $this->minJugadores a $this->maxJugadores jugadores";
    }

    public function muestraResumen() : string {
        return "Juego - Título: $this->titulo, Número: $this->numero, Precio: $this->precio euros (IVA no incluido), Consola: $this->consola, Jugadores: " . $this->muestraJugadoresPosibles();
    }
}
?>
