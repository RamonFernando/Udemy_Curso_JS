<?php
// app/models/User.php

class User {
    private $db;
    private $table = 'users';

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    // Registrar nuevo usuario
    public function register($username, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO $this->table (username, email, password) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$username, $email, $hashedPassword]);
    }

    // Iniciar sesión de usuario
    public function login($username, $password) {
        $query = "SELECT * FROM $this->table WHERE username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$username]);
        // fetch() es un método de la clase PDOStatement, que representa una consulta a la base de datos. 
        // Con fetch(), puedes obtener una fila a la vez del resultado de una consulta.
        $user = $stmt->fetch(PDO::FETCH_ASSOC); // devuelve cada fila como un array asociativo, donde los nombres de las columnas son las claves.
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }

    // Verificar si el usuario o email ya existen
    public function userExists($username, $email) {
        $query = "SELECT * FROM $this->table WHERE username = ? OR email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$username, $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
