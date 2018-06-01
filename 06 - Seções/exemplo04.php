<?php

session_id('s1n39qadi0t2198cmfrck5efu3');


require_once("config.php");

//gera um novo id de sessao
session_regenerate_id('');

echo session_id();

var_dump($_SESSION)
?>