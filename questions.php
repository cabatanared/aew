<?php
header('Access-Control-Allow-Origin: *');
ini_set('max_execution_time', 300);
header("Content-Type: application/json", true);
$servername = "localhost";
$username = "root";
$password = "duisx2nd!!";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=virtual_tours", $username, $password);
  
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {}


$stmt = $pdo->prepare("SELECT q.*, name, email, COALESCE(answer, '') answer  FROM `questions` q INNER JOIN visitor v on visitor = v.id WHERE 1");
		$stmt->execute();
		$row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
		print_r(json_encode($row));




?>