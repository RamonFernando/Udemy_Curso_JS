<?php
/** 
 * 
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
    <h2>Ejercicios</h2>
    <p>...</p>
    <?php
        
        // Genera un número aleatorio entre 1 y 10
        $numeroAleatorio = rand(1, 10);
        $intentos = 0;
        $acertado = false;
        
        echo "Adivina el número entre 1 y 10. Tienes 3 intentos.\n";
        
        // Bucle para dar al usuario hasta 3 intentos
        while ($intentos < 3) {
            $intentos++;
            echo "Intento $intentos: ";
            $adivinanza = (int)trim(fgets(STDIN)); // Lee la entrada del usuario
        
            if ($adivinanza === $numeroAleatorio) {
                $acertado = true;
                echo "¡Felicidades! Has acertado el número en $intentos intento(s).\n";
                break; // Termina el bucle si el usuario adivina correctamente
            } else {
                echo "No es correcto. ";
                if ($intentos < 3) {
                    echo "Inténtalo de nuevo.\n";
                }
            }
        }
        
        // Mensaje final si el usuario no acierta en 3 intentos
        if (!$acertado) {
            echo "Lo siento, no has acertado. El número era $numeroAleatorio.\n";
        }
        
    ?>
    <p>FIN</p>
</body>
</html>