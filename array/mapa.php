<div class="titulo">Mapa</div>

<?php 

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

echo "<pre>";
print_r($dados);

echo "<br>";

echo $dados[0];

echo "<br>";

echo $dados['idade'];

echo "<br>";

echo $dados['cor'];

echo "<br>";

echo $dados['peso'];


$lista = array(
    "a",
    "cinco" => "b",
    "c"
);

//Adicionando mais um elemento a lista
$lista[] = 'i';

$lista['vinte'] = "j";

echo "<br>";
echo "<br>";

print_r($lista);