<?php
//exemplo de conexao com BD Mysql. Inserindo dados

$conn = new mysqli("localhost","root","root","dbphp7");
if($conn->connect_error){

	echo "Erro: ". $conn->connect_error;
}
//Criando um statement
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha ) VALUES (?, ?) ");

//Definindo os dados que vao ser armazenados em Values
$login = "user";
$pass = "12345";
$stmt->bind_param("ss",$login,$pass);

$stmt->execute();

$login="root";

$pass="!@$";

$stmt->execute();




?>