<?php

class Cliente {

    public string $nombre;
    private int $numero;
    private array $soportesAlquilados = []; // array para almacenar los soportes que ha alquilado
    private int $numSoportesAlquilados = 0; // contador de alquileres realizados por elñ cliente
    private int $maxAlquilerConcurrente;
    
// constructor que a diferencia de Cintavideo, Dvd y Juego NO está sobreescrito
// ya que eso eran soportes y el cliente va a tener su propio constructor porque es un objeto distinto

public function __construct(string $nombre, int $numero,
 int $maxAlquilerConcurrente = 3) {    // maxAlquilerConcurrente para este cliente es 3 pero esto se puede modificar segun cliente

$this->nombre = $nombre;
$this->numero = $numero;
$this->maxAlquilerConcurrente = $maxAlquilerConcurrente;

 }

// Getter y setter de numero, de nombre no hace falta porque es public 

public function getNumero(): int {
    return $this->numero;
}

public function setNumero(int $numero): void {
    $this->numero = $numero;
}

// solamente getter de numSoportesAlquilados

public function getNumSoportesAlquilados(): int {
    return $this->numSoportesAlquilados;
}

// maxAlquilerConcurrente es private asi que hago un getter para acceder 
// en Inicio.php, no hago setter porque no necesito permitir cambios tras crear el objeto

public function getMaxAlquilerConcurrente(): int {
    return $this->maxAlquilerConcurrente;
}


// Método para alquilar un soporte

public function alquilarSoporte(Soporte $soporte): void {
    if ($this->numSoportesAlquilados < $this->maxAlquilerConcurrente) {
        $this->soportesAlquilados[] = $soporte;
        $this->numSoportesAlquilados++;
        echo "Soporte alquilado: " . $soporte->getTitulo() . "<br>";

    } else {
        echo "No se pueden alcanzar mas soportes, límite alcanzado. <br>";
    }
}

//Recorrer array soportesAlquilados y comprobar si el soporte ya está alquilado (no se puede usar)

public function tieneAlquilado(Soporte $S): bool {
    foreach ($this->soportesAlquilados as $soporteAlquilado) {
        if ($soporteAlquilado === $S) {
            return true; // si encuentra el soporte te devuelve true
        }
    }

    return false; // si no encuentra el soporte en soportesAlquilados devuelve false
}

// muestraResumen() para que en inicio.php aparezca el resumen del cliente elegido

public function muestraResumen(): void {
    echo "cliente: " . $this->nombre . "<br>";
    echo "Numero: " .  $this->getNumero() . "<br>";
    echo "Total de alquileres: " . count($this->soportesAlquilados) . "<br>";
}


// añado el metodo devolver para comprobar que el soporte estaba alquilado ya y actualizar
// la cantidad de soportes alquilados, tanto si esta alquilado como si no, muestra mensaje 

public function devolver(int $numSoporte): bool {
    foreach ($this->soportesAlquilados as $index => $soporte) {
        if ($soporte->getNumero() === $numSoporte) {
            unset($this->soportesAlquilados[$index]);
            $this->numSoportesAlquilados--;
            echo "Soporte con numero $numSoporte devuelto correctamente <br>";
            return true;
        
    }
}

echo "Soporte con numero $numSoporte no estaba alquilado <br>";
return false;

} 

// metodo listarAlquileres para informar de cuantos alquileres tiene el cliente

public function listarAlquileres(): void {
    $totalAlquileres = count($this->soportesAlquilados);
    echo "el cliente $this->nombre tiene $totalAlquileres alquileres <br>";

    foreach ($this->soportesAlquilados as $soporte) {
        echo "Titulo: " . $soporte->getTitulo() . " Numero: " . $soporte->getNumero() . 
        " Precio: " . $soporte->getPrecio() . " euros ";
    }

    if ($totalAlquileres === 0) {
        echo "No tiene ningún soporte alquilado <br>";
    }


}

}



?>