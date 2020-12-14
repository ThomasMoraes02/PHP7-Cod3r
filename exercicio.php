<?php 
//Inicializando a sessãio
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

//Verificando se usuário está setado. Caso não esteja será redirecionado para a tela de login
if(!$_SESSION['usuario']) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercício</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>

    <nav class="navegacao">
    <span class="usuario">Usuário: <?php echo $_SESSION['usuario']; ?></span>
        
        <a href="<?php echo "{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem formatação</a>
        <a href="index.php" >Voltar</a>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>


    <main class="principal">
        <div class="conteudo">
            <?php
            // include($_GET['dir'] . "/" . $_GET['file'] . ".php"); 
            //include("{$_GET['dir']}/{$_GET['file']}.php"); 
            include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php"); 
            ?>
        </div>
    </main>

    <footer class="rodape">
        COD3R & ALUNOS <?php echo date('Y'); ?>
    </footer>


    <script src="" async defer></script>
</body>

</html>