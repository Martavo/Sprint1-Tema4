<?php
    
    class Employee{
        //Atributos
        public $Nombre;
        public $Sueldo;

        //Metodo initialize
        public function Initialize($Nombre, $Sueldo){
            $this -> Nombre = $Nombre;
            $this -> Sueldo = $Sueldo;
        }

        //Creo setters y getters

        public function setNombre(){
        return $this -> Nombre;
        }
        public function setSueldo(){
            return $this ->Sueldo;
        }

        public function getNombre(){
            return $this ->Nombre;
        }
        public function getSueldo(){
            return $this ->Sueldo;
        }

        //Metodos
        public function calcularPagoImpuestos(){
            if ($this -> Sueldo >= 6000){
                return "Tiene que pagar impuestos";
            }else{
                return "No tiene que pagar impuestos";
            }
        }

    }

?>