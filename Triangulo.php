<?php

class Triangulo extends Shape{
      
    public function calculoArea(){
        return $this -> ancho * $this -> alto * 0.5;
    }

}
?>