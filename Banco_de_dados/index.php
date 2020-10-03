<?php

//mysqli_connect ( 'host', 'user', ' senha', 'nome do db');
$db = mysqli_connect( 'localhost', 'root', '', 'wp');

if (mysqli_query( $db, 'CREATE TABLE IF NOT EXISTS contatos 
( id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
nome VARCHAR(255) NOT NULL, 
watsapp BIGINT)')) {

    echo 'Tabela contatos criada com sucesso! <br>'; 
}
else {
    echo 'Não foi possível criar a tabela contatos: ';
    echo mysqli_connect_error();
}

$contato = ['nome' => 'Tamiris', 'whatsapp' => '5511945147458'];

if ( mysqli_query ( $db, 
                        " INSERT INTO contatos 
                        (nome, whatsapp) 
                        VALUES ('{$contato ['nome']}','{$contato['whatsapp']}')")){
    
    echo "contato inserido com sucesso!";
}

$query = mysqli_query ($db, ' SELECT 
id, nome, whatsapp
 FROM contatos');

echo "<table border>
                <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Whatsapp</td>
            </tr>";
while ($registro = $query->fetch_assoc()) {

	echo "	<tr>
				<td>{$registro['id']}</td>
				<td>{$registro['nome']}</td>
				<td>{$registro['whatsapp']}</td>
			</tr>";
}

echo '</table>';


if ( mysqli_query ($db, 'DELETE FROM contatos WHERE id = 1' ) ) {
    echo "Registro apagado com sucesso!";
} 
else {
    echo "Não foi possível apagar";
}

//echo "<br><br>Nome enviado: {$_POST['nm']}, whatsapp: {$_POST['whats']}";

