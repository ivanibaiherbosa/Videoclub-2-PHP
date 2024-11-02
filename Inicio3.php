<?php
include_once "Videoclub.php"; // No incluimos nada más
$vc = new Videoclub("Severo 8A");

// Voy a incluir unos cuantos soportes de prueba

$vc->incluirJuego("God of War", 1, 19.99, "PS4", 1, 1);
$vc->incluirJuego("The Last of Us Part II", 2, 49.99, "PS4", 1, 1);
$vc->incluirDvd("Torrente", 3, 4.5, "es", "16:9");
$vc->incluirDvd("Origen", 4, 4.5, "es,en,fr", "16:9");
$vc->incluirDvd("El Imperio Contraataca", 5, 3.0, "es,en", "16:9");
$vc->incluirCintaVideo("Los cazafantasmas", 6, 3.5, 107);
$vc->incluirCintaVideo("El nombre de la Rosa", 7, 1.5, 140);

// Listo los productos
$vc->listarProductos();

// Voy a crear algunos socios
$vc->incluirSocio("Amancio Ortega");
$vc->incluirSocio("Pablo Picasso", 2);

// Alquilo productos a socios
$vc->alquilarSocioProducto(1, 2); // Socio 1 alquila el producto 2
$vc->alquilarSocioProducto(1, 3); // Socio 1 alquila el producto 3

// Intento alquilar otra vez el soporte 2 al socio 1 (debería fallar)
$vc->alquilarSocioProducto(1, 2);

// Intento alquilar el soporte 6 al socio 1 (debería fallar porque alcanza el límite de alquileres)
$vc->alquilarSocioProducto(1, 6);

// Listo los socios
$vc->listarSocios();

?>

