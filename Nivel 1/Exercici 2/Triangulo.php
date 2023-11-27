<?php

class Triangulo extends Shape{
      
    public function calculoAreaTriangulo(){
        return "El area del triangulo es: " . $this -> ancho * $this -> alto * 0.5;
    }
    $triangulo = new Shape();
    $triangulo = __construct("4", "4");
    echo $triangulo::calculoAreaTriangulo();

}


?>