<?php
// Conexión a la base de datos
$host = 'localhost';
$dbname = 'login_tutorial'; // Asegúrate de que esta base de datos exista
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Crear un nuevo elemento
if (isset($_POST['create'])) {
    $name = trim($_POST['name']);
    if (!empty($name)) {
        $sql = $conn->prepare("INSERT INTO items (name) VALUES (?)");
        $sql->bind_param("s", $name);
        if (!$sql->execute()) {
            die("Error al insertar: " . $conn->error);
        }
        $sql->close();
    }
}

// Actualizar un elemento
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = trim($_POST['name']);
    if (!empty($id) && !empty($name)) {
        $sql = $conn->prepare("UPDATE items SET name = ? WHERE id = ?");
        $sql->bind_param("si", $name, $id);
        if (!$sql->execute()) {
            die("Error al actualizar: " . $conn->error);
        }
        $sql->close();
    }
}

// Eliminar un elemento
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    if (!empty($id)) {
        $sql = $conn->prepare("DELETE FROM items WHERE id = ?");
        $sql->bind_param("i", $id);
        if (!$sql->execute()) {
            die("Error al eliminar: " . $conn->error);
        }
        $sql->close();
    }
}

// Leer los elementos
$sql = "SELECT * FROM items";
$result = $conn->query($sql);

// Verificar si la consulta devolvió resultados
if (!$result) {
    die("Error al leer los datos: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida - CRUD</title>
    <link rel="stylesheet" href="stylePaginaProtegida.css">
</head>
<body>
    <div class="container">
        <h1>Guarda los enlaces de tus webs - CRUD</h1>

        <!-- Formulario para Crear un nuevo elemento -->
        <form method="POST" class="form">
            <input type="text" name="name" placeholder="Escribe un elemento" required>
            <button type="submit" name="create">Agregar</button>
        </form>

        <!-- Tabla para mostrar los elementos -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']); ?></td>
                        <td><?= htmlspecialchars($row['name']); ?></td>
                        <td>
                            <button onclick="editarElemento(<?= htmlspecialchars($row['id']); ?>, '<?= htmlspecialchars($row['name']); ?>')">Editar</button>
                            <a href="?delete=<?= htmlspecialchars($row['id']); ?>" class="delete">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        
    </div> <!-- .container -->
    <!-- Botones adicionales -->
    <div class="container buttons-container">
        <a href="https://portafoliofreelancer2024noviembre.netlify.app/" class="button-link">
            <button type="button" class="logout-btn">Portafolio</button>
        </a>
        <a href="https://github.com/RamonFernando?tab=repositories/" class="button-link" target="_blank" rel="noopener noreferrer">
                <button class="action-btn">Git</button>
            </a>
            <a href="https://chatgpt.com/c/67423814-a958-8007-af4d-25da7379ed7e/" class="button-link" target="_blank" rel="noopener noreferrer">
                <button class="action-btn">ChatGPT</button>
            </a>
            <a href="https://chatgpt.com/c/6732445d-08ec-8007-9d9f-2b1e6ee96d05#mvc/" class="button-link" target="_blank" rel="noopener noreferrer">
                <button class="action-btn">MVC</button>
            </a>
            <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=login_tutorial/" class="button-link" target="_blank" rel="noopener noreferrer">
                <button class="action-btn">BD</button>
            </a>
            <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=login_tutorial/" class="button-link" target="_blank" rel="noopener noreferrer">
                <button class="action-btn">WordPress</button>
            </a>
            <a href="https://idx.google.com/udemycursojsgit-1938822/" class="button-link" target="_blank" rel="noopener noreferrer">
                <button class="action-btn">Idx</button>
            </a>
            <form action="logout.php" method="POST" class="logout-form">
                <button type="submit" class="logout-btn">Cerrar Sesión</button>
            </form>
    </div>
    

    <!-- Modal para Editar un elemento -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <form method="POST">
                <h2>Editar Elemento</h2>
                <input type="hidden" name="id" id="editId">
                <input type="text" name="name" id="editName" required>
                <button type="submit" name="update">Actualizar</button>
                <button type="button" onclick="cerrarModal()">Cancelar</button>
            </form>
        </div>
    </div>

    <script>
        // Abrir el modal con los datos del elemento a editar
        function editarElemento(id, name) {
            document.getElementById('editId').value = id;
            document.getElementById('editName').value = name;
            document.getElementById('editModal').style.display = 'flex';
        }

        // Cerrar el modal
        function cerrarModal() {
            document.getElementById('editModal').style.display = 'none';
        }
    </script>
</body>
</html>
