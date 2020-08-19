<?php

$conn = new mysqli("localhost", "root", "jLb19aNF&Z>e", "dbphp7", "3360");

if ($conn->connect_error) 
{

    echo "Error: ". $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login  = "root";
$pass = "23456";

$stmt->execute();

?>