<?php
include_once('Cine.php');
include_once('Pelicula.php');

//Instanicar los cines:
$cine1 = new Cine("Ocine", "Vendrell");
$cine2 = new Cine("Cinesa", "Terrassa")

// Instanciar las películas y agregarlas a los cines
$cine1->agregarPelicula(new Pelicula("Siete reyes deben morir", "111", "Edward Bazalgette"));
$cine1->agregarPelicula(new Pelicula("Leo", "102", "David Wachtenheim"));
$cine2->agregarPelicula(new Pelicula("Mari(dos)", "101", "Lucía Alemany"));
$cine2->agregarPelicula(new Pelicula("Oppenheimer", "180", "Christopher Nolan"));


/*Array de todos los cines*/
$cines = [$cine1, $cine2];

//Menu de opciones
do {
    
    switch ($eleccion) {
        case 0:
            echo "Gracias por usar la aplicación" . PHP_EOL;
            break;

        case 1:
            mostrarTodosCines($cines);
            break;
    
        case 2:
            buscarPeliculaLarga($cines);
            break;

        case 3:
           
            break;
    
        default:
            echo "Opción no valida";
    }

} while ($eleccion != 0);

// Función para mostrar todos los datos
function mostrarTodosCines($cines) {
    foreach ($cines as $cine) {
        $cine->mostrarDatosPeliculas();
    }
}

// Función para buscar la película más larga de cada cine
function buscarPeliculaLarga($cines) {
    foreach ($cines as $cine) {
        $peliculaLarga = $cine->buscarPeliculaLarga();
        if ($peliculaLarga) {
            echo "En el cine " . $cine->getNombre() . " la película más larga es: " . $peliculaLarga->getNombrePelicula() . " con una duración de " . $peliculaLarga->getDuracion() . " minutos.\n";
        } else {
            echo "El cine " . $cine->getNombre() . " no tiene películas en cartelera.\n";
        }
    }
}

// Función para buscar películas por director
function buscarPorDirector($cines, $nombreDirector) {
    $peliculasEncontradas = [];
    foreach ($cines as $cine) {
        foreach ($cine->lista_peliculas as $pelicula) {
            if ($pelicula->getDirector() == $nombreDirector && !in_array($pelicula, $peliculasEncontradas)) {
                $peliculasEncontradas[] = $pelicula;
                echo "En el cine " . $cine->getNombre() . " se encontró la película: " . $pelicula->getNombrePelicula() . " dirigida por " . $nombreDirector . ".\n";
            }
        }
    }
}
?>