<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7;port=3360", "root", "jLb19aNF&Z>e");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN , dessenha = :PASSWORD WHERE idusuario = :ID");
$login = "joe";
$password = "querty";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!";



?>