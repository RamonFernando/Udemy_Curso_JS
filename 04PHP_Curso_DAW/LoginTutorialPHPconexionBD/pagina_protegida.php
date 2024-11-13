<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['nombre_usuario']; ?>!</h2>
    <p>Esta es una página protegida.</p>
    <p>Solo podras ver esta pagina si has iniciado sesión</p>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
