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
            background-color: #7b7b7a; 
            padding: 20px";
        }
    </style>
</head>
<body>
    <h2>Ejercicios</h2>
    <p>Introduce un número entre 1 y 10 (3 intentos)</p>
    <form action="Ejercicio1WhileBreak.php" method="post">
        <label for="numero">Numero: </label>
        <input type="text" name="numero"placeholder="Introduce un número">
        <input type="submit" value="Enviar">
    </form>
    <?php
    $numero_aleatorio = rand(1,4);
    $intentos = 0;
    $esIgual = false;
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero']; // introducimos un numero entre 1 y 10
        while ($intentos <= 3) {
            
            if($numero == $numero_aleatorio){
                echo "<p>HAS ACERTADO No al ". $intentos . " intento No: " . $numero_aleatorio . "</p>";
                session_unset();
                break;
            } elseif($intentos == 3) {
                echo "<p>HAS PERDIDO No: {$intentos} el numero era {$numero_aleatorio} </p>";
                session_unset();
                break;
            } else {
                echo "<p>HAS FALLADO No. intentos: " . $intentos . "</p>";
                $intentos++;
                break;
            }
        }
    echo "<br>Finalizando programa...";
}
    ?>
    <p>FIN</p>
</body>
</html>