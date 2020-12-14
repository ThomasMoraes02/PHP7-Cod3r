<div class="titulo">Operações</div>

<?php 

$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

//Relacionando arrays
$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

echo "<br>"; 

echo "<br>" . is_array($dadosCompletos);
echo "<br>" . count($dadosCompletos);

echo "<br>";

//Indices aleatórios
$indice = array_rand($dadosCompletos);

echo "$indice  = $dadosCompletos[$indice]";

echo "<br>";

unset($dadosCompletos['idade']);

print_r($dadosCompletos);

echo "<br>";

$impares = [1,3,5,7,9];
$pares = [0,2,4,6,8];

$decimais = $pares + $impares;

print_r($decimais);


echo "<br>";


$decimais = array_merge($pares, $impares);
echo "<pre>";
print_r($decimais);