<?php
// Incluir el archivo de conexión a la base de datos
include 'db.php';

    header('Content-Type: application/json');
    $data = json_decode(file_get_contents('php://input'), true);

    if (!isset($data['id'], $data['productName'], $data['productValue'])) {
        echo json_encode(['success' => false, 'message' => 'Datos incompletos']);
        exit;
    }

    try {
        $stmt = $pdo->prepare("UPDATE products SET productName = :productName, productValue = :productValue WHERE id = :id");
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_INT);
        $stmt->bindParam(':productName', $data['productName'], PDO::PARAM_STR);
        $stmt->bindParam(':productValue', $data['productValue'], PDO::PARAM_STR);
        $success = $stmt->execute();
        echo json_encode(['success' => $success]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
?>