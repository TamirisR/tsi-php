<?php

include '../header_tpl.php';
include '../index_menu_tpl.php';

echo '<table border="1" width="50%">
            <tr>
				<td>ID</td><td>Nome</td><td>E-mail</td>
			</tr>';

foreach ($lista as $usuario) {
	
	echo "	<tr>
				<td>{$usuario['id']}</td><td>{$usuario['nome']}</td><td>{$usuario['email']}</td>
			</tr>";
}
foreach ($lista as $usuario) {

	echo "	<tr>
				<td>{$usuario['id']}</td>
				<td>{$usuario['nome']}</td>
				<td>{$usuario['email']}</td>
				<td><a href='?apagar={$usuario['id']}'>apagar</a></td>
				<td><a href='?editar={$usuario['id']}'>editar</a></td>
			</tr>";
}

echo '	</table>
		</center>';

include '../footer_tpl.php';
