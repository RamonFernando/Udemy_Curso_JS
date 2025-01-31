<?php 
// 5. Escriba un script PHP para obtener la dirección IP del cliente.
echo "Ejercicio 5 <br>";
if(!empty($_SERVER['HTTP_CLIENT_IP']))
    $ip = $_SERVER['HTTP_CLIENT_IP'];
else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
else
    $ip = $_SERVER['REMOTE_ADDR'];

echo "IP: ". $ip;
echo "<br><br>";

// 6. Escribe un script de detección de navegador PHP simple.
echo "Ejercicio 6 <br>";
echo "Navegador: " .$_SERVER['HTTP_USER_AGENT'];
echo "<br><br>";

// 7. Escriba un script PHP para obtener el nombre de archivo actual.
echo "Ejercicio 7 <br>";
echo "Ruta: ". $_SERVER['PHP_SELF'];
echo "<br>";
echo "Nombre del Archivo: " .  basename($_SERVER['PHP_SELF']);

echo "<br><br>";
// 8. Escribe un script PHP, que devolverá los siguientes componentes de la url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'.
echo "Ejercicio 8 <br>";
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';

// Parse the URL and store its components in the $url variable
$url = parse_url($url);

// Display the scheme (protocol) of the parsed URL
echo 'Scheme : ' . $url['scheme'] . "<br>";

// Display the host (domain) of the parsed URL
echo 'Host : ' . $url['host'] . "<br>";

// Display the path of the parsed URL
echo 'Path : ' . $url['path'] . "<br>";

// 9. Escribe un script PHP, que cambia el color del primer carácter de una palabra.
// Cadena de muestra : Tutorial PHP

// 10. Escribe un script PHP, para comprobar si la página se llama desde 'https' o 'http'.

?>