<?php
 

define('DSN','mysql:dbname=csv;host=localhost');
define('DB_USER','root');
define('DB_PASS','');

try {
    $objBanco = new PDO(DSN, DB_USER, DB_PASS);
    
} catch (PDOException $objErro)  {

    echo "SGND Indisponível:" . $objErro->getMessage();

    exit();
    
}



$arquivo= $_FILES["file"]["name"];

$fp = fopen( $arquivo, 'r');
$cont=0;
while ( $linha = fgetcsv( $fp,1000,";") ) {

    $inf[$cont] = $linha;
    $cont++;
}
fclose( $fp );
for($i=1;$i<$cont;$i++){
    $id_cidade=$inf[$i][0];
    $nome     =$inf[$i][1];
    $latitude =$inf[$i][2];
    $longitude=$inf[$i][3];

    $objStmt = $objBanco->query("INSERT INTO ibge ( id_cidade, nome, latitude, longitude)
						         VALUES ( '$id_cidade','$nome','$latitude','$longitude' )");

}
if($objStmt){
    $msg = 'Contato gravado com sucesso!';

} else {

    $msg = ' :-( deu erro, tente novamente! ';
}

include 'index.php';