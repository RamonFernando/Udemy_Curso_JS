<?php
// Iniciar sesión para manejar datos del usuario
session_start();

// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'login_tutorial');

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombre_usuario, $nombre_usuario);
    $stmt->execute();
    $stmt->store_result();

    // Si el usuario existe
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $contraseña_hash);
        $stmt->fetch();

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
        }
    } else {
        echo "El usuario o correo electrónico no existen.";
    }

    // Cerrar consulta
    $stmt->close();
}

// Cerrar conexión
$conn->close();
?>
