<?php
    $host = "localhost";
    $db = "artist_portfolio";
	$user = "root"; // XAMPP Default
	$pass = ""; // XAMPP Default

    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
?>