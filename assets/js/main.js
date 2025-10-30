// La función se llama desde index.php al hacer clic en el botón
function agregarACarrito(idProducto, nombreProducto) {
    // Lógica temporal: Notifica al usuario.
    alert(`"${nombreProducto}" (ID: ${idProducto}) ha sido añadido al carrito. ¡Añadido!`);

    // En un proyecto real, aquí usarías AJAX para enviar estos datos al servidor
    // para que se guarden en la sesión (el carrito).
    console.log(`Producto añadido: ID ${idProducto} - ${nombreProducto}`);
}