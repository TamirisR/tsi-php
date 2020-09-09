<?php
ini_set('display_errors',1);
init_set('display_startup_errors',1);
error_reporting(E_ALL);


$clima = 'gelado';

//Condicional if
if (clima == 'gelado') {
    echo '<br><br> Meu é congela!<br>';
}
$bool = '1';

//Condicional "operador ternário"

$var = $bool == 1 ? '$bool é igual de 1' : '$bool é diferente de 1';
echo $var . '<br>';

$var = $bool === 1 ? '$bool é igual de 1' : '$bool é diferente de 1';
echo $var . '<br>';

$var = $bool != 1 ? '$bool é diferente de 1' : '$bool é igial de 1';
echo $var . '<br>';

$var = $bool !== 1 ? '$bool é diferente de 1' : '$bool é igual de 1';
echo $var . '<br>';

$frase = 'Meu pai tinha um cachorro amarelo e rosa';

if ( strpos ($frase, 'Meu')) {
    echo "Econtrei o Meu!";
}
else {
    echo "Não há Meu algum!";
}

echo '<br>';

//switch
switch ($clima ) {
    case 'quente':
    case 'tropical':
        echo 'Adoro clima quente!';
        if (true) 
            echo '<br> -- if dentro do switch';
            else {
                echo'<br> ---- if aninhado dentro de um switch';
            
        }
    break;
    case 'morno':
        echo 'Morno é melhor que frio!';
    break;
    case 'Frio':
        echo 'Frio eu adoro quando está longe!';
    break;
    case 'gelado':
        echo 'Canadá!';
    default:
        echo 'Clima desconhecido!';
    break;
}

$isso = 'véi';
//Condicional nova PHP
$isso = $isso ?? 'coisa';
echo "<br> Olha só $isso";