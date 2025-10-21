<?php
// Datos de conexión
$servername = "localhost";
$username = "root"; // Usuario por defecto de XAMPP en Linux
$password = "";     // Contraseña por defecto (vacía)
$dbname = "mi_ecommerce"; // Nombre de la BD que creaste

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    // Si la conexión falla, se detiene la ejecución del script
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer el juego de caracteres a UTF-8
$conn->set_charset("utf8");

// NOTA: Para un proyecto real, las credenciales no deben estar aquí directamente.
?>