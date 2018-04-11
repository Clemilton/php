<?php
//exemplo de conexao com BD Mysql. Inserindo dados

$conn = new mysqli("localhost","root","root","dbphp7");
if($conn->connect_error){

	echo "Erro: ". $conn->connect_error;
}


$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($result->fetch_array()){
	$row = $result->fetch_array();
	array_push($data,$row);

}

echo json_encode($data);





?>