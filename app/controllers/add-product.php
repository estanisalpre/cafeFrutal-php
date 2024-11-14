<?php
// Incluir el archivo de conexión a la base de datos
include 'db.php';

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $productName = $_POST['prodName'];
    $price = $_POST['price'];

    // Insertar los datos en la base de datos
    try {
        // Preparar la consulta SQL para insertar el producto
        $stmt = $pdo->prepare("INSERT INTO products (name, price) VALUES (:name, :price)");
        $stmt->bindParam(':name', $productName);
        $stmt->bindParam(':price', $price);

        // Ejecutar la consulta
        $stmt->execute();

        // Redirigir a una página de éxito o al panel de administración
        header('Location: /admin.php');
        exit;
    } catch (PDOException $e) {
        // Mostrar error si no se puede insertar el producto
        echo "Error al agregar el producto: " . $e->getMessage();
    }
}
?>