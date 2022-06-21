<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConfirma = $_POST['senhaConfirma'];

$conn =  mysqli_connect("127.0.0.1", "root", "", "3ifac-project");

if (!$conn) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = " INSERT INTO usuario (id, nome, idade, email, senha) VALUES (null, '$nome', '$idade', '$email', '$senha');"

 
?>