<div class="titulo">Atribuições</div>

<?php 

$title = "Atribuições";

$numero = 10;

echo $numero;
$numero = $numero - 3;

echo "<br>" . $numero;

$numero = $numero + 1.5;
echo "<br>" . $numero;

//Operador unário de decremento
$numero--;

echo "<br>" . $numero;

--$numero;

echo "<br>" . $numero;

//Operador unário de incremento 
$numero++;
echo "<br>" . $numero;

$numero -= 5;

echo "<br>" . $numero;

$texto = "Esse é um texto";

echo "<br>" . $texto;

$texto = $texto . " qualquer";

echo "<br>" . $texto;

$texto .= " de verdade";

echo "<br>" . $texto;


$variavelInexistente = "valor inexistente";

echo "<br>" . $variavelInexistente;

$valor = $variavelInexistente ?? 'valor default';

echo "<br>" . $valor;
