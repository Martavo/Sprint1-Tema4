<?php
class PokerDice{
    // Atributos
    protected $dado = array("As", "K", "Q", "J", 7, 8);
    public $recuentoTiradas = 0;
    public static $tiradaActual;



    // Función para tirar un dado de manera aleatoria
    public function throw() {
        $valorAleatorio = array_rand($this->dado);
        $this->tiradaActual = $this->dado[$valorAleatorio];
        $this->recuentoTiradas++;
    }

    // Función para indicar el valor de la última tirada
    public function shapeName(){
        return $this->tiradaActual;
    }

    // Mostrar el nombre total de tiradas
    public function getTotalThrows(){
        return $this->recuentoTiradas;
    }

}
?>