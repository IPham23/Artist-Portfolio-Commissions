<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    require_once '..includes/config.php';

    $data = json_decode(file_get_contents("php://input"), true);

    $stmt = $pdo->prepare("INSERT INTO commissions (client_name, client_email, description, reference_image_url) VALUES (?, ?, ?, ?)");
    $stmt->execute([
        $data['name'],
        $data['email'],
        $data['description'],
        $data['referenceImage'] ?? null
    ]);

    echo json_encode(["message" => "Commission submitted successfully"]);
?>