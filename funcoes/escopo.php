<div class="titulo">Função & Escopo</div>

<?php 

function imprimeMensagens() {
    echo "Olá ";
    echo "Até a próxima!<br>";
}

imprimeMensagens();
imprimeMensagens();
imprimeMensagens();

echo "<br>";

$variavel = 1;

function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

echo "<br>";

function trocaValorDeVerdade() {
    //Pegar variável de escopo global
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel<br>";

trocaValorDeVerdade();

echo "Depois: $variavel <br>";

echo "<br>";

var_dump(trocaValorDeVerdade());