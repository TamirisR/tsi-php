<?php
session_start();

$_SESSION['usuario'] = 'Tami';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="nps_back.php">
        <p>Voce nos recomendaria para um amigo ? </p>
        <input type="radio" id="0" name="nota" value="0">0<br>
        <input type="radio" id="1" name="nota" value="1">1<br>
        <input type="radio" id="2" name="nota" value="2">2<br>
        <input type="radio" id="3" name="nota" value="3">3<br>
        <input type="radio" id="4" name="nota" value="4">4<br>
        <input type="radio" id="5" name="nota" value="5">5<br>
        <input type="radio" id="6" name="nota" value="6">6<br>
        <input type="radio" id="7" name="nota" value="7">7<br>
        <input type="radio" id="8" name="nota" value="8">8<br>
        <input type="radio" id="9" name="nota" value="9">9<br>
        <input type="radio" id="10" name="nota" value="10">10<br>
        <textarea id="textonota" name="registronota" rows="4" cols="50">
           descreva aqui sua esperiencia conosco, e explique o motivo da sua nota
            </textarea>

        <button type="submit">Avaliar</button>

    </form>

</body>

</html>