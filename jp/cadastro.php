<?php

include("model/config.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = " INSERT INTO usuario (id, nome, idade, email, senha) VALUES (null, '$nome', '$idade', '$email', '$senha')";

if(mysqli_query($conn, $sql)){
    echo "Sucesso!";
}

 
?>