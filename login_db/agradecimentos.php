<?php

session_start();

echo 'Você é o: ' . $_SESSION['nome'] ;

$nota = $_GET['nota']; 
$protocolo = $_GET['protocolo'];

if ( $nota >= 9 ) {

	echo "Estamos muito felizes!";

} else {

	echo "O que podemos fazer para você nos dar uma nota 10???";
}

echo "Se protocolo é o $protocolo";