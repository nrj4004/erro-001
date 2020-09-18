Primeiro preencha as informações de conexão a database do conexao.php


Depois, para testar o nome/informações dos usuários que não aparecem, faça importação do arquivo tables.sql.zip
no phpMyAdmin e coloque o seguinte comando para criar um usuário:

INSERT INTO `usuario` (`usuario_id`,`nome`,`usuario`,`senha`,`email`,`cadastro`) VALUES (1,'Admin','admin','admin', 'mail@example.com', NOW( ));

Depois de ter inserido este comando, edite o usuário e coloque o md5 na senha.

OBS: O nome deste usuário é Admin, o usuário (utilizado para logar) é admin, a senha é admin,
o email é mail@example.com e o id é 1.

OBS (02): Para ver a página home.php (que estão os erros) você necessita estar logado, se quiser apagar o script que verifica
se o usuário está logado para não redirecionar, somente apague o script que está na página home.php