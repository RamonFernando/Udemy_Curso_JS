<?php
include("createBD.php");
echo "<h1>CRUD Simple</h1>";
// Depuración: Verifica qué datos llegan al script
echo "<pre>";
print_r($_POST); // Ver datos del formulario POST
print_r($_GET);  // Ver datos del formulario GET
echo "</pre>";
/*
CRUD en Mysql
INSERT INTO usuarios (nombre, email) VALUES ('$nombre','$email');
SELECT * FROM usuarios WHERE id = $id;
UPDATE usuarios SET nombre = '$nombre', email = '$email' WHERE id = $id;
DELETE FROM usuarios WHERE id = $id;
*/
// CREATE
if (isset($_POST['crear'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // realizamos consulta para insertar
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre','$email')";

    // comprobamos si el usuario ya existe en la base de datos
    /*$checkSql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND email = '$email'";
    $result = $conn->query($checkSql);
    if ($result->num_rows > 0) {
        echo "El usuario ya existe";
        exit();
    }*/

    // Comprobamos si la consulta se ha realizado correctamente
    // $conn almacena la conexión a la base de datos
    echo ($conn->query($sql) === TRUE) ?
        "Nuevo registro creado exitosamente" : "Error al crear el registro: " . $sql . "<br>" . $conn->error; // $conn->error devuelve el error de la consulta
}
// READ
if (isset($_GET['leer'])){
    $id = $_GET['id'];

    // realizamos consulta para leer
    $sql = "SELECT * FROM usuarios WHERE id = $id";

    // Comprobamos si la consulta se ha realizado correctamente
    // num_rows — Devuelve el número de filas de un conjunto de resultados de una sentencia mysqli_stmt::$num_rows
    // fetch_assoc() — Obtiene una fila de resultados como un arreglo asociativo
    $result = $conn->query($sql);   // result almacena el conjunto de resultados query realiza la consulta
    if ($result->num_rows > 0) { 
        while ($row = $result->fetch_assoc()) {
            echo "Nombre: " . $row["nombre"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "No se han encontrado registros";
    }
}
// UPDATE
if(isset($_POST['actualizar'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // realizamos consulta para actualizar
    $sql = "UPDATE usuarios SET nombre = '$nombre', email = '$email' WHERE id = $id";
    echo ($conn->query($sql) === TRUE ) ? "Registro actualizado con exito" : "Error al actualizar el registro: " . $conn->error;
}
// DELETE
if(isset($_GET['eliminar'])){
    $id = $_GET['id'];

    // realizamos consulta para borrar
    $sql = "DELETE FROM usuarios WHERE id = $id";
    echo ($conn->query($sql) === TRUE) ? "Registro borrado exitosamente" : "Error al borrar el registro: " . $sql . "<br>" . $conn->error;
}
// Cerrar conexión
$conn->close();
?>