<?php

require_once("config.php");

use Cliente\Cadastro;

$cad  = new Cadastro();

$cad->setNome("Clemilton");
$cad->setEmail("clemilton.ufam@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();


?>