
<?php

function __autoload($nomeClasse){
	var_dump($nomeClasse);
	echo "<br>";
	require_once("$nomeClasse.php");

}

$carro = new DelRey();

$carro->acelerar(80);

?>
