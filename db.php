<?php
// Define la conexión simple a la base de datos para uso en Modelos
// Se usará la variable global $conn para mantener la conexión.
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "mi_ecommerce"; 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
