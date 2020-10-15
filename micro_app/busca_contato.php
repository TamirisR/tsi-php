<?php

require_once 'db.php';

//Consulta para listar meus contatos


if (isset($_POST['nm'])) {;


    $objStmt = $objBanco->prepare("SELECT id, nome, whatsapp FROM contatos WHERE nome LIKE :arg");

    $argumento = '%' . $_POST['nm'] . '%';

    $objStmt->bindParam(':arg', $argumento);
    $objStmt->execute();

    while ($reg = $objStmt->fetch(PDO::FETCH_ASSOC)) {
        $tabela[$reg['id']] = $reg;
    }

    $tabela = $tabela ?? array();
    //Chama o template 
    include 'busca_resultado.php';
}