<div class="titulo">Argumentos & Retorno</div>

<?php 

function obterMensagem() {
    return 'Seja bem vindo(a)!';
}

obterMensagem();

$m = obterMensagem();

echo $m;

echo "<br>";

var_dump(obterMensagem());

echo "<br>";

function obterMensagemComNome($nome) {
    return "Bem vindo $nome";
}

echo obterMensagemComNome("Thomas");

echo "<br>";

function soma($a, $b) {
    return $a + $b;
}

$x = 4;
$y = 5;

echo soma(5, 5);

echo "<br>";

echo soma($x, $y);

echo "<br>";

function trocarValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;

echo trocarValor($variavel, 3);