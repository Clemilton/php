<?php


$conn = new PDO("mysql::host=localhost;dbname=dbphp7","root","root");

$stmt = $conn->prepare("UPDATE tb_usuarios 
						SET deslogin = :LOGIN , dessenha = :PASS
						WHERE idusuario=:ID");


$login = "Clemilton";
$password="abcdoamor";
$id=2;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASS",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Dados alterados OK!";


?>