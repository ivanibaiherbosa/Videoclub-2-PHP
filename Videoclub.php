<?php

include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Juego.php";
include_once "Soporte.php";
include_once "Cliente.php";


class videoclub {

    private string $nombre;
    private array $productos = []; // ARRAY DE SOPORTES
    private int $numProductos = 0; // INICIALIZAMOS ATRIBUTO
    private array $socios = []; //ARRAY DE CLIENTES
    private int $numSocios = 0; // INICIALIZAMOS ATRIBUTO

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

//METODO incluirProducto PRIVADO PARA AÑADIR UN PRODUCTO AL ARRAY DE PRODUCTOS

    private function incluirProducto(Soporte $producto): void {
        $this->productos[] = $producto;
        $this->numProductos++;
    }

//METODOS PUBLICOS PARA AÑADIR TIPOS DE SOPORTES 
// AL ARRAY $productos A TRAVÉS DEL MÉTODO PRIVADO incluirProducto    

    public function incluirCintaVideo(string $titulo, int $numero, float $precio, 
    int $duracion): void {
     $cinta = new CintaVideo($titulo, $numero, $precio, $duracion);
     $this->incluirProducto($cinta);
    }
    
    public function incluirDvd(string $titulo, int $numero, float $precio, 
    string $idiomas, string $formatPantalla): void {
        $dvd = new Dvd($titulo, $numero, $precio, $idiomas, $formatPantalla);
        $this->incluirProducto($dvd);
    }

    public function incluirJuego(string $titulo, int $numero, float $precio, 
    string $consola, int $minNumJugadores, int $maxNumJugadores): void {
        $juego = new Juego($titulo, $numero, $precio, $consola, $minNumJugadores, $maxNumJugadores);
        $this->incluirProducto($juego);
    }

//METODO PARA AÑADIR UN SOCIO AL ARRAY DE SOCIOS DEL VIDEOCLUB

public function incluirSocio(string $nombre, int $maxAlquilerConcurrente = 3): void {
    $numeroSocio = $this->numSocios + 1; // ASIGNA +1 SOCIO AUTOMATICAMENTE
    $socio = new Cliente($nombre, $numeroSocio, $maxAlquilerConcurrente);
    $this->socios[] = $socio;
    $this->numSocios ++;
}


// METODO PARA LISTAR TODOS LOS PRODUCTOS 

public function listarProductos(): void {
        echo "Lista de productos del videoclub" . $this->nombre . ":<br>";
        foreach ($this->productos as $producto) {
            $producto->muestraResumen();
            echo "<br>";
     }
 }

// METODO PARA LISTAR TODOS SOCIOS

public function listarSocios(): void {
    echo "Lista de socios del videoclub" . $this->nombre . ":<br>";
    foreach ($this->socios as $socio) {
        $socio->muestraResumen();
        echo "<br>";
    }
}

//METODO PARA ALQUILAR UN PRODUCTO A UN SOCIO

public function alquilarSocioProducto(int $numeroCliente, int $numeroSoporte): void {
    foreach ($this->socios as $socio) {
        if ($socio->getNumero() === $numeroCliente) {
            foreach ($this->productos as $producto) {
        if ($producto->getNumero() === $numeroSoporte) {
            $socio->alquilarSoporte($producto);
            return;
        }
    }
    echo "Producto con número " . $numeroSoporte . "no encontrado.<br>";
    return;
}


}

echo "Producto con numero" . $numeroSoporte . "no encontrado <br>";

}

}

?>