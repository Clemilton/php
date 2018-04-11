<?php


$conn = new PDO("mysql::host=localhost;dbname=dbphp7","root","root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES 
						(:LOGIN,:PASS)");
$login = "jose";
$password="123456790";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASS",$password);

$stmt->execute();

echo "Inserido OK!";


?>