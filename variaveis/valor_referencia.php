<div class="titulo">Valor vs Referência</div>

<?php 


//Atribuição por valor
$variavel = "valor inicial";
echo $variavel;

$variavelValor = $variavel;
echo "<br>". $variavelValor;

$variavelValor = "novo valor";
echo "<br>". $variavelValor;

//Atribuição por Rerência

$variavelReferencia = &$variavel;
echo "<br>". $variavelReferencia;
$variavelReferencia = 'mesma referencia';
echo "<br>". $variavelReferencia;

