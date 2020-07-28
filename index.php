<?php 

require_once("config.php");

/*$root = new Usuario();

$root->loadById(1);
echo $root;*/

/*$root = Usuario::getList();

echo json_encode($root);*/

/*$root = Usuario::search("Ana");

echo json_encode($root);*/

/*$root = new Usuario();

$root->login("root","123456");

echo $root;*/

/*$usuario = new Usuario();
$usuario->setDeslogin("Maria");
$usuario->setDessenha("&&8484");

$usuario->insert();

echo $usuario;*/

/*$user = new Usuario();

$user->loadById(8);

$user->update("Lucas", "85856");

echo $user;*/

$user = new Usuario();

$user->loadById(9);

echo $user;


 ?>