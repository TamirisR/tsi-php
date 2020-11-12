<html>
	<head>
		<title>Meu site</title>
	</head>
	<body>
		<tr>
			<td>
				<form method="post" action="index.php">
					<?php
					    if ( isset($msg) ) echo $msg;
					?>
					<label for="login">Login</label>
					<input type="text" id="login" name="login">
        			<label for="senha">Senha</label>
					<input type="password" id="senha" name="senha">
					<a href="usuario/cadastro.php">Cadastre-se</a>
	    			<input type="submit" name="entrar" value="Entrar">
				</form>	
			</td>
        </tr>
	</body>
</html>