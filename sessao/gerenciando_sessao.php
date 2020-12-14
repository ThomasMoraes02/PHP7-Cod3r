<div class="titulo">Gerenciando Sessão</div>

<?php 

session_id();

session_start(); //Criando sessão

echo session_id(); // Gerando id da sessão

$contador = &$_SESSION['contador'];

$contador = $contador ? $contador + 1 : 1; //Contador a cada novo refresh adiciona + 1

echo "<br>" . $_SESSION['contador'];

echo "<br>";

//Se for módulo de 5 o ID é gerado novamente
if($_SESSION['contador'] % 5 === 0)
{
    session_regenerate_id();
}

//Depois de 15 ele zera e volta pra um
if($_SESSION['contador'] >= 15)
{
    session_destroy();
}