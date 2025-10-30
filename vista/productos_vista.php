<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Base MVC</title>
    <!-- Incluimos Tailwind CSS para estilos rápidos -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Estilo base para el grid en móviles */
        .productos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- HEADER -->
    <header class="bg-indigo-700 text-white shadow-lg p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">🛒 Tienda MVC Simple</h1>
            <nav class="space-x-4">
                <a href="index.php?action=mostrar_login" class="hover:text-indigo-200">Login/Registro</a>
            </nav>
        </div>
    </header>

    <!-- CUERPO PRINCIPAL -->
    <main class="max-w-7xl mx-auto p-6">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Nuestros Productos</h2>

        <div class="productos-grid">
            <?php
            // La variable $productos viene del Controlador
            if (!empty($productos)) {
                foreach($productos as $producto) {
                    $nombre_seguro = htmlspecialchars($producto["nombre"]);
                    $precio_formato = number_format($producto["precio"], 2, '.', ',');
                    
                    // Tarjeta de Producto (Estilo Tailwind)
                    echo '<div class="producto-card bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">';
                    echo '<img src="' . htmlspecialchars($producto["imagen"]) . '" alt="' . $nombre_seguro . '" class="w-full h-32 object-contain mb-4 rounded">';
                    echo '<h3 class="text-xl font-bold text-gray-800 mb-2">' . $nombre_seguro . '</h3>';
                    echo '<p class="text-gray-600 text-sm mb-4 line-clamp-2">ID: ' . htmlspecialchars($producto["id"]) . '</p>';
                    echo '<p class="text-2xl font-extrabold text-green-600 mb-4">$' . $precio_formato . '</p>';
                    echo '<button class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition duration-150">Añadir al Carrito</button>';
                    echo '</div>';
                }
            } else {
                echo '<p class="text-center w-full text-gray-500">No hay productos disponibles.</p>';
            }
            ?>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-8">
        <p>&copy; 2025 E-Commerce MVC Base</p>
    </footer>
</body>
</html>
