<?php
session_start();
echo 'Você é o: ' . $_SESSION['nome'] . '<br><br>';

$nota = $_REQUEST['nota']; // o request usa valores get e post
$protocolo = $_GET['protocolo'];


if ($nota >= 9) {

    echo "<br><br> Estamos muito felizes!";
} else {
    echo "<br><br> O que podemos fazer para nos dar uma nota melhor";
}

echo "<br><br>Seu protocolo é o $protocolo";