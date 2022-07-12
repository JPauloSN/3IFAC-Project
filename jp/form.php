<?php
	include("model/header.php")
?>
	<link rel="stylesheet" href="./css/styleForm.css">
	<main>
		<h2>Cadastro de Usuário</h2>
		
        <form action="cadastro.php" method="post" onsubmit="return validar()">
            <label for="nome">Usuário</label><br>
            <input class="box required" type="text" name="nome" id="nome"><br>

			<label for="idade">Idade</label><br>
			<input class="box required" type="number" name="idade" id="idade" step="1"><br>

            <label for="email">Email</label><br>
            <input class="box required" type="email" name="email" id="email"><br>

            <label for="senha">Senha</label><br>
            <input class="box required" type="password" name="senha" id="senha"><br>
            
            <label for="senhaConfirma">Confirmar senha</label><br>
            <input class="box required" type="password" name="senhaConfirma" id="senhaConfirma"><br>

            <button><input type="submit" name="Enviar" id="enviar"></button>
        </form>
    </main>
	<script src="js/validar.js"></script>

	<?php
	include("model/footer.php")
?>