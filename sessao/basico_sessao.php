<div class="titulo">Sessão</div>

<?php 

SESSION_START(); // Para iniciar uma sessão

print_r($_SESSION); //Variável de sessão

echo "<br>";

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = "Thomas"; //Setando o nome para "Thomas" na variável de sessão
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = "tho.vini7@hmail.com";
}

print_r($_SESSION);

?>

<p>
    <a href="basico_sessao_alterar.php">Alterar Sessão</a>
</p>