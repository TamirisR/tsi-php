<?php
date_default_timezone_set('America/Sao_Paulo');

//Exemplo de for
for ( $i = 0, $j = 4 ; $i < 5 ; $i++, $j --){
    echo "Linha: $i $j <br>";
}
echo '<br><br>';

//Exemplo de While
$i = 0;
$j = 4;

while ( $i < 5 ) {
    echo "Linha: $i $j <br>";
    $i++;
    $j--;
}
echo'<br><br>';

//Exemplo de Do While executar uma vez

$i = 0;
$j = 4;

do {
    echo "Linha: $i $j <br>";
    $i++;
    $j--;
} while ( $i < 5 );
echo '<br><br>';

// exemplo de vetor

$domingo = 0;
$segunda = 1;
$terca = 2;
$quarta = 3;
$quinta = 4;
$sexta = 5;
$sabado = 6;

var_dump ( date ('d/m/Y'));

switch ( date('w')){
    case $domingo:
        echo'Domingo';
        break;
    case $segunda;
        echo'Segunda';
    break;
    case $terca;
        echo'terca';
    break;
    case $quarta;
        echo'quarta';
    break;
    case $quinta;
        echo'quinta do switch<br>';
    break;
    case $sexta;
        echo'sexta';
    break;
    case $sabado;
        echo'sabádo';
    break;
}

$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terca';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sabádo';

$hoje = date('w');

echo "hoje é " . $semana[$hoje];

