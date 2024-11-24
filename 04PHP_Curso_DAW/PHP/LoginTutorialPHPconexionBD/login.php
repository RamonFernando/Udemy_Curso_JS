<?php
// Iniciar sesión para manejar datos del usuario
session_start();

// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'login_tutorial');

// Verificar conexión
if ($conn->connect_error) {  // connect_error se utiliza para verificar si hay un error al intentar conectarse a una base de datos en PHP
    die("Conexión fallida: " . $conn->connect_error); // die() se utiliza para terminar el script y mostrar un mensaje de error
}

// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {  // $_SERVER["REQUEST_METHOD"] se utiliza para obtener el metodo de envio de la peticion HTTP
    // Obtener datos del formulario
    $nombre_usuario = $_POST['nombre_usuario'];
    $contraseña = $_POST['contraseña'];

    // Validar que los campos no estén vacíos
    if (empty($nombre_usuario) || empty($contraseña)) {
        echo "Por favor, completa todos los campos.";
        exit();
    }

    // Verificar si el usuario existe
    $sql = "SELECT id, contraseña FROM usuarios WHERE nombre_usuario = ? OR correo_electronico = ?";
    $stmt = $conn->prepare($sql);    // Prepara una sentencia para ser ejecutada en la base de datos
    $stmt->bind_param("ss", $nombre_usuario, $nombre_usuario); // Asociar variables a la sentencia
    $stmt->execute();                       // ejecuta la consulta preparada con los valores proporcionados por bind_param
    $stmt->store_result();                  // Devuelve true en caso de exito o false en caso de error

    // Si el usuario existe
    if ($stmt->num_rows > 0) {          // num_rows — Devuelve el número de filas de un conjunto de resultados de una sentencia mysqli_stmt::$num_rows
        $stmt->bind_result($id, $contraseña_hash); // Devuelve true en caso de exito o false en caso de error
        $stmt->fetch();                 // Obtiene una fila como un array asociativo

        // Verificar contraseña
        if (password_verify($contraseña, $contraseña_hash)) {
            // Iniciar sesión exitosamente
            $_SESSION['usuario_id'] = $id;
            $_SESSION['nombre_usuario'] = $nombre_usuario;

            // Redirigir a la página protegida
            header("Location: pagina_protegida.php");
            exit();
        } else {
            echo "Contraseña incorrecta.";
            echo "<br><a href='javascript:history.back()'>Volver</a>";
        }
    } else {
        echo "El usuario o correo electrónico no existen.";
        // Mostramos un enlace a la pagina anterior
        echo "<br><a href='javascript:history.back()'>Volver</a>";
    }

    // Cerrar consulta
    $stmt->close();
}

// Cerrar conexión
$conn->close();
?>
