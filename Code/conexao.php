<?php

/*Esta é o host da database*/
define('HOST', '');

/*Este é o usuário da database*/
define('USUARIO', '');

/*Esta é a senha do usuário para o acesso a database*/
define('SENHA', '');

/*Este é o nome da database*/
define('DB', '');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar na database.');