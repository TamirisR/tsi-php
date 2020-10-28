  
<?php

session_start();

if (!isset($_SESSION['login'])) {

    header('Location: /PHP_tsi_2020/sessao/');
}