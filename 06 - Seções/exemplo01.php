<?php

//chama arquivo de sessao
require_once("config.php");
echo "Ola mundo";
session_unset($_SESSION['nome']);
//define um campo para Session
$_SESSION["nome"]="Hcode";

?>
