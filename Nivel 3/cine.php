<?php
    class cine{
        //Atributos
        private $nombre;
        private $poblacion;
        private $lista_peliculas = [];

        //Constructor
        public function __construct($nombre, $poblacion) {
            $this->nombre = $nombre;
            $this->poblacion = $poblacion;
        }

      

        //Getters y setters
        public function setNombre(){
            return $this $nombre -> nombre;
        }
        public function setPoblacion(){
            return $this $poblacion -> poblacion;
        }

        public function getNombre(){
            return $this $nombre -> nombre;
        }
        public function getPoblacion(){
            return $this $poblacion -> poblacion;
        }

        //Metodos de la clase

        public function agregarPelicula($pelicula) {
            $this->lista_peliculas[] = $pelicula;
        }


        public function mostrarDatosPeliculas(){
            echo "El cine" . $this->getNombre() . "situado en la población de " . $this->getPoblacion() . " tiene las siguientes peliculas en cartelera:" . "\n"; 
            //Accedemos a los atributos de cada cine
            foreach($this->lista_peliculas as $pelicula){
                echo "La pelicula titulada: " . $pelicula ->getNombrePelicula() . "con una duracion de " . $pelicula->getDuracion() . " de duracion. Y dirigida por " . $pelicula->getDirector() . "\n";
            }
            //Accedemos a los atributos de cada pelicula, de cada respectivo cine
        }

        public function buscarPeliculaLarga() {
        $peliculaMasLarga = null;
        foreach ($this->lista_peliculas as $pelicula) {
            if (!$peliculaMasLarga || $pelicula->getDuracion() > $peliculaMasLarga->getDuracion()) {
                $peliculaMasLarga = $pelicula;
            }
        }
        return $peliculaMasLarga;
    }
}
?>
