<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS';
$dsn = 'root1';
$password = '12345';

$db = new PDO($dsn, $user, $password);

$sql = 'SELECT nome, telefone FROM cliente';

$r = $db->query($sql);

echo '<pre>';

while ($reg = $r->fetch(PDO::FETCH_ASSOC)) {

	echo "Sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta não for paga ";
}

//Como fazer um DELETE
if ( $db->query('DELETE FROM cliente WHERE id = 2') ) {

	echo "ID 2 apagado com sucesso!";

} else {

	echo "Erro ao tentar apagar o ID 2";
}

//Como fazer um SELECT
foreach ( $db->query($sql) as $reg ) {

	echo "Sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta não for paga ";
}

//Como fazer um UPDATE
if ( $db->query('UPDATE cliente SET nome = "Arthur" WHERE id = 3') ) {

	echo "ID 3 atualizado com sucesso!";

} else {

	echo "Erro ao tentar atualizar o ID 3";
}

//SELECT
foreach ( $db->query($sql) as $reg ) {

	echo "Sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta não for paga ";
}

//INSERT
if ( $db->query('	INSERT INTO cliente 
						(id, nome, telefone) 
					VALUES 
						(2, "Ana", 5511985753501 )') ) {

	echo "ID 2 gerado novamente com sucesso!";

} else {

	echo "Erro ao tentar gerar novamente o ID 2";
}

//SELECT
foreach ( $db->query($sql) as $reg ) {

	echo "Sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta não for paga ";
}