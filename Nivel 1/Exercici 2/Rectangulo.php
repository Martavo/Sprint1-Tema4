<?php

class Rectangulo extends Shape{
        
    public function calculoArea(){
        echo "El area del rectangulo es: " . $this -> ancho * $this -> alto;
    }

}

$rectangulo1 = new Shape("4", "4");
$rectangulo1 -> calculoArea();

?>