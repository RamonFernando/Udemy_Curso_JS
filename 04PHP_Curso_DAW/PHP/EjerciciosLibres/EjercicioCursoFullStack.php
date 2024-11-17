<?php
    // El cuadrado de un numero las 40 primeras veces.
    /*$a = 1;
    while ($a <= 40) {
        $b = $a*$a;
        echo "$a x ". ($a). " = " . $b . "<br>";
        $a++;
    }*/

    // Recoger dos numero por la url (Parametro GET) y hacer todas las operaciones basicas
    // Suma, Resta, Multiplicacion y Division
    echo "Ejercicio de Calculadora<br>";
    if(isset($_GET['numero1']) && isset($_GET['numero2'])){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        
        echo "Calculadora";
        echo "Suma: " . $numero1 . " + " . $numero2 . " = " . ($numero1 + $numero2) . "<br>";
        echo "Resta: " . $numero1 . " - " . $numero2 . " = " . ($numero1 - $numero2) . "<br>";
        echo "Multiplicacion: " . $numero1 . " * " . $numero2 . " = " . ($numero1 * $numero2) . "<br>";
        echo "Division: " . $numero1 . " / " . $numero2 . " = " . ($numero1 / $numero2) . "<br>";
    }else{
        echo "No se han introducido dos numeros por la URL";
    }

?>