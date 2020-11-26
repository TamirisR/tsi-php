  
<?php

require_once 'config.php';



try {
    $objBanco = new PDO(DSN, DB_NAME, PASS);
} catch (PDOException $objerro) {

    echo "SGBD indisponivel : " . $objerro->getMessage();


    exit();
}