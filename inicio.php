<?php 
include_once "Soporte.php";
include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Juego.php";
include_once "Cliente.php";

// Definir $soporte1 como una instancia de CintaVideo
$soporte1 = new CintaVideo("Tenet", 22, 3, 120); // Cambia '120' al valor de duración deseado
$miCinta = new CintaVideo("los cazafantasmas", 23, 3.5, 107);
$miDvd = new Dvd("Origen", 24, 15, "es, en, fr", "16:9");
$miJuego = new Juego("the last of us", 26, 49, "ps4", 1, 1);

echo $soporte1->titulo;
echo "<br> precio: " . $soporte1->getPrecio() . " euros"; 
echo "<br> precio iva incluido: " . $soporte1->getPrecioConIva() . " euros";
echo "<br> el resumen es: " . $soporte1->muestraResumen();

echo "<br> ----------------------------------------------";

echo "<br>" . $miCinta->titulo;
echo "<br> Precio: " . $miCinta->getPrecio() . " euros";
echo "<br> precio iva incluido: " . $miCinta->getPrecioConIva() . " euros"; 
echo "<br> el resumen es: " . $miCinta->muestraResumen();

echo "<br> ----------------------------------------------";

echo "<br>". $miDvd->titulo;
echo "<br> Precio: ". $miDvd->getPrecio(). " euros";
echo "<br> precio iva incluido: " . $miDvd->getPrecioConIva() . " euros";
echo "<br> " . $miDvd->muestraResumen();

echo "<br> -----------------------------------------------";

echo "<br>". $miJuego->titulo;
echo "<br> Precio: " . $miJuego->getPrecio(). " euros";
echo "<br> precio con iva incluido: " . $miJuego->getPrecioConIva() . " euros";
echo "<br> jugadores posibles: ". $miJuego->muestraJugadoresPosibles();
echo "<br> ". $miJuego->muestraResumen();

echo "<br> -----------------------------------------------";

?>
