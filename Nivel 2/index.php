<?php
require_once "PokerDice.php";

// Inicializar instancia de PokerDice
$dado = new PokerDice();

// Procesar la opción del usuario
$opcion = $_POST['opcion'];
if (!empty($opcion)){
    switch ($opcion) {
        case "Tirar 1 dado":
            $dado->throw();
            echo "Valor de la tirada: " . $dado->shapeName(). "<br>";
            break;
    
        case "Tirar los 5 dados":
            for ($i = 0; $i < 5; $i++) {
                $dado->throw(); // Usar la misma instancia para todos los dados
                echo "Dado $i: " . $dado->shapeName(). "<br>";
            }
            break;
    
        case "Salir del juego":
            echo "El recuento total de tiradas es: " . $dado->getTotalThrows()."<br>";
            echo "Saliendo del juego. ¡Hasta luego!" . "<br>";
            break;
    
        default:
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Seleccione qué quiere realizar</label>
        <br>
        <select name="opcion">
            <option value="Tirar 1 dado">Tirar 1 dado</option>
            <option value="Tirar los 5 dados">Tirar los 5 dados</option>
            <option value="Salir del juego">Salir del juego</option>
        </select>
        <br>
        <button type="submit">Confirmar</button>
    </form>
</body>
</html>