<?php 

//Inicializando a sessão
SESSION_START();

//SE $_POST foi setado, continue...
if($_POST) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Usuários cadastrados
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.br",
            "senha" => "123456"
        ],
        [
            "nome" => "Outro Aluno",
            "email" => "outro@cod3r.br",
            "senha" => "654321"
        ],
        [
            "nome" => "Thomas Vinicius de Moraes",
            "email" => "tho.vini7@gmail.com",
            "senha" => "102030"
        ]
    ];

    //Para cada usuário percorra
    foreach($usuarios as $usuario) {
        $email === $usuario['email'];
        $senha === $usuario['senha'];

        if($email && $senha) {
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie("usuario", $usuario['nome'], $exp);
            header('Location: index.php');
        }
    }
} 

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Curso PHP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem vindo</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se!</h3>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>

    <footer class="rodape">
        COD3R & ALUNOS <?php echo date('Y'); ?>
    </footer>


    <script src="" async defer></script>
</body>

</html>

