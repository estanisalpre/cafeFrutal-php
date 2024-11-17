<?php
    header('Content-Type: application/json');
    $data = json_decode(file_get_contents('php://input'), true);

    if (!isset($data['id'])) {
        echo json_encode(['success' => false, 'message' => 'ID no proporcionado']);
        exit;
    }

    try {
        $pdo = new PDO('mysql:host=82.197.82.73;dbname=u584871321_stockProducts', 'u584871321_admin', 'Kinesis1233');
        $stmt = $pdo->prepare("DELETE FROM products WHERE id = :id");
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_INT);
        $success = $stmt->execute();
        echo json_encode(['success' => $success]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
?>