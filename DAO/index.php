<?php

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
//CARREGA SOMENTE UM USUARIO
//$root = new Usuario();

//$root->loadbyId(3);


//CARREGA UMA LISTA DE USUARIOS
//$lista = Usuario::getList();
//echo json_encode($lista);


//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
//$search = Usuario::search("");
//echo json_encode($search);

//CARREGA UM USUARIO USANDO UMA LOGIN E UMA SENHA
//$usuario = new Usuario();
//$usuario->login("user", "12345");
//echo $usuario;

//CRIANDO UM NOVO USUARIO
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;


//ALTERA UM USUARIO
//$usuario = new Usuario();
//$usuario->loadById(6);
//$usuario->update("professor", "256");
//echo $usuario;

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>