<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'sessao.php';

include 'header_tpl.php';
include 'index_menu_tpl.php';

$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];

echo "Você deu a nota $nota pelo motivo \"$explicacao\"";

$db = new PDO(	'sqlsrv:Server=localhost\\SQLEXPRESS;Database=login','root1', '12345');

$stmt = $db->prepare('	INSERT INTO nps ( nota, explicacao) VALUES ( :nota, :explicacao)');

$stmt->bindParam(':nota', $nota);					
$stmt->bindParam(':explicacao', $explicacao);	

if ( $stmt->execute() ) {

	echo 'Pesquisa gravada com sucesso!';

} else {

	echo ' :-( deu erro, tente novamente! ';
}

echo '<a href="./agradecimento.php?nota=' . $nota . '">Seguir</a>';

include 'footer_tpl.php';
