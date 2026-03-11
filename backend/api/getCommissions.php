<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: applicaiton/json');
	require_once '../includes/config.php';

	$stmt = $pdo->query("SELECT * FROM commissions ORDER BY id DESC");
	$commissions = $stmt->fetchAll();

	echo json_encode($commissions);	
?>