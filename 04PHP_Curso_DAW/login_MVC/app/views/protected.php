<!-- app/views/protected.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Página Protegida</title>
    <link rel="stylesheet" href="../../assets/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Usamos htmlspecialchars() para evitar ataques XSS al mostrar el nombre de usuario. -->
    <h2>Bienvenido, <?php echo htmlspecialchars($username); ?>!</h2> 
    <p>Esta es una página protegida.</p>
    <a href="index.php?action=logout">Cerrar Sesión</a>
</body>
</html>
