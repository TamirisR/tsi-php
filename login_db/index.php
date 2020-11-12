<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'db.php';


if ( isset($_SESSION['login']) ) { //usuário já logado 

		include 'header_tpl.php';
		include 'index_menu_tpl.php';
		include 'footer_tpl.php';

} elseif ( isset( $_POST['entrar'] ) ) { 

	$login = filter_var( $_POST['login'], FILTER_SANITIZE_EMAIL);
	$senha = $_POST['senha'];

	//verificação
	$r = $db->query("SELECT senha FROM usuario WHERE email = '$login'");
	$reg = $r->fetch(PDO::FETCH_ASSOC);
	$hash = $reg['senha'];

	//Comprara a senha 
	if ( password_verify( $senha, $hash) ) {

		$_SESSION['login'] = $login;

		include 'header_tpl.php';
		include 'index_menu_tpl.php';
		include 'footer_tpl.php';

	} else {

		$msg = 'Credenciais inválidas, tente novamente';

		include 'index_tpl.php';		
	}

} else { 

	include 'index_tpl.php';
}
