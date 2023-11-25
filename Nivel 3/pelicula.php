<?php
    class pelicula extends cine{
    //Atributos
    private $nombrePelicula;
    private $duracion;
    private $director;

    //Constructor:
    public function __construct($nombrePelicula, $duracion, $director) {
        $this->nombrePelicula = $nombrePelicula;
        $this->duracion = $duracion;
        $this->director = $director;
    }

    //Getters

    public function getNombrePelicula(){
        return $this -> nombrePelicula;
    }
    public function getDuracion(){
        return $this -> duracion;
    }
    public function getDirector(){
        return $this -> director;
    }
}
?>