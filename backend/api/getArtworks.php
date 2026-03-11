<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    require_once '../includes/config.php';

    $stmt = $pdo->query("SELECT * FROM artworks ORDER BY id DESC");
    $artworks = $stmt->fetchAll();

    echo json_encode($artworks);
?>