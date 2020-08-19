<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7;port=3360", "root", "jLb19aNF&Z>e");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
$id = 2;

$stmt->execute(array($id));

$conn->rollback();
//$conn->commit();

echo "Deletado OK!";



?>