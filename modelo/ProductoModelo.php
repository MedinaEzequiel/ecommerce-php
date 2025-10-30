<?php
// Clase que maneja la lógica de la BD para los productos
class ProductoModelo {
    private $conn;

    public function __construct() {
        // Accedemos a la variable de conexión global creada en db.php
        global $conn; 
        $this->conn = $conn;
    }

    // LISTAR: Obtiene todos los productos
    public function obtenerTodos() {
        $sql = "SELECT id, nombre, descripcion, precio, imagen FROM productos ORDER BY nombre ASC";
        $result = $this->conn->query($sql);
        
        $productos = [];
        if ($result && $result->num_rows > 0) {
            // Convierte los resultados de MySQL a un array de PHP
            while($row = $result->fetch_assoc()) {
                $productos[] = $row;
            }
        }
        return $productos;
    }
    
    // Aquí irán los métodos para buscar, insertar, borrar, etc.
}
?>
