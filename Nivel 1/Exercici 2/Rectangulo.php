<?php

class Rectangulo extends Shape{
        
    public function calculoAreaRectangulo(){
        return "El area del rectangulo es: " . $this -> ancho * $this -> alto;
    }

    $rectangulo1 = new Rectangulo("4", "4");
    echo $rectangulo1 -> calculoAreaRectangulo();
}



?>