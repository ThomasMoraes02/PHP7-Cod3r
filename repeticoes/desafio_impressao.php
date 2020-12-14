<div class="titulo">Desafio Impressão</div>

<?php 

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

//Imprimir apenas as chaves que forem par : AAA --- CCC --- EEE

//Utilizando o laço de Foreach
foreach ($array as $key => $value) {
    if($key % 2 == 0) {
        echo $value;
    }
}

echo "<br>";


//Utilizando o laço For
for ($i=0; $i < count($array); $i++) { 
    if($i % 2 == 1) continue;
    echo "{$array[$i]}";
}

