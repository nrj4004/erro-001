<!DOCTYPE html>
<html>
    <head>

    <!--Script que verifica se o usuário está logado-->
    <?php
       session_start();
       include('verifica_login.php');
    ?>

        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;600;700&display=swap" rel= "stylesheet">
        <link href="css/home.css" rel="stylesheet">
        <title>Home - Site</title>
    </head>


    <body>

        <header class="cabecalho">
           <!--Esta é o nome da ferramenta que é o foco do site-->
           <h1>Ferramenta (nome)</h1>
           <!--Este indentifica em qual página da ferramenta o site está-->
           <h2>Home</h2>
        </header>


        <nav class="menu">
            <!--Este mostra a que empresa/negoçio/pessoa a ferramenta do site está servindo-->
            <h1>Client: Cliente 01</h1>

            <!--Este é para mostrar o nome do usuário-->
            <h2>User: <?php echo $_SESSION('nome');?></h2>

            <!--Este é para ser um futuro botão de logout-->
            <a href="/logout.php">Logout</a>
        </nav>
        

        <!--Parte onde a ferramenta do site será utilizada-->
        <main class="principal">
            
        </main>

        <!--Rodapé do site-->
        <footer class="rodape">
            Copyright ... © 2020 - <?= date('Y'); ?>
        </footer>

    </body>
</html>