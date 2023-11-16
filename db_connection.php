<?php


session_start();


$servername = "localhost";
$username = "root";
$password = "";
// $password = "duisx2nd!!";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=virtual_tours", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {

}
