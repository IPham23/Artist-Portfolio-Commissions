<?php
    $pdo = new PDO("mysql:host=localhost;dbname=artist_portfolio", "root", "");

    $stmt = $pdo->query("SELECT * FROM artworks ORDER BY id DESC");
    $artworks = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($artworks);
?>