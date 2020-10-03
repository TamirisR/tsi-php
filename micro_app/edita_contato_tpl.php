<html>
	<head></head>
	<body>
        <a href='lista_contato.php'>Listar</a> 
		<a href='lista_contato.php'>Editar</a> 
		<a href='lista_contato.php'>Apagar</a><br><br>
		<h1>Edite seu contato</h1>
		<?php 
			if ( isset($msg) ) echo $msg; 
		?>
		<form method="post" action="edita_contato.php">
			Nome: <input type="text" name="nm" value="<?php echo $contato['nome'] ?>"> 
			Whatsapp: <input type="text" name="whats" value="<?php echo $contato['whatsapp'] ?>">
			<input type="hidden" name="id" value="<?php echo $contato['id'] ?>">
			<input type="submit" value="Gravar">
		</form>
	</body>
</html>