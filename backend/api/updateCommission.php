<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    require_once '..includes/config.php';

    $data = json_decode(file_get_contents("php://input"), true);

    $stmt = $pdo->prepare("UPDATE commissions SET status = ? WHERE id = ?");
    $stmt->execute([$data['status'], $data['id']]);

    echo json_encode(["message" => "Commission updated successfully"]);
?>