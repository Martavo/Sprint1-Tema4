<?php
require_once "Cine.php";
require_once "Pelicula.php";

//Instanicar los cines:
$cine1 = new Cine("Ocine", "Vendrell");
$cine2 = new Cine("Cinesa", "Terrassa");

// Instanciar las películas y agregarlas a los cines
$cine1->agregarPelicula(new Pelicula("Siete reyes deben morir", "111", "Edward Bazalgette"));
$cine1->agregarPelicula(new Pelicula("Leo", "102", "David Wachtenheim"));
$cine2->agregarPelicula(new Pelicula("Mari(dos)", "101", "Lucía Alemany"));
$cine2->agregarPelicula(new Pelicula("Oppenheimer", "180", "Christopher Nolan"));


/*Array de todos los cines*/
$cines = [$cine1, $cine2];

//Menu de opciones
$opcion = $_POST['opcion'];
switch ($opcion) {
    case "Salir de la aplicación":
        echo "Gracias por usar la aplicación";
        break;

    case "Mostrar peliculas":
        mostrarTodosCines($cines);
        break;
    
    case "Información de la pelicula más larga":
        buscarPeliculaLarga($cines);
        break;

    case "Buscar pelicula por director":
        $director = $_POST['director'];
        switch ($director) {
            case "Edward Bazalgette":
            case "David Wachtenheim":
            case "Lucía Alemany":
            case "Christopher Nolan":
                buscarPorDirector($cines, $director);
                break;
            default:
        }
        break;
    default:       
}

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
        foreach ($cine->getListaPeliculas() as $pelicula) {
            if ($pelicula->getDirector() == $nombreDirector && !in_array($pelicula, $peliculasEncontradas)) {
                $peliculasEncontradas[] = $pelicula;
                echo "En el cine " . $cine->getNombre() . " se encontró la película: " . $pelicula->getNombrePelicula() . " dirigida por " . $nombreDirector . ".\n";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
</head>
<body>
    <form action="menu.php" method="post">
        <label>Seleccione qué acción quiere realizar</label>
        <p></p>
        <select name="opcion">
            <option value="Salir de la aplicación">Salir de la aplicación</option>
            <option value="Mostrar peliculas">Mostrar peliculas</option>
            <option value="Información de la pelicula más larga">Información de la pelicula más larga</option>
            <option value="Buscar pelicula por director">Buscar pelicula por director</option>
        </select>
        <select name="director">
            <option value="Edward Bazalgette">Edward Bazalgette</option>
            <option value="David Wachtenheim">David Wachtenheim</option>
            <option value="Lucía Alemany">Lucía Alemany</option>
            <option value="Christopher Nolan">Christopher Nolan</option>
        </select>
        <p></p>
        <button type="submit">Confirmar</button>
    </form>
</body>
</html>