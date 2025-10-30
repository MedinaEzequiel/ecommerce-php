<?php
// El controlador incluye el Modelo para acceder a los datos
require_once(ROOT_PATH . 'modelo/ProductoModelo.php');

class ProductoControlador {
    
    private $productoModelo;
    
    public function __construct() {
        $this->productoModelo = new ProductoModelo();
    }

    // Muestra la vista de la tienda principal
    public function listarProductos() {
        // 1. Lógica: Pide los datos al Modelo
        $productos = $this->productoModelo->obtenerTodos();
        
        // 2. Vista: Carga la vista para mostrar los datos
        // La vista ahora tiene acceso a la variable $productos
        require_once(ROOT_PATH . 'vista/productos_vista.php');
    }
}
?>
