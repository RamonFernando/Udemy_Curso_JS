<?php
include 'db.php';

// CREATE
if (isset($_POST['crear'])) {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];

  $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
  if ($conn->query($sql) === TRUE) {
    echo "Registro creado con éxito";
  } else {
    echo "Error al crear registro: " . $conn->error;
  }
}

// READ
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "SELECT * FROM usuarios WHERE id = '$id'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "Nombre: " . $row["nombre"] . "<br>";
      echo "Email: " . $row["email"] . "<br><br>";
    }
  } else {
    echo "No se encontraron registros";
  }
}

// UPDATE
if (isset($_POST['actualizar'])) {
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];

  $sql = "UPDATE usuarios SET nombre = '$nombre', email = '$email' WHERE id = '$id'";
  if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado con éxito";
  } else {
    echo "Error al actualizar registro: " . $conn->error;
  }
}

// DELETE
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "DELETE FROM usuarios WHERE id = '$id'";
  if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado con éxito";
  } else {
    echo "Error al eliminar registro: " . $conn->error;
  }
}

$conn->close();
?>