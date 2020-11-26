<?php

$fp = fopen( 'planilha.csv', 'w');

fwrite( $fp, "Nome;Telefone");
fwrite( $fp, "Rey;67866545456");

fclose( $fp );

echo "<pre>ARQUIVO GERADO";

$fp = fopen( 'planilha.csv', 'a');

fwrite( $fp, "Amber;46464646");
fwrite( $fp, "Lisa;249785466");
fwrite( $fp, "Jean;436578975");

fclose( $fp );

echo "ARQUIVO ALTERADO";

echo "VEJA O CONTEÚDO DO ARQUIVO";

$fp = fopen( 'planilha.csv', 'r');

while ( $linha = fgets( $fp ) ) {

	echo $linha;
}

fclose( $fp );

