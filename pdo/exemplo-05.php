<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7;port=3360", "root", "jLb19aNF&Z>e");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
$id = 5;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado OK!";



?>