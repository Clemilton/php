<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios= $sql->select("SELECT * from tb_usuarios");
///*Carrega um usuario

$usuario = new Usuario();

$usuario->loadById(4);

echo $usuario;
//*/

/*Carrega uma lista de usuarios

$lista = Usuario::getList();

echo json_encode($lista)

*/

/*Carrega uma lista de usuario buscando pelo login

$search  = Usuario::search("jo");

echo json_encode($search);

*/

/*Carrega um usuario usando o login e a senha;

$usuario = new Usuario();
$usuario->login("user","1234");
echo $usuario;
*/

/*Insere um usuario
$aluno=  new Usuario("aluno","@lun0");

$aluno->insert();

echo $aluno;
*/

/*Alterar um usuario
$usuario = new Usuario();

$usuario->loadById(5);

$usuario->update("professor","12353");

echo $usuario;

*/

$usuario  = new Usuario();

$usuario->loadById(6);

$usuario->delete();

echo $usuario;
?>