<!-- - Como leer desde un archivo php un fichero txt.
- Cuando consigas leerlo lo guardes en un array asociativo y que calcule la media y 
que notas ham superado el 5 -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            font-family: 'Gill Sans MT';
            background-color: #7b7b7a;
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php
    $nombre_archivo = 'Notas.txt';
    $manejador = fopen($nombre_archivo, 'r'); // Abrir el archivo en modo lectura ('r')

    if ($manejador) {
        // Iterar sobre cada línea del archivo hasta que no haya más
        while (!feof($manejador)) {
            $linea = fgets($manejador); // Leer una línea
            echo $linea . "<br>"; // Mostrar la línea con un salto de línea HTML
        }
        fclose($manejador); // Cerrar el archivo
    } else {
        echo "Error al abrir el archivo";
    }
    ?>
</body>

</html>