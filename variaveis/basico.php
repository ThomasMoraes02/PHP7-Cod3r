<div class="titulo">Variáveis</div>

<?php 

// Váriavel começa com dólar ($)

$numeroA = 13;

var_dump($numeroA);

$a = 3;
$b = 16;
$soma = $a + $b;
echo "<br>" . $soma;

echo "<br>" . isset($soma); // Retorna se a váriavel está setada (possui valor)

$variavel = 10;
echo "<br>" . $variavel;

$variavel = "Agora sou uma string";
echo "<br>" . $variavel;

// = Atribuição
// == Compara o valor
// === Compara o tipo e valor

//PHP é tipagem FRACA pois não está amarrada a nenhum tipo!!! 

// Nomes de variável

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida';
//$6var = 'valida';

//$_GET => Pega valores da requisição

echo "<br>";

echo "<pre>";
var_dump($_SERVER['HTTP_HOST']);