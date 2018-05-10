<?php

require_once("config.php");

//carrega um usuário
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//carrega uma lista de usuarios

//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("hi");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("Chico","123");
echo $usuario;

?>