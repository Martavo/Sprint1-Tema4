<?php

class Triangulo extends Shape{
      
    public function calculoArea(){
        echo "El area del triangulo es: " . $this -> ancho * $this -> alto * 0.5;
    }

}

$triangulo = new Shape("4", "4");
$triangulo -> calculoArea();
?>