<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT* FROM tb_usuarios ORDER BY deslogin");


$headers = array();

foreach ($usuarios[0] as $key => $value) { //pega os cabeçalhos e coloca em um array

	array_push($headers,ucfirst($key)); //ucfirst -> Primeira letra maiuscula

}

$file = fopen("usuarios.csv","w+");

fwrite($file,implode(",",$headers )."\r\n"); //escreve a primeira linha

foreach ($usuarios as $row) {
	$data = array();

	foreach ($row as $key => $value) {
		array_push($data,$value);
	}

	fwrite($file, implode(",",$data)."\r\n");

}

fclose($file);



?>