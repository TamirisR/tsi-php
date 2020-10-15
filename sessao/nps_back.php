<?php

var_dump($_POST);
require_once "db.php";

session_start();

$nota = $_POST['nota'];
$explicacao = $_POST['registronota'];

$registroavaliacao = $objBanco->prepare('	INSERT INTO avaliacoes 
									( nota, registronota)
								VALUES 
									( :nota, :textonota)');


$registroavaliacao->bindParam(':nota', $_POST['nota']);
$registroavaliacao->bindParam(':textonota', $_POST['registronota']);


if ($registroavaliacao->execute()) {

    echo  '<br><br>Avaliação gravada com sucesso!';
} else {

    echo '<br><br> :-( deu erro, tente novamente! ';
}


echo '<br><br><a href="./agradecimento.php?nota=' . $nota . '">Seguir</a>';
include 'nps_form.php';