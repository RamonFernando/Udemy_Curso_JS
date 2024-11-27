<!-- app/views/login.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../../assets/css/main.css">
    <meta charset="UTF-8" viewport="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="index.php?action=login" method="POST">
            <label>Nombre de usuario:</label>
            <input type="text" name="username" required>
            
            <label>Contraseña:</label>
            <input type="password" name="password" required>
            
            <button type="submit" class="btn btn-block">Iniciar Sesión</button>
        </form>
        <p><a href="index.php?action=forgot_password">¿Olvidaste tu contraseña?</a></p>
        <p>¿No tienes una cuenta? <a href="index.php?action=register">Regístrate aquí</a></p>
    </div>
</body>
</html>

