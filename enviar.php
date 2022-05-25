<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConfirma = $_POST['senhaConfirma'];

if($senha !== $senhaConfirma){
    header("form.php?error=true");
}



?>