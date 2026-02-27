<?php
	$host = "localhost";
	$db = "artist_portfolio";
	$user = "root"; // XAMPP Default
	$pass = ""; // XAMPP Default

try{
	$pdo = new PDO("mysql:host=$host;dbname=$db, $user, $pass);
	$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	die("DB connection failed: ".$e->getMessage()");
}
?>