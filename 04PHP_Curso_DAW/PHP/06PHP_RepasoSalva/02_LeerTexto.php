<!-- - Como leer desde un archivo php un fichero txt.
- Cuando consigas leerlo lo guardes en un array asociativo y que calcule la media y 
que notas han superado el 5 -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            font-family: 'Gill Sans MT';
            background-color: #7b7b7a;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Notas</h1>
    <?php
    $nombre_archivo = 'Notas.txt';
    $manejador = fopen($nombre_archivo, 'r'); // Abrir el archivo en modo lectura ('r')

    $datos_txt = [];
    if ($manejador) {
        // Iterar sobre cada línea del archivo hasta que no haya más
        while (!feof($manejador)) {
            $linea = fgets($manejador); // Leer una línea
            echo $linea . "<br>"; // Mostrar la línea con un salto de línea HTML
            if ($linea) {
                $datos_txt[] = $linea; // Añadir la linea al array
                echo "<br>";
            }
        }
        echo "El total de alumnos es: " . count($datos_txt);
        echo "<br><br>";

        $notaMedia = 0;
        foreach ($datos_txt as $nota) {
            $delimitador = explode(";", $nota); // Divide la cadena por el delimitador ";"
            if ($delimitador[1] > 5) {
                // Divide la cadena por el delimitador ";" pos: 0 (nombre) y 1 (nota)
                echo "El alumno " . strtoupper($delimitador[0]) . " ha superado el 5 con una nota de " . $delimitador[1] . "<br>";
                echo "<br>";
            }else{
                echo "El alumno " . strtoupper($delimitador[0]) . " <strong>no</strong> ha superado el 5 con una nota de " . $delimitador[1] . "<br>";
                echo "<br>";
            }
            $notaMedia += $delimitador[1]/count($datos_txt);
        }
        echo "<br>";
        echo "La media de notas del curso es: " . $notaMedia . "<br>";
        echo "<br>";

        fclose($manejador); // Cerrar el archivo
    } else {
        echo "Error al abrir el archivo";
    }
    ?>
</body>
</html>