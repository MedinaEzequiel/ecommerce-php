<?php
// Incluye la conexión a la base de datos
include 'db.php';

// Consulta para obtener todos los productos de la tabla
$sql = "SELECT id, nombre, descripcion, precio, imagen FROM productos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda Online PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>🛒 Mi eCommerce Simple</h1>
    </header>

    <div class="container">
        <h2>Nuestros Productos</h2>
        
        <main class="productos-grid">
            <?php
            // Verifica si hay resultados
            if ($result->num_rows > 0) {
                // Recorre cada producto y genera su tarjeta HTML
                while($row = $result->fetch_assoc()) {
                    // Limpieza y formato de datos
                    $nombre_seguro = htmlspecialchars($row["nombre"]);
                    $precio_formato = number_format($row["precio"], 2, '.', ',');
                    
                    echo "<div class='producto-card'>";
                    echo "<h3>{$nombre_seguro}</h3>";
                    echo "<img src='" . htmlspecialchars($row["imagen"]) . "' alt='Imagen de {$nombre_seguro}'>";
                    echo "<p class='descripcion'>" . htmlspecialchars($row["descripcion"]) . "</p>";
                    echo "<p class='precio'>$$ {$precio_formato}</p>";
                    // Botón que llama a la función JavaScript
                    echo "<button onclick='agregarACarrito(" . $row["id"] . ", \"{$nombre_seguro}\")'>Añadir al Carrito</button>";
                    echo "</div>";
                }
            } else {
                echo "<p>No hay productos disponibles en este momento.</p>";
            }
            // Cierra la conexión a la base de datos
            $conn->close();
            ?>
        </main>
    </div>

    <footer>
        <p>&copy; 2025 Mi eCommerce Simple</p>
    </footer>

    <script src="javascript.js"></script>
</body>
</html>