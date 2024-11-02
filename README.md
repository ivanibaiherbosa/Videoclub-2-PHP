Proyecto Videoclub 2.0
Antes de comenzar con la segunda parte del videoclub, crea una etiqueta mediante git tag
con el nombre v0.329 y sube los cambios a GitHub.

330. Modica las operaciones de alquilar, tanto en Cliente como en Videoclub , para dar
soporte al encadenamiento de métodos. Posteriormente, modica el código de prueba
para utilizar esta técnica.

331. Haciendo uso de namespaces:
Coloca todas las clases/interfaces en Dwes\ProyectoVideoclub
Cada clase debe hacer include_once de los recursos que emplea
Coloca el/los archivos de prueba en el raíz (sin espacio de nombres)
Desde el archivo de pruebas, utiliza use para poder realizar accesos sin cualicar
Etiqueta los cambios como v0.331 .


332. Reorganiza las carpeta tal como hemos visto en los apuntes: app , test y vendor .
Crea un chero autoload.php para registrar la ruta donde encontrar las clases
Modica todo el código necesario, incluyendo autoload.php donde sea necesario y
borrando los includes previos.


333. A continuación vamos a crear un conjunto de excepciones de aplicación. Estas
excepciones son simples, no necesitan sobreescribir ningún método. Así pues, crea la
excepción de aplicación VideoclubException en el namespace
Dwes\ProyectoVideoclub\Util . Posteriormente crea los siguientes hijos (deben heredar
de VideoclubException ), cada uno en su propio archivo:
SoporteYaAlquiladoException
CupoSuperadoException
SoporteNoEncontradoException
ClienteNoEncontradoException
2.- Cliente 1: Pablo Picasso
Alquileres actuales: 2


334. En Cliente , modica los métodos alquilar y devolver , para que hagan uso de las
nuevas excepciones (lanzándolas cuando sea necesario) y funcionen como métodos
encadenados. Destacar que estos métodos, no se capturar estás excepciones, sólo se
lanzan. En Videoclub , modica alquilarSocioPelicula para capturar todas las
excepciones que ahora lanza Cliente e informar al usuario en consecuencia.


335. Vamos a modicar el proyecto para que el videoclub sepa qué productos están o no
alquilados:
En Soporte , crea una propiedad pública cuyo nombre sea alquilado que
inicialmente estará a false . Cuando se alquile, se pondrá a true . Al devolver, la
volveremos a poner a false .
En Videoclub , crea dos nuevas propiedades y sus getters:
numProductosAlquilados
numTotalAlquileres


336. Crea un nuevo método en Videoclub llamado alquilarSocioProductos(int numSocio,
array numerosProductos) , el cual debe recibir un array con los productos a alquilar.
Antes de alquilarlos, debe comprobar que todos los soportes estén disponibles, de manera
que si uno no lo está, no se le alquile ninguno.


337. Crea dos nuevos métodos en Videoclub , y mediante la denición, deduce qué deben
realizar:
devolverSocioProducto(int numSocio, int numeroProducto)
devolverSocioProductos(int numSocio, array numerosProductos)
Deben soportar el encadenamiento de métodos. Recuerda actualizar la propiedad
alquilado de los diferentes soportes
