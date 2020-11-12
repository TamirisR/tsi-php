<?php

require 'sessao.php';

$_SESSION['nome'] = 'Tami';

?>
<html>
	<head></head>
	<body>
		<?php include 'index_menu_tpl.php'; ?>
			<h3>Qual a probabilidade de você recomendar minha empresa para um amigo?</h3>
			<form method="post" action="nps.php">
				Pouco provável 
				<?php 
				for ( $i = 1 ; $i <= 10 ; $i++ ) {
				
					echo "	<input type='radio' id='nps$i' name='nota' value='$i'> 
							<label for='nps$i'>$i</label> 
							";
				}
				?>
				 Muito provável
				Explique o motivo de sua nota, por favor.
				<textarea name='explicacao' cols="90" rows="5"></textarea>
				<input type="submit" name="avaliacao" value="Avaliar">
			</form>
	</body>
</html>