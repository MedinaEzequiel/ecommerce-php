<?php
// PASO 1: Iniciar la sesión de PHP (CRUCIAL para Login y Carrito)
session_start();

// Definimos la ruta base para facilitar las inclusiones
define('ROOT_PATH', __DIR__ . '/');

// PASO 2: Cargar el archivo de conexión simple (crea la variable global $conn)
require_once(ROOT_PATH . 'db.php');

// PASO 3: Cargar los Controladores necesarios
require_once(ROOT_PATH . 'controlador/ProductoControlador.php');

// ----------------------------------------------------
// PASO 4: LÓGICA DEL ROUTING (EL SWITCH)
// ----------------------------------------------------

// Determina la acción a realizar. Por defecto, 'listar_productos'.
$action = isset($_GET['action']) ? $_GET['action'] : 'listar_productos';

// Instancia el controlador de productos
$productoControlador = new ProductoControlador();

switch ($action) {
    
    case 'listar_productos':
        $productoControlador->listarProductos();
        break;
        
    // Aquí se añadirán las acciones de Login, Carrito, etc.
    
    default:
        $productoControlador->listarProductos();
        break;
}
?>
