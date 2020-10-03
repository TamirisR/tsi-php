<?php

require_once 'config.php';
$objBanco = new PDO (DSN, DB_USER, DB_PASS);

$consulta = $objBanco -> query ('SELECT id, nome, whatsapp FROM contatos', PDO::FETCH_ASSOC);
echo $objBanco->errorInfo(); //IMPORTANTE PARA DEBUG

foreach ($consulta as $registro) {
	
	echo "ID: {$registro['id']} NOME: {$registro['nome']} WZAP: {$registro['whatsapp']}<br>";
}

if ( $objBanco->query('DELETE FROM contatos WHERE id = 4') ) {

	echo "<br>REGISTRO APAGADO<br>";
}
//var_dump ($objBanco->errorInfo() );
if ($objBanco->query('UPDATE contatos SET nome = "Mudado" where id = 3')) {
    echo "Nome alterado com sucesso";
};


$insert = $objBanco->query("INSERT INTO contatos (nome, whatsapp) VALUES ('Tami', '58549567258')");