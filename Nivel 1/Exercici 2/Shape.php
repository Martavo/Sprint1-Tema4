<?php
    class Shape{
        //Atributos
        public $ancho;
        public $alto;

        //Constructor: nos evita llamar a los setters
        function __construct($ancho, $alto){
            $this -> ancho = $ancho;
            $this -> alto = $alto;
        }

        //Getters
        public function get_ancho(){
            return $this -> ancho;
        }
        public function get_alto(){
            return $this ->alto;
        }

        //Metodo base de calculo area
        public function calculoArea(){
        }



    }
?>