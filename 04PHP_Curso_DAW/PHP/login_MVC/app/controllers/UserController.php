<?php
// app/controllers/UserController.php

require_once 'app/models/User.php';

class UserController {
    private $db; // Conexión a la base de datos
    private $userModel; // Modelo de usuario

    public function __construct($dbConnection) { // Constructor
        $this->db = $dbConnection; // Conexión a la base de datos
        $this->userModel = new User($this->db); // Modelo de usuario
    }

    // Acción de registro
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Procesar el formulario
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($this->userModel->userExists($username, $email)) { // Verificar si el usuario o email ya existen
                echo "El nombre de usuario o correo electrónico ya están en uso.<br>";
                echo "<a href='index.php?action=login'>Volver a iniciar sesión</a>";
            } else {
                if ($this->userModel->register($username, $email, $password)) { // Registrar nuevo usuario
                    echo "Registro exitoso. <a href='index.php?action=login'>Inicia sesión aquí</a>.";
                } else {
                    echo "Error en el registro.";
                }
            }
        } else {
            // Mostrar el formulario de registro
            require 'app/views/register.php'; // Mostrar el formulario de registro
        }
    }

    // Acción de inicio de sesión
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Si es una solicitud POST
            // Procesar el formulario
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->login($username, $password); // Obtener el usuario true o false

            if ($user) { // Si el usuario es verdadero
                session_start();
                $_SESSION['user_id'] = $user['id']; // Almacena el ID del usuario en la sesión
                $_SESSION['username'] = $user['username']; // Almacena el nombre de usuario en la sesión
                /**
                 * Este parámetro adicional action=protected puede usarse en index.php para realizar una 
                 * acción específica, como mostrar una página protegida o indicar que el acceso está restringido.
                 */
                header("Location: index.php?action=protected");
                exit(); // Se asegura de que el código PHP no se ejecute despues de la redirección
            } else {
                echo "Nombre de usuario o contraseña incorrectos.<br>";
                echo "<a href='index.php?action=login'>Volver a iniciar sesión</a>";
                
            }
        } else {
            // Mostrar el formulario de inicio de sesión
            require 'app/views/login.php';
        }
    }

    // Acción para mostrar la página protegida
    public function protectedPage() {
        session_start();
        if (!isset($_SESSION['user_id'])) { // Si no hay una sesión iniciada
            header("Location: index.php?action=login");
            exit();
        }
        $username = $_SESSION['username']; // Obtener el nombre de usuario
        require 'app/views/protected.php'; // Mostrar la página protegida
    }

    // Acción para cerrar sesión
    public function logout() {
        session_start(); // Iniciar la sesión
        $_SESSION = array(); // Destruye todas las variables de sesión
        session_destroy(); // Destruye la sesión actual
        header("Location: index.php?action=login"); // Redirige al formulario de inicio de sesión
        exit(); // Se asegura de que el código PHP no se ejecute despues de la redirección
    }
}
