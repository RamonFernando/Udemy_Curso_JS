<?php
/** 
 *  2.- Modifica el programa anterior para que no aparezcan los múltiplos de 5 sino que, al final, 
* simplemente se muestre la suma de todos ellos. Utiliza un bucle while.
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <style>
        body{
            text-align: center;
            font-family: 'Gill Sans MT';
            background-color: #ded6c9;
            padding: 20px";
        }
    </style>
</head>
<body>
    <h2>Ejercicio 2</h2>
    <p>Suma de los multiplos de 5 entre 1 y 1000 </p>
    <?php
        $i = 5;
        $suma = 0;
        while ($i <= 1000){
            if($i % 5 == 0){
                $suma += $i;
            }
            $i += 5;
        }
        echo "La suma de los multiplos de 5 es: $suma";
    ?>
</body>
</html>