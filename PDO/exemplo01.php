<?php


/* Algoritmo para fazer uma busca no BANCO de dados

 1. Abrir conexao com o banco(Instanciar um objeto da classe PDO com parametros do banco)
 2. Preparar um statement, isto é preparar o comando SQL, com os seus parametros
 3. Executar o statement.
 4. Guarda o resultado em um array. No caso é um array de arrays
 5. Imprimir o resultados

*/
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","root");

$stmt = $conn->prepare("SELECT * from tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($stmt);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.":<strong/>".$value."<br/>";
	}
	echo "================================<br>";
}

?>