<?php

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=login';
$user = 'root1';
$password = '12345';

//Como se conectar com o banco
$db = new PDO($dsn, $user, $password);