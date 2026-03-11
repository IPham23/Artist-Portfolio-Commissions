<?php
require_once 'includes/config.php';

$username = 'admin';
$password = password_hash('yourpassword123', PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
$stmt->execute([$username, $password]);

echo "Admin created successfully!";
?>