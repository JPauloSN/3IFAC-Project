<?php

$servidor = "br894.hostgator.com.br";
$user = "mvpstudi_elektro";
$pass = "ipi2022";
$dt_base = "mvpstudi_cadastro_jp";

$conn =  mysqli_connect($servidor, $user, $pass, $dt_base);

if (!$conn) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>